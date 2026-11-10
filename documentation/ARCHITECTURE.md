# documentation/ARCHITECTURE.md — Proposed WordPress Implementation

Source: Jani-King reference audit + ThemeForest competitor benchmarks + Envato
requirements (audited 2026-11-10). This supersedes the earlier Astra +
Elementor-Free-only architecture, which was scoped for a simple website
recreation only. The new scope is a commercial ThemeForest product (Objective
B) in addition to the website recreation (Objective A).

## Objectives

- **Objective A**: Recreate Jani-King's page structure, navigation, visual
  presentation, content organization, reusable sections and responsive
  behaviour in WordPress.
- **Objective B**: Build an original, commercially distributable WordPress
  theme suitable for ThemeForest, with standalone theme, companion plugin,
  Elementor Free integration, header/footer builder, demo importer, WooCommerce,
  documentation, and testing.

## Stack decisions

| Layer | Technology | Rationale |
|-------|-----------|-----------|
| CMS | WordPress (latest stable) | Required |
| Theme | Original standalone theme (own product identity) | Commercial product |
| Companion plugin | Core plugin for plugin-territory functionality | Envato separation |
| Page builder | Elementor Free (primary visual builder) | Required; no Pro assumed |
| Custom Elementor widgets | Theme/plugin registered widgets | Cleaning-service components |
| SEO | Yoast SEO (free) | Reference site uses Yoast sitemaps |
| Forms | WPForms Free (or Contact Form 7) | Quote & franchise forms |
| Security | Really Simple Security (free, optional) | Hardening |
| Plugin activation | TGM Plugin Activation | Envato requirement for bundled plugins |
| Custom code | Theme `functions.php` + `style.css` + plugin PHP + asset bundles | Only where justified |
| Version control | GitHub | Required |

React, Next.js, Vite, standalone TypeScript and headless replacements are
prohibited. No build step unless justified.

## What the standalone theme owns

The theme owns **presentation only**:
- WordPress template hierarchy (index, page, single, archive, search, 404)
- Header and footer presentation
- Homepage and page layouts
- Blog archive and single posts
- Search results and 404
- Reusable template parts (`templates/`, `template-parts/`)
- Navigation and menus
- Sidebars and widget areas
- Typography and global styling (via Customizer)
- Responsive layouts
- Gutenberg compatibility (block editor + editor styles)
- WooCommerce styling (shop, product, cart, checkout, account)
- Translation and RTL readiness
- Child theme support

The theme must work as a normal WordPress theme **without** Elementor or the
companion plugin (Envato "out of the box" requirement).

## What the companion plugin owns

The plugin owns **plugin-territory functionality** (Envato requirement):
- Custom Post Types: Services, Industries, Testimonials, Team Members, Projects
- Custom Taxonomies: service categories, industry categories
- Custom Fields / meta boxes (design-related may stay in theme)
- Shortcodes where appropriate
- Custom Elementor widget registration
- Theme-specific functionality
- Demo import integration hooks

Deactivating the companion plugin must **not break** ordinary pages, posts, or
the theme's basic operation.

## What Elementor Free builds

Elementor Free is used for page layouts. Custom Elementor widgets (registered
via the companion plugin):
- Hero, Services, Industry cards, Icon boxes, Testimonials, Team members,
  Statistics (counters), Pricing, FAQs, Galleries, Call-to-action, Blog grids,
  Project grids, Contact and quotation sections.

Widget requirements: properly structured, responsive, accessible, customizable,
consistent with the design system, tested with Elementor Free.

Elementor Free does NOT include: theme builder, popup builder, global widgets,
motion effects, form builder. Header/footer remain the theme's responsibility
(via the header/footer system, not Elementor Pro).

## Header/footer system

A professional independent header/footer customization system (not Elementor Pro
Theme Builder):
- Multiple header layouts (default, sticky, transparent)
- Multiple footer layouts (multi-column variants)
- Logo and site identity
- Desktop navigation with mega menus/dropdowns
- Mobile navigation (hamburger, accordion)
- Sticky header option
- CTA buttons (phone, quote)
- Footer columns, socials, copyright
- Responsive controls per device

## Theme settings (Customizer)

Centralized controls:
- Global colors (brand primary/secondary, text, background)
- Typography (font family, weight, size for headings/body)
- Layout widths (container max-width)
- Header, footer, button settings
- Blog layouts, sidebars
- Global styling and responsive settings
- All settings sanitized, validated, escaped properly

## Native WordPress content

| Content type | WordPress native | Notes |
|--------------|------------------|-------|
| Blog posts | Posts | `/blog/` archive, categories, tags |
| News / In the Press | Posts (category "news") | `/in-the-press/` archive |
| Static pages | Pages | All service, industry, franchise, about, legal pages |
| Services | Companion plugin CPT | Reusable service content |
| Industries | Companion plugin CPT | Reusable industry content |
| Testimonials | Companion plugin CPT | Reusable testimonials |
| Team members | Companion plugin CPT | Reusable team content |
| Projects | Companion plugin CPT | Reusable project/portfolio content |
| Locations | Pages | City pages (template-based or CPT deferred) |
| Media | Media Library | Uploaded images (not committed to git) |

Locations: 120 US city pages. Defer decision between page-per-city vs CPT
until implementation. Avoid unnecessary CPT complexity for MVP.

## Custom post types / custom fields

Justified CPTs: Services, Industries, Testimonials, Team Members, Projects
(generically reusable content that users would lose on theme switch — plugin
territory). Not justified: location-specific data (deferred).

## Custom plugin

**Justified** for commercial product: plugin-territory separation is an Envato
requirement. The companion plugin is required, not optional.

## Additional free plugins

| Plugin | Purpose | Free? |
|--------|---------|-------|
| Yoast SEO | SEO, sitemaps | Yes |
| WPForms Free | Quote & franchise forms | Yes |
| Really Simple Security | Hardening | Yes, optional |

No premium plugins. No Elementor Pro assumed.

## File discipline (Git)

**Committed:**
- Standalone theme (`style.css`, `functions.php`, `templates/`,
  `template-parts/`, `inc/`, `assets/`, `languages/`, `screenshot.png`)
- Companion plugin (main file, `includes/`, Elementor integration, widgets,
  post types, taxonomies, fields, demo-import integration)
- `.gitignore`, `AGENTS.md`, `README.md`, `PROJECT.md`, `TASKS.md`,
  `DESIGN-SYSTEM.md`, `documentation/`, `CHANGELOG.md`

**NOT committed (gitignored):**
- WordPress core, `wp-config.php`
- `wp-content/uploads/` (media library)
- `wp-content/plugins/` (third-party plugins)
- `wp-content/themes/` parent themes (not our theme)
- `node_modules/`, vendor, build/cache artifacts

## Repository structure (planned)

```
janiking-theme/
  .gitignore
  AGENTS.md
  README.md
  CHANGELOG.md
  PROJECT.md
  TASKS.md
  DESIGN-SYSTEM.md
  documentation/
    SITEMAP.md
    ARCHITECTURE.md
    DESIGN-SYSTEM.md (copy/ref)
    COMPETITOR-RESEARCH.md
    FEATURES.md
    QA-REPORT.md
    THEMEFOREST-COMPLIANCE.md
  theme/                      <- standalone theme (committed)
    style.css
    functions.php
    screenshot.png
    templates/
    template-parts/
    inc/
    assets/
      css/
      js/
      images/
    languages/
  plugin/                     <- companion plugin (committed)
    janiking-core.php
    includes/
      class-widgets.php
      class-post-types.php
      class-taxonomies.php
      class-demo-import.php
    assets/
```

## Custom development required

1. **Standalone theme** — full WordPress theme with template hierarchy.
2. **Companion plugin** — CPTs, taxonomies, custom Elementor widgets,
   demo-import integration.
3. **Custom CSS** — brand colors, buttons, heading scale, footer overrides,
   responsive tweaks.
4. **JS modules** — mobile menu, mega-menu, FAQ accordion, quote form,
   smooth scroll. Small, justified files; no framework.
5. **Theme options** — Customizer-based settings framework.
6. **Header/footer system** — independent customization system.
7. **Demo importer** — WP Filesystem-based, explicit consent, overwrite warning.
8. **WooCommerce styling** — shop, product, cart, checkout, account pages.
9. **Elementor Free widgets** — focused set of custom widgets.

No custom post types for locations (deferred). No React components. No build
pipeline unless justified. No headless architecture.

## Implementation stages

See TASKS.md for Phase 1 (inspection) → Phase 8 (release preparation).

## QA & acceptance

- Fresh WordPress installation
- Theme activation without companion plugin
- Plugin activation/deactivation
- Elementor Free + all custom widgets
- Header/footer customization
- Demo importing
- Every page template, homepage, blog archive, single articles, search
- Navigation, contact forms, quotation forms
- WooCommerce workflows
- Mobile/tablet/desktop layouts
- Accessibility, performance, security
- PHP and WordPress compatibility
- Envato Theme Check (REQUIRED notices fixed)

## Inaccessible pages / unresolved questions

- Campaign pages (`/peak/`, `/pristine/`, `/spring-clean-challenge/`,
  `/make-an-appointment/`, `/make-the-transition-gulf-coast/`) are legacy;
  inclusion unconfirmed.
- Exact brand color hex values are estimates marked **(est.)** — verify via
  DevTools.
- Font family not directly measurable — typography values are estimates.
- International regional sites (janiking.ca, .co.uk, .pt) are external domains
  — not part of this recreation.
- Location-finder logic for 120 cities: page-per-city vs CPT to be confirmed.
- Quote form backend routing (regional office assignment) not specified.

## Approval

Phase 2 architecture approved. Phase 3 (WordPress foundation) implementation in
progress.
