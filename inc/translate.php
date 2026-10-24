<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_translate">
        <div class="abtt_doc_page_head">
            <h2>🌐 Translation</h2>
            <p class="abtt_doc_lede">
                ABP Tour &amp; Travel is fully translation-ready and can be translated using any WordPress translation
                plugin that supports standard WordPress translation files. For the easiest workflow, we recommend using
                Loco Translate.
            </p>
        </div>

        <h3>🔤 Translate ABP Tour &amp; Travel</h3>
        <p class="abtt_doc_section_intro">
            Follow these steps to create a translation for your preferred language using Loco Translate:
        </p>
        <ol class="abtt_doc_steps">
            <li><strong>Install Loco Translate</strong> — Go to <em>Plugins → Add New</em>, search for <strong>Loco Translate</strong>, then install and activate the plugin.</li>
            <li><strong>Open the plugin</strong> — Navigate to <em>Loco Translate → Plugins</em> and select <strong>ABP Tour &amp; Travel</strong>.</li>
            <li><strong>Create a translation</strong> — Choose an existing language or click <strong>New language</strong> to create a translation for your preferred language, then select the appropriate translation location and create the translation file.</li>
            <li><strong>Sync and translate</strong> — Click <strong>Sync</strong> to load the latest translatable strings from the plugin, translate the required strings, and click <strong>Save</strong>.</li>
        </ol>

        <h3>🔄 Updating Translation Strings</h3>
        <p class="abtt_doc_section_intro">
            When the plugin is updated and new translatable strings are added, open the corresponding translation in
            Loco Translate and click <strong>Sync</strong> to update the translation catalog. You can then translate any
            newly added or modified strings and save the changes.
        </p>

        <h3>💡 Translation Notes</h3>
        <ul>
            <li>ABP Tour &amp; Travel uses standard WordPress translation functions and is translation-ready.</li>
            <li>Plugin interface text and other registered translatable strings can be translated through Loco Translate or another compatible translation plugin.</li>
            <li>Dynamic content entered by administrators — tour names, location names, ticket names and custom descriptions — may require separate translation depending on how the content is created and displayed.</li>
            <li>Documentation content is not automatically translated through the plugin's translation files.</li>
        </ul>

        <h3>🛡️ Keep Your Translations Safe</h3>
        <p class="abtt_doc_section_intro">
            To prevent translations from being overwritten during plugin updates, avoid storing customised translation
            files directly inside the plugin's own directory. Use the custom or system-protected translation location
            provided by Loco Translate whenever possible.
        </p>
        <div class="abtt_doc_callout abtt_doc_callout_warn">
            <strong>⚠️ After updating</strong>
            After updating the plugin, always use the <strong>Sync</strong> option to check for new translation strings
            and review your translations before saving.
        </div>
    </div>
