<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_general">
        <div class="abtt_doc_page_head">
            <h2>⚙️ General Configuration</h2>
            <p class="abtt_doc_lede">
                The <strong>General</strong> tab holds the identity and presentation of a tour: its title, featured
                image, description, gallery, and its classification (category, location, organizer) — plus the choice
                of how tickets are sold.
            </p>
        </div>

        <h3>📝 Core fields</h3>
        <div class="abtt_doc_rows">
            <div>
                <span class="abtt_doc_row_key">Title</span>
                <span class="abtt_doc_row_val">The tour name shown in listings and on the tour page.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Featured image</span>
                <span class="abtt_doc_row_val">Main thumbnail used in the tour list and detail header.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Gallery / Slider</span>
                <span class="abtt_doc_row_val">Multiple images shown on the tour page; display as gallery or slider per the plugin setting.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Description</span>
                <span class="abtt_doc_row_val">Full description shown in the tour details section.</span>
            </div>
            <div>
                <span class="abtt_doc_row_key">Short description</span>
                <span class="abtt_doc_row_val">A brief summary used in listings and cards.</span>
            </div>
        </div>

        <h3>🏷️ Classification</h3>
        <ul>
            <li><strong>Category</strong> — pick from the reusable global categories (shown when the Category switch is ON).</li>
            <li><strong>Location</strong> — pick the tour's reusable location / meeting point.</li>
            <li><strong>Organizer / Operator</strong> — pick the reusable organizer (shown when enabled).</li>
            <li><strong>Features</strong> — highlight badges shown on the tour page (E-Ticket, VIP Access, Parking…).</li>
        </ul>

        <h3>🎟️ Ticket selling mode</h3>
        <p class="abtt_doc_section_intro">
            Also on this tab you choose how the tour sells tickets, and whether multiple ticket categories are allowed:
        </p>
        <ul>
            <li><strong>Ticket Type</strong> — general admission by quantity (best for festivals, conferences, workshops).</li>
            <li><strong>Seat Plan</strong> — assigned seating; customers pick a seat (best for concerts, theaters, buses).</li>
            <li><strong>Multiple Ticket Type</strong> — enable to sell several categories at once (Adult + Child + VIP).</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Imported global data</strong>
            When you create a tour you can import reusable global configuration (traveler form, additional services,
            FAQ, terms, why-book reasons, timeline) and then fine-tune it for this specific tour.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-3.png"><img class="abtt_doc_screen_img" src="#" alt="Tour general configuration"></div>
    </div>
