<?php
/**
 * Title: Subscribe & Workshop CTA
 * Slug: selvedge/subscribe-cta
 * Categories: selvedge-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Full-width indigo CTA band — Join the Studio headline, short workshop/newsletter copy, email field placeholder and weld Subscribe button. Newsreader 600 headline; Plus Jakarta Sans body and UI. Static placeholder field; no form processing.
 */
?>
<!-- wp:group {"className":"selvedge-section selvedge-cta selvedge-band--indigo","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull selvedge-section selvedge-cta selvedge-band--indigo" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:paragraph {"className":"is-style-selvedge-eyebrow","style":{"color":{"text":"var:preset|color|footer-meta"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
	<p class="is-style-selvedge-eyebrow" style="color:var(--wp--preset--color--footer-meta);margin-bottom:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Newsletter · Workshops', 'selvedge' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|3xl","lineHeight":"1.05","letterSpacing":"-0.02em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|footer-fg"}}} -->
	<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--3xl);line-height:1.05;letter-spacing:-0.02em;font-optical-sizing:auto;color:var(--wp--preset--color--footer-fg)"><?php esc_html_e( 'Join the Studio', 'selvedge' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|md","lineHeight":"1.7"},"color":{"text":"var:preset|color|footer-meta"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|9"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--md);line-height:1.7;color:var(--wp--preset--color--footer-meta);margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--9)"><?php esc_html_e( 'A letter from the loom every few weeks — dye-lot notes, warp experiments, and first word on hands-on weaving and indigo workshops. No noise, just the work in progress.', 'selvedge' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"selvedge-cta__field","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"stretch"}} -->
	<div class="wp-block-group selvedge-cta__field">

		<!-- wp:paragraph {"className":"selvedge-cta__input","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|footer-meta"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"width":"1px","style":"solid","color":"var:preset|color|footer-meta","radius":"0"}}} -->
		<p class="selvedge-cta__input" style="border-color:var(--wp--preset--color--footer-meta);border-width:1px;border-style:solid;border-radius:0;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--footer-meta)"><?php esc_html_e( 'you@studio.email', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textColor":"footer-accent","className":"is-style-outline selvedge-cta__button","style":{"border":{"width":"1px","color":"var:preset|color|footer-accent","radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"600","letterSpacing":"0.04em"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}},"color":{"background":"transparent"}}} -->
			<div class="wp-block-button is-style-outline selvedge-cta__button"><a class="wp-block-button__link has-footer-accent-color has-text-color has-background" href="#subscribe" style="border-color:var(--wp--preset--color--footer-accent);border-width:1px;border-radius:0;background:transparent;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--8);font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:600;letter-spacing:0.04em"><?php esc_html_e( 'Subscribe', 'selvedge' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
