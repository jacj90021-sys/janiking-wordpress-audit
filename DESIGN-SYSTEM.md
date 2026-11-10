# DESIGN-SYSTEM.md — Observed Visual System (Jani-King)

Source: https://www.janiking.com/ (audited 2026-11-10)
Values marked **(est.)** are visual estimates, not measured from computed styles.
Values marked **(obs.)** were observed directly on the rendered pages.

## Brand Identity

- Brand name: Jani-King
- Logo: "Jani-King" wordmark; dark charcoal/near-black "Jani-" with a white crown
  glyph over the "i", bold white "KING" on dark background
- Reverse (white) logo used in footer on dark background
- Logo images served from `/wp-content/uploads/elementor/thumbs/` (Elementor
  thumbs), e.g. `LOGO-JK-*.png`

## Brand Colors

| Color | Use | Value | Source |
|-------|-----|-------|--------|
| Brand Orange | Primary accent, CTAs, checkmarks, icons | `#FF5A1F` **(est.)** | `icon-CircleCheck-Orange.webp`, `btn-*` buttons |
| Dark / Near-Black | Logo wordmark "Jani-", headings, text | `#1A1A1F` **(est.)** | logo image, body text |
| White | Backgrounds, logo "KING", button text | `#FFFFFF` | logo image, buttons |
| Dark Teal | Secondary check marks ("CircleCheck-DarkTeal") | `#1F6E7E` **(est.)** | `icon-CircleCheck-DarkTeal.webp` |
| Light Gray | Section backgrounds, card fills | `#F5F6F7` **(est.)** | page backgrounds |
| Mid Gray | Body copy | `#4A4A4A` **(est.)** | body copy |

**Note:** No color swatch file exists in GitHub; these are observed from rendered
pages and single-color icons. Confirm exact hex via browser DevTools before
implementation.

## Typography

| Element | Font | Weight | Size | Line Height | Source |
|---------|------|--------|------|-------------|--------|
| Body | Sans-serif (est. Inter / system-ui) | 400 | 16px | 1.6 **(est.)** | body copy |
| H1 | Sans-serif | 700 | 48px **(est.)** | 1.2 **(est.)** | page headings |
| H2 | Sans-serif | 700 | 36px **(est.)** | 1.2 **(est.)** | section headings |
| H3 | Sans-serif | 700 | 28px **(est.)** | 1.2 **(est.)** | sub-headings |
| H4 | Sans-serif | 600 | 22px **(est.)** | 1.3 **(est.)** | minor headings |
| CTA button | Sans-serif | 600–700 | 14–16px **(est.)** | — | "GET A QUOTE", "GET STARTED", "LEARN MORE" |

- Font stack not directly measurable from rendered output; Astra default is
  typically a system-ui/Inter stack. Use a free Google Font (e.g. Inter or Poppins)
  or system fonts to keep dependency-free.
- All typography values marked **(est.)** — verify with DevTools.

## Heading Scale

- H1: page title (single per page), large, bold
- H2: major section headings
- H3: subsection headings
- H4: minor callouts
- No H5/H6 observed in primary content

## Content Widths & Grid

| Element | Value | Source |
|---------|-------|--------|
| Container max width | `1200px` **(est.)** | centered page content |
| Page gutter / padding | `20–30px` per side **(est.)** | desktop pages |
| Two-column section gap | `30–40px` **(est.)** | service/feature grids |
| Four-column logo grid | 4 columns, equal width **(est.)** | "Our Proud Partnerships & Clients" |
| Hero banner | full-width, 16:9 **(est.)** | homepage banners |

## Spacing System

| Use | Value | Source |
|-----|-------|--------|
| Section vertical padding | `60–80px` **(est.)** | desktop page sections |
| Component gap | `24–32px` **(est.)** | cards, icons, logos |
| Button padding | `14px 28px` **(est.)** | CTA buttons |
| All spacing marked **(est.)** — verify with DevTools. |

## Button Styles

| Button | Style | Notes |
|--------|-------|-------|
| Primary CTA ("GET A QUOTE", "GET STARTED") | Solid brand orange fill, white text, rounded corners **(est.)** | header & hero |
| Secondary CTA ("LEARN MORE", "READ MORE") | Outline or plain link, dark text **(est.)** | sections, cards |
| Navigation toggle | Hamburger **(est.)** | mobile |

- All buttons are full-width on mobile, auto-width on desktop.

## Border Radii

| Element | Value | Source |
|---------|-------|--------|
| Buttons | `4–6px` **(est.)** | CTA buttons |
| Cards | `8–12px` **(est.)** | service cards, stat cards |
| Images (thumbnails) | square, no radius **(obs.)** | blog/archive thumbnails |
| Icons | square **(obs.)** | service icons |

## Image Ratios

| Use | Ratio | Source |
|-----|-------|--------|
| Hero banner | 16:9 **(est.)** | homepage banners |
| Blog archive thumbnail | 3:1 (wide, ~768x250) **(obs.)** | blog list |
| Service icon | 1:1 square **(obs.)** | `icon-*.png` |
| Client logo | variable width, square-ish canvas **(obs.)** | `logo-*.png`, `logo-*.webp` |
| Checkmark icon | 1:1 circle **(obs.)** | `icon-CircleCheck-Orange.webp` |
| Elementor thumbs | various, stored under `/elementor/thumbs/` | all Elementor assets |

## Layouts by Breakpoint

| Breakpoint | Behavior |
|------------|----------|
| Desktop (>1024px) | Full-width header, mega menu columns, multi-column grids, side-by-side CTAs |
| Tablet (~768–1024px) | Stacked grids (2 columns), simplified mega menu, header still full-width |
| Mobile (<768px) | Single column, hamburger menu, stacked CTAs, logo left-aligned, phone/CTA top-right |

## Shared Components (observed across pages)

1. **Header** — logo (left), main nav with mega menus, search icon, phone
   ("1 (800) JANIKING"), "GET A QUOTE" CTA (right)
2. **Mega Menu** — "COMMERCIAL CLEANING" (Cleaning Services + Industries), "FRANCHISING"
   (Unit/Domestic/International), "WHY JANI-KING?", "LOCATIONS", "CAREERS"
3. **Footer** — 4 columns (Services, About Jani-King, secondary links, socials),
   copyright, corporate address, phone, social icons
4. **Hero banner** — image + headline + subhead + primary CTA
5. **Stat counter** — large number + label (e.g. "120 Support Offices",
   "10 Countries", "6,900 Unit Franchises", "9 Year Avg. Customer Retention Rate")
6. **Service cards** — icon + title + description + "LEARN MORE" link
7. **Industry cards** — icon + name link (16 industries)
8. **Client/partner logo grid** — 4-column array of brand logos
9. **FAQ accordion** — question/answer pairs (commercial cleaning + per-industry)
10. **Why Jani-King checkmarks** — orange checkmark + benefit text (6 items)
11. **In-House vs Outsourced comparison** — two-column table with checkmarks
12. **Quote form** — CTA banner + form section ("GET A FREE Cleaning Services Quote")
13. **Social icons** — Facebook, X/Twitter, Instagram, LinkedIn, YouTube
14. **"Also of Interest"** — related link list at bottom of pages
15. **"Also of Interest"** — related link list at bottom of pages

## Responsive Behavior Observations

- Mega menu collapses to accordion-style mobile menu
- Hero images stack vertically on mobile
- 4-column logo grid becomes 2-column tablet / 1-column mobile
- Buttons become full-width on mobile
- Phone number becomes `tel:` link on mobile

## Accessibility Notes

- Orange-on-white contrast appears sufficient for small text; orange-on-dark may
  need verification (a11y audit planned in Stage 8).
- Mega menu uses keyboard-navigable structure **(est.)** — verify.
