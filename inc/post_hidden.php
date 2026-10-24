<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_hidden">
        <div class="abtt_doc_page_head">
            <h2>🙈 Hidden Post</h2>
            <p class="abtt_doc_lede">
                A <strong>Hidden Post</strong> is a tour that is created and fully bookable but intentionally kept out
                of normal listings and search results. It is useful for private events, invite-only tours or exclusive
                experiences you sell only via a direct link.
            </p>
        </div>

        <h3>🔒 What “hidden” means</h3>
        <ul>
            <li>The tour does not appear in the tour list / booking listing.</li>
            <li>The tour is excluded from category, location and search results.</li>
            <li>The tour page itself still works when accessed directly by its URL.</li>
            <li>Booking, tickets, seats and checkout behave exactly like a normal tour.</li>
        </ul>

        <h3>🔗 How to use it</h3>
        <ol class="abtt_doc_steps">
            <li>Create the tour as usual with all its configuration.</li>
            <li>Mark it as hidden.</li>
            <li>Share the direct tour URL (or a booking shortcode pointing to the tour's <code>post_id</code>) with
                the people who should be able to book it.</li>
        </ol>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Combine with a post_id shortcode</strong>
            Use <code>[abptt-booking post_id="123"]</code> on a private page to give a specific audience a booking
            experience for a hidden tour without exposing it site-wide.
        </div>
    </div>
