<?php
/**
 * Plugin Name:       ABP Tour & Travel - Documentation
 * Plugin URI:        https://abp-team.com/
 * Description:       Complete user documentation for the ABP Tour & Travel plugin. Standalone and fully self-contained — render it with the [abptt-documentation] shortcode. No admin menu, no dependency on the main plugin's styles or classes.
 * Version:           1.0.0
 * Author:            ABPTEAM
 * Author URI:        https://abp-team.com/
 * License:           GPL-3.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       abptt_documentation
 * Domain Path:       /languages
 * Requires at least: 6.2
 * Requires PHP:      7.4
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!defined('ABTT_DOC_VERSION')) {
    define('ABTT_DOC_VERSION', '1.0.0');
}
if (!defined('ABTT_DOC_DIR')) {
    define('ABTT_DOC_DIR', dirname(__FILE__));
}
if (!defined('ABTT_DOC_URL')) {
    define('ABTT_DOC_URL', plugins_url('', __FILE__));
}
if (!defined('ABTT_DOC_INC')) {
    define('ABTT_DOC_INC', ABTT_DOC_DIR . '/inc');
}

if (!class_exists('ABTT_Documentation')) {
    class ABTT_Documentation {

        private bool $rendered = false;

        public function __construct() {
            add_shortcode('abptt-documentation', array($this, 'do_documentation'));
            add_action('wp', array($this, 'maybe_enqueue_assets'));
        }

        /* -------------------------------------------------------------
         * Bootstrapping
         * ----------------------------------------------------------- */
        public function enqueue_assets(): void {
            wp_enqueue_style(
                'abtt-doc',
                ABTT_DOC_URL . '/assets/css/abtt_doc.css',
                array(),
                ABTT_DOC_VERSION
            );
            wp_enqueue_style(
                'abtt-doc-fa',
                'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
                array(),
                ABTT_DOC_VERSION
            );
            wp_enqueue_script(
                'abtt-doc',
                ABTT_DOC_URL . '/assets/js/abtt_doc.js',
                array('jquery'),
                ABTT_DOC_VERSION,
                true
            );
        }

        public function maybe_enqueue_assets(): void {
            if (is_admin() || $this->rendered) {
                return;
            }
            if ($this->page_uses_shortcode()) {
                $this->enqueue_assets();
            }
        }

        private function page_uses_shortcode(): bool {
            global $post, $wp_query;
            if ($post && is_object($post) && has_shortcode($post->post_content, 'abptt-documentation')) {
                return true;
            }
            if ($wp_query && !empty($wp_query->posts)) {
                foreach ($wp_query->posts as $p) {
                    if (!empty($p->post_content) && has_shortcode($p->post_content, 'abptt-documentation')) {
                        return true;
                    }
                }
            }
            return false;
        }

        /* -------------------------------------------------------------
         * Entry points
         * ----------------------------------------------------------- */

        public function do_documentation(): string {
            $this->rendered = true;
            $this->enqueue_assets();
            ob_start();
            $this->documentation();
            return (string) ob_get_clean();
        }

        /* -------------------------------------------------------------
         * Sections registry (grouped, ordered)
         * ----------------------------------------------------------- */

        private function get_sections(): array {
            return array(
                $this->tab('abptt_getting_start', __('Getting Started', 'abptt_documentation'), 'fas fa-rocket', 'getting_start.php', false, 'start intro welcome version'),
                $this->tab('abptt_installation', __('Installation', 'abptt_documentation'), 'fas fa-download', 'installation.php', false, 'install setup activate zip upload requirements woocommerce'),
                $this->tab('abptt_feature', __('Features', 'abptt_documentation'), 'fas fa-star', 'features.php', false, 'feature list tour ticket seat'),
                $this->tab('abptt_application', __('Applications', 'abptt_documentation'), 'fas fa-thumbtack', 'application.php', false, 'use case concert theater festival conference workshop'),
                $this->tab('abptt_menu_lists', __('Menu Overview', 'abptt_documentation'), 'fas fa-list-ul', 'menu_lists.php', false, 'admin menu navigation'),
                $this->tab('abptt_dashboard', __('Dashboard', 'abptt_documentation'), 'fas fa-gauge-high', 'admin_dashboard.php', false, 'dashboard overview stats kpi quick actions system status demo'),
                array(
                    'id'       => 'tour',
                    'label'    => __('Tour Lists', 'abptt_documentation'),
                    'icon'     => 'fas fa-ticket-alt',
                    'overview' => 'abptt_post',
                    'tabs'     => array(
                        $this->tab('abptt_post', __('Overview', 'abptt_documentation'), 'fas fa-layer-group', 'post_menu.php', false, 'overview list clone restore delete edit trash'),
                        $this->tab('abptt_general', __('General Configuration', 'abptt_documentation'), 'fas fa-sliders-h', 'post_general.php', false, 'basic sale template sku icon capacity category operator location'),
                        $this->tab('abptt_ticket', __('Ticket', 'abptt_documentation'), '🎫', 'post_ticket.php', false, 'ticket type seat plan quantity price min max multiple'),
                        $this->tab('abptt_date', __('Date Configuration', 'abptt_documentation'), '🗓️', 'post_date.php', false, 'date schedule periodic specific weekend off'),
                        $this->tab('abptt_time', __('Time Configuration', 'abptt_documentation'), '⏰', 'post_time.php', false, 'time multiple time schedule duration'),
                        $this->tab('abptt_additional', __('Additional Services', 'abptt_documentation'), '🧰', 'post_additional.php', false, 'additional service extra meal merchandise'),
                        $this->tab('abptt_client_form', __('Traveler Forms', 'abptt_documentation'), '📋', 'post_client_form.php', false, 'guest form field traveler attendee'),
                        $this->tab('abptt_timeline', __('Timeline', 'abptt_documentation'), '🧭', 'post_timeline.php', false, 'timeline itinerary schedule step'),
                        $this->tab('abptt_guide', __('Guides', 'abptt_documentation'), '🧑‍🏫', 'post_guide.php', false, 'guide tour leader'),
                        $this->tab('abptt_faq', __('FAQ', 'abptt_documentation'), '❓', 'post_faq.php', false, 'faq question answer'),
                        $this->tab('abptt_tc', __('Terms & Conditions', 'abptt_documentation'), '📜', 'post_tc.php', false, 'terms conditions policy'),
                        $this->tab('abptt_why_book', __('Why Book With Us', 'abptt_documentation'), '⭐', 'post_why_book.php', false, 'why book reason benefit'),
                        $this->tab('abptt_hidden', __('Hidden Post', 'abptt_documentation'), '🙈', 'post_hidden.php', false, 'hidden post exclusive private'),
                    ),
                ),
                $this->tab('abptt_orders', __('Orders', 'abptt_documentation'), 'fas fa-file-invoice', 'order_list.php', false, 'order list booking status filter check-in'),
                $this->tab('abptt_sp', __('Ticket / Seat Plan', 'abptt_documentation'), 'fas fa-chair', 'ticket_sp.php', false, 'seat plan ticket type decor numbering layout'),
                array(
                    'id'       => 'configuration',
                    'label'    => __('Global Configuration', 'abptt_documentation'),
                    'icon'     => 'fas fa-gear',
                    'overview' => 'abptt_configuration',
                    'tabs'     => array(
                        $this->tab('abptt_configuration', __('Overview', 'abptt_documentation'), 'fas fa-gear', 'configuration.php', false, 'global configuration setting label slug woocommerce'),
                        $this->tab('abptt_on_off', __('On / Off Features', 'abptt_documentation'), 'fa-solid fa-toggle-on', 'configuration_on_off.php', false, 'feature on off toggle'),
                        $this->tab('abptt_global_data', __('Reusable Data', 'abptt_documentation'), 'fas fa-globe', 'global_data.php', false, 'global reusable centralized shared'),
                        $this->tab('abptt_date_global', __('Dates', 'abptt_documentation'), 'fas fa-calendar-day', 'global_date.php', false, 'global date format buffer advance'),
                        $this->tab('abptt_location_global', __('Locations', 'abptt_documentation'), 'fas fa-map-location-dot', 'global_location.php', false, 'global location loc_id'),
                        $this->tab('abptt_category_global', __('Category', 'abptt_documentation'), 'fas fa-boxes-stacked', 'global_category.php', false, 'global category cat_id'),
                        $this->tab('abptt_organizer_global', __('Organizer', 'abptt_documentation'), '🏢', 'global_organizer.php', false, 'global organizer company operator org_id'),
                        $this->tab('abptt_guide_global', __('Guides', 'abptt_documentation'), '🧑‍🏫', 'global_guide.php', false, 'global guide tour leader profile'),
                        $this->tab('abptt_feature_global', __('Features', 'abptt_documentation'), '🔗', 'global_feature.php', false, 'global feature library badge'),
                        $this->tab('abptt_additional_global', __('Additional Services', 'abptt_documentation'), '🧰', 'global_additional.php', false, 'global additional service'),
                        $this->tab('abptt_client_form_global', __('Traveler Forms', 'abptt_documentation'), '📋', 'global_client_form.php', false, 'global guest form'),
                        $this->tab('abptt_faq_global', __('FAQ', 'abptt_documentation'), '❓', 'global_faq.php', false, 'global faq'),
                        $this->tab('abptt_tc_global', __('Terms & Conditions', 'abptt_documentation'), '📜', 'global_tc.php', false, 'global terms conditions'),
                        $this->tab('abptt_why_book_global', __('Why Book With Us', 'abptt_documentation'), '⭐', 'global_why_book.php', false, 'global why book reason'),
                        $this->tab('abptt_slider', __('Slider', 'abptt_documentation'), 'fas fa-photo-video', 'configuration_slider.php', false, 'slider gallery'),
                        $this->tab('abptt_contact', __('Contact Information', 'abptt_documentation'), 'fas fa-id-card-alt', 'configuration_contact.php', false, 'contact company address phone email'),
                        $this->tab('abptt_css_value', __('CSS Property', 'abptt_documentation'), 'fas fa-drafting-compass', 'configuration_css.php', false, 'css color font size'),
                    ),
                ),
                $this->tab('abptt_my_account', __('My Account', 'abptt_documentation'), 'fas fa-user', 'my_account.php', false, 'my account customer bookings'),
                $this->tab('abptt_demo_import', __('Demo Import', 'abptt_documentation'), 'fas fa-file-import', 'demo_import.php', false, 'demo import dummy sample data'),
                $this->tab('abptt_shortcode', __('Shortcodes', 'abptt_documentation'), 'fas fa-code', 'shortcode.php', false, 'shortcode abptt-booking abptt-post abptt-gallery parameters'),
                $this->tab('abptt_template', __('Templating', 'abptt_documentation'), 'fas fa-puzzle-piece', 'templating.php', false, 'template override theme'),
                $this->tab('abptt_translate', __('Translation', 'abptt_documentation'), 'fas fa-language', 'translate.php', false, 'translation loco translate language'),
            );
        }

        private function tab(string $id, string $label, string $icon, string $file, bool $pro, string $keywords): array {
            return array(
                'id'       => $id,
                'label'    => $label,
                'icon'     => $icon,
                'file'     => $file,
                'pro'      => $pro,
                'keywords' => $keywords,
            );
        }

        /* -------------------------------------------------------------
         * Rendering
         * ----------------------------------------------------------- */

        public function documentation(): void {
            $sections    = $this->get_sections();
            $first_sec   = $sections[0];
            $first_id    = isset($first_sec['tabs']) ? $first_sec['tabs'][0]['id'] : $first_sec['id'];
            ?>
            <div class="abtt_doc" id="abtt-documentation">
                <div class="abtt_doc_container">
                    <div class="abtt_doc_header">
                        <div class="abtt_doc_brand">
                            <h1 class="abtt_doc_title">
                                📘 <?php esc_html_e('ABP Tour & Travel — Documentation', 'abptt_documentation'); ?>
                                <span class="abtt_doc_chip">v<?php echo esc_html(ABTT_DOC_VERSION); ?></span>
                            </h1>
                            <p class="abtt_doc_subtitle">
                                <?php esc_html_e('User guide — setup, tours, tickets & seat plans, orders, global configuration, shortcodes and templates.', 'abptt_documentation'); ?>
                            </p>
                        </div>
                        <div class="abtt_doc_search">
                            <span class="abtt_doc_search_icon" aria-hidden="true">🔍</span>
                            <input type="search" class="abtt_doc_search_input"
                                   placeholder="<?php esc_attr_e('Search documentation…', 'abptt_documentation'); ?>"
                                   aria-label="<?php esc_attr_e('Search documentation', 'abptt_documentation'); ?>" />
                            <button type="button" class="abtt_doc_search_clear" aria-label="<?php esc_attr_e('Clear search', 'abptt_documentation'); ?>">✕</button>
                            <button type="button" id="abtt-doc-print" class="abtt_doc_print" aria-label="<?php esc_attr_e('Print this page', 'abptt_documentation'); ?>">🖨️ <?php esc_html_e('Print', 'abptt_documentation'); ?></button>
                        </div>
                    </div>

                    <div class="abtt_doc_legend">
                        <span class="abtt_doc_legend_item"><span class="abtt_doc_badge abtt_doc_badge_free">FREE</span> <?php esc_html_e('Included in the free plugin', 'abptt_documentation'); ?></span>
                        <span class="abtt_doc_legend_item"><?php esc_html_e('Tip: press “/” to focus search.', 'abptt_documentation'); ?></span>
                    </div>

                    <div class="abtt_doc_body">
                        <aside class="abtt_doc_sidebar">
                            <ul class="abtt_doc_nav" role="tablist" aria-label="<?php esc_attr_e('Documentation sections', 'abptt_documentation'); ?>">
                                <?php
                                foreach ($sections as $section) {
                                    if (isset($section['tabs'])) {
                                        $this->render_nav_group($section, $first_id);
                                    } else {
                                        $this->render_nav_item($section, $first_id);
                                    }
                                }
                                ?>
                            </ul>
                        </aside>

                        <section class="abtt_doc_main">
                            <div class="abtt_doc_tabs tab_left">
                                <div class="abtt_doc_panels">
                                    <?php
                                    $is_first_tab = true;
                                    foreach ($sections as $section) {
                                        $tabs = isset($section['tabs']) ? $section['tabs'] : array($section);
                                        foreach ($tabs as $tab) {
                                            $fragment = $this->render_fragment($tab['file']);
                                            if ($is_first_tab) {
                                                $fragment = $this->mark_first_panel_active($fragment);
                                                $is_first_tab = false;
                                            }
                                            echo $fragment; // phpcs:ignore WordPress.Security.EscapeOutput
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="abtt_doc_no_results">
                                <div style="font-size:34px;margin-bottom:8px;">🕵️</div>
                                <strong><?php esc_html_e('No documentation found', 'abptt_documentation'); ?></strong><br />
                                <?php esc_html_e('Try a different search term.', 'abptt_documentation'); ?>
                            </div>
                            <div class="abtt_doc_pager" data-doc-prev="<?php esc_attr_e('Previous', 'abptt_documentation'); ?>" data-doc-next="<?php esc_attr_e('Next', 'abptt_documentation'); ?>">
                                <a href="#abtt-documentation" class="abtt_doc_pager_card is-prev">
                                    <span class="abtt_doc_pager_dir"></span>
                                    <span class="abtt_doc_pager_title"></span>
                                </a>
                                <a href="#abtt-documentation" class="abtt_doc_pager_card is-next">
                                    <span class="abtt_doc_pager_dir"></span>
                                    <span class="abtt_doc_pager_title"></span>
                                </a>
                            </div>
                        </section>
                    </div>

                    <div class="abtt_doc_footer">
                        <span class="abtt_doc_footer_note">
                            📘 ABP Tour & Travel — Documentation v<?php echo esc_html(ABTT_DOC_VERSION); ?> ·
                            <span class="abtt_doc_top" role="button" tabindex="0">↑ <?php esc_html_e('Back to top', 'abptt_documentation'); ?></span>
                        </span>
                        <span>
                            <?php esc_html_e('User guide by', 'abptt_documentation'); ?>
                            <a href="https://abp-team.com" target="_blank" rel="noopener">ABPTEAM</a>
                        </span>
                    </div>
                </div>
            </div>
            <?php
        }

        private function render_nav_group(array $group, string $first_id): void {
            $overview = $group['overview'] ?? null;
            $headless = !empty($group['headless']);

            echo '<li class="abtt_doc_group">';

            if (!$headless) {
                $menu_id = 'abtt_doc_grp_' . esc_attr($group['id']);
                ?>
                <div class="abtt_doc_group_head"
                     data-collapse-target="#<?php echo esc_attr($menu_id); ?>"
                     <?php if ($overview) : ?>data-tabs-target="#<?php echo esc_attr($overview); ?>"<?php endif; ?>
                     aria-expanded="true">
                    <span class="abtt_doc_group_icon" aria-hidden="true"><?php $this->render_icon($group['icon']); ?></span>
                    <span class="abtt_doc_group_label"><?php echo esc_html($group['label']); ?></span>
                    <span class="abtt_doc_group_toggle" aria-hidden="true"></span>
                </div>
                <ul class="abtt_doc_group_menu" id="<?php echo esc_attr($menu_id); ?>" data-collapse="#<?php echo esc_attr($menu_id); ?>" role="group">
                <?php
            }

            foreach ($group['tabs'] as $tab) {
                $this->render_nav_item($tab, $first_id);
            }

            if (!$headless) {
                echo '</ul>';
            }
            echo '</li>';
        }

        private function render_nav_item(array $tab, string $first_id): void {
            $active = ($tab['id'] === $first_id) ? ' abtt_doc_active' : '';
            ?>
            <li class="abtt_doc_nav_item<?php echo esc_attr($active); ?>"
                data-tabs-target="#<?php echo esc_attr($tab['id']); ?>"
                data-doc-search="<?php echo esc_attr(strtolower($tab['label']) . ' ' . $tab['keywords']); ?>"
                role="tab">
                <span class="abtt_doc_nav_icon" aria-hidden="true"><?php $this->render_icon($tab['icon']); ?></span>
                <span class="abtt_doc_nav_label"><?php echo esc_html($tab['label']); ?></span>
                <?php if ($tab['pro']) : ?>
                    <span class="abtt_doc_nav_badge"><span class="abtt_doc_badge abtt_doc_badge_pro">PRO</span></span>
                <?php endif; ?>
            </li>
            <?php
        }

        /* -------------------------------------------------------------
         * Fragment rendering
         * ----------------------------------------------------------- */

        private function mark_first_panel_active(string $html): string {
            return (string) preg_replace('/<div class="abtt_doc_panel"(\s)/', '<div class="abtt_doc_panel abtt_doc_active"$1', $html, 1);
        }

        private function render_icon(string $icon): void {
            if (substr($icon, 0, 2) === 'fa') {
                echo '<i class="' . esc_attr($icon) . '"></i>';
            } else {
                echo '<span class="abtt_doc_icon_emoji">' . esc_html($icon) . '</span>';
            }
        }

        private function render_fragment(string $file): string {
            $path = ABTT_DOC_INC . '/' . $file;
            if (!is_readable($path)) {
                return '<div class="abtt_doc_panel"><p>' . esc_html__('Documentation section not found.', 'abptt_documentation') . '</p></div>';
            }
            ob_start();
            try {
                require $path;
                $html = (string) ob_get_clean();
            } catch (\Throwable $e) {
                ob_end_clean();
                return '<div class="abtt_doc_panel"><p>' . esc_html__('Documentation section could not be rendered.', 'abptt_documentation') . '</p></div>';
            }
            return $this->hydrate_images($html);
        }

        /**
         * The fragments lazy-load their screenshots through data-abtt-doc-img with src="#".
         * Replace src="#" with the real image URL so screenshots always load even if the
         * parent plugin scripts are not available.
         */
        private function hydrate_images(string $html): string {
            if (false === strpos($html, 'src="#"')) {
                return $html;
            }
            return (string) preg_replace_callback(
                '#<([a-z][a-z0-9]*)\b([^>]*)data-abtt-doc-img="([^"]+)"([^>]*)>(.*?)</\1>#is',
                function ($m) {
                    $url   = esc_url($m[3]);
                    $inner = preg_replace('/src="#"([^>]*>)/', 'src="' . $url . '"$1', $m[5], 1);
                    return '<' . $m[1] . $m[2] . 'data-abtt-doc-img="' . $url . '"' . $m[4] . '>' . $inner . '</' . $m[1] . '>';
                },
                $html
            );
        }
    }
    new ABTT_Documentation();
}
