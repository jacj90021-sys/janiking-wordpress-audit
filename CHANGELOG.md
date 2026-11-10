# CHANGELOG

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [Unreleased]

### Added

- PROJECT.md — project objective and scope (dual objective: website recreation + ThemeForest product)
- TASKS.md — implementation stages and progress (8 phases)
- DESIGN-SYSTEM.md — observed Jani-King visual system
- documentation/SITEMAP.md — page inventory (~331 pages, ~1,046 posts)
- documentation/ARCHITECTURE.md — proposed WordPress implementation (standalone theme + companion plugin)
- documentation/COMPETITOR-RESEARCH.md — 10 ThemeForest cleaning-theme benchmarks
- documentation/FEATURES.md — product feature list
- documentation/THEMEFOREST-COMPLIANCE.md — Envato requirements checklist
- documentation/QA-REPORT.md — test evidence placeholder
- AGENTS.md — lint/typecheck commands
- README.md — installation and usage

### Changed

- PROJECT.md updated from audit-only scope to dual-objective commercial product scope; Jani-King framed as structural/content/functional reference only
- TASKS.md updated from audit stages to 8-phase implementation plan
- documentation/ARCHITECTURE.md superseded Astra+Elementor-only architecture with standalone theme + companion plugin architecture

### Deprecated

- Astra child theme + Elementor Free page-only architecture (replaced by commercial product architecture)

### Added — Phase 3 (WordPress foundation)

- theme/proclean/style.css — theme header + design tokens
- theme/proclean/functions.php — theme bootstrap
- theme/proclean/inc/class-proclean-theme.php — theme setup, assets, Customizer, template parts
- theme/proclean/index.php, page.php, single.php, archive.php, search.php, 404.php — template hierarchy
- theme/proclean/template-parts/{header,footer,content,content-none,page-header}.php — reusable template parts
- theme/proclean/assets/css/proclean.css — design system & base styles
- theme/proclean/assets/css/editor-style.css — block editor styles
- theme/proclean/assets/js/proclean.js — mobile menu enhancement
- plugin/proclean-core/proclean-core.php — companion plugin bootstrap
- plugin/proclean-core/includes/class-proclean-core-post-types.php — post types skeleton

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
