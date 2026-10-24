<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_additional_global">
        <div class="abtt_doc_page_head">
            <h2>🧰 Additional Services</h2>
            <p class="abtt_doc_lede">
                Build a reusable library of optional paid add-ons here — meals, merchandise, transfers, guided extras
                and so on. Import them into any tour and adjust price and quantity per tour.
            </p>
        </div>

        <h3>🧩 What a service contains</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Title</span>
                <span class="abtt_doc_row_val">The service name shown to customers.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Description</span>
                <span class="abtt_doc_row_val">Optional detail about the service.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Price</span>
                <span class="abtt_doc_row_val">Default price added when the service is selected.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Quantity / Limit</span>
                <span class="abtt_doc_row_val">How many are available (stock).</span>
            </div>
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Import then override</strong>
            The global price is only a starting point. On each tour you can change the price and quantity to match that
            event, without touching the global library.
        </div>
    </div>
