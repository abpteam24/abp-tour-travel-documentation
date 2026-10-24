<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_my_account">
        <div class="abtt_doc_page_head">
            <h2>👤 My Account</h2>
            <p class="abtt_doc_lede">
                The plugin adds a <strong>Tour Bookings</strong> section to the WooCommerce <em>My Account</em> page so
                logged-in customers can review the bookings they have made.
            </p>
        </div>

        <h3>🧩 What customers see</h3>
        <ul>
            <li>A list of their own tour bookings only.</li>
            <li>Booking status and details for each order.</li>
            <li>The selected tour, date and time.</li>
            <li>Ticket / seat and guest information.</li>
            <li>A paginated list for customers with many bookings.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Login required</strong>
            The section is visible only to logged-in customers and only ever shows the bookings that belong to that
            customer.
        </div>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Confirmation e-mails</strong>
            Standard WooCommerce order e-mails are sent for each booking, so customers also receive their confirmation
            in their inbox.
        </div>
    </div>
