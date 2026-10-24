<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_installation">
        <div class="abtt_doc_page_head">
            <h2>⬇️ Installation &amp; Setup</h2>
            <p class="abtt_doc_lede">
                Install the <strong>free</strong> plugin from the WordPress repository (or upload the ZIP), then follow
                the steps below in order: each step builds on the one before it.
            </p>
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>⚠️ Before you begin</strong>
            <ol class="abtt_doc_steps">
                <li>Install and <strong>activate WooCommerce</strong> first — the plugin depends on it for ticket payments.</li>
                <li>Check your server:
                    <strong>WordPress 6.2+</strong>, <strong>PHP 7.4+</strong>, <strong>MySQL 5.7+</strong>,
                    <strong>WooCommerce 8.0+</strong>.</li>
                <li>Take a backup of your site before installing anything new.</li>
            </ol>
        </div>

        <h3>🆓 Step 1 — Install the Free Plugin (from WordPress.org)</h3>
        <p class="abtt_doc_section_intro">
            <strong>Pick one method.</strong> The easiest way is to install directly from the WordPress
            repository:
        </p>
        <ol class="abtt_doc_steps">
            <li>Go to <strong>Plugins → Add New Plugin</strong> in the admin dashboard.</li>
            <li>Type <strong>&quot;ABP Tour &amp; Travel&quot;</strong> in the search box and press Enter.</li>
            <li>Click <strong>Install Now</strong> on the <em>ABP Tour &amp; Travel</em> plugin card.</li>
            <li>Click <strong>Activate</strong> when the installation finishes.</li>
        </ol>

        <h3>📦 Step 2 — Install by Uploading a ZIP</h3>
        <p class="abtt_doc_section_intro">
            If you have the ZIP file locally (downloaded from your account on <a href="https://abp-team.com"
                target="_blank" rel="noopener">abp-team.com</a>), use the upload method instead:
        </p>
        <ol class="abtt_doc_steps">
            <li>Go to <strong>Plugins → Add New Plugin</strong>.</li>
            <li>Click the <strong>Upload Plugin</strong> button at the top.</li>
            <li>Choose the <code>.zip</code> file and click <strong>Install Now</strong>.</li>
            <li>Click <strong>Activate Plugin</strong> to make it live.</li>
        </ol>

        <h3>🔧 Step 3 — First-time Setup</h3>
        <p class="abtt_doc_section_intro">
            After the plugins are active, configure them in this order so everything has the data it needs:
        </p>
        <ol class="abtt_doc_steps">
            <li>Go to <strong>ABP Tour &amp; Travel → Configuration</strong> and set the <strong>tour label</strong>,
                slug and general settings.</li>
            <li>In the same <strong>Configuration</strong> tab open <strong>Dates</strong> and set the global date
                format, sale buffer and advance-booking window.</li>
            <li>Decide which features you need under <strong>Configuration → ON/OFF</strong>.</li>
            <li>Create reusable <strong>Global Data</strong> — Locations, and (if enabled) Categories, Operators,
                Features, Additional Services, Traveler Forms, Guides, Why Book With Us and Resources.</li>
            <li>Create <strong>Ticket types</strong> and/or <strong>Seat plans</strong> under
                <strong>Ticket/Seat Plan</strong> that the tours will reuse.</li>
            <li>Open <strong>Tour Lists → Add New</strong> to create your first tour and fill in its configuration
                tabs left to right.</li>
            <li><strong>Publish</strong> the tour and place a test booking through the WooCommerce checkout to
                confirm tickets and seats work.</li>
        </ol>
        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Recommended order of work</strong>
            Global configuration first (Locations, Ticket types, Seat plans, Categories) → then tours → then
            Orders. This way every tour can reuse already-created global data.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>❓ Plugin not active?</strong>
            If you get a warning about WooCommerce, activate WooCommerce first. The plugin’s ticket checkout and
            payment flow rely on WooCommerce being active.
        </div>
    </div>
