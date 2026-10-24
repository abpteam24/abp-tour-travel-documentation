<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_getting_start">
        <div class="abtt_doc_page_head">
            <h2>🚀 Getting Started</h2>
            <p class="abtt_doc_lede">
                Thank you for choosing <strong>ABP Tour &amp; Travel</strong>. This documentation is designed to help
                you get started with the plugin and understand its features, configuration options, and ticket booking
                workflow. Please review it carefully to learn how to configure and use the plugin effectively.
            </p>
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Recommended knowledge</strong>
            A basic working knowledge of WordPress and WooCommerce is recommended before using the plugin.
        </div>

        <h3>📄 Document information</h3>
        <ol class="abtt_doc_steps">
            <li><strong>Version</strong> — <?php echo esc_html(defined('ABTT_DOC_VERSION') ? ABTT_DOC_VERSION : '1.0.0'); ?></li>
            <li><strong>Author</strong> — <a href="https://abp-team.com" target="_blank" rel="noopener">ABPTEAM</a></li>
            <li><strong>Created</strong> — 14 August 2026</li>
            <li><strong>Last Updated</strong> — 19 October 2026</li>
        </ol>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Need help?</strong>
            If you have any questions that are beyond the scope of this documentation, do not hesitate to contact us
            through the <a target="_blank" href="https://abp-team.com/support-desk/" rel="noopener">Support Page</a>.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/banner-1544x500.png"><img class="abtt_doc_screen_img" src="#" alt="ABP Tour and Travel"></div>
    </div>
