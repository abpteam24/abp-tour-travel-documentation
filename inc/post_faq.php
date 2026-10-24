<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_faq">
        <div class="abtt_doc_page_head">
            <h2>❓ FAQ</h2>
            <p class="abtt_doc_lede">
                The <strong>FAQ</strong> tab holds the frequently asked questions shown on the tour page. Build a
                reusable question bank under <em>Configuration → FAQ</em>, import it into a tour, and add or remove
                questions for that tour.
            </p>
        </div>

        <h3>📝 FAQ structure</h3>
        <ul>
            <li>Each entry is a <strong>question</strong> paired with its <strong>answer</strong>.</li>
            <li>Questions are displayed as an accordion on the tour page.</li>
            <li>Order questions so the most important ones appear first.</li>
        </ul>

        <h3>🔄 Global vs. tour-specific</h3>
        <p class="abtt_doc_section_intro">
            Import the global FAQ into a tour to inherit every global question, then customise that tour's list
            independently — the global list is not changed.
        </p>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Turn it off if unused</strong>
            If you don't need FAQs, switch <em>FAQ</em> OFF in <em>Configuration → ON/OFF</em> and the tab and section
            disappear.
        </div>
    </div>
