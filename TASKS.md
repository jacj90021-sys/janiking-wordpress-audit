# TASKS.md — Implementation Stages and Progress

Status: **TASK 001 — AUDIT ONLY. No implementation started.**
All stages below are planned, not executed.

## Stage 0 — Audit (in progress)

- [x] Inspect homepage, navigation, footer, core landing pages
- [x] Inspect services, industries, franchise, about, locations, blog,
      news, contact/conversion pages
- [x] Enumerate full page inventory via Yoast sitemap (331 unique URLs in
      `page-sitemap.xml`; 1,046 posts across `post-sitemap.xml` +
      `post-sitemap2.xml`)
- [x] Document design system (DESIGN-SYSTEM.md)
- [x] Plan WordPress architecture (documentation/ARCHITECTURE.md)
- [x] Produce page inventory (documentation/SITEMAP.md)

## Stage 1 — Repository & Tooling

- [ ] Initialise GitHub repository with `.gitignore` (wp-core, uploads,
      vendor, node_modules, generated assets)
- [ ] Add `composer.json` / `package.json` only if a build step is justified
- [ ] Add AGENTS.md recording lint/typecheck commands

## Stage 2 — WordPress Bootstrapping

- [ ] Provide minimal WordPress install scaffold (never committed: core files)
- [ ] Define `wp-config.php` constants (DB, salts, ABSPATH guard)
- [ ] Install & activate: Astra, Elementor Free, Yoast SEO (free), WPForms
      Free or equivalent, Really Simple Security (free, optional)

## Stage 3 — Theme & Global Styles

- [ ] Astra child theme (single `style.css` + minimal `functions.php`)
- [ ] Register Astra color palette and typography matching DESIGN-SYSTEM.md
- [ ] Custom CSS for buttons, headings, footer, mega-menu overrides
- [ ] Enqueue custom JS (mobile menu, mega-menu, accordion, quote form,
      load-more) as one bundled file

## Stage 4 — Header, Footer & Shared Components

- [ ] Header: logo, top nav with mega menus, search, phone, CTA
- [ ] Footer: 4-column layout + socials + back-to-top
- [ ] Global sections: announcement/CTA bar, search overlay, mobile nav

## Stage 5 — Core Pages (Elementor)

- [ ] Home, Commercial Cleaning, Franchise Opportunities, Why Jani-King,
      About Us, Locations, Careers, Get a Quote, FAQ, Google Reviews,
      History, National Accounts, Veterans Get Started, Privacy Policy,
      Terms of Use
- [ ] Service pages: Disinfecting, Green Cleaning, Janitorial, Specialty
      (+10 sub-services), Cleaning Resources
- [ ] Industry pages: 16 industry landing pages
- [ ] Franchise sub-pages: Unit Franchise, Domestic Franchisor,
      International Franchisor, How to Start a Cleaning Business
- [ ] Location pages: 120 city pages (data-driven, template-based)

## Stage 6 — Content & Templates

- [ ] Native WordPress Posts for Blog (archive, single, categories, tags)
- [ ] Native WordPress Pages for News/In-The-Press (archive, single)
- [ ] Elementor Canvas/Full-Width templates where required
- [ ] reusable blocks (icons, stat counters, client logos, FAQ accordions)

## Stage 7 — Forms & Integrations

- [ ] Quote request form (WPForms Free) with regional routing
- [ ] Franchise inquiry form
- [ ] Job application redirect to ADP
- [ ] Newsletter signup (optional, free plugin)

## Stage 8 — Hardening, Performance, QA

- [ ] Caching, image optimisation, core web vitals pass
- [ ] Accessibility audit (a11y) on nav, forms, contrast
- [ ] Responsive QA: desktop, tablet, mobile breakpoints
- [ ] Lint and typecheck scripts; PHP lint via `php -l`

## Stage 9 — Documentation & Handover

- [ ] README with setup instructions
- [ ] AGENTS.md with lint/typecheck commands
- [ ] GitHub Actions for lint/CI (optional)

## Progress Log

| Date | Stage | Note |
|------|-------|------|
| 2026-11-10 | 0 | Audit complete; awaiting approval before Stage 1 |