# documentation/THEMEFOREST-COMPLIANCE.md — Envato Requirements Checklist

Source: Envato Author Support — WordPress Theme Requirements (Parts 1–6),
Themes Item Preparation & Technical Requirements (audited 2026-11-10).

## Source documents

- Part 1 – General: help.author.envato.com/hc/en-us/articles/360000481263
- Part 2 – Features
- Part 3 – Theme Plugins: help.author.envato.com/hc/en-us/articles/360000481223
- Part 4 – Coding: help.author.envato.com/hc/en-us/articles/360000479946
- Part 5 – Theme Security: help.author.envato.com/hc/en-us/articles/360000481243
- Part 6 – Gutenberg
- Item Preparation & Technical Requirements:
  help.author.envato.com/hc/en-us/articles/360000470826

## Requirement vs our implementation

| # | Envato requirement | Status | Our approach |
|---|-------------------|--------|--------------|
| 1 | Envato Theme Check — all REQUIRED notices fixed | Planned | Run Theme Check; fix all REQUIRED notices |
| 2 | WordPress Unit Test Data — all components styled | Planned | Style posts, pages, comments, search, sticky posts |
| 3 | Data privacy — no third-party data transmission without opt-in | Planned | No remote calls without user consent |
| 4 | Purchase verification — only update/demo/plugin install behind keygate | Planned | Demo import requires explicit purchase confirmation |
| 5 | Documentation publicly accessible (not behind keygate) | Planned | Online docs hosted separately |
| 6 | Plugin territory (CPTs, taxonomies, shortcodes, widgets, forms) in plugin | Planned | Companion plugin owns these; theme owns presentation only |
| 7 | TGM Plugin Activation for bundled plugins | Planned | Use TGM PA for required/recommended free plugins |
| 8 | force_activation / force_deactivation NOT true | Planned | Respect both flags as false |
| 9 | wordpress.org plugins installed from repo, not bundled | Planned | Point to repo via TGM PA external_url/source |
| 10 | No premium third-party plugins bundled without permission | Planned | Free plugins only (Elementor Free, WPForms Free, Yoast SEO free) |
| 11 | Theme works out of the box before plugins activated | Planned | Theme styles posts, pages, archive, home, blog, search standalone |
| 12 | Demo import requires explicit user confirmation | Planned | One-click importer with confirm dialog |
| 13 | Warn before overwriting existing content | Planned | Clear overwrite warning before import |
| 14 | WP Filesystem API for custom importers | Planned | Use WP_Filesystem for any custom import |
| 15 | Unique prefix for all functions/classes/hooks/constants/scripts/styles | Planned | Prefix all theme/plugin identifiers |
| 16 | wp_enqueue_style() / wp_enqueue_script() for all assets | Planned | Proper asset enqueueing, conditional loading |
| 17 | Use WordPress-shipped scripts (jQuery etc.) | Planned | No external copies of bundled scripts |
| 18 | SSL-friendly asset URLs (get_template_directory_uri) | Planned | Protocol-relative / SSL-safe URLs |
| 19 | No deprecated template tags or functions | Planned | Modern WP API only |
| 20 | Required functions present: wp_head, wp_footer, body_class, post_class | Planned | All present in templates |
| 21 | add_theme_support('title-tag') instead of wp_title() | Planned | title-tag support |
| 22 | get_template_part() / locate_template() for custom templates | Planned | Template parts used throughout |
| 23 | Lowercase filenames, hyphens not camelCase/underscores | Planned | All files lowercase with hyphens |
| 24 | $content_width defined | Planned | Set in functions.php |
| 25 | No removal of core filters (wpautop, wptexturize) | Planned | Core filters preserved |
| 26 | No PHP notices/warnings/errors; WP_DEBUG compatible | Planned | Develop with WP_DEBUG true |
| 27 | No create_function(), no PHP short tags, no "@" error suppression | Planned | Modern PHP syntax |
| 28 | Tabs for indentation (WordPress PHP Coding Standards) | Planned | PSR/WordPress tab indentation |
| 29 | No hardcoded CSS (inline); wp_add_inline_style for dynamic styling | Planned | Dynamic styles via inline style API |
| 30 | Human-readable CSS selectors, no overqualified selectors | Planned | Semantic class names |
| 31 | All text internationalized and escaped | Planned | __() / _e() / esc_html__() etc. with text domain |
| 32 | Text domain constant, not variable | Planned | Text domain as string constant |
| 33 | No unused code fragments, no obfuscation, no base64 | Planned | Clean, readable code only |
| 34 | Child theme support (get_theme_file_uri etc.) | Planned | Child theme functions included |
| 35 | RTL readiness | Planned | RTL stylesheet included |
| 36 | Gutenberg compatibility | Planned | Block editor styles + editor CSS |
| 37 | Commercial assets properly licensed for redistribution | Planned | Licensed/placeholder images only |

## Plugin territory separation

The following belong in the **companion plugin**, NOT the theme:
- Custom Post Types (services, industries, testimonials, team, projects)
- Custom Taxonomies
- Custom Fields / meta boxes (design-related may stay in theme)
- Shortcodes
- Custom Widgets
- Non-design-related functionality

The **theme** owns:
- Presentation and styling of content
- Template hierarchy
- Header/footer presentation
- Typography and global styling
- Responsive layouts

## Keygates (purchase verification)

Allowed behind purchase code:
- Update mechanism
- Demo content import (ThemeForest only)
- Installing bundled plugins (ThemeForest only)

NOT allowed behind keygate:
- Theme options or settings

## Demo import rules

- Requires explicit user confirmation (click-to-confirm)
- Must not add content without permission
- Must warn before overwriting existing content
- Custom importers must use WP Filesystem API
- Imported assets must be appropriately licensed for redistribution
- Preview-only assets must be stated as such in description

## Documentation

- Public online documentation (not behind purchase keygate)
- Installation, customization, and use instructions
- Asset credits and licenses
- Written in English
