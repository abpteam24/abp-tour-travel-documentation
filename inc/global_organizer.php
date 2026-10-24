<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_organizer_global">
        <div class="abtt_doc_page_head">
            <h2>🏢 Organizers</h2>
            <p class="abtt_doc_lede">
                Organizers (also called operators) are the companies or people behind a tour. Create them once and
                select them on any tour. This section only appears when the <em>Operator / Organizer</em> switch is ON
                in Configuration → ON/OFF.
            </p>
        </div>

        <h3>🧩 What an organizer contains</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Name</span>
                <span class="abtt_doc_row_val">The organizer / company name.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Logo / image</span>
                <span class="abtt_doc_row_val">Brand mark shown with the tour.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Contact</span>
                <span class="abtt_doc_row_val">Optional phone, e-mail and website.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Description</span>
                <span class="abtt_doc_row_val">Short introduction to the organizer.</span>
            </div>
        </div>

        <h3>🔗 Where organizers are used</h3>
        <ul>
            <li>Selected on each tour's <em>General</em> tab.</li>
            <li>Available as a filter on the frontend listing.</li>
            <li>Usable as a parameter (<code>organizer_id</code>) in listing shortcodes.</li>
        </ul>
    </div>
