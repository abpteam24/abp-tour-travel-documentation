<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_date_global">
        <div class="abtt_doc_page_head">
            <h2>🗓️ Global Dates</h2>
            <p class="abtt_doc_lede">
                Global Dates set the shared rules that apply to scheduling across the whole plugin — how dates are
                formatted and how far ahead (and how close to the event) customers may book.
            </p>
        </div>

        <h3>🧩 What you configure</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Date format</span>
                <span class="abtt_doc_row_val">How dates are displayed on the frontend and in the admin.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Advance booking</span>
                <span class="abtt_doc_row_val">The maximum number of days ahead a customer may book a date.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Sale buffer</span>
                <span class="abtt_doc_row_val">A minimum lead time before the event so you don't sell too late.</span>
            </div>
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Global defaults, per-tour dates</strong>
            These settings provide the defaults and limits. The actual dates each tour runs are still set on the tour's
            <em>Date</em> tab.
        </div>
    </div>
