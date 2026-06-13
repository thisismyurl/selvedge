=== Selvedge ===

Contributors: thisismyurl
Tags: portfolio, e-commerce, blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, accessibility-ready, wide-blocks, translation-ready, sticky-post, grid-layout
Tested up to: 7.0
Requires at least: 6.5
Requires PHP: 8.1
Stable tag: 1.6163.2237
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A WordPress theme for textile arts publishing. Newsreader for editorial authority; Plus Jakarta Sans for the confident studio interface.

== Description ==

Selvedge is a full-site-editing theme for textile arts publishing — the independent weaving studios, natural dye practitioners, and fibre arts editorial platforms that treat craft as scholarship. Named for the self-finished edge of a woven textile: the boundary that holds the structure together.

Newsreader carries editorial authority in the journal feed and case study detail. Plus Jakarta Sans handles the studio interface with clarity. The editorial hero leads without a full-bleed image — media and text side by side, the work and the word in dialogue. The studio journal is the editorial heart of the site; the workshop listing is how the work reaches the world.

Block Bindings connect the process notation pattern to a companion plugin for rich process step metadata. The theme is complete without the plugin — the bindings are progressively enhanced.

WCAG 2.2 AA accessible, Core Web Vitals optimised, self-hosted SIL OFL fonts, RTL-ready via CSS logical properties, zero plugin dependencies. WooCommerce compatible for workshop ticket sales.

**Signature patterns:** editorial-hero (media-text, no full-bleed), studio-journal (archive query), process-notation, workshop-listing, material-archive (gallery), pull-quote-thread, maker-portrait.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Selvedge" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Selvedge: Get started for setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is the companion plugin for process notation? =

The optional companion plugin (colophon-selvedge-studio, available separately) registers a Process Steps custom post type with structured metadata fields. The process-notation block pattern uses Block Bindings to pull that data in. Without the plugin, the pattern displays static placeholder content — the theme works fully without it.

= Does the theme require WooCommerce? =

No. WooCommerce is supported for workshop ticket sales and studio shop listings, but the theme works fully without it.

= Are the fonts included? =

Newsreader and Plus Jakarta Sans are bundled as WOFF2 files in assets/fonts/ and loaded via theme.json @font-face declarations. They never phone home to Google or any external service.

= Why is the editorial hero a media-text block rather than full-bleed? =

In textile arts publishing, the work and the word have equal weight. Full-bleed imagery treats photography as decoration; the media-text split treats it as argument. The image earns its column; the editorial copy earns the one beside it.

== Changelog ==

= 1.6163.2237 =
* Accessibility (WCAG 2.1 1.3.1): the archive and search titles are now explicit
  h1 headings; the index template gains an h1 page heading; the blank-canvas page
  template gains an empty, editor-fillable h1. (Front page and 404 already had one.)
* Hardened comment-form attribute injection: a guarded preg_replace (single
  replacement, null-check, no-match fallback) replaces a naive str_replace that
  could double-inject or mangle markup.
* oEmbed content width now reads theme.json contentSize (pixel-validated, 720px
  fallback) instead of a hardcoded literal.
* The Get started developer-guide URL is filterable via selvedge/developer_guide_url.

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
