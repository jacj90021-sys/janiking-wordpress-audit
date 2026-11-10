# CHANGELOG

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [Unreleased]

### Added

- PROJECT.md — project objective and scope (exact Jani-King reference clone)
- TASKS.md — implementation stages and progress
- DESIGN-SYSTEM.md — observed Jani-King visual system (measured colors, fonts)
- documentation/SITEMAP.md — page inventory (~331 pages, ~1,046 posts)
- documentation/ARCHITECTURE.md — proposed WordPress implementation (standalone theme + companion plugin)
- documentation/COMPETITOR-RESEARCH.md — 10 ThemeForest cleaning-theme benchmarks
- documentation/FEATURES.md — product feature list
- documentation/THEMEFOREST-COMPLIANCE.md — Envato requirements checklist
- documentation/QA-REPORT.md — test evidence (reference inspection + live tests)
- AGENTS.md — lint/typecheck commands
- README.md — installation and usage

### Changed

- PROJECT.md updated to exact Jani-King clone scope (recreate reference first,
  modify into our own product in Phase 2)
- TASKS.md updated: Phase 1 = exact reference reconstruction; Phase 2 = modify
  into our own product (awaiting Phase 1 approval)
- DESIGN-SYSTEM.md updated with measured values from live site (Poppins font,
  #2c3e50 base, #efefef secondary, #EE5513 accent, exact section order)

### Added — Phase 1 (Exact Jani-King reference reconstruction on live WordPress)

- theme/proclean/template-parts/header.php — exact header: logo (left),
  mega-menu nav (center), search icon + phone/CTA (right)
- theme/proclean/template-parts/footer.php — exact footer structure
- theme/proclean/assets/css/proclean.css — exact reference styling: Poppins
  font, #2c3e50/#efefef/#EE5513 colors, pulse-grow animation, mega-menu styles
- theme/proclean/front-page.php — exact homepage section order: hero (2 image
  columns), stat counters (120/10/6,900/9), services (2 columns), FAQ, Why
  Jani-King (4 icon/heading pairs), Customer Retention, Blog, CTA
- theme/proclean/inc/class-proclean-mega-menu-walker.php — mega menu walker
  class (one class per file)
- theme/proclean/assets/images/ — actual Jani-King assets downloaded:
  jk-logo.png, bnr-homepage-commercial.webp, bnr-homepage-franchise.webp,
  bnr-cleaning-services.webp, bnr-franchise-opportunities.webp,
  bnr-CustomerRetention2.png, Banner-Templet-{15,51,52}.png,
  icon-CircleCheck-Orange.webp, icon-CircleCheck-DarkTeal.webp,
  icon-SpillCleanup-*.png, icon-Disinfecting-*.png, icon-EPProducts-*.png,
  icon-Extraction-*.png
- wp-config.php: HTTPS detection behind localtunnel proxy (X-Forwarded-Proto)
  to fix mixed content on public preview
- documentation/QA-REPORT.md — real test evidence from live reference
  inspection + live WordPress installation
- README.md — installation and usage

### Changed

- PROJECT.md updated from audit-only scope to dual-objective commercial product scope; Jani-King framed as structural/content/functional reference only
- TASKS.md updated from audit stages to 8-phase implementation plan
- documentation/ARCHITECTURE.md superseded Astra+Elementor-only architecture with standalone theme + companion plugin architecture

### Deprecated

- Astra child theme + Elementor Free page-only architecture (replaced by commercial product architecture)

### Added — Phase 4 (Website construction on live WordPress)

- Live WordPress environment at http://proclean.local (WP 7.1.4, MariaDB,
  Apache, mod_rewrite)
- theme/proclean/front-page.php — homepage template (hero, stats, services,
  CTA, client logos)
- Homepage styles in theme/proclean/assets/css/proclean.css (hero, stats,
  services, CTA, clients sections + mega-menu dropdown styles)
- Mega-menu navigation: Primary menu with Commercial Cleaning / Industries /
  Franchise Opportunities parents (`mega-menu` class for multi-column dropdown)
- Footer menu: Footer Navigation (Contact Us, Locations, Why ProClean, About
  Us) assigned to footer location
- Footer widgets: Search (footer-1), Recent Posts (footer-2), Contact text
  (footer-3)
- Content pages: About Us, Commercial Cleaning, Industries We Serve, Franchise
  Opportunities, Locations, Contact Us, Why ProClean, Privacy Policy
- Contact Form 7 plugin installed & active; "Quote Request Form" (ID 39)
  embedded on Get a Quote & Contact Us pages
- Plugins active: elementor, contact-form-7, proclean-core
- Page templates added: page-service.php, page-industry.php,
  page-franchise.php, page-location.php
- Service pages created (14): janitorial-services, disinfecting,
  green-cleaning, specialty-cleaning-services + 10 specialty sub-services
- Industry pages created (17): healthcare, education, office-buildings,
  cleaning-resources + 12 others
- Franchise subpages created (5): unit-franchise, domestic-franchisor,
  international-franchisor, how-to-start-a-cleaning-business, veterans
- Location pages created (9): atlanta, chicago, dallas, houston,
  los-angeles, new-york, phoenix, cleveland, miami
- Public preview tunnel https://loud-roses-stand.loca.lt serving full styling
  over HTTPS; mixed content fixed via wp-config HTTPS detection
- documentation/QA-REPORT.md — real test evidence from live WordPress
  installation (page load tests, content rendering, PHP lint, phpcs)

### Removed

- documentation/test.md (placeholder)


### Fixed

- None

### Security

- None

## [0.1.0] — 2026-11-10

### Added

- TASK 001 audit deliverables (PROJECT.md, TASKS.md, DESIGN-SYSTEM.md,
  documentation/SITEMAP.md, documentation/ARCHITECTURE.md)
- GitHub repository initialized: jacj90021-sys/janiking-wordpress-audit
