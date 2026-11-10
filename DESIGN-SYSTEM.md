# DESIGN-SYSTEM.md — Observed Visual System (Jani-King EXACT Reference)

Source: https://www.janiking.com/ (live inspection 2026-11-10)
Theme: consulting (parent) + consulting-child (child theme), Bootstrap 4.0.2,
Elementor Pro.
All values observed from live rendered HTML/CSS unless marked **(est.)**.

## Brand Identity

- Brand name: Jani-King
- Logo: `JK-Logo-REV.png` (800x420) + Elementor thumb `LOGO-JK-*.png`
- Logo URL: `https://www.janiking.com/wp-content/uploads/2023/11/JK-Logo-REV.png`
- Logo markup: `<img src=".../LOGO-JK-qvbglpki3plhidahl8kkaxwzc0esp14g6ybs7uw7gs.png" title="Jani-King Logo" alt="Jani-King Logo">`
- Schema logo: `JK_Logo_398x208.png` (398x208)

## Brand Colors (measured from live site CSS + assets)

| Color | Use | Value | Source |
|-------|-----|-------|--------|
| Base / Dark | Header buttons, base color, text | `#2c3e50` **(measured)** | `:root --con_base_color` |
| Secondary | Hover backgrounds, light panels | `#efefef` **(measured)** | `:root --con_secondary_color` |
| Brand Orange | CTAs, checkmarks, icons | `#EE5513` **(measured)** | `icon-CircleCheck-Orange.webp` (PIL sampled) |
| Black | Text, headings | `#000000` **(measured)** | `JK-Logo-REV.png`, WP color presets |
| White | Backgrounds, button text | `#FFFFFF` **(measured)** | WP color presets, buttons |

## Typography

Fonts loaded on live site:
- Google Fonts: `Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic`
- TypeKit: `https://use.typekit.net/lba6xrs.css`
- Theme font vars: `--con_primary_font_family: Poppins`, `--con_secondary_font_family: Poppins`

| Element | Font | Weight | Size | Source |
|---------|------|--------|------|--------|
| Body | Poppins | 400 | 1rem | body copy |
| H1 | Poppins | 700 | 2.5rem | page headings |
| H2 | Poppins | 700 | 2rem | section headings |
| H3 | Poppins | 700 | 1.5rem | sub-headings |
| H4 | Poppins | 600 | 1.25rem | minor headings |
| CTA button | Poppins | 700 | 1rem | "Learn More", "Get a Free Quote" |
| Mega menu | Poppins | 600 | 1rem | nav items |
| Mega menu sub-items | Poppins | 400 | 0.875rem | dropdown links |

## Animations & Motion

- Header sticky: `position: sticky; top: 0; animation: slideInDown` on scroll
- Mega menu: hover-reveal dropdown (open_on: hover), caret-up/caret-down toggle
- Stats: `elementor-animation-pulse-grow` (scale pulse, 2s infinite)
- Slides widget: autoplay, transition slide, speed 5000ms
- FAQ accordion: max-height toggle
- Mobile menu: hamburger toggle (burger icon)

## Layout & Spacing

| Element | Value | Source |
|---------|-------|--------|
| Container max width | 1200px | elementor-section-boxed |
| Header section | boxed, content-middle | elementor-section-height-default |
| Mega menu columns | full-width dropdown, multi-column | e-con-full e-flex containers |
| Hero banner | full-width, two-column image split | bnr-HomepageCommercial + bnr-HomepageFranchise-1 |
| Mobile hero | BNR-Homepage-Mobile2-1-768x512.webp | 768x512 |
| Stat cards | equal height, flex containers | premium-equal-height-yes |
| Service section | two columns | cleaning services + franchise opportunities |
| Why Jani-King icons | four columns | 4 icon + heading pairs |
| Client logo grid | multi-column | logos array |

## Button Styles

| Button | Style | Notes |
|--------|-------|-------|
| Primary CTA | Solid `#2c3e50` fill, white text | header & hero buttons |
| Primary CTA hover | `#efefef` background, `#2c3e50` text | elementor-button:hover |
| Secondary ("Learn More") | elementor-button-link elementor-size-sm | dark text link button |
| Navigation | text-dark links, hover color changes | mega-menu items |

## Border Radii

| Element | Value |
|---------|-------|
| Header buttons | `50px 50px 50px 50px` (fully rounded) |
| Buttons | 4px |
| Cards | 4px |

## Image Assets (live site)

| Asset | URL | Use |
|-------|-----|-----|
| Logo thumb | `.../elementor/thumbs/LOGO-JK-qvbglpki3plhidahl8kkaxwzc0esp14g6ybs7uw7gs.png` | Header logo |
| Logo full | `.../2023/11/JK-Logo-REV.png` (800x420) | Schema/logo |
| Hero left | `.../2024/05/bnr-HomepageCommercial.webp` | Hero left image |
| Hero right | `.../2024/05/bnr-HomepageFranchise-1.webp` | Hero right image |
| Hero mobile | `.../2024/05/BNR-Homepage-Mobile2-1-768x512.webp` | Mobile hero |
| Checkmark orange | `.../2024/07/icon-CircleCheck-Orange.webp` | Checkmark icons |
| Service icon SpillCleanup | `.../icon-SpillCleanup-*.png` | Service icon |
| Service icon Disinfecting | `.../icon-Disinfecting-*.png` | Service icon |
| Service icon EPProducts | `.../icon-EPProducts-*.png` | Service icon |
| Service icon Extraction | `.../icon-Extraction-*.png` | Service icon |
| Retention banner | `.../2025/10/bnr-CustomerRetention2.png` | Customer retention section |
| Blog banners | `.../2026/10/Banner-Templet-{15,51,52}.png` | Blog section banners |
| CTAs | `btn-CleaningResource.webp`, `btn-7StepsFranchiseRoadmap.webp` | CTA buttons |

## Homepage Sections (exact order)

1. **Header** — logo (left), mega-menu nav (center), search icon + phone/CTA (right)
2. **Hero** — two-column image split (Commercial + Franchise), CTA buttons overlay
3. **Stat counters** — 120 Support Offices, 10 Countries, 6,900 Unit Franchises, 9 Year Avg Retention
4. **Services** — two columns: Commercial cleaning services + Franchise opportunities (each with image, heading, text, Learn More button)
5. **FAQ** — "Frequently Asked Questions" heading
6. **Why Jani-King** — "A dependable and well-established franchise brand with over 56 years of trust." + 4 icon/heading pairs (Spill Cleanup, Disinfecting, EP Products, Extraction) + "Learn More About Our Cleaning Services" button
7. **Customer Retention** — banner image + "9 Year Avg. Customer Retention Rate" + "vs. other competitive commercial cleaning companies (1-yr. avg.)"
8. **Blog** — premium blog grid with 3 banner images
9. **CTA** — button section

## Mega Menu Structure (exact)

- COMMERCIAL CLEANING → Cleaning Services (Commercial Cleaning, Disinfecting, Green Cleaning, Janitorial, Specialty) + Industries We Serve (16 industries in 2 columns) + Get Jani-King Cleaning Checklists (Learn More button)
- FRANCHISING → Unit Franchising (Unit Franchise, For Veterans) + Regional Franchising (Domestic Franchisor, International Franchisor) + How To Start A Cleaning Business (Learn More button)
- WHY JANI-KING? (single link)
- LOCATIONS (single link)
- CAREERS (single link)

## Responsive Behavior

- Desktop (>1024px): full-width header, mega menu columns, multi-column grids
- Tablet (~768–1024px): breakpoint_selector: tablet, simplified menu
- Mobile (<768px): hamburger menu (burger toggle), stacked content

## Shared Components

1. Header — logo, mega-menu, search icon (full_screen skin), phone/CTA button
2. Mega Menu — COMMERCIAL CLEANING / FRANCHISING / WHY JANI-KING? / LOCATIONS / CAREERS
3. Hero — two image columns + CTA buttons
4. Stat counter — number + label (equal height flex)
5. Service cards — image + heading + text + Learn More button
6. FAQ — question/answer
7. Why Jani-King checkmarks — orange checkmark + heading pairs
8. Customer retention — banner + stat
9. Blog grid — premium-addon-blog with 3 columns
10. Footer — logo, social icons, mega-menu (Blog/News/About Us), search form
