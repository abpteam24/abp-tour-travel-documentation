<?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly
    } ?>
    <div class="abtt_doc_panel" data-tabs="#abptt_template">
        <div class="abtt_doc_page_head">
            <h2>Template Override System</h2>
            <p class="abtt_doc_lede">
                ABP Tour &amp; Travel provides a flexible template override system that lets you customise the frontend
                structure, layout, styling and other template elements to match your website's requirements.
            </p>
        </div>

        <h3>🛠️ Template Override</h3>
        <p class="abtt_doc_section_intro">
            To start customising the plugin templates, copy the <code>tt_templates</code> folder from the plugin
            directory and paste it into your <code>wp-content</code> directory. Once the custom template folder is
            detected, the plugin loads your customised template files instead of the corresponding default plugin
            templates.
        </p>

        <h3>📁 Customise Only the Required Templates</h3>
        <p class="abtt_doc_section_intro">
            You do not need to keep every template file in the copied folder. Keep only the files you actually want to
            customise and remove any unnecessary files. This allows the plugin to continue using its default templates
            for all other sections and makes future template maintenance easier.
        </p>

        <h3>🎨 Timeline Themes</h3>
        <p class="abtt_doc_section_intro">
            The timeline ships with multiple built-in styles (<code>default</code>, <code>light</code>,
            <code>modern</code>). The active style is chosen in the plugin settings and its template can also be
            overridden from the same <code>tt_templates</code> folder.
        </p>

        <h3>🔄 Plugin Updates &amp; Template Overrides</h3>
        <p class="abtt_doc_section_intro">
            Custom template files are not automatically updated when the plugin is updated. If a new plugin version
            introduces changes to the default templates, compare your overridden files with the latest plugin templates
            and update your customisations when necessary.
        </p>
        <div class="abtt_doc_callout abtt_doc_callout_warn">
            <strong>⚠️ Keeping unnecessary overrides</strong>
            Keeping unnecessary template files in the override folder may cause conflicts with new templates, features
            or structural changes introduced in future plugin updates. Only override the files that require
            customisation.
        </div>

        <h3>⚠️ Development Requirements</h3>
        <ul>
            <li>Basic knowledge of WordPress template structure is recommended.</li>
            <li>Basic PHP and HTML knowledge may be required for template customisation.</li>
            <li>Make changes carefully and test customised templates after plugin updates.</li>
            <li>Always keep a backup of your customised templates before making major changes.</li>
        </ul>

        <div class="abtt_doc_callout abtt_doc_callout_warn">
            <strong>⚠️ Important</strong>
            Template overrides are intended for advanced customisation. Incorrect changes to PHP, HTML, template
            structure or required plugin variables may cause frontend errors or unexpected behaviour. Only modify files
            and code that you understand.
        </div>
    </div>
