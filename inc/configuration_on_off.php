<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_on_off">
        <div class="abtt_doc_page_head">
            <h2>🔛 On / Off Features</h2>
            <p class="abtt_doc_lede">
                Configuration → ON/OFF is the master control panel of the plugin. Every feature is listed with a simple
                switch. Each switch controls a whole feature area of the site — not just one tour.
            </p>
        </div>

        <div class="abtt_doc_cards">
            <div class="abtt_doc_card">
                <div class="abtt_doc_card_head">
                    <span class="abtt_doc_card_icon">🟢</span>
                    <h3>Switch ON (default)</h3>
                </div>
                <p class="abtt_doc_card_lead">
                    The feature is active everywhere. You see its menus, its global lists and its fields on the tour
                    edit page.
                </p>
            </div>
            <div class="abtt_doc_card">
                <div class="abtt_doc_card_head">
                    <span class="abtt_doc_card_icon">⚪</span>
                    <h3>Switch OFF</h3>
                </div>
                <p class="abtt_doc_card_lead">
                    The feature is completely hidden from the whole site — its menus, forms and fields disappear. This
                    keeps your admin screen clean and shows only what you use.
                </p>
            </div>
        </div>

        <h3>🎛️ Popular switches you may want to change</h3>
        <table>
            <thead>
                <tr>
                    <th>Switch</th>
                    <th>Turn it OFF when…</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Seat Plan</strong></td>
                    <td>You only sell tickets by quantity and never need reserved seating.</td>
                </tr>
                <tr>
                    <td><strong>Category / Operator</strong></td>
                    <td>You don't classify tours — hides their menus and tour fields.</td>
                </tr>
                <tr>
                    <td><strong>Additional Services</strong></td>
                    <td>You have no extras (meals, merchandise) to sell.</td>
                </tr>
                <tr>
                    <td><strong>Traveler Form</strong></td>
                    <td>You don't need to collect guest names/details at checkout.</td>
                </tr>
                <tr>
                    <td><strong>FAQ / Terms &amp; Conditions</strong></td>
                    <td>You don't need these blocks on the tour page.</td>
                </tr>
            </tbody>
        </table>

        <h3>🟢 Extra tour-page sections (turn ON to show)</h3>
        <ul>
            <li><strong>Tour Timeline</strong> — time-by-time itinerary section.</li>
            <li><strong>Tour Guide</strong> — guide profiles and public guide pages.</li>
            <li><strong>Google Location Map</strong> — map for the tour location.</li>
            <li><strong>Why Book With Us</strong> — trust-building reasons section.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Experiment safely</strong>
            You can change the switches at any time. Turning a feature back ON restores its menus and tour fields
            instantly.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_warn">
            <strong>⚠️ Remove All Data on Uninstall</strong>
            This switch is OFF by default so your data is preserved if you uninstall. Turn it ON only if you really
            want everything deleted on uninstall.
        </div>
    </div>
