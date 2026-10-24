/**
 * ABP Tour & Travel — Documentation UI.
 *
 * Self-contained behaviours: tab switching, collapsible nav groups,
 * live search filter, prev/next pager, deep links (#tab) and back-to-top.
 *
 * @version 1.0.0
 */
(function ($) {
    "use strict";

    function ABPTT_Doc($doc) {
        if (!$doc.length) { return; }

        var self = this;

        this.$doc = $doc;
        this.$nav = $doc.find(".abtt_doc_sidebar .abtt_doc_nav");
        this.$items = this.$nav.find(".abtt_doc_nav_item[data-tabs-target]");
        this.$heads = this.$nav.find(".abtt_doc_group_head[data-tabs-target]");
        this.$groups = this.$nav.find(".abtt_doc_group");
        this.$groupMenus = this.$nav.find(".abtt_doc_group_menu");
        this.$panels = $doc.find(".abtt_doc_panels > .abtt_doc_panel");
        this.$search = $doc.find(".abtt_doc_search");
        this.$input = $doc.find(".abtt_doc_search_input");
        this.$clear = $doc.find(".abtt_doc_search_clear");
        this.$noResults = $doc.find(".abtt_doc_no_results");
        this.$prev = $doc.find(".abtt_doc_pager .is-prev");
        this.$next = $doc.find(".abtt_doc_pager .is-next");
        this.i18n = {
            prev: $doc.find(".abtt_doc_pager").data("doc-prev") || "Previous",
            next: $doc.find(".abtt_doc_pager").data("doc-next") || "Next"
        };

        this.ids = [];
        this.labels = {};

        // Panel DOM order == registry order.
        this.$panels.each(function () {
            self.ids.push($(this).attr("data-tabs"));
        });

        this.$items.each(function () {
            var $li = $(this);
            self.labels[$li.attr("data-tabs-target")] = $.trim($li.find(".abtt_doc_nav_label").text());
        });

        this.bind();
        this.ready();
    }

    ABPTT_Doc.prototype = {

        ready: function () {
            var active = this.$panels.filter(".abtt_doc_active").first().attr("data-tabs");
            if (!active || this.ids.indexOf(active) === -1) {
                active = this.ids[0];
            }
            this.show(active, { silent: true });

            var hash = window.location.hash;
            if (hash && this.ids.indexOf(hash) !== -1) {
                this.show(hash, { silent: true });
            }
        },

        bind: function () {
            var self = this;

            // Tab switching (delegated; stops before any parent plugin handler).
            this.$doc.on("click", "[data-tabs-target]", function (e) {
                var id = $(this).attr("data-tabs-target");
                if (id && self.ids.indexOf(id) !== -1) {
                    e.preventDefault();
                    e.stopPropagation();
                    self.show(id);
                }
            });

            // Accordion groups: clicking a main tab opens its submenu and collapses the others.
            this.$doc.on("click", "[data-collapse-target]", function (e) {
                var target = $(this).attr("data-collapse-target");
                var $menu = self.$doc.find('.abtt_doc_group_menu[data-collapse="' + target + '"]');
                self.collapseAllMenus();
                if ($menu.length) {
                    $menu.show();
                    $(this).attr("aria-expanded", "true")
                        .find(".abtt_doc_group_toggle").addClass("is-open");
                }
                e.stopPropagation();
            });

            // Live search.
            this.$input.on("input", function () { self.filter($(this).val()); });
            this.$clear.on("click", function () { self.$input.val("").trigger("input"); });

            // Back to top.
            this.$doc.on("click", ".abtt_doc_top", function (e) {
                e.preventDefault();
                e.stopPropagation();
                window.scrollTo({ top: 0, behavior: "smooth" });
            });

            // Screenshot zoom (self-contained; decoupled from parent plugin handlers).
            this.$doc.on("click", "[data-abtt-doc-img]", function (e) {
                e.preventDefault();
                e.stopPropagation();
                var $wrap = $(this);
                var src = $wrap.find("img").first().attr("src") || $wrap.attr("data-abtt-doc-img") || "";
                if (src && src !== "#") { showZoom(src); }
            });

            // Deep links.
            $(window).on("hashchange", function () {
                var hash = window.location.hash;
                if (hash && self.ids.indexOf(hash) !== -1) {
                    self.show(hash, { silent: true });
                }
            });
        },

        show: function (id, opts) {
            opts = opts || {};
            if (!id || this.ids.indexOf(id) === -1) { return; }

            this.$items.add(this.$heads).removeClass("abtt_doc_active");
            this.$nav.find('[data-tabs-target="' + id + '"]').addClass("abtt_doc_active");

            // Highlight the main tab (group head) whenever one of its sub-tabs is active.
            this.$groups.each(function () {
                var $menu = $(this).find(".abtt_doc_group_menu");
                var active = $menu.find(".abtt_doc_nav_item.abtt_doc_active").length > 0;
                $(this).find(".abtt_doc_group_head").toggleClass("abtt_doc_active", active);
            });

            this.$panels.removeClass("abtt_doc_active").hide();
            this.$panels.filter('[data-tabs="' + id + '"]').addClass("abtt_doc_active").show();

            var prevId = this.prevId(id);
            var nextId = this.nextId(id);

            this.$prev.attr("data-tabs-target", prevId || "");
            this.$next.attr("data-tabs-target", nextId || "");
            this.$prev.find(".abtt_doc_pager_dir").text(this.i18n.prev);
            this.$next.find(".abtt_doc_pager_dir").text(this.i18n.next);
            this.$prev.find(".abtt_doc_pager_title").text(prevId ? (this.labels[prevId] || "") : "");
            this.$next.find(".abtt_doc_pager_title").text(nextId ? (this.labels[nextId] || "") : "");
            this.$prev.toggleClass("is-empty", !prevId);
            this.$next.toggleClass("is-empty", !nextId);

            if (!opts.silent) {
                var main = this.$doc.find(".abtt_doc_main");
                if (main.length) { main[0].scrollTop = 0; }
                var clean = id.replace("#", "");
                if (window.history && history.replaceState && window.location.hash !== "#" + clean) {
                    try { history.replaceState(null, "", "#" + clean); } catch (err) { /* ignore */ }
                }
            }

            this.current = id;
            this.expandMenuFor(id);
        },

        prevId: function (id) {
            var i = this.ids.indexOf(id);
            return i > 0 ? this.ids[i - 1] : null;
        },

        nextId: function (id) {
            var i = this.ids.indexOf(id);
            return i < this.ids.length - 1 ? this.ids[i + 1] : null;
        },

        collapseAllMenus: function () {
            this.$groups.find(".abtt_doc_group_menu").hide();
            this.$groups.find(".abtt_doc_group_head")
                .attr("aria-expanded", "false")
                .find(".abtt_doc_group_toggle").removeClass("is-open");
        },

        expandMenuFor: function (id) {
            var target = ("" + (id || "")).indexOf("#") === 0 ? ("" + id).slice(1) : ("" + id);
            var self = this;
            this.collapseAllMenus();
            this.$groups.each(function () {
                var $menu = $(this).find(".abtt_doc_group_menu");
                if ($menu.find('.abtt_doc_nav_item[data-tabs-target="#' + target + '"]').length > 0) {
                    var $head = $(this).find(".abtt_doc_group_head");
                    $head.attr("aria-expanded", "true")
                        .find(".abtt_doc_group_toggle").addClass("is-open");
                    $menu.show();
                    return false;
                }
            });
        },

        filter: function (raw) {
            var q = $.trim(raw).toLowerCase();
            var visible = 0;
            var self = this;

            this.$doc.toggleClass("is_searching", q.length > 0);
            this.$search.toggleClass("has_value", q.length > 0);

            this.$items.each(function () {
                var $li = $(this);
                var hay = ($li.attr("data-doc-search") || $li.text()).toLowerCase();
                var match = !q || hay.indexOf(q) !== -1;
                $li.toggleClass("is_hidden", !match);
                if (match) { visible++; }
            });

            // Hide non-matching panels.
            this.$panels.each(function () {
                var id = $(this).attr("data-tabs");
                var label = (self.labels[id] || "").toLowerCase();
                var match = !q || label.indexOf(q) !== -1;
                if (!match) {
                    $(this).hide().removeClass("abtt_doc_active");
                }
            });

            // Groups: while searching hide empty ones and expand matching ones; on clear restore the accordion.
            this.$groups.each(function () {
                var $g = $(this);
                var $menu = $g.find(".abtt_doc_group_menu");
                var hasVisible = $menu.find(".abtt_doc_nav_item:not(.is_hidden)").length > 0;
                $g.toggleClass("is_hidden", q.length > 0 && !hasVisible);
                if (q.length > 0) {
                    $g.find(".abtt_doc_group_head").attr("aria-expanded", "true");
                    if (hasVisible) { $menu.show(); }
                }
            });
            if (q.length === 0 && this.current) {
                this.expandMenuFor(this.current);
            }

            // If the active panel is no longer matching, jump to the first visible one.
            var current = this.$panels.filter(":visible").last();
            if (current.length === 0 && visible > 0) {
                var firstVisible = this.$items.filter(":not(.is_hidden)").first().attr("data-tabs-target");
                if (firstVisible) { this.show(firstVisible, { silent: true }); }
            }

            this.$noResults.toggleClass("is_active", q.length > 0 && visible === 0);
        }
    };

    var $zoom = null;

    function showZoom(url) {
        if (!$zoom) {
            $zoom = $(
                '<div class="abtt_doc_zoom" aria-hidden="true">' +
                '<div class="abtt_doc_zoom_box">' +
                '<button type="button" class="abtt_doc_zoom_close" aria-label="Close">&times;</button>' +
                '<img alt="" />' +
                '</div>' +
                '</div>')
                .appendTo("body")
                .on("click", function (e) {
                    if (e.target === this || $(e.target).hasClass("abtt_doc_zoom_close")) {
                        hideZoom();
                    }
                });
            $(document).on("keydown.abpttDocZoom", function (e) {
                if (e.key === "Escape" || e.keyCode === 27) { hideZoom(); }
            });
        }
        $zoom.find("img").attr("src", url);
        $zoom.addClass("in").attr("aria-hidden", "false");
    }

    function hideZoom() {
        if ($zoom) {
            $zoom.removeClass("in").attr("aria-hidden", "true");
            $zoom.find("img").attr("src", "");
        }
    }

    function init() {
        $("body").find(".abtt_doc").each(function () {
            var $doc = $(this);
            if (!$doc.data("abtt-doc-init")) {
                $doc.data("abtt-doc-init", true);
                new ABPTT_Doc($doc);
            }
        });
    }

    $(function () { init(); });
    $(window).on("load", function () { init(); });

    // Print support: click the header print button to open the print dialog.
    $("body").on("click", "#abtt-doc-print", function () {
        window.print();
    });
})(jQuery);
