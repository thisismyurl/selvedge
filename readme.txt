=== Selvedge ===

Contributors: thisismyurl
Tags: portfolio, e-commerce, blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, wide-blocks, translation-ready, sticky-post, grid-layout
Tested up to: 6.7
Requires at least: 6.5
Requires PHP: 7.4
Stable tag: 1.6165.0948
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme for textile arts publishing. Newsreader for editorial authority; Plus Jakarta Sans for the confident studio interface.

== Description ==

Selvedge is a full-site-editing theme for textile arts publishing — the independent weaving studios, natural dye practitioners, and fibre arts editorial platforms that treat craft as scholarship. Named for the self-finished edge of a woven textile: the boundary that holds the structure together.

Newsreader carries editorial authority in the journal feed and case study detail. Plus Jakarta Sans handles the studio interface with clarity. The editorial hero leads without a full-bleed image — media and text side by side, the work and the word in dialogue. The studio journal is the editorial heart of the site; the workshop listing is how the work reaches the world.

Selvedge is best for independent weaving studios, natural-dye practitioners, and small fibre-arts publications putting process work — drafts, swatches, dye notes, workshop listings — in front of readers who treat craft as scholarship.

Five bundled style variations carry the dyer's palette, so the whole site re-skins from the Styles panel without touching a template:

* **Undyed** — the default: warm paper ground, ink text, weld accent.
* **Woad** — a soft blue-grey ground from the woad dye vat.
* **Indigo Vat** — deep indigo on a pale ground, the classic resist-dye contrast.
* **Natural** — muted madder and weld earth tones.
* **Nightweave** — a dark mode for low-light reading, with raised contrast.

The footer copyright and credit lines use WordPress Block Bindings (6.5+) so the year stays current and the credit is removable without editing a template. The process-notation pattern ships as self-contained static content; it needs no plugin to work.

Built for accessibility: a keyboard-reachable skip link, visible focus outlines, a logical heading order with one h1 per template, semantic landmarks (header, nav, main, footer), and motion that respects a reduce-motion preference. Self-hosted SIL OFL fonts that never call an external service, RTL-ready via CSS logical properties, zero plugin dependencies. WooCommerce compatible for workshop ticket sales.

== Accessibility ==

Selvedge is built toward WCAG 2.2 AA. Verifiable in the theme:

* A keyboard-reachable "Skip to content" link targeting the `#main-content` landmark on every template (parts/header.html).
* Visible focus outlines on interactive elements (not removed without replacement).
* One h1 per template, with explicit `"level":1` on every query-title and heading block; the front page sources its single h1 from the editorial-hero pattern.
* Semantic landmarks: `<header>`, `<nav>`, `<main id="main-content">`, `<footer>` on every template.
* Directional CSS uses logical properties (margin-inline, padding-inline), which WordPress maps for RTL locales.
* A `prefers-reduced-motion` guard on theme transitions.
* Contrast is constrained at the palette level: the weld accent (#B5660A) measures 3.8:1, which clears WCAG 1.4.3 for large text only, so the theme applies it to heading-size type and never to body copy (enforced with a comment in inc/skin.php and skin.css). Body text and UI colours target the 4.5:1 normal-text threshold.
* Zero front-end JavaScript, so there is no script-dependent interaction to fail keyboard or assistive-technology users.

This is the theme's structural floor, not an audited certification. Author content and images must hold the same bar (colour contrast, alt text, link purpose) for a finished site to meet WCAG 2.2 AA.

== Right-to-left (RTL) ==

Selvedge styles directional spacing with CSS logical properties
(margin-inline, padding-inline, inset-inline) rather than hardcoded left/right
values, so WordPress mirrors the layout for RTL locales automatically. This is
verifiable in the stylesheets, not a tested-locale claim. Caveat: automatic
block-level direction handling is most reliable on WordPress 6.7+; on the
minimum supported 6.5 some block-level mirroring may differ. If RTL rendering
looks wrong, confirm WordPress 6.7+ and current-browser logical-property
support before filing an issue.

**Bundled patterns:** editorial-hero (media-text, no full-bleed), studio-journal (archive query), process-notation, workshop-listing, material-archive (gallery), pull-quote-thread, maker-portrait, subscribe-cta, navigation-band, and studio-footer.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Selvedge" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Selvedge: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is the companion plugin for process notation? =

The process-notation pattern is complete on its own — it ships static demo content and needs no plugin. An optional companion plugin (colophon-selvedge-studio, available separately) can register a Process Steps custom post type with structured metadata for studios that want to manage process steps as content; the theme never depends on it.

= Does the theme require WooCommerce? =

No. WooCommerce is supported for workshop ticket sales and studio shop listings, but the theme works fully without it.

= Are the fonts included? =

Newsreader and Plus Jakarta Sans are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. They never phone home to Google or any external service.

= Why is the editorial hero a media-text block rather than full-bleed? =

In textile arts publishing, the work and the word have equal weight. Full-bleed imagery treats photography as decoration; the media-text split treats it as argument. The image earns its column; the editorial copy earns the one beside it.

== For developers ==

Selvedge is built on the Colophon core and exposes a small set of filters. All
hook names are prefixed with the theme slug. Examples use PHP 7.4-compatible
syntax (no arrow functions, no PHP 8 features).

= selvedge/developer_guide_url =

Filters the URL of the "developer guide" link on the Appearance → Selvedge:
Get started screen. Default: `https://thisismyurl.com/colophon`. Point it at
your own documentation when you build a theme on this core.

`
add_filter( 'selvedge/developer_guide_url', function ( $url ) {
	return 'https://example.com/my-theme/docs/';
} );
`

= selvedge/copyright_date_format =

Filters the PHP date format used for the footer copyright year. Default: `Y`
(four-digit year). Return any PHP date-format string, or a literal such as a
year range. The value is passed to current_time(), so it follows the site's
timezone.

`
add_filter( 'selvedge/copyright_date_format', function ( $format ) {
	return 'Y'; // four-digit year; or return a literal like "2022-2026"
} );
`

= selvedge/copyright_text =

Filters the fully composed copyright sentence (after the year and site name are
merged). Return any string to replace the line entirely.

`
add_filter( 'selvedge/copyright_text', function ( $copyright ) {
	return 'Copyright My Studio.';
} );
`

= selvedge/footer_credit =

Filters the "Built with the {Theme} theme." footer credit. Return an empty
string to remove it. The value is sanitized with wp_kses to a minimal anchor
allow-list.

`
add_filter( 'selvedge/footer_credit', function ( $credit ) {
	return ''; // remove the credit line
} );
`

= selvedge/get_started_content =

Filters the whole Get-started page content array (headings, steps, credit, and
developer-guide keys). See get_started_content() in inc/admin.php for the array
shape.

The footer copyright and credit lines are rendered through WordPress block
bindings, which require WordPress 6.5 or later. On earlier versions the theme
degrades cleanly: the bound paragraphs render empty rather than erroring.

== Changelog ==

= 1.6165.0948 =
Accessibility (WCAG 1.4.3 contrast — exhaustive audit across all style variations):
* Recomputed every text colour against its actual rendered background in the
  default palette and all five style variations (Undyed, Woad, Indigo Vat,
  Natural, Nightweave), using relative-luminance ratios and alpha compositing.
  The earlier review checked the default palette only and missed a class of
  variation-specific failures where the dyer's palette inverts the neutral scale.
* Fixed the dark chrome bands (footer template part, subscribe CTA, studio
  footer pattern). They were bound to the inverting "indigo" accent with
  hardcoded white text, so in Woad, Indigo Vat, Natural, and Nightweave the
  accent became a light tone and white-on-light collapsed to 2.3-3.5:1. The
  bands now bind to four edition-stable palette tokens — footer-bg (deep
  ground), footer-fg (light text), footer-meta (muted light), footer-accent
  (large/UI only) — which hold 6.9:1 or better in every variation.
* Retuned ink-muted and the indigo accent in the default palette and every
  variation so post meta, eyebrows, links, and post terms clear 4.5:1 on the
  ground and ground-mid surfaces they render on (several previously landed at
  3.5-4.4:1 on tinted bands and dark grounds).
* Bound the skip link to the edition-stable footer pair instead of the indigo
  accent; in the dark variations the accent inverted to a light tone and the
  white skip-link text dropped to ~1.7:1. It now holds 13:1 or better everywhere.
* Workshop-card hover now lifts to ground-deep rather than indigo-light, which in
  the light editions was a pale tint that collapsed the card's indigo eyebrow to
  3.2:1. Every card surface now clears its floor in all variations.
* Default button hover now uses the stable footer pair rather than the inverting
  ink token, so the hover state stays readable when ink is a light colour in the
  dark variations. Added an explicit dark-text button for Woad (its accent is a
  light cyan that needs dark, not white, button text).
* Woad's ground-mid and ground-deep band surfaces are now dark to match its dark
  ground; they were inherited light swatch tones that would have inverted under
  Woad's light text.

Cleanup and documentation honesty:
* Removed the dead github-updater filter and its require guard (the referenced
  inc/github-updater.php is not part of the distributed theme). Self-update is
  plugin territory and has no place in a directory theme.
* Removed the unused inc/cli.php require guard (the file is not distributed).
  honest "structural floor, not an audited certification" language in the body.
* Corrected the Block Bindings description: the bindings the theme actually ships
  are the footer copyright and credit lines (WordPress 6.5+). The process-notation
  pattern is self-contained static content and uses no bindings; the readme no
  longer claims it pulls plugin data through bindings.
* Listed all ten bundled patterns in the readme so the list reconciles with disk.
* Bound the editor-style eyebrow and annotation mirrors to the ink-muted token
  instead of a hardcoded hex, so the editor preview tracks the active variation.

= 1.6163.2237 =
Fonts:
* Fixed the Plus Jakarta Sans @font-face sources. theme.json pointed three
  static weights (-400/-500/-600.woff2) at files that were never shipped, so
  every interface-font surface fired three 404s and fell back to system
  sans-serif. The two declarations now resolve the 400/500/600 weights from the
  shipped variable WOFF2 (a 200–800 axis upright face plus its italic), so the
  interface renders as designed with no missing-file requests.

Internationalization:
* Removed hardcoded English from the search, post-excerpt, and
  post-navigation-link block attributes in the templates (the "Search" label and
  button, "Read more", and the "Previous"/"Next" navigation labels). The blocks
  now inherit core's already-translated defaults, so non-English sites no longer
  see English UI chrome.
* Wrapped all visitor-facing demo prose in the bundled patterns
  (editorial-hero, studio-journal, workshop-listing, process-notation,
  material-archive, pull-quote-thread, maker-portrait, subscribe-cta,
  navigation-band, studio-footer) in the selvedge text domain via esc_html_e()
  / esc_attr_e(), and extracted every string into languages/selvedge.pot. The
  pattern content is now fully translatable.

Tooling:
* Aligned colophon.json's version with inc/bootstrap.php (the single runtime
  source of truth). The file is distignored and never ships, but the drift would
  have confused future core syncs.

Accessibility (WCAG 2.1 1.3.1):
* The archive and search titles are now explicit h1 headings; the index
  template gains an h1 page heading; the blank-canvas page template gains an
  empty, editor-fillable h1. (Front page and 404 already had one.)
* Documented the front page's pattern-sourced h1 with a template comment so the
  heading origin is unambiguous.

Internationalization:
* Removed the last hardcoded English visitor prose from the templates: the
  search "Search Results" eyebrow (the query-title h1 already labels the page),
  the archive and index no-results paragraphs (replaced with a search form as
  the next action), and the 404 home-link label (the header already links home,
  so the in-body link is dropped). No template now ships untranslatable prose,
  matching the readme's translation-ready claim.
* Removed hardcoded English visitor prose from the 404 and search no-results
  states; both now lead with the heading and a search form, so non-English
  sites no longer see untranslated explanations.

Template structure:
* page-blank.html now includes the footer template part, so the blank-canvas
  template keeps a navigation landmark (gate Check 13). The deliberate header
  omission is documented against the structural-variation exception clause.

Documentation honesty:
* Aligned the Get-started "Optimize" copy with the readme: "built toward WCAG
  2.2 AA … structural floor, not an audited certification" rather than a flat
  "it meets WCAG 2.2 AA" claim.
* Documented the five bundled style variations (Undyed, Woad, Indigo Vat,
  Natural, Nightweave) and the weld (#B5660A, 3.8:1 large-text-only) contrast
  constraint in the readme.
* Lowered "Tested up to" from a not-yet-released WordPress version to 6.7.
* Footer copyright and credit lines now render through the selvedge/copyright
  and selvedge/footer-credit block-bindings sources instead of hardcoded text,
  removing the last untranslatable strings and the static "[year]" placeholder.

Block styles:
* Registered the eyebrow label, annotation note, and specimen display block
  styles that the editorial-hero, footer, subscribe, archive, index, and 404
  surfaces use, and added their front-end CSS so they render styled rather than
  as bare paragraphs.
* Replaced the stale `is-style-lig-overline` class (a leftover from the parent
  core) with the registered `is-style-selvedge-eyebrow` style across the
  editorial-hero, studio-footer, and subscribe-cta patterns.

Internationalization:
* Moved the "Skip to content" link out of the header template part and into a
  wp_body_open render in inc/setup.php, so its label is translatable and ships
  in the POT instead of leaving non-English sites with English chrome.
* Regenerated languages/selvedge.pot from this build: corrected the theme
  description, the registered block-style labels, and the project version.

Documentation:
* Reframed the WCAG 2.2 AA description as evidence-backed guidance, with an
  Accessibility section listing the verifiable structural features.
* Added a For-developers section documenting the public filters
  (selvedge/developer_guide_url, copyright_date_format, copyright_text,
  footer_credit, get_started_content) with PHP 7.4-compatible examples.
* Added a Right-to-left section documenting the logical-properties approach and
  its WordPress 6.7+ caveat.
* Lowered the PHP requirement to 7.4 across style.css, the readme header, and
  this changelog: the code uses no PHP 8.0/8.1-only syntax, so an 8.1 floor
  needlessly narrowed installs.
* Synced the theme version across style.css, readme.txt, and inc/bootstrap.php.

Earlier in this cycle:
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* oEmbed content width now reads theme.json contentSize (pixel-validated, 720px
  fallback) instead of a hardcoded literal.
* The Get started developer-guide URL is filterable via selvedge/developer_guide_url.

Requirements:
* Requires PHP 7.4+ and WordPress 6.5+.
* Block bindings (footer copyright and credit) require WordPress 6.5+.

= 1.158.1749 =
* Initial release.
* Patterns: editorial-hero, studio-journal, process-notation, workshop-listing, material-archive, pull-quote-thread, maker-portrait.
* Templates: front-page, index, single, archive, page, page-wide, page-blank, search, 404.
* Block styles: selvedge-notation, selvedge-colophon, selvedge-swatch, selvedge-lead, selvedge-draft-notation.

== Credits ==

= Newsreader =
* Copyright 2020 Production Type (https://github.com/productiontype/Newsreader)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/productiontype/Newsreader

= Plus Jakarta Sans =
* Copyright 2020 The Plus Jakarta Sans Project Authors (https://github.com/tokotype/PlusJakartaSans)
* License: SIL OFL 1.1 (https://openfontlicense.org/open-font-license-official-text/)
* Source: https://github.com/tokotype/PlusJakartaSans

== License ==

Selvedge WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

== Copyright ==

Selvedge WordPress Theme, Copyright 2026 Christopher Ross
Selvedge is distributed under the terms of the GNU GPL.
