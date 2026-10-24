<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_additional">
        <div class="abtt_doc_page_head">
            <h2>🧰 Additional Services</h2>
            <p class="abtt_doc_lede">
                Additional Services are optional add-ons a customer can buy alongside their tickets — meals,
                merchandise, transfers, guided extras and so on. Each service has its own price and can be imported from
                the global list and customised for the tour.
            </p>
        </div>

        <h3>🧩 What a service contains</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Title</span>
                <span class="abtt_doc_row_val">The service name shown to customers (e.g. “Boxed Lunch”).</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Description</span>
                <span class="abtt_doc_row_val">Optional detail about what the service includes.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Price</span>
                <span class="abtt_doc_row_val">The amount added to the booking when the service is selected.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Quantity / Limit</span>
                <span class="abtt_doc_row_val">How many of the service are available (e.g. limited merch stock).</span>
            </div>
        </div>

        <h3>📥 Import &amp; customise</h3>
        <ul>
            <li>Create a reusable list once under <em>Configuration → Additional Services</em>.</li>
            <li>Import those services into any tour and adjust the price / quantity per tour.</li>
            <li>Disable a service for a single tour without changing the global list.</li>
            <li>Customers select available services during checkout; the total updates live.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Turn it off if unused</strong>
            If you sell no extras, switch <em>Additional Services</em> OFF in <em>Configuration → ON/OFF</em> — the tab
            and its fields disappear from every tour.
        </div>
    </div>
