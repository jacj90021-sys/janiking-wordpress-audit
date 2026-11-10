# PROJECT.md — Jani-King Website Reconstruction (WordPress)

## Project Identity

**Theme name:** ProClean (working name)
**Theme slug:** proclean
**Prefix:** proclean_
**Text domain:** proclean
**Primary reference:** https://www.janiking.com/ (Jani-King)

## Objective

Reconstruct the Jani-King website as a **highly faithful, comprehensive, fully
functional WordPress website** — page layouts, visual presentation, interactions,
navigation, animations and responsive behaviour reproduced as closely as
technically possible against the live reference.

Jani-King is the **live structural, content and functional reference**. Per the
master task, do not invent a new design system when the reference already
provides the visual direction; reproduce the reference's colors, typography,
spacing, buttons, cards, navigation and responsive breakpoints using measured
values.

## Current Status

**Phase 4 — Website reconstruction implemented on live WordPress.**

Live environment: WordPress 7.1.4 at http://proclean.local, exposed publicly via
https://loud-roses-stand.loca.lt (single preview URL). Active theme: ProClean.
Active plugins: Elementor Free, Contact Form 7, ProClean Core (companion).

Completed:
- Standalone theme + companion plugin skeleton (Phase 3)
- Template hierarchy (index, page, single, archive, search, 404, front-page)
- Page templates: Service, Industry, Franchise, Location
- Customizer settings, asset loading, WordPress Coding Standards compliant
- Mega-menu navigation matching reference structure
- Homepage rebuilt (hero, stats, services, FAQ, CTA, clients) with measured
  brand colors (orange #EE5513, black, white)
- ~30 pages created and populated with reference content; all return HTTP 200
- Public preview tunnel serving full styling over HTTPS (mixed content fixed)

## Stack

- WordPress (latest stable — 7.1.4)
- Original standalone WordPress theme (proclean)
- Companion core plugin (proclean-core)
- Elementor Free (installed, available)
- Contact Form 7 (quote/franchise forms)
- Free plugins only where genuinely necessary
- Custom PHP, CSS and JavaScript only when justified
- GitHub for version control

React, Next.js, Vite, standalone TypeScript applications and headless
replacements are prohibited. No build step unless justified.

## Reference

https://www.janiking.com/ — inspected live; sitemap inventory: 331 pages +
1,046 posts.

## Constraints

- Repository must remain small and understandable.
- Do not include WordPress core, unnecessary dependencies, uploaded media
  libraries or generated files in Git.
- Do not create a separate source file for every page section.
- Create only files justified by the actual implementation.
- Do not assume Elementor Pro functionality is available.
- Do not distribute protected logos, trademarks, photographs or proprietary
  assets without authorization. Use appropriately licensed replacement assets.
- Where redistribution of original Jani-King text is unavailable, create
  original replacement copy preserving purpose, hierarchy and approximate
  length.