<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_menu_lists">
        <div class="abtt_doc_page_head">
            <h2>🗂️ Admin Menu</h2>
            <p class="abtt_doc_lede">
                After installing ABP Tour &amp; Travel, you get a dedicated admin menu that centralizes the plugin’s
                tour booking and management features in one place. All major modules are organized into structured
                menu items, letting you manage tours, bookings, ticket types, seat plans, global data, configurations
                and system information from a clean, user-friendly interface.
            </p>
        </div>

        <h3>📊 Menu overview</h3>
        <p class="abtt_doc_section_intro">
            The menu bar shown inside the <strong>ABP Tour &amp; Travel</strong> admin area contains the following
            tabs:
        </p>
        <table>
            <thead>
                <tr>
                    <th>Menu item</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-gauge-high"></i> <strong>Dashboard</strong></td>
                    <td>Overview page with key statistics, charts, quick actions, recent orders and system status.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-ticket-alt"></i> <strong>Tour Lists</strong></td>
                    <td>Create, edit, clone, restore, delete and manage all tours.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-invoice"></i> <strong>Orders</strong></td>
                    <td>View, filter and manage tour bookings and their WooCommerce orders.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-chair"></i> <strong>Ticket/Seat Plan</strong></td>
                    <td>Create and manage reusable global ticket types, seat plans, seat labels and decor items.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-gear"></i> <strong>Configuration</strong></td>
                    <td>One combined tab for reusable global data (dates, locations, categories, organizers, guides, features, additional services, traveler forms, resources) and plugin-wide settings (feature switches, slider, contact information and CSS properties).</td>
                </tr>
                <tr>
                    <td><i class="fas fa-file-import"></i> <strong>Demo Import</strong></td>
                    <td>Import or remove the built-in demo tour data.</td>
                </tr>
                <tr>
                    <td><i class="fas fa-book"></i> <strong>Documentation</strong></td>
                    <td>This guide.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>➕ Add New button</strong>
            The <em>Add New</em> button in the top-right corner opens a new tour directly in the WordPress editor,
            ready for all tour settings to be configured.
        </div>

        <h3>⚙️ Configuration sub-menu</h3>
        <p class="abtt_doc_section_intro">
            Under the single <strong>Configuration</strong> tab the following sub-tabs are available (some appear only
            when the related feature switch is ON):
        </p>
        <ul>
            <li><i class="fas fa-gear"></i> <strong>Tour</strong> (shows your custom label) — general tour label, slug and store settings</li>
            <li><i class="fa-solid fa-toggle-on"></i> <strong>ON/OFF</strong> — enable or disable individual plugin features</li>
            <li><i class="fas fa-calendar-day"></i> <strong>Dates</strong> — global date format, buffer and advance-booking window</li>
            <li><i class="fas fa-map-location-dot"></i> <strong>Locations</strong> — reusable tour locations</li>
            <li><i class="fas fa-boxes-stacked"></i> <strong>Category</strong> — reusable tour categories</li>
            <li><strong>🏢</strong> <strong>Organizer</strong> — reusable tour organizers / operators</li>
            <li><strong>🧑‍🏫</strong> <strong>Guides</strong> — reusable guide profiles</li>
            <li><strong>🔗</strong> <strong>Features</strong> — reusable tour features (badges)</li>
            <li><strong>🧰</strong> <strong>Additional Services</strong> — reusable additional services</li>
            <li><strong>📋</strong> <strong>Traveler Forms</strong> — reusable traveler information fields</li>
            <li><strong>❓</strong> <strong>FAQ</strong> — global questions and answers</li>
            <li><strong>📜</strong> <strong>Terms &amp; Conditions</strong> — global terms and conditions</li>
            <li><strong>⭐</strong> <strong>Why Book With Us</strong> — global reasons</li>
            <li><i class="fas fa-photo-video"></i> <strong>Slider</strong> — featured tour slider settings</li>
            <li><i class="fas fa-id-card-alt"></i> <strong>Contact Information</strong> — company details shown on bookings</li>
            <li><i class="fas fa-drafting-compass"></i> <strong>CSS Property</strong> — custom CSS colors and fonts</li>
        </ul>

        <h3>📥 Demo Import</h3>
        <p class="abtt_doc_section_intro">
            The <strong>Demo Import</strong> menu lets you import a ready-made set of sample tours (with locations,
            categories, ticket types and images) so you can explore the plugin safely — and remove that demo data
            again with one click when you are done.
        </p>

        <h3>⚡ Quick Actions</h3>
        <p class="abtt_doc_section_intro">
            The <strong>Quick Actions</strong> card on the Dashboard gives fast access to commonly used screens in one
            click:
        </p>
        <ul>
            <li><strong>Manage Tour</strong> — open the tour list</li>
            <li><strong>Orders</strong> — view and filter bookings</li>
            <li><strong>Ticket/Seat Plan</strong> — design seat layouts</li>
            <li><strong>Configuration</strong> — reusable data (dates, locations, categories and more) plus plugin settings</li>
            <li><strong>ON/OFF Configuration</strong> — enable and disable features</li>
            <li><strong>Global Date</strong> — manage global dates</li>
            <li><strong>Additional Services</strong>, <strong>Traveler Forms</strong>, <strong>Locations</strong> — feature-dependent shortcuts</li>
        </ul>
    </div>
