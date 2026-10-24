<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_post">
        <div class="abtt_doc_page_head">
            <h2>🧳 Tour List</h2>
            <p class="abtt_doc_lede">
                The <strong>Tour Lists</strong> screen is where you create and manage every tour or event you sell.
                Each tour gets its own public page automatically, with ticket / seat selection, date &amp; time and the
                full WooCommerce checkout flow.
            </p>
        </div>

        <h3>📋 What the list shows</h3>
        <ul>
            <li>Tour thumbnail, title and status (Published / Draft / Trash)</li>
            <li>The tour's category, location and organizer (when enabled)</li>
            <li>Ticket / seat summary — total tickets and sold count</li>
            <li>Pagination for large catalogs</li>
        </ul>

        <h3>🛠️ Available actions</h3>
        <table>
            <thead>
                <tr>
                    <th>Action</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Add New</strong></td>
                    <td>Create a brand-new tour and open it in the editor.</td>
                </tr>
                <tr>
                    <td><strong>Edit</strong></td>
                    <td>Open the tour configuration tabs to change any setting.</td>
                </tr>
                <tr>
                    <td><strong>Clone</strong></td>
                    <td>Duplicate an existing tour — useful for recurring or similar events.</td>
                </tr>
                <tr>
                    <td><strong>View</strong></td>
                    <td>Open the tour's public page on the frontend.</td>
                </tr>
                <tr>
                    <td><strong>Trash</strong></td>
                    <td>Move a tour to trash without deleting it permanently.</td>
                </tr>
                <tr>
                    <td><strong>Restore</strong></td>
                    <td>Bring a trashed tour back from the trash view.</td>
                </tr>
                <tr>
                    <td><strong>Delete Permanently</strong></td>
                    <td>Remove a tour from the trash permanently.</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ The tour editor tabs</strong>
            Inside the tour editor the settings are organized left to right:
            <strong>General → Ticket → Date → Time → Additional Services → Traveler Forms → Timeline → Guides →
            FAQ → Terms &amp; Conditions → Why Book With Us</strong>. The tabs that appear depend on which features
            you enabled in <em>Configuration → ON/OFF</em>.
        </div>

        <div class="abtt_doc_screen" data-abtt-doc-img="<?php echo esc_url(ABTT_DOC_URL . '/') ?>image/screenshot-2.png"><img class="abtt_doc_screen_img" src="#" alt="Tour list screen"></div>
    </div>
