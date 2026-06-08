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
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)">Material Archive</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--wp--preset--color--ink-muted)">Dyed · woven · warp-planned</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Gallery with swatch style -->
	<!-- wp:gallery {"columns":3,"imageCrop":true,"linkTo":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|4"}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped" style="margin-top:var(--wp--preset--spacing--8)">

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Weld on undyed linen — 15% alum mordant" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Weld on undyed linen · alum mordant 15% WOF · Reseda luteola 200% WOF</figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Madder on wool — alum mordant, iron afterbath" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Madder root on natural fleece · alum 20% WOF · iron afterbath 2% WOF</figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Indigo vat on bleached cotton" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Indigo fermentation vat · bleached cotton · 6 dip sequence</figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Black walnut hull on naturally dyed warp" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Black walnut hull · no mordant required · woven 2/2 twill on undyed warp</figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Onion skin on wool — chrome mordant" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Onion skin on scoured fleece · chrome mordant 3% WOF · gold-olive result</figcaption>
		</figure>
		<!-- /wp:image -->

		<!-- wp:image {"className":"is-style-selvedge-swatch"} -->
		<figure class="wp-block-image is-style-selvedge-swatch">
			<img src="" alt="Overdye: weld on indigo-dyed linen" />
			<figcaption class="is-style-selvedge-colophon wp-element-caption">Overdye — weld on indigo ground · linen · produces tertiary green-teal</figcaption>
		</figure>
		<!-- /wp:image -->

	</figure>
	<!-- /wp:gallery -->

</div>
<!-- /wp:group -->
