<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_client_form_global">
        <div class="abtt_doc_page_head">
            <h2>📋 Traveler Forms</h2>
            <p class="abtt_doc_lede">
                Define the reusable traveler information fields collected at checkout. Import the global form into a
                tour and customise it there if that tour needs different details.
            </p>
        </div>

        <h3>🧩 Field options</h3>
        <ul>
            <li>Choose a field <strong>type</strong> (text, e-mail, phone, number, date, select, textarea).</li>
            <li>Set a <strong>label</strong> and <strong>placeholder</strong>.</li>
            <li>Mark the field <strong>required</strong> or optional.</li>
            <li>Reorder fields to match your booking flow.</li>
        </ul>

        <h3>👥 Typical fields</h3>
        <ul>
            <li>Full name, e-mail and phone number</li>
            <li>Age or date of birth (for age-restricted events)</li>
            <li>Passport / ID number (for travel experiences)</li>
            <li>Dietary requirements or accessibility notes</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Global vs. tour-specific</strong>
            Keep it simple here for the fields shared by every tour; add tour-only fields on the tour's
            <em>Traveler Forms</em> tab after importing.
        </div>
    </div>
