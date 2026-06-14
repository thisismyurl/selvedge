<?php
/**
 * Title: Material Archive
 * Slug: selvedge/material-archive
 * Categories: selvedge-materials
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three-column material swatch gallery — WordPress Gallery block with is-style-selvedge-swatch applied. Image captions as material colophon credits. Natural dye vocabulary.
 */
?>
<!-- wp:group {"className":"selvedge-section selvedge-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group selvedge-section selvedge-band--ground" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.015em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Material Archive', 'selvedge' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Dyed · woven · warp-planned', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Gallery with swatch style -->
	<!-- wp:gallery {"columns":3,"imageCrop":true,"linkTo":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped" style="margin-top:var(--wp--preset--spacing--8)">

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Weld on undyed linen — 15% alum mordant', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Weld on undyed linen · alum mordant 15% WOF · Reseda luteola 200% WOF', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Madder on wool — alum mordant, iron afterbath', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Madder root on natural fleece · alum 20% WOF · iron afterbath 2% WOF', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Indigo vat on bleached cotton', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Indigo fermentation vat · bleached cotton · 6 dip sequence', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Black walnut hull on naturally dyed warp', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Black walnut hull · no mordant required · woven 2/2 twill on undyed warp', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Onion skin on wool — chrome mordant', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Onion skin on scoured fleece · chrome mordant 3% WOF · gold-olive result', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="<?php esc_attr_e( 'Overdye: weld on indigo-dyed linen', 'selvedge' ); ?>" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption"><?php esc_html_e( 'Overdye — weld on indigo ground · linen · produces tertiary green-teal', 'selvedge' ); ?></figcaption>
		</figure>
		<!-- /wp:image -->

	</figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->
