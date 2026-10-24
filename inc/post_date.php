<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_date">
        <div class="abtt_doc_page_head">
            <h2>🗓️ Date Configuration</h2>
            <p class="abtt_doc_lede">
                The <strong>Date</strong> tab defines <em>when</em> a tour runs. You can use one or several date types
                together — the plugin combines them into the selectable dates customers see on the tour page.
            </p>
        </div>

        <h3>📅 Date types</h3>
        <table>
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Use it for</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Specific dates</strong></td>
                    <td>One-off events — pick exact calendar dates.</td>
                </tr>
                <tr>
                    <td><strong>Periodic dates</strong></td>
                    <td>Recurring schedules — e.g. every weekend, every Saturday, weekly, monthly.</td>
                </tr>
                <tr>
                    <td><strong>Date range</strong></td>
                    <td>Continuously available between a start and an end date (with off-dates excluded).</td>
                </tr>
                <tr>
                    <td><strong>Off dates</strong></td>
                    <td>Exclude specific dates from an otherwise available range (holidays, closures).</td>
                </tr>
            </tbody>
        </table>

        <h3>⏳ Advance booking &amp; buffer</h3>
        <ul>
            <li><strong>Advance booking</strong> — how far ahead customers can book (from the global date settings).</li>
            <li><strong>Sale buffer</strong> — a minimum lead time before a date so you don't sell too close to departure.</li>
            <li>Global formatting, sale buffer and the advance window are set under <em>Configuration → Dates</em>.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Combine types</strong>
            A tour can run every weekend (periodic) but be closed on a specific public holiday (off date). Add both,
            and the closed date is automatically removed from the calendar.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-4.png"><img class="abtt_doc_screen_img" src="#" alt="Tour date configuration"></div>
    </div>
