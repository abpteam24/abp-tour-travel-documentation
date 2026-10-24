<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_shortcode">
        <div class="abtt_doc_page_head">
            <h2>Shortcodes</h2>
            <p class="abtt_doc_lede">
                ABP Tour &amp; Travel provides shortcodes that let you display tour listings, the booking interface and
                image galleries anywhere on your website — pages, posts, widgets or other supported WordPress areas.
            </p>
        </div>

        <h3>🔄 Overview</h3>
        <p class="abtt_doc_section_intro">
            Each shortcode supports parameters for controlling layout, filtering, item count and frontend display.
            Parameters can be combined to create customised tour listing and booking pages tailored to your
            requirements.
        </p>

        <div class="abtt_doc_callout abtt_doc_callout_note">
            <strong>ℹ️ Parameter usage</strong>
            Use only the parameters supported by each shortcode. Invalid or unsupported parameters are ignored and do
            not affect the shortcode output.
        </div>

        <h3>🎫 Booking Shortcode</h3>
        <p class="abtt_doc_section_intro">
            The <code>[abptt-booking]</code> shortcode displays the full booking interface — a tour listing with search
            and filters that leads into ticket / seat selection and checkout. Ideal for your dedicated Booking page.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>style</code></td>
                    <td>Layout style of the listing. Options: <code>grid</code>, <code>list</code>, <code>missionary</code>, <code>minimal</code>. Example: <code>[abptt-booking style="list"]</code></td>
                    <td>grid</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display a specific tour. When used, other filtering parameters are ignored. Example: <code>[abptt-booking post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter tours by category ID. Example: <code>[abptt-booking cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter tours by location ID. Example: <code>[abptt-booking loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>organizer_id</code></td>
                    <td>Filter tours by organizer ID. Example: <code>[abptt-booking organizer_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>guide_id</code></td>
                    <td>Filter tours by guide ID. Example: <code>[abptt-booking guide_id="4"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>top_pick</code></td>
                    <td>Show only featured / top-pick tours. Example: <code>[abptt-booking top_pick="on"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>show</code></td>
                    <td>Number of tours to display. Example: <code>[abptt-booking show="12"]</code></td>
                    <td>9</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of columns (grid layout only). Example: <code>[abptt-booking column="4"]</code></td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><code>sort</code></td>
                    <td>Order of the listing (e.g. <code>date</code>, <code>title</code>, <code>price</code>). Example: <code>[abptt-booking sort="title"]</code></td>
                    <td>date</td>
                </tr>
                <tr>
                    <td><code>pagination</code></td>
                    <td>Enable pagination for long listings. Example: <code>[abptt-booking pagination="on"]</code></td>
                    <td>off</td>
                </tr>
            </tbody>
        </table>

        <h3>📋 Listing Shortcode</h3>
        <p class="abtt_doc_section_intro">
            The <code>[abptt-post]</code> shortcode displays a tour listing without the booking wrapper. It is useful
            for dedicated listing pages. Ideal for your Tour List page.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>style</code></td>
                    <td>Layout style. Options: <code>grid</code>, <code>list</code>, <code>missionary</code>, <code>minimal</code>. Example: <code>[abptt-post style="grid"]</code></td>
                    <td>grid</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display a specific tour. Example: <code>[abptt-post post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter tours by category ID. Example: <code>[abptt-post cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter tours by location ID. Example: <code>[abptt-post loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>organizer_id</code></td>
                    <td>Filter tours by organizer ID. Example: <code>[abptt-post organizer_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>guide_id</code></td>
                    <td>Filter tours by guide ID. Example: <code>[abptt-post guide_id="4"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>top_pick</code></td>
                    <td>Show only featured / top-pick tours. Example: <code>[abptt-post top_pick="on"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>show</code></td>
                    <td>Number of tours to display. Example: <code>[abptt-post show="12"]</code></td>
                    <td>9</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of columns (grid layout only). Example: <code>[abptt-post column="4"]</code></td>
                    <td>3</td>
                </tr>
                <tr>
                    <td><code>sort</code></td>
                    <td>Order of the listing. Example: <code>[abptt-post sort="title"]</code></td>
                    <td>date</td>
                </tr>
                <tr>
                    <td><code>pagination</code></td>
                    <td>Enable pagination for long listings. Example: <code>[abptt-post pagination="on"]</code></td>
                    <td>off</td>
                </tr>
            </tbody>
        </table>

        <h3>🖼️ Gallery Shortcode</h3>
        <p class="abtt_doc_section_intro">
            The <code>[abptt-gallery]</code> shortcode displays tour images in a gallery or slider layout anywhere on
            your website, with a popup viewer and next / previous navigation.
        </p>
        <table>
            <thead>
                <tr>
                    <th>Parameter</th>
                    <th>Description</th>
                    <th>Default</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>slider_style</code></td>
                    <td>Display style. Options: <code>gallery</code>, <code>slider</code>. Example: <code>[abptt-gallery slider_style="slider"]</code></td>
                    <td>gallery</td>
                </tr>
                <tr>
                    <td><code>post_id</code></td>
                    <td>Display images for a specific tour. Example: <code>[abptt-gallery post_id="123"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>cat_id</code></td>
                    <td>Filter gallery images by category ID. Example: <code>[abptt-gallery cat_id="1"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>loc_id</code></td>
                    <td>Filter gallery images by location ID. Example: <code>[abptt-gallery loc_id="2"]</code></td>
                    <td>—</td>
                </tr>
                <tr>
                    <td><code>column</code></td>
                    <td>Number of images per row (gallery mode only). Example: <code>[abptt-gallery column="4"]</code></td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>

        <div class="abtt_doc_callout abtt_doc_callout_tip">
            <strong>💡 Created for you</strong>
            The Dashboard's System Status section can create the Booking page (<code>[abptt-booking]</code>) and the
            Tour List page (<code>[abptt-post]</code>) automatically. You can also drop the shortcodes into any page
            yourself.
        </div>
    </div>
