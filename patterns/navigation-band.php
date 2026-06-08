<?php
/**
 * Title: Navigation Band
 * Slug: selvedge/navigation-band
 * Categories: selvedge-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Clean horizontal header band on ground — Selvedge wordmark in Newsreader italic left, Studio/Work/Journal/Shop/Contact links right, thin rule along the bottom. Plus Jakarta Sans nav links.
 */
?>
<!-- wp:group {"className":"selvedge-nav selvedge-band--ground","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"ground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull selvedge-nav selvedge-band--ground has-ground-background-color has-background" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"className":"selvedge-nav__bar","style":{"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group selvedge-nav__bar" style="border-bottom:1px solid var(--wp--preset--color--rule);padding-bottom:var(--wp--preset--spacing--6)">

		<!-- wp:heading {"level":1,"className":"selvedge-nav__brand","style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontStyle":"italic","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.015em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<h1 class="selvedge-nav__brand" style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-style:italic;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><a href="/" style="color:inherit;text-decoration:none">Selvedge</a></h1>
		<!-- /wp:heading -->

		<!-- wp:group {"className":"selvedge-nav__links","style":{"spacing":{"blockGap":"var:preset|spacing|8"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group selvedge-nav__links">
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--ink-secondary)"><a href="/studio" style="color:inherit;text-decoration:none">Studio</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--ink-secondary)"><a href="/work" style="color:inherit;text-decoration:none">Work</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--ink-secondary)"><a href="/journal" style="color:inherit;text-decoration:none">Journal</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--ink-secondary)"><a href="/shop" style="color:inherit;text-decoration:none">Shop</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"600"},"color":{"text":"var:preset|color|indigo"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<p style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:600;color:var(--wp--preset--color--indigo)"><a href="/contact" style="color:inherit;text-decoration:none">Contact</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
