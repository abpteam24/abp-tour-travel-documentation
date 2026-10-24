<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_timeline">
        <div class="abtt_doc_page_head">
            <h2>🧭 Timeline</h2>
            <p class="abtt_doc_lede">
                The <strong>Timeline</strong> tab adds a time-by-time itinerary to the tour page — a clear “what
                happens when” schedule that helps customers understand the experience before they book.
            </p>
        </div>

        <h3>🕘 Timeline entries</h3>
        <p class="abtt_doc_section_intro">
            Each entry is a small step made of a time, a title and an optional description. Add one entry per moment in
            the itinerary:
        </p>
        <ol class="abtt_doc_steps">
            <li><strong>Time</strong> — e.g. <code>09:00</code>.</li>
            <li><strong>Title</strong> — e.g. “Meet at the entrance”.</li>
            <li><strong>Description</strong> — a short line describing what happens.</li>
        </ol>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Enable the section first</strong>
            The Timeline section only shows on the tour page when <em>Tour Timeline</em> is switched ON in
            <em>Configuration → ON/OFF</em>.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Reuse the itinerary</strong>
            If many tours share the same itinerary, keep a canonical version and paste it into each tour's Timeline —
            or copy a tour to clone its timeline along with everything else.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-7.png"><img class="abtt_doc_screen_img" src="#" alt="Tour timeline section"></div>
    </div>
