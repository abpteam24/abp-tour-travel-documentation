<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_application">
        <div class="abtt_doc_page_head">
            <h2>📌 Applications</h2>
            <p class="abtt_doc_lede">
                ABP Tour &amp; Travel is flexible enough to sell tickets for almost any scheduled event or experience.
                Choose a <strong>Ticket Type</strong> model when visitors buy by quantity (general admission) or a
                <strong>Seat Plan</strong> model when every visitor picks a specific seat.
            </p>
        </div>

        <h3>🎭 Events &amp; experiences you can sell</h3>
        <table>
            <thead>
                <tr>
                    <th>Use case</th>
                    <th>Recommended model</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Concerts &amp; live music</strong></td>
                    <td>Seat Plan — assigned seats by ticket tier (VIP, Front, Regular)</td>
                </tr>
                <tr>
                    <td><strong>Theater &amp; cinema</strong></td>
                    <td>Seat Plan — row/seat layout with reserved seating</td>
                </tr>
                <tr>
                    <td><strong>Sports &amp; stadium events</strong></td>
                    <td>Seat Plan — stands, blocks and seat numbers</td>
                </tr>
                <tr>
                    <td><strong>Conferences &amp; seminars</strong></td>
                    <td>Ticket Type — general admission by category</td>
                </tr>
                <tr>
                    <td><strong>Festivals</strong></td>
                    <td>Ticket Type — day passes, weekend passes</td>
                </tr>
                <tr>
                    <td><strong>Workshops &amp; classes</strong></td>
                    <td>Ticket Type — limited seats sold by quantity</td>
                </tr>
                <tr>
                    <td><strong>Guided city / museum tours</strong></td>
                    <td>Ticket Type — time-slot departures</td>
                </tr>
                <tr>
                    <td><strong>Buses, launches &amp; shuttles</strong></td>
                    <td>Seat Plan — vehicle layouts</td>
                </tr>
                <tr>
                    <td><strong>Online / virtual tours</strong></td>
                    <td>Ticket Type — quantity-based access tickets</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Tip</strong>
            You are not limited to one model per site. Different tours can use different models — a venue can sell
            seated concerts with a <em>Seat Plan</em> and general-admission festivals with a <em>Ticket Type</em> at the
            same time.
        </div>

        <h3>🌍 Supported tour types</h3>
        <ul>
            <li>Single-date events with one or more starting times</li>
            <li>Recurring / periodic tours (for example, every weekend)</li>
            <li>Multi-location experiences using reusable Locations</li>
            <li>Multi-category listings using reusable Categories</li>
            <li>Guided experiences with guide profiles shown on the tour page</li>
            <li>Itinerary-driven tours using the Timeline section</li>
        </ul>
    </div>
