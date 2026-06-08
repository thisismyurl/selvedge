<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Selvedge's PHP-side personality: image crops for editorial and materials
 * layout, the LCP font preload (Newsreader variable paints every h1 in the
 * editorial hero), the block styles the journal and studio patterns depend on,
 * and the pattern category registrations.
 *
 * The [CORE] inc/ files stay portable because none of Selvedge's specifics
 * leak into them. That separation is the whole point of the CORE/SKIN split.
 *
 * Pillar 8 (Kodawari): the LCP preload is the Newsreader variable upright —
 * the single file covering all weights in the critical render path.
 *
 * @package selvedge
 */

namespace Selvedge;

defined( 'ABSPATH' ) || exit;

// Opt this theme into GitHub-release self-updates (see inc/github-updater.php).
add_filter( 'selvedge/github_updater_repo', static function (): string {{
	return 'thisismyurl/selvedge';
}} );

/**
 * Register Selvedge's image crop sizes.
 *
 * editorial-hero: 3:2 — the media-text editorial hero (image earns its column).
 * material-swatch: 1:1 — square crop for the material-archive gallery grid.
 * maker-portrait: 2:3 — portrait orientation for the maker-portrait pattern.
 */
function skin_image_sizes(): void {
	add_image_size( 'selvedge-editorial-hero', 740, 493, true );  // 3:2 hero image.
	add_image_size( 'selvedge-material-swatch', 600, 600, true ); // 1:1 material.
	add_image_size( 'selvedge-maker-portrait', 600, 900, true );  // 2:3 portrait.
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\skin_image_sizes' );

/**
 * Preload Newsreader variable — the LCP-critical font on every Selvedge page.
 *
 * Newsreader variable (upright) renders every h1 and h2 in the editorial hero
 * and studio-journal archive. The single variable file covers all weights used
 * in the critical path; the italic variable loads lazily as a stylistic accent.
 *
 * Pillar 8 (Kodawari): preloading the right file, not the whole family.
 */
add_filter(
	'selvedge/preload_fonts',
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/newsreader/newsreader-variable.woff2';
		return $fonts;
	}
);

/**
 * Register Selvedge's block styles.
 *
 * Block styles are the is-style-{name} vocabulary patterns and editors apply.
 * CSS treatments live in skin.css @layer components. Labels are plain English
 * and self-evident in the editor preview.
 *
 * NOTE on weld (#B5660A): weld achieves 3.9:1 contrast — AA compliant for
 * large text (18pt+) only. The selvedge-notation and selvedge-draft-notation
 * styles use weld only at heading sizes; skin.css enforces this with a comment.
 * Never apply weld to body-copy text (fails WCAG 1.4.3 for normal text).
 *
 * Pillar 7 (High Agency): editors can apply these without developer help.
 */
function skin_block_styles(): void {

	// [SKIN] Group as a process notation step — weld left accent, Jakarta 500 label,
	// Newsreader italic step description. Used in the process-notation pattern.
	// Weld is applied at heading size only — WCAG AA large text compliant.
	register_block_style(
		'core/group',
		array(
			'name'  => 'selvedge-notation',
			'label' => __( 'Process notation', 'selvedge' ),
		)
	);

	// [SKIN] Paragraph as a colophon credit — small, Jakarta 400, ink-muted.
	// Used at the foot of studio-journal posts for material and technique credits.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'selvedge-colophon',
			'label' => __( 'Colophon credit', 'selvedge' ),
		)
	);

	// [SKIN] Image block as a material swatch — square aspect ratio, ground-mid
	// background for negative space, no caption padding. Used in material-archive.
	register_block_style(
		'core/image',
		array(
			'name'  => 'selvedge-swatch',
			'label' => __( 'Material swatch', 'selvedge' ),
		)
	);

	// [SKIN] Paragraph as an editorial lead — Newsreader 400, larger base size,
	// increased leading. Used as the lede paragraph in editorial-hero and journal.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'selvedge-lead',
			'label' => __( 'Lead paragraph', 'selvedge' ),
		)
	);

	// [SKIN] Heading styled as a draft notation — Newsreader italic, weld accent,
	// used in process-notation for step headings. Weld at heading size = AA large.
	register_block_style(
		'core/heading',
		array(
			'name'  => 'selvedge-draft-notation',
			'label' => __( 'Draft notation heading', 'selvedge' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_block_styles' );

/**
 * Register Selvedge's block pattern categories.
 *
 * Patterns auto-register from patterns/ (WordPress 6.0+). These categories
 * give them a clear home under "Selvedge: …" in the pattern library.
 */
function skin_pattern_categories(): void {

	register_block_pattern_category(
		'selvedge-studio',
		array(
			'label'       => __( 'Selvedge: Studio', 'selvedge' ),
			'description' => __( 'Studio identity, editorial hero, and maker portrait patterns.', 'selvedge' ),
		)
	);

	register_block_pattern_category(
		'selvedge-journal',
		array(
			'label'       => __( 'Selvedge: Journal', 'selvedge' ),
			'description' => __( 'Studio journal archive and pull-quote patterns.', 'selvedge' ),
		)
	);

	register_block_pattern_category(
		'selvedge-workshop',
		array(
			'label'       => __( 'Selvedge: Workshop', 'selvedge' ),
			'description' => __( 'Workshop listing and process notation patterns.', 'selvedge' ),
		)
	);

	register_block_pattern_category(
		'selvedge-materials',
		array(
			'label'       => __( 'Selvedge: Materials', 'selvedge' ),
			'description' => __( 'Material archive and textile swatch gallery patterns.', 'selvedge' ),
		)
	);
}
add_action( 'init', __NAMESPACE__ . '\\skin_pattern_categories' );
