# documentation/FEATURES.md — Product Feature List

Source: Jani-King reference audit + ThemeForest competitor benchmarks +
Envato requirements (audited 2026-11-10).

## Feature categories

### Theme (standalone WordPress theme)

| Feature | Description | Status |
|---------|-------------|--------|
| Standalone theme | Works as normal WP theme without Elementor or companion plugin | Planned |
| Template hierarchy | index, page, single, archive, search, 404 templates | Planned |
| Header presentation | Logo, nav, phone, CTA | Planned |
| Footer presentation | Multi-column, socials, copyright, address | Planned |
| Homepage layout | Hero, stats, services, FAQ, client logos, video | Planned |
| Page templates | Default, full-width, canvas, landing | Planned |
| Blog archive | Posts listing with categories/tags | Planned |
| Single posts | Article layout with navigation | Planned |
| Search results | Styled search page | Planned |
| Reusable template parts | Header, footer, section parts | Planned |
| Navigation & menus | Mega menus, dropdowns, mobile menu | Planned |
| Sidebars & widget areas | Sidebar and footer widget areas | Planned |
| Typography & global styling | Customizer color/typography controls | Planned |
| Responsive layouts | Desktop/tablet/mobile breakpoints | Planned |
| Gutenberg compatibility | Block editor + editor styles | Planned |
| WordPress editor styles | Editor CSS matching frontend | Planned |
| WooCommerce styling | Shop, product, cart, checkout, account | Planned |
| Translation readiness | .pot file, text domain, i18n | Planned |
| RTL readiness | RTL stylesheet | Planned |
| Child theme support | get_theme_file_uri/path, child theme functions | Planned |

### Companion core plugin

| Feature | Description | Status |
|---------|-------------|--------|
| Custom post types | Services, Industries, Testimonials, Team, Projects | Planned |
| Custom taxonomies | Service categories, industry categories, blog categories | Planned |
| Custom fields | Design-related meta boxes where justified | Planned |
| Shortcodes | Where appropriate for reusable content | Planned |
| Theme-specific functionality | Custom Elementor widget registration | Planned |
| Admin functionality | Theme options integration, demo import hooks | Planned |
| Demo import integration | WP Filesystem-based importer | Planned |

### Elementor Free integration

| Feature | Description | Status |
|---------|-------------|--------|
| Custom widgets | Hero, Services, Industry cards, Icon boxes, Testimonials, Team, Statistics, Pricing, FAQs, Galleries, CTA, Blog grids, Project grids, Contact/quote sections | Planned |
| Responsive widgets | Desktop/tablet/mobile controls per widget | Planned |
| Accessible widgets | Keyboard-navigable, ARIA where needed | Planned |
| Customizable widgets | Controls matching design system | Planned |
| No Elementor Pro requirement | All core functionality works with Elementor Free | Planned |

### Header/footer system

| Feature | Description | Status |
|---------|-------------|--------|
| Multiple header layouts | Default, sticky, transparent variants | Planned |
| Multiple footer layouts | Multi-column variants | Planned |
| Logo & site identity | Upload logo, site title, tagline | Planned |
| Desktop navigation | Mega menus, dropdowns | Planned |
| Mobile navigation | Hamburger, accordion menu | Planned |
| Sticky header | Sticky on scroll option | Planned |
| CTA buttons | Phone, quote CTA in header | Planned |
| Footer columns | Configurable column count | Planned |
| Responsive controls | Per-device visibility and styling | Planned |

### Theme settings (Customizer)

| Feature | Description | Status |
|---------|-------------|--------|
| Global colors | Brand primary, secondary, text, background | Planned |
| Typography | Font family, weight, size for headings/body | Planned |
| Layout widths | Container max-width | Planned |
| Header settings | Logo, nav, sticky, CTA | Planned |
| Footer settings | Columns, socials, copyright | Planned |
| Button styles | Primary/secondary button styling | Planned |
| Blog layouts | Archive and single post layouts | Planned |
| Sidebars | Sidebar position and visibility | Planned |
| Sanitize/validate/escape | All settings properly secured | Planned |

### Demo importer

| Feature | Description | Status |
|---------|-------------|--------|
| Plugin requirements notice | Show required/recommended plugins | Planned |
| Plugin selection | Choose which plugins to install | Planned |
| Demo selection | Choose which demo to import | Planned |
| Content import | Pages, posts, menus, widgets, settings | Planned |
| Explicit confirmation | Click-to-confirm before import | Planned |
| Overwrite warning | Warn before overwriting existing content | Planned |
| Licensed assets | Appropriately licensed demo images | Planned |

### WooCommerce

| Feature | Description | Status |
|---------|-------------|--------|
| Shop archive | Product listing page | Planned |
| Product details | Single product page | Planned |
| Product categories | Category archives | Planned |
| Product galleries | Image galleries | Planned |
| Cart | Shopping cart page | Planned |
| Checkout | Checkout page | Planned |
| Account pages | My account page | Planned |
| Responsive product layouts | Mobile/tablet/desktop product layouts | Planned |
| Full workflow test | Test complete shopping workflow | Planned |

## Distinction: advertised vs verified vs confirmed

Per the master prompt, we distinguish:
- **Advertised features**: What competitors claim on product listings.
- **Verified in live demo**: What we observed in live previews.
- **Confirmed by documentation**: What official documentation confirms.
- **Internal implementation details**: What cannot be verified externally.

Our FEATURES.md lists planned features based on the benchmark standard. Verification
against actual implementation happens in Phase 7 (QA).

## Features deliberately NOT included

- Premium plugin bundling (Elementor Pro, ACF Pro, Slider Revolution,
  WPBakery, Booked Appointment) — not permitted by Envato.
- Requiring Elementor Pro — violates our Elementor Free constraint.
- Redundant/inflated widget counts.
- Headless/React/Next.js/Vite architecture — prohibited.
- Protected Jani-King logos/trademarks/photographs — licensed replacements only.
