# TASKS.md — Implementation Stages and Progress

Status: **Phase 1 — Exact Jani-King reference reconstruction implemented on live WordPress.**

Live environment: WordPress 7.1.4 at http://proclean.local, exposed publicly via
https://loud-roses-stand.loca.lt (single preview URL). All created pages return
HTTP 200 through the tunnel with full CSS/JS loading (no mixed content). Actual
Jani-King logo, images, and text used throughout.

## Phases

### Phase 1 — Project inspection (complete)

- [x] Inspect repository (git status, log, remote)
- [x] Read all existing project documents (PROJECT.md, TASKS.md,
      DESIGN-SYSTEM.md, documentation/SITEMAP.md, documentation/ARCHITECTURE.md)
- [x] Check Git status and remote repository
- [x] Verify sitemap URL counts (331 pages; 1,046 posts; 2 region sitemaps)
- [x] Identify completed, incomplete, and outdated research
- [x] Preserve useful decisions; update outdated architecture

### Phase 2 — Reference and architecture verification (complete)

- [x] Review Jani-King reference pages (audited)
- [x] Review sitemap (verified counts)
- [x] Review 10 ThemeForest competitor products (documentation/COMPETITOR-RESEARCH.md)
- [x] Review official Envato requirements (documentation/THEMEFOREST-COMPLIANCE.md)
- [x] Finalize page inventory (documentation/SITEMAP.md)
- [x] Finalize architecture (documentation/ARCHITECTURE.md)
- [x] Finalize design system (DESIGN-SYSTEM.md — estimates marked)
- [x] Finalize file structure (documentation/ARCHITECTURE.md)
- [x] Define testing procedures
- [x] Produce FEATURES.md (documentation/FEATURES.md)
- [x] Produce THEMEFOREST-COMPLIANCE.md (documentation/THEMEFOREST-COMPLIANCE.md)

### Phase 3 — WordPress foundation (complete)

- [x] Create standalone theme skeleton (style.css, functions.php, screenshot.png omitted)
- [x] Create companion plugin skeleton (main plugin file)
- [x] Establish design system (theme Customizer defaults)
- [x] Implement template foundation (index, page, single, archive, search, 404)
- [x] Implement global settings (Customizer framework)
- [x] Establish code-quality checks (PHP lint, WordPress coding standards)
- [x] Configure .gitignore, AGENTS.md, README.md
- [x] Set up CHANGELOG.md

### Phase 1 — Exact reference reconstruction (implemented on live WordPress)

- [x] Inspect live Jani-King site (sitemap, homepage, key pages) via curl
- [x] Build verified page inventory from live sitemap + navigation (331 pages,
      1,046 posts = 1,377 URLs)
- [x] Confirm preview tunnel (loca.lt) live and assets load over HTTPS
- [x] Rebuild header.php with exact mega-menu + logo + search + CTA structure
      (Poppins font, #2c3e50 base, #efefef secondary, #EE5513 accent)
- [x] Rebuild footer.php with exact footer structure
- [x] Rebuild proclean.css with exact reference styling (Poppins, colors,
      layout, pulse-grow animation)
- [x] Rebuild front-page.php with exact section order (hero, stats, services,
      FAQ, why-jani-king, retention, blog, CTA) using actual Jani-King images
      and text
- [x] Verify homepage loads correctly via tunnel with all assets (HTTP 200,
      no mixed content)
- [x] PHP lint clean (15 files), phpcs WordPress standard clean (0 errors,
      0 warnings)

**NOT yet verified (requires browser access):**
- [ ] Pixel-perfect screenshot comparison vs live reference
- [ ] Mobile/tablet responsive layout verification
- [ ] Mega-menu hover transitions and sticky header animation testing

### Phase 2 — Modify into our own product (NOT started — awaiting Phase 1 approval)

- [ ] Replace Jani-King branding with our own branding
- [ ] Replace text and content with our own
- [ ] Replace reference images with original/licensed assets
- [ ] Replace links, forms and business details

### Phase 5 — Product functionality

- [ ] Build Elementor Free custom widgets
- [ ] Implement header/footer customization system
- [ ] Implement theme options (Customizer)
- [ ] Implement companion plugin content types
- [ ] Implement demo importer (explicit consent, overwrite warning)
- [ ] Implement WooCommerce compatibility

### Phase 6 — Demo and documentation

- [ ] Prepare complete original demos
- [ ] Configure menus and widgets
- [ ] Prepare demo content (licensed assets only)
- [ ] Write installation instructions
- [ ] Write customization documentation
- [ ] Prepare changelog

### Phase 7 — Quality assurance

- [ ] Test fresh WordPress installation
- [ ] Test theme activation without companion plugin
- [ ] Test plugin activation/deactivation
- [ ] Test Elementor Free + all custom widgets
- [ ] Test header/footer customization
- [ ] Test demo importing
- [ ] Test all page templates
- [ ] Test responsive layouts (mobile/tablet/desktop)
- [ ] Test demo importing with overwrite warning
- [ ] Test compatibility (PHP, WordPress, plugin conflicts)
- [ ] Fix defects; record evidence (documentation/QA-REPORT.md)

### Phase 8 — Commercial release preparation

- [ ] Verify Envato requirements (Theme Check, coding standards)
- [ ] Run Theme Check (fix all REQUIRED notices)
- [ ] Run code-quality checks
- [ ] Verify licensing (assets, fonts, images)
- [ ] Prepare release package (theme zip + plugin zip + docs)
- [ ] Prepare public documentation
- [ ] Prepare screenshots and preview assets
- [ ] Prepare product description
- [ ] Prepare changelog

## Progress log

| Date | Phase | Note |
|------|-------|------|
| 2026-11-10 | 3 | WordPress foundation complete: theme + plugin skeleton, template hierarchy, Customizer, assets, linting/phpcs clean |
| 2026-11-10 | 1 | Exact Jani-King reference reconstruction: live WP 7.1.4 at http://proclean.local; public tunnel https://loud-roses-stand.loca.lt; header/footer/template-parts rebuilt with reference structure; front-page.php rebuilt with exact section order and actual Jani-King images/text; phpcs clean; all pages HTTP-verified via tunnel |

## Repository (GitHub)

https://github.com/jacj90021-sys/janiking-wordpress-audit