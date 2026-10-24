<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_location_global">
        <div class="abtt_doc_page_head">
            <h2>📍 Locations</h2>
            <p class="abtt_doc_lede">
                Locations are the reusable places where tours happen or where customers meet. Create them once and
                select them on any tour — they can be used as a filter on the frontend tour listing as well.
            </p>
        </div>

        <h3>🧩 What a location contains</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Title</span>
                <span class="abtt_doc_row_val">The location name (e.g. “Central Park Amphitheatre”).</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Address</span>
                <span class="abtt_doc_row_val">Street address shown on the tour page.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Map / coordinates</span>
                <span class="abtt_doc_row_val">Used by the Google Location Map section on the tour page.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Image</span>
                <span class="abtt_doc_row_val">Optional illustration for the location.</span>
            </div>
        </div>

        <h3>🔗 Where locations are used</h3>
        <ul>
            <li>Selected on the tour's <em>General</em> tab.</li>
            <li>Available as a filter on the frontend tour listing.</li>
            <li>Shown with a map when the Google Location Map switch is ON.</li>
        </ul>
    </div>
