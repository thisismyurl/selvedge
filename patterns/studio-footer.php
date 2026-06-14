<?php
/**
 * Title: Studio Footer
 * Slug: selvedge/studio-footer
 * Categories: selvedge-studio
 * Viewport Width: 1280
 * Inserter: true
 * Description: Three-column studio footer on ink — studio name and tagline left, Studio/Work/Journal/Contact links centre, location and email right, copyright rule at the foot. Newsreader 600 wordmark; Plus Jakarta Sans links and meta.
 */
?>
<!-- wp:group {"className":"selvedge-footer selvedge-band--ink","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|10","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull selvedge-footer selvedge-band--ink" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"className":"selvedge-footer__columns","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|10"}}}} -->
	<div class="wp-block-columns selvedge-footer__columns">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontStyle":"italic","fontSize":"var:preset|font-size|2xl","letterSpacing":"-0.015em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|footer-fg"}}} -->
			<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-style:italic;font-size:var(--wp--preset--font-size--2xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--footer-fg)"><?php esc_html_e( 'Selvedge', 'selvedge' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","lineHeight":"1.7"},"color":{"text":"var:preset|color|footer-meta"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);line-height:1.7;color:var(--wp--preset--color--footer-meta);margin-top:var(--wp--preset--spacing--4)"><?php esc_html_e( 'A weaving and natural-dye studio working warp by warp — indigo vats, weld baths, and cloth made slowly to last.', 'selvedge' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:paragraph {"className":"is-style-selvedge-eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|footer-meta"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-selvedge-eyebrow" style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--footer-meta);margin-bottom:var(--wp--preset--spacing--5)"><?php esc_html_e( 'Navigate', 'selvedge' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:list {"className":"selvedge-footer__links","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base","lineHeight":"2.0"},"color":{"text":"var:preset|color|footer-fg"},"spacing":{"padding":{"left":"0"}}}} -->
			<ul class="wp-block-list selvedge-footer__links" style="padding-left:0;color:var(--wp--preset--color--footer-fg);font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);line-height:2.0">
				<!-- wp:list-item -->
				<li><a href="/studio"><?php esc_html_e( 'Studio', 'selvedge' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/work"><?php esc_html_e( 'Work', 'selvedge' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/journal"><?php esc_html_e( 'Journal', 'selvedge' ); ?></a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><a href="/contact"><?php esc_html_e( 'Contact', 'selvedge' ); ?></a></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"30%"} -->
		<div class="wp-block-column" style="flex-basis:30%">
			<!-- wp:paragraph {"className":"is-style-selvedge-eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"color":{"text":"var:preset|color|footer-meta"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} -->
			<p class="is-style-selvedge-eyebrow" style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.12em;text-transform:uppercase;color:var(--wp--preset--color--footer-meta);margin-bottom:var(--wp--preset--spacing--5)"><?php esc_html_e( 'Visit', 'selvedge' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base","lineHeight":"1.8"},"color":{"text":"var:preset|color|footer-fg"}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);line-height:1.8;color:var(--wp--preset--color--footer-fg)"><?php
				printf(
					'%1$s<br>%2$s',
					esc_html__( '14 Mill Race Lane', 'selvedge' ),
					esc_html__( 'Fort Erie, Ontario', 'selvedge' )
				);
				?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base"},"color":{"text":"var:preset|color|footer-accent"},"spacing":{"margin":{"top":"var:preset|spacing|4"}}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);color:var(--wp--preset--color--footer-accent);margin-top:var(--wp--preset--spacing--4)"><a href="mailto:hello@selvedge.studio" style="color:inherit"><?php esc_html_e( 'hello@selvedge.studio', 'selvedge' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"className":"selvedge-footer__legal","style":{"spacing":{"margin":{"top":"var:preset|spacing|11"},"padding":{"top":"var:preset|spacing|6"}},"border":{"top":{"color":"var:preset|color|footer-meta","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center","flexWrap":"wrap"}} -->
	<div class="wp-block-group selvedge-footer__legal" style="border-top:1px solid var(--wp--preset--color--footer-meta);margin-top:var(--wp--preset--spacing--11);padding-top:var(--wp--preset--spacing--6)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs"},"color":{"text":"var:preset|color|footer-meta"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);color:var(--wp--preset--color--footer-meta)"><?php esc_html_e( '© 2026 Selvedge Studio. Woven by hand.', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs"},"color":{"text":"var:preset|color|footer-meta"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);color:var(--wp--preset--color--footer-meta)"><?php esc_html_e( 'Indigo · Weld · Natural Dye', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
