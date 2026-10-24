<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_configuration">
        <div class="abtt_doc_page_head">
            <h2>⚙️ Global Configuration Overview</h2>
            <p class="abtt_doc_lede">
                The <strong>Configuration</strong> tab is the control centre of ABP Tour &amp; Travel. It combines the
                plugin-wide settings (label, slug, feature switches, contact details, colors) with the reusable global
                data that every tour can share.
            </p>
        </div>

        <h3>🧩 What belongs here</h3>
        <table>
            <thead>
                <tr>
                    <th>Group</th>
                    <th>Contents</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Tour settings</strong></td>
                    <td>Tour label, slug, currency and store settings.</td>
                </tr>
                <tr>
                    <td><strong>ON/OFF</strong></td>
                    <td>Master switches for every feature area of the plugin.</td>
                </tr>
                <tr>
                    <td><strong>Dates</strong></td>
                    <td>Global date format, sale buffer and advance-booking window.</td>
                </tr>
                <tr>
                    <td><strong>Reusable data</strong></td>
                    <td>Locations, Categories, Organizers, Guides, Features, Additional Services, Traveler Forms, FAQ, Terms &amp; Conditions and Why Book With Us reasons.</td>
                </tr>
                <tr>
                    <td><strong>Appearance</strong></td>
                    <td>Slider, Contact Information and CSS properties.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Configure globally, override per tour</strong>
            Build the reusable lists once here. When you create a tour you import them and can then fine-tune prices
            and selections for that specific tour.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-8.png"><img class="abtt_doc_screen_img" src="#" alt="Global configuration"></div>
    </div>
