# ProClean — Commercial Cleaning WordPress Theme

An original, professional WordPress theme for commercial cleaning, janitorial,
office/facility cleaning and facility maintenance businesses. Built as a
standalone theme with a companion plugin for plugin-territory functionality.

Jani-King (https://www.janiking.com/) is the structural, content and functional
reference only. This theme has its own original visual identity — it is not a
verbatim reproduction of Jani-King's appearance.

## Structure

```
theme/proclean/          # Standalone WordPress theme (presentation)
plugin/proclean-core/    # Companion plugin (plugin-territory functionality)
```

## Theme

- `style.css` — Theme header + design tokens (CSS custom properties)
- `functions.php` — Bootstrap, loads `inc/class-proclean-theme.php`
- `inc/class-proclean-theme.php` — Theme setup, assets, Customizer, template parts
- `index.php`, `page.php`, `single.php`, `archive.php`, `search.php`, `404.php`
- `template-parts/` — header, footer, content, content-none, page-header
- `assets/css/proclean.css` — Design system & base styles
- `assets/css/editor-style.css` — Block editor styles
- `assets/js/proclean.js` — Mobile menu enhancement
- `languages/` — Translation files

## Companion plugin

- `proclean-core.php` — Plugin bootstrap, activation/deactivation hooks
- `includes/class-proclean-core-post-types.php` — Custom post types (skeleton;
  registration deferred to Phase 5)

## Requirements

- WordPress 6.0+
- PHP 7.4+

## Installation

1. Copy `theme/proclean/` into `wp-content/themes/proclean/`.
2. Copy `plugin/proclean-core/` into `wp-content/plugins/proclean-core/`.
3. Activate the **ProClean** theme.
4. Activate the **ProClean Core** plugin (optional; required for custom post
   types and Elementor widgets).
5. Set up your menus under Appearance → Menus.
6. Customize colors and layout under Appearance → Customize.

## Customizer settings

- Colors: Brand primary color
- Layout: Container max width

## Coding standards

All PHP and JavaScript follows the WordPress Coding Standards and is verified
with PHP_CodeSniffer (WordPress standard). Run:

```
composer require --dev squizlabs/php_codesniffer wp-coding-standards/wpcs
vendor/bin/phpcs --standard=WordPress theme/ plugin/
```

## License

GPL-2.0-or-later

## Reference & licensing

- Jani-King is a structural/content/functional reference only.
- No Jani-King logos, trademarks or proprietary assets are distributed.
- All images used in demos must be appropriately licensed for redistribution.
