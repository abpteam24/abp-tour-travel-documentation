<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_client_form">
        <div class="abtt_doc_page_head">
            <h2>📋 Traveler Forms</h2>
            <p class="abtt_doc_lede">
                Traveler Forms collect information from the person booking (and their guests) at checkout — such as
                name, e-mail, phone, age or any custom field you need. You can define a global form once and import it
                into a tour, then customise it there.
            </p>
        </div>

        <h3>🧩 Building the form</h3>
        <ul>
            <li>Add fields and choose their type (text, e-mail, phone, number, date, select, textarea…).</li>
            <li>Mark fields as <strong>required</strong> or optional.</li>
            <li>Set a label and placeholder so customers know what to enter.</li>
            <li>Reorder fields to match your booking flow.</li>
        </ul>

        <h3>👥 Multiple travelers</h3>
        <p class="abtt_doc_section_intro">
            When a booking includes several tickets, the form collects details per guest (where configured), so you
            have a complete traveler list for each booking.
        </p>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Global vs. tour-specific</strong>
            Configure the reusable fields under <em>Configuration → Traveler Forms</em>. On a tour you import the global
            form and can then add or remove fields for that tour only.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Not needed?</strong>
            Turn <em>Traveler Forms</em> OFF in <em>Configuration → ON/OFF</em> to skip collecting guest details
            entirely.
        </div>
    </div>
