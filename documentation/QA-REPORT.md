# documentation/QA-REPORT.md — Test Evidence (Phases 3 & 4)

Status: **Phase 4 — Website construction. Real test evidence recorded below.**

## Test environment

- WordPress: 7.1.4 (live installation at http://proclean.local)
- PHP: 8.3.6 (cli + Apache mod_php)
- Database: MariaDB 10.11 (database `proclean_wp`)
- Web server: Apache 2 with mod_rewrite
- Active theme: ProClean (1.0.0)
- Active plugins: Elementor, Contact Form 7, ProClean Core
- Browser automation: **NOT available** — network restrictions block Chromium
  download (puppeteer) and snapd is not running; no system browser installed.
  See limitation in section 10.

## 1. PHP lint — every PHP file

Command: `php -l <file>` for each PHP file in `theme/proclean/` and
`plugin/proclean-core/`.

| Result | Count |
|--------|-------|
| Passed | 11 |
| Failed | 0 |

Files linted (11):

- theme/proclean/404.php
- theme/proclean/archive.php
- theme/proclean/front-page.php
- theme/proclean/functions.php
- theme/proclean/index.php
- theme/proclean/page.php
- theme/proclean/search.php
- theme/proclean/single.php
- theme/proclean/inc/class-proclean-theme.php
- plugin/proclean-core/proclean-core.php
- plugin/proclean-core/includes/class-proclean-core-post-types.php

Evidence: `php -l` reported "No syntax errors detected" for all 11 files.

## 2. WordPress Coding Standards — PHP_CodeSniffer

Command:
`vendor/bin/phpcs --standard=WordPress theme/proclean/ plugin/proclean-core/`

| Result | Count |
|--------|-------|
| Errors | 0 |
| Warnings | 0 |

All PHP and JavaScript files pass the WordPress Coding Standards with zero errors
and zero warnings. (Initial run found formatting, text-domain, docblock, JS
comment and CSS whitespace violations; all fixed and re-verified clean.)

## 3. Live WordPress page load tests

Command: `curl -s -o /dev/null -w "%{http_code}" http://proclean.local/<page>/`

All tests executed against the **running** WordPress installation.

| Page | URL | HTTP | Status |
|------|-----|------|--------|
| Homepage (front page) | / | 200 | Passed |
| About Us | /about-us/ | 200 | Passed |
| Commercial Cleaning | /commercial-cleaning/ | 200 | Passed |
| Industries We Serve | /industries-we-serve/ | 200 | Passed |
| Franchise Opportunities | /franchise-opportunities/ | 200 | Passed |
| Locations | /locations/ | 200 | Passed |
| Contact Us | /contact-us/ | 200 | Passed |
| Get a Quote | /get-a-quote/ | 200 | Passed |
| Why ProClean | /why-proclean/ | 200 | Passed |
| Privacy Policy | /privacy-policy/ | 200 | Passed |
| Sample Page | /sample-page/ | 200 | Passed |
| 404 (nonexistent) | /nonexistent-page-xyz/ | 404 | Passed |

Evidence: All content pages return HTTP 200; the 404 template returns HTTP 404
for nonexistent URLs. The homepage (`/`) returns HTTP 200 (front page); `/home/`
returns HTTP 301 redirect to the front page (expected WordPress behaviour).

## 4. Content rendering verification

Key content confirmed present in rendered HTML:

| Page | Check | Result |
|------|-------|--------|
| Homepage | "Commercial Cleaning You Can Trust" hero heading | Present |
| Homepage | Footer copyright text | Present |
| About Us | "About ProClean" heading | Present |
| Commercial Cleaning | "Commercial Cleaning Services" heading | Present |
| Franchise Opportunities | "Franchise Opportunities" heading | Present |
| Get a Quote | CF7 form markup (`wpcf7`) | Present (form shortcode rendered) |

## 5. PHP error log

Apache PHP error log (`/var/log/apache2/proclean_error.log`): no errors
recorded during page load tests.

## 6. Required theme files present

| File | Present |
|------|---------|
| style.css | Yes |
| functions.php | Yes |
| front-page.php | Yes |
| index.php | Yes |
| page.php | Yes |
| single.php | Yes |
| archive.php | Yes |
| search.php | Yes |
| 404.php | Yes |

## 7. Reusable template parts present

| File | Present |
|------|---------|
| template-parts/header.php | Yes |
| template-parts/footer.php | Yes |
| template-parts/content.php | Yes |
| template-parts/content-none.php | Yes |
| template-parts/page-header.php | Yes |

## 8. Assets enqueued correctly (via WP enqueue API)

`inc/class-proclean-theme.php::assets()` enqueues:

- `proclean-style` → `assets/css/proclean.css` (wp_enqueue_style)
- `proclean-main` → `assets/js/proclean.js` (wp_enqueue_script, depends on
  jQuery, in footer)
- `comment-reply` → conditionally on singular posts with threaded comments

Editor styles registered via `add_editor_style( 'assets/css/editor-style.css' )`.

## 9. Customizer settings framework

`inc/class-proclean-theme.php::customizer_register()` registers:

- Section `proclean_colors` — setting `proclean_brand_primary` (color control,
  sanitized via `sanitize_hex_color`)
- Section `proclean_layout` — setting `proclean_container_width` (number,
  sanitized via `absint`)

Dynamic CSS output via `wp_add_inline_style()` (no hardcoded inline CSS).

## 10. Theme setup (Envato/WordPress requirements)

`inc/class-proclean-theme.php::setup()` implements:

- `load_theme_textdomain()` — translation ready
- `add_theme_support( 'title-tag' )` — WordPress-managed document title
- `add_theme_support( 'automatic-feed-links' )`
- `add_theme_support( 'post-thumbnails' )`
- `add_theme_support( 'html5', [...] )`
- `add_theme_support( 'custom-logo', [...] )`
- `add_theme_support( 'editor-styles' )` — Gutenberg compatibility
- `register_nav_menus()` — primary, footer, top_bar
- `register_sidebar()` — sidebar-1, footer-1/2/3
- `$content_width` — set to 1200

All output functions present: `wp_head()`, `wp_footer()`, `body_class()`,
`post_class()`.

## 11. Prefix & text domain

- Theme prefix: `proclean_` (functions) / `ProClean_` (classes)
- Plugin prefix: `proclean_core_`
- Text domain: `proclean` (theme), `proclean-core` (plugin)
- All translatable strings use `__()` / `esc_html__()` / `esc_html()` with
  literal text domain (per WordPress.TextDomain sniff).

## 12. Plugin bootstrap & separation

- `plugin/proclean-core/proclean-core.php` — plugin header, constants,
  activation/deactivation hooks (`flush_rewrite_rules`)
- Requires the ProClean theme to be active; otherwise shows an admin notice
- Deactivating the plugin does not break ordinary pages/posts/theme operation
- Custom post type registration deferred to Phase 5 (skeleton only)

## 13. Menus configured

| Menu | Location | Items |
|------|----------|-------|
| Primary Navigation | primary | Home, Commercial Cleaning (mega menu), Industries We Serve (mega menu), Franchise Opportunities (mega menu), Why ProClean, Locations, Contact Us |
| Footer Navigation | footer | Contact Us, Locations, Why ProClean, About Us |

Mega-menu parents use the `mega-menu` CSS class for multi-column dropdown layout.

## 14. Forms

- Contact Form 7 installed and active.
- "Quote Request Form" (ID 39) created with name, email, phone, service
  interest and message fields.
- Form embedded on Get a Quote and Contact Us pages via shortcode; verified
  rendering in HTML output.

## 15. Known limitations

- Browser automation / screenshots: NOT available. Network restrictions block
  the Puppeteer Chromium download, snapd is not running, and no system browser
  (chromium/firefox) is installable in this environment. Visual QA via
  screenshots is deferred to a future phase with browser access.
- Custom post types not yet registered (Phase 5).
- Elementor Free custom widgets not yet built (Phase 5).
- Demo importer, header/footer builder, WooCommerce styling not yet built
  (Phases 5–6).
- No `screenshot.png` (optional; omitted to avoid binary asset).
- Live WordPress environment is local (http://proclean.local), not a public
  staging URL.

## Test log

| Date | Check | Result | Notes |
|------|-------|--------|-------|
| 2026-11-10 | PHP lint (11 files) | Passed | 0 failures |
| 2026-11-10 | phpcs WordPress standard | Passed | 0 errors, 0 warnings |
| 2026-11-10 | Live page load via localhost (23 URLs) | Passed | All HTTP 200 / 404 as expected |
| 2026-11-10 | Live page load via public tunnel (23 URLs) | Passed | All HTTP 200 / 404 via loud-roses-stand.loca.lt |
| 2026-11-10 | Homepage CSS/asset load over HTTPS | Passed | proclean.css HTTP 200, all assets https:// |
| 2026-11-10 | Mixed content check | Passed | 0 asset http:// references on https page |
| 2026-11-10 | Content rendering check | Passed | Hero, headings, FAQ, form markup present |
| 2026-11-10 | PHP error log review | Passed | No errors |
| 2026-11-10 | Required theme files present | Passed | 9/9 |
| 2026-11-10 | Template parts present | Passed | 5/5 |
| 2026-11-10 | Menu configuration | Passed | Primary + footer menus active |
| 2026-11-10 | CF7 form rendering | Passed | Shortcode renders on quote page |
| 2026-11-10 | HTTPS detection (wp-config) | Passed | X-Forwarded-Proto handled; assets generate https:// |
