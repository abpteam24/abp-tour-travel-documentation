<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_category_global">
        <div class="abtt_doc_page_head">
            <h2>🏷️ Categories</h2>
            <p class="abtt_doc_lede">
                Categories classify your tours (Concerts, Theaters, Festivals, Tours…) so customers can browse and
                filter the listing. This section only appears when the <em>Category</em> switch is ON in
                Configuration → ON/OFF.
            </p>
        </div>

        <h3>🧩 What a category contains</h3>
        <ul>
            <li>A <strong>name</strong> shown in listings and filters.</li>
            <li>An optional <strong>image</strong> / icon for category cards.</li>
            <li>An optional <strong>description</strong>.</li>
        </ul>

        <h3>🔗 Where categories are used</h3>
        <ul>
            <li>Selected on each tour's <em>General</em> tab.</li>
            <li>Used as a filter on the frontend tour listing.</li>
            <li>Usable as a parameter (<code>cat_id</code>) in listing shortcodes.</li>
        </ul>
    </div>
