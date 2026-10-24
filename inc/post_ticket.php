<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_ticket">
        <div class="abtt_doc_page_head">
            <h2>🎫 Ticket Configuration</h2>
            <p class="abtt_doc_lede">
                On the <strong>Ticket</strong> tab you turn the tour into a sellable product: choose the selling mode,
                assign ticket types or a seat plan, and set price, quantity and per-order limits.
            </p>
        </div>

        <h3>🧩 Selling modes</h3>
        <div class="abtt_doc_cards">
            <div class="abtt_doc_card">
                <div class="abtt_doc_card_head">
                    <span class="abtt_doc_card_icon">🎫</span>
                    <h3>Ticket Type (general admission)</h3>
                </div>
                <p class="abtt_doc_card_lead">Customers buy a quantity of a ticket type without a fixed seat.</p>
                <ul>
                    <li>Tap the ticket type(s) available for this tour</li>
                    <li>Set a price per ticket type</li>
                    <li>Set total quantity (stock) per ticket type</li>
                    <li>Set min / max quantity per order and reserved stock</li>
                </ul>
            </div>
            <div class="abtt_doc_card">
                <div class="abtt_doc_card_head">
                    <span class="abtt_doc_card_icon">🪑</span>
                    <h3>Seat Plan (assigned seating)</h3>
                </div>
                <p class="abtt_doc_card_lead">Customers pick an exact seat on a visual layout.</p>
                <ul>
                    <li>Choose a reusable seat plan for the tour</li>
                    <li>The plan's ticket types are priced for this tour</li>
                    <li>Seats are numbered automatically from the plan</li>
                    <li>Availability updates live as seats sell</li>
                </ul>
            </div>
        </div>

        <h3>💰 Price &amp; quantity fields</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Price</strong></td>
                    <td>Selling price per ticket type for this tour.</td>
                </tr>
                <tr>
                    <td><strong>Quantity / Stock</strong></td>
                    <td>Total tickets available to sell for the ticket type.</td>
                </tr>
                <tr>
                    <td><strong>Reserved</strong></td>
                    <td>Extra seats held back from general sale (set aside without making them public).</td>
                </tr>
                <tr>
                    <td><strong>Min per order</strong></td>
                    <td>Smallest number of tickets a customer can buy in one order.</td>
                </tr>
                <tr>
                    <td><strong>Max per order</strong></td>
                    <td>Largest number of tickets a customer can buy in one order.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Where prices live</strong>
            The global <em>Ticket Type</em> only defines the label, colour, icon and seat prefix. The actual
            <strong>price</strong> is decided here, per tour — so the same ticket type can cost different amounts on
            different tours.
        </div>

        <h3>📉 How stock decreases</h3>
        <p class="abtt_doc_section_intro">
            Seats / tickets are deducted from inventory when an order reaches the status you set in
            <em>Configuration → General → Booked Status</em>. Paid orders therefore reduce the numbers customers see on
            the tour page.
        </p>
    </div>
