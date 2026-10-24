<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_css_value">
        <div class="abtt_doc_page_head">
            <h2>🎨 CSS Property</h2>
            <p class="abtt_doc_lede">
                Match the booking interface to your brand without writing code. Define your colors and font settings
                here and they are applied to the plugin's frontend elements.
            </p>
        </div>

        <h3>🧩 What you can set</h3>
        <ul>
            <li><strong>Primary color</strong> — buttons, links and highlights.</li>
            <li><strong>Secondary / accent color</strong> — secondary actions and badges.</li>
            <li><strong>Text color</strong> — body text on the booking pages.</li>
            <li><strong>Font family and size</strong> — typography of the interface.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Live preview</strong>
            Changes apply on the next page load, so you can tweak a value, refresh the frontend and see the result
            immediately.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_warn">
            <strong>⚠️ Theme conflicts</strong>
            If your theme overrides these styles, use the theme's custom CSS or a child theme to raise specificity —
            the plugin's own selectors are scoped to its components.
        </div>
    </div>
