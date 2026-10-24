<div class="abtt_doc_panel" data-tabs="#abptt_orders">
    <div class="abtt_doc_page_head">
        <h2>📋 Orders List</h2>
        <p class="abtt_doc_lede">
            The Orders List screen provides a centralized overview of all tour bookings and ticket orders. Search,
            filter, track and manage guest bookings from a single dashboard with advanced filtering, status tabs,
            pricing and payment details.
        </p>
    </div>

    <h3>🔎 Advanced Order Filtering</h3>
    <p class="abtt_doc_section_intro">
        A powerful filtering system lets you narrow down bookings by tour, date, location and order date.
    </p>
    <table>
        <thead>
            <tr>
                <th>Filter</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Tour</strong></td>
                <td>Filter bookings by a specific tour.</td>
            </tr>
            <tr>
                <td><strong>Tour Date</strong></td>
                <td>Search bookings for a specific tour date.</td>
            </tr>
            <tr>
                <td><strong>Tour Date Between</strong></td>
                <td>Search bookings within a selected date range.</td>
            </tr>
            <tr>
                <td><strong>Location</strong></td>
                <td>Filter bookings by the selected tour location.</td>
            </tr>
            <tr>
                <td><strong>Order Date</strong></td>
                <td>Filter bookings based on the order creation date.</td>
            </tr>
        </tbody>
    </table>

    <h3>📊 Booking Status Tabs</h3>
    <p class="abtt_doc_section_intro">
        Separate status tabs let you view bookings according to their current booking and payment status.
    </p>
    <table>
        <thead>
            <tr>
                <th>Tab</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr><td><strong>All Booking</strong></td><td>View all bookings regardless of status.</td></tr>
            <tr><td><strong>Booking Completed</strong></td><td>Bookings that have been successfully completed.</td></tr>
            <tr><td><strong>Pending Payment</strong></td><td>Bookings waiting for payment confirmation.</td></tr>
            <tr><td><strong>Processing</strong></td><td>Bookings currently being processed.</td></tr>
            <tr><td><strong>On Hold</strong></td><td>Bookings placed on hold.</td></tr>
            <tr><td><strong>Completed</strong></td><td>Orders marked as fully completed.</td></tr>
            <tr><td><strong>Cancelled</strong></td><td>Cancelled bookings.</td></tr>
            <tr><td><strong>Refunded</strong></td><td>Bookings that have been refunded.</td></tr>
            <tr><td><strong>Failed</strong></td><td>Bookings where payment or order processing failed.</td></tr>
            <tr><td><strong>Draft</strong></td><td>Draft bookings not yet finalized.</td></tr>
        </tbody>
    </table>

    <h3>🎫 Booking &amp; Ticket Information</h3>
    <p class="abtt_doc_section_intro">
        Each order row displays key booking details at a glance.
    </p>
    <ul>
        <li><strong>Tour</strong> — the tour associated with the booking.</li>
        <li><strong>Date &amp; Time</strong> — the selected tour date and time slot.</li>
        <li><strong>Ticket Info</strong> — selected ticket types or seats, quantities and ticket prices.</li>
        <li><strong>Additional Info</strong> — additional services or other booking-related information.</li>
    </ul>

    <h3>💰 Order &amp; Payment Information</h3>
    <ul>
        <li><strong>Price</strong> — the base ticket or order price.</li>
        <li><strong>Additional</strong> — additional service charges.</li>
        <li><strong>Total</strong> — the final booking amount.</li>
        <li><strong>Payment Method</strong> — the payment method used for the booking.</li>
        <li><strong>Status</strong> — the current order status.</li>
    </ul>

    <h3>👤 Customer &amp; Billing Information</h3>
    <ul>
        <li>View customer billing name and email information.</li>
        <li>Access billing details associated with each booking.</li>
        <li>Review guest and booking information from the order list.</li>
    </ul>

    <h3>📋 Order Management</h3>
    <ul>
        <li>View complete booking information from the centralized order table.</li>
        <li>Track booking and payment status quickly.</li>
        <li>Review date, ticket, guest and pricing information.</li>
        <li>Access detailed order information when required.</li>
    </ul>

    <div class="abtt_doc_callout abtt_doc_callout_note">
        <strong>ℹ️ Where orders come from</strong>
        Every frontend booking creates a WooCommerce order. Paid orders (according to the <em>Booked Status</em>
        setting) reduce the available tickets or seats, so the Orders list is always in sync with tour availability.
    </div>

    <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-5.png"><img class="abtt_doc_screen_img" src="#" alt="Orders list"></div>
</div>
