# documentation/ARCHITECTURE.md — Proposed WordPress Implementation

Source: https://www.janiking.com/ (audited 2026-11-10)

## Stack Decisions

| Layer | Technology | Rationale |
|-------|-----------|-----------|
| CMS | WordPress (latest stable) | Required by task |
| Theme | Astra Free (parent) + custom child theme | Required; lightweight, compatible with Elementor |
| Page Builder | Elementor Free | Required; visual, fully editable by client |
| SEO | Yoast SEO (free) | Already used on reference site (Yoast sitemaps detected) |
| Forms | WPForms Free (or Contact Form 7) | Quote & franchise inquiry forms |
| Security | Really Simple Security (free) | Optional hardening |
| Custom code | Child theme `functions.php` + `style.css` + one JS bundle | Only where justified |
| Version control | GitHub | Required |

React, Next.js, Vite, standalone TypeScript and headless replacements are
prohibited. No build step is required unless a single JS bundle is justified.

## What Astra Handles

- Site identity (logo, site title, tagline)
- Global typography (font family, weights, heading scale)
- Global color palette (brand orange, dark, white, teal, grays)
- Container width (max-width ~1200px)
- Header & footer layout framework
- Responsive breakpoints (desktop/tablet/mobile)
- Mobile hamburger menu base behavior
- Page/post templates (full-width, canvas, boxed)

Astra is configured via the Customizer; these settings live in the database,
not in committed code.

## What Elementor Free Builds

All public-facing pages are built in Elementor Free:

- Homepage (hero, stats, services, FAQ, client logos, video section)
- Commercial Cleaning landing + service sub-pages
- Industry landing pages (16)
- Franchise opportunity pages (index + unit/domestic/international + veterans)
- Location finder page
- About Us, History, National Accounts, Careers, Get a Quote, FAQ,
  Google Reviews, Why Jani-King, Privacy Policy, Terms of Use
- Cleaning Resources / checklists pages
- Campaign pages (low priority)

Elementor Free does NOT include: theme builder (header/footer), popup builder,
global widgets, motion effects, form builder. Header/footer remain Astra's
responsibility.

## Native WordPress Content

| Content Type | WordPress Native | Notes |
|--------------|------------------|-------|
| Blog posts | Posts | `/blog/` archive, categories, tags |
| News / In the Press | Posts (category "news") | `/in-the-press/` archive |
| Static pages | Pages | All service, industry, franchise, about, legal pages |
| Locations | Pages | 120 city pages; same template, custom fields via ACF-free alternatives or Elementor dynamic data |
| Media | Media Library | Uploaded images (not committed to git) |

## Custom Post Types / Custom Fields

**Not necessary.** All content maps cleanly to native Posts and Pages.
Location pages can use:
- Page templates (Elementor Canvas) + manual entry, OR
- A single location Page template duplicated per city (not ideal for 120 cities,
  but avoids CPT complexity)

If the client later needs dynamic location data, a small CPT + Advanced Custom
Fields (free) could be added — but this is deferred and not justified for TASK
001/MVP.

## Custom Plugin

**Not justified for MVP.** All required behavior can be achieved with:
- Astra Customizer (styling)
- Elementor Free (layout)
- WPForms Free (forms)
- Yoast SEO (SEO)

A tiny custom plugin is only warranted if a feature cannot be solved by the
above (e.g. a custom location finder shortcode or regional quote routing). That
decision is deferred to Stage 7/8.

## Additional Free Plugins

| Plugin | Purpose | Free? |
|--------|---------|-------|
| Yoast SEO | SEO, sitemaps (match reference) | Yes |
| WPForms Free | Quote & franchise forms | Yes |
| Really Simple Security | Hardening | Yes |
| (optional) Elementor Header & Footer Builder | If header/footer need Elementor control | Yes |

No premium plugins. No Elementor Pro assumed.

## File Discipline (Git)

**Committed:**
- WordPress child theme (`style.css`, `functions.php`, `screenshot.png`)
- Custom CSS/JS assets (one `style.css`, one `main.js`)
- AGENTS.md, README.md, `.gitignore`
- TASKS.md, DESIGN-SYSTEM.md, PROJECT.md, documentation/

**NOT committed (gitignored):**
- WordPress core (`wp-admin/`, `wp-includes/`, `wp-config.php`, etc.)
- `wp-content/uploads/` (media library)
- `wp-content/plugins/` (third-party plugins)
- `wp-content/themes/astra/` (parent theme)
- `node_modules/`, vendor, build/cache artifacts

**Repository structure (example):**
```
janiking-wp/
  .gitignore
  AGENTS.md
  README.md
  PROJECT.md
  TASKS.md
  DESIGN-SYSTEM.md
  documentation/
    SITEMAP.md
    ARCHITECTURE.md
  wp-content/
    themes/
      janiking-child/           <- custom child theme (committed)
        style.css
        functions.php
        assets/
          css/
            custom.css
          js/
            main.js
```

## Shared Components (reusable)

Built once in Elementor (saved as templates/blocks) or via Astra:

1. Header (logo, mega menu, search, phone, CTA)
2. Footer (4 columns, socials, copyright, address)
3. Hero banner
4. Stat counter
5. Service card (icon + title + description + link)
6. Industry card (icon + name link)
7. Client/partner logo grid
8. FAQ accordion
9. Why Jani-King checkmarks
10. In-house vs outsourced comparison table
11. Quote form section
12. Social icons
13. "Also of Interest" related links

## Implementation Stages

See TASKS.md for the full stage breakdown (Stage 0 audit → Stage 9 handover).

## Custom Development Required

1. **Child theme setup** — Astra child theme with `functions.php` enqueuing
   custom CSS/JS.
2. **Custom CSS** — brand colors, button styles, heading scale, footer overrides,
   responsive tweaks not exposed by Astra Customizer.
3. **Single JS bundle** — mobile mega-menu toggle, FAQ accordion open/close,
   quote form enhancement, smooth scroll. One file, no framework.
4. **Elementor templates** — reusable blocks for header/footer-adjacent sections
   and repeated section patterns.
5. **Form integration** — WPForms Free quote form with optional regional routing.

No custom post types, no React components, no build pipeline, no headless
architecture.

## Inaccessible Pages / Unresolved Questions

- Campaign pages (`/peak/`, `/pristine/`, `/spring-clean-challenge/`,
  `/make-an-appointment/`, `/make-the-transition-gulf-coast/`) are legacy; their
  inclusion in the recreation is unconfirmed.
- Exact brand color hex values were not measurable via DevTools; colors in
  DESIGN-SYSTEM.md are estimates marked **(est.)**.
- Font family was not directly measurable; typography values are estimates.
- International regional sites (janiking.ca, janiking.co.uk, janiking.pt, etc.)
  are external domains — not part of this recreation.
- Location-finder logic for 120 cities: to be confirmed whether each city needs
  a unique Page or a single dynamic template.
- Quote form backend routing (regional office assignment) is not specified on
  the reference site.

## Approval

TASK 001 (audit + architecture) is complete. Awaiting approval before
proceeding to TASK 002 (implementation).
