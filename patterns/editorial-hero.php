<?php
/**
 * Title: Editorial Hero
 * Slug: selvedge/editorial-hero
 * Categories: selvedge-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Media-text editorial hero — image and text at equal weight, side by side. No full-bleed photography. Newsreader 700 headline; Plus Jakarta Sans lead paragraph; warp/dye vocabulary in demo content.
 */
?>
<!-- wp:group {"className":"selvedge-section","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|12","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group selvedge-section" style="padding:0 0 var(--wp--preset--spacing--12) 0">

	<!-- wp:media-text {"mediaPosition":"left","mediaWidth":50,"verticalAlignment":"center","imageFill":true,"style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"className":"selvedge-editorial-hero"} -->
	<div class="wp-block-media-text selvedge-editorial-hero has-media-on-the-left is-stacked-on-mobile" style="grid-template-columns:50% auto;padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16)">
		<figure class="wp-block-media-text__media">
			<img src="" alt="Studio — woven linen, natural weld dye on undyed warp" class="wp-image-placeholder" style="object-fit:cover" />
		</figure>
		<div class="wp-block-media-text__content" style="padding:var(--wp--preset--spacing--10) var(--wp--preset--spacing--10)">

			<!-- wp:paragraph {"className":"is-style-lig-overline","style":{"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-lig-overline" style="color:var(--wp--preset--color--ink-muted);margin-bottom:var(--wp--preset--spacing--5)">Studio · Summer 2026</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"700","fontSize":"var:preset|font-size|4xl","lineHeight":"1.0","letterSpacing":"-0.025em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
			<h1 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:700;font-size:var(--wp--preset--font-size--4xl);line-height:1.0;letter-spacing:-0.025em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)">Weld on linen: the dyer's margin</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"is-style-selvedge-lead","style":{"spacing":{"margin":{"top":"var:preset|spacing|6"}}}} -->
			<p class="is-style-selvedge-lead" style="margin-top:var(--wp--preset--spacing--6)">Natural dye practice begins long before the mordant bath. The warp colour, the weave structure, the sett — each decision either opens or forecloses what the dye can do. Weld teaches this the hard way: it rewards patience with a yellow that no synthetic colour can replicate.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--8)">
				<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link" href="/journal" style="border-radius:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500">Read in the journal →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
	</div>
	<!-- /wp:media-text -->

</div>
<!-- /wp:group -->
