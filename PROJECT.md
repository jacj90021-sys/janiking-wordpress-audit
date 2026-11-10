# PROJECT.md — Jani-King Exact Website Clone (WordPress)

## Project Identity

**Theme name:** Jani-King (exact clone)
**Theme slug:** proclean
**Prefix:** proclean_
**Text domain:** proclean
**Primary reference:** https://www.janiking.com/ (Jani-King)

## Objective

Build an **exact clone** of the Jani-King website as a fully functional WordPress website — page layouts, visual presentation, interactions, navigation, animations and responsive behaviour reproduced as closely as technically possible against the live reference.

Jani-King's **actual text, images, logos, branding and content** are used throughout (authorized for cloning). The site is not a redesign or original product — it is a faithful WordPress reproduction of https://www.janiking.com/

## Current Status

**Phase 4 — Exact Jani-King clone implemented on live WordPress.**

Live environment: WordPress 7.1.4 at http://proclean.local, exposed publicly via
https://loud-roses-stand.loca.lt (single preview URL). Active theme: Jani-King clone theme.
Active plugins: Elementor Free, Contact Form 7, Jani-King Core (companion).

Completed:
- Exact Jani-King branding: site title "Jani-King", tagline "Commercial Cleaning & Janitorial Services"
- Actual Jani-King logo (JK-Logo-REV.png) set as custom logo
- Actual Jani-King images downloaded and used (hero images, checkmark icons)
- Exact Jani-King color system: Orange #EE5513, Black #000000, White #FFFFFF (measured via PIL)
- Exact Jani-King text on all pages
- Standalone theme + companion plugin skeleton
- Template hierarchy (index, page, single, archive, search, 404, front-page)
- Page templates: Service, Industry, Franchise, Location
- Customizer settings, asset loading, WordPress Coding Standards compliant
- Mega-menu navigation matching reference structure
- Homepage rebuilt (hero, stats, services, FAQ, CTA, clients) with exact Jani-King content
- ~24 pages created and populated with exact Jani-King content; all return HTTP 200
- Public preview tunnel serving full styling over HTTPS (mixed content fixed)

## Stack

- WordPress (latest stable — 7.1.4)
- Jani-King clone theme (standalone)
- Companion core plugin (proclean-core)
- Elementor Free (installed, available)
- Contact Form 7 (quote/franchise forms)
- Free plugins only where genuinely necessary
- Custom PHP, CSS and JavaScript only when justified
- GitHub for version control

React, Next.js, Vite, standalone TypeScript applications and headless
replacements are prohibited. No build step unless justified.

## Reference

https://www.janiking.com/ — exact clone target. Sitemap inventory: 331 pages +
1,046 posts (1,377 total reference URLs discovered).

## Asset Licensing

User has authorized cloning of Jani-King's text and images. Actual Jani-King assets
are used: logo (JK-Logo-REV.png), hero images (bnr-*.webp), checkmark icons
(icon-CircleCheck-*.webp). All other content is original replacement copy
preserving the reference's purpose and hierarchy.

## Constraints

- Repository must remain small and understandable.
- Do not include WordPress core, unnecessary dependencies, uploaded media
  libraries or generated files in Git.
- Do not create a separate source file for every page section.
- Create only files justified by the actual implementation.
- Do not assume Elementor Pro functionality is available.
