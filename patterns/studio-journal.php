<?php
/**
 * Title: Studio Journal
 * Slug: selvedge/studio-journal
 * Categories: selvedge-journal
 * Viewport Width: 1280
 * Inserter: true
 * Description: Two-column journal archive using wp:query. Newsreader 600 post titles; Plus Jakarta Sans excerpts; category and date in Jakarta 2xs all-caps. Featured image 3:2 crop.
 */
?>
<!-- wp:group {"className":"selvedge-section selvedge-band--ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group selvedge-section selvedge-band--ground" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.015em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Studio Journal', 'selvedge' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|indigo"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--indigo)"><a href="/journal" style="color:inherit;text-decoration:none"><?php esc_html_e( 'All entries →', 'selvedge' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":1,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
	<div class="wp-block-query" style="margin-top:var(--wp--preset--spacing--8)">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} -->

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
			<div class="wp-block-group">
				<!-- wp:post-terms {"term":"category","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|indigo"}}} /-->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs"},"color":{"text":"var:preset|color|ink-muted"}}} --><p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);color:var(--wp--preset--color--ink-muted)">·</p><!-- /wp:paragraph -->
				<!-- wp:post-date {"format":"j M Y","style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs"},"color":{"text":"var:preset|color|ink-muted"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"isLink":true,"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","lineHeight":"1.1","letterSpacing":"-0.015em","fontSize":"var:preset|font-size|2xl","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->

			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","lineHeight":"1.7"},"color":{"text":"var:preset|color|ink-secondary"},"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} /-->

		<!-- /wp:post-template -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta"},"color":{"text":"var:preset|color|ink-muted"}}} -->
			<p style="font-family:var(--wp--preset--font-family--jakarta);color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'No journal entries yet.', 'selvedge' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
