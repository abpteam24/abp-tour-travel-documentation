<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_time">
        <div class="abtt_doc_page_head">
            <h2>⏰ Time Configuration</h2>
            <p class="abtt_doc_lede">
                The <strong>Time</strong> tab sets the starting time(s) for a tour. If a tour runs several times a day
                (for example, daily guided tours at 9:00, 12:00 and 15:00) each time is added here.
            </p>
        </div>

        <h3>🕘 What you configure</h3>
        <ul>
            <li><strong>Start time</strong> — the departure / start time for the tour.</li>
            <li><strong>Multiple times</strong> — add several start times so customers can choose a slot.</li>
            <li><strong>Duration</strong> — the tour length, shown to customers on the tour page.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Time works with dates</strong>
            The times you add here apply to the dates configured on the <em>Date</em> tab. Customers first pick a
            date, then a time slot, then their tickets or seats.
        </div>

        <h3>🔁 Multiple time slots</h3>
        <p class="abtt_doc_section_intro">
            Each time slot is sold against the same ticket stock or seat plan unless the tour uses a seat plan per
            slot. Use multiple slots to sell the same experience several times in a day.
        </p>
    </div>
