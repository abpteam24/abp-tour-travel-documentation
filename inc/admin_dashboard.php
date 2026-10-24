<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	} ?>
<div class="abtt_doc_panel" data-tabs="#abptt_dashboard">
	<div class="abtt_doc_page_head">
		<h2>📊 Dashboard</h2>
		<p class="abtt_doc_lede">
			The <strong>Dashboard</strong> is the first screen you see when opening <strong>ABP Tour &amp;
			Travel</strong>. It gives a live overview of your tour booking business — key metrics, today's tours,
			recent orders and quick shortcuts — all in one place.
		</p>
	</div>

	<h3>👋 Welcome Banner</h3>
	<p class="abtt_doc_section_intro">
		The top hero section greets the logged-in admin by name, shows today's date and summarizes what is happening
		with the tour booking business today. Two quick buttons are always available:
	</p>
	<ul>
		<li><strong>＋ Add New</strong> — opens the WordPress editor to create a new tour.</li>
		<li><strong>Orders</strong> — jumps straight to the admin Order List.</li>
	</ul>

	<h3>🔢 Key Performance Cards</h3>
	<p class="abtt_doc_section_intro">
		Clickable stat cards summarize the whole business. Each card opens the matching admin screen when clicked:
	</p>
	<table>
		<thead>
			<tr>
				<th>Card</th>
				<th>Shows</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>🧳 Total Tours</td>
				<td>Number of tours created. Clicking opens the Tour Lists.</td>
			</tr>
			<tr>
				<td>🧾 Total Orders</td>
				<td>Total number of bookings/orders. Clicking opens the Order List.</td>
			</tr>
			<tr>
				<td>🎫 Tickets Sold</td>
				<td>Total tickets sold across all bookings.</td>
			</tr>
			<tr>
				<td>💰 Total Revenue</td>
				<td>Total sales value in the store currency.</td>
			</tr>
			<tr>
				<td>📅 Booked Today</td>
				<td>How many bookings have been placed today.</td>
			</tr>
		</tbody>
	</table>

	<h3>🗓️ Today Tours</h3>
	<p class="abtt_doc_section_intro">
		The main column lists today's tours. Each row shows the tour, date and time and availability counts. Clicking
		a tour opens a popup with a live <strong>Seat Map</strong> (for seat-plan tours) or a
		<strong>Ticket Type Breakdown</strong> (for ticket-only tours), plus the list of bookings for that tour.
	</p>

	<h3>🧾 Recent Orders</h3>
	<p class="abtt_doc_section_intro">
		The <strong>Recent Orders</strong> card shows the latest bookings with view tabs for the last orders and
		today's orders, plus an <strong>All Orders</strong> link that opens the full Order List.
	</p>

	<h3>⚡ Quick Actions (side panel)</h3>
	<p class="abtt_doc_section_intro">
		The sidebar gives one-click shortcuts to the most commonly used screens:
	</p>
	<ul>
		<li><strong>ON/OFF Configuration</strong> — enable or disable plugin features.</li>
		<li><strong>Global Date</strong> — manage global dates.</li>
		<li><strong>Additional Services</strong> and <strong>Traveler Forms</strong> — shown only when the related feature switch is enabled.</li>
		<li><strong>Locations</strong> — manage reusable tour locations.</li>
	</ul>

	<h3>🖥️ System Status &amp; Content Breakdown</h3>
	<p class="abtt_doc_section_intro">
		The sidebar also shows a <strong>System Status</strong> card with the current plugin, WordPress, PHP and
		WooCommerce versions, plus quick tools to install WooCommerce, create the booking / tour-list / gallery
		pages — and import or remove the demo data. A <strong>Content Breakdown</strong> card shows quick counts of
		your content by type.
	</p>

	<div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-1.png"><img class="abtt_doc_screen_img" src="#" alt="ABP Tour and Travel dashboard"></div>
</div>
