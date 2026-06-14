<?php
/**
 * Title: Pull Quote Thread
 * Slug: selvedge/pull-quote-thread
 * Categories: selvedge-journal
 * Viewport Width: 1280
 * Inserter: true
 * Description: Centered narrow-column thread of pull quotes — three stacked Newsreader italic quotes with attribution. For long-form journal posts; creates a visual rhythm break.
 */
?>
<!-- wp:group {"className":"selvedge-section selvedge-band--ground-mid","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group selvedge-section selvedge-band--ground-mid" style="padding-top:var(--wp--preset--spacing--16);padding-bottom:var(--wp--preset--spacing--16);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Eyebrow -->
	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"},"color":{"text":"var:preset|color|ink-muted"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.1em;text-transform:uppercase;color:var(--wp--preset--color--ink-muted);margin-bottom:var(--wp--preset--spacing--10)"><?php esc_html_e( 'From the literature', 'selvedge' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- Quote 1 -->
	<!-- wp:quote {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}}} -->
	<blockquote class="wp-block-quote" style="margin-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontSize":"var:preset|font-size|2xl","lineHeight":"1.3","fontOpticalSizing":"auto","fontWeight":"400"},"color":{"text":"var:preset|color|ink"}}} -->
		<p style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-size:var(--wp--preset--font-size--2xl);line-height:1.3;font-optical-sizing:auto;font-weight:400;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'The colour is not in the plant. It is in the relationship between the plant, the mordant, the water, and the fibre. Change any one of these and you change the colour.', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:cite {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<cite style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--ink-muted)"><?php
			/* translators: %s: italicised book title. */
			printf( esc_html__( 'Jenny Dean — %s (1999)', 'selvedge' ), '<em>' . esc_html__( 'Wild Colour', 'selvedge' ) . '</em>' );
			?></cite>
		<!-- /wp:cite -->
	</blockquote>
	<!-- /wp:quote -->

	<!-- Separator -->
	<!-- wp:separator {"style":{"color":{"text":"var:preset|color|ground-deep"}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide has-text-color" style="color:var(--wp--preset--color--ground-deep)" />
	<!-- /wp:separator -->

	<!-- Quote 2 -->
	<!-- wp:quote {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
	<blockquote class="wp-block-quote" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--10)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontSize":"var:preset|font-size|2xl","lineHeight":"1.3","fontOpticalSizing":"auto","fontWeight":"400"},"color":{"text":"var:preset|color|ink"}}} -->
		<p style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-size:var(--wp--preset--font-size--2xl);line-height:1.3;font-optical-sizing:auto;font-weight:400;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'The loom is not neutral. It has an opinion about what you put through it. Resist it and you\'ll fight it all day. Work with it and the cloth tells you what it wants to be.', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:cite {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<cite style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--ink-muted)"><?php
			/* translators: %s: italicised book title. */
			printf( esc_html__( 'Anni Albers — %s (1965)', 'selvedge' ), '<em>' . esc_html__( 'On Weaving', 'selvedge' ) . '</em>' );
			?></cite>
		<!-- /wp:cite -->
	</blockquote>
	<!-- /wp:quote -->

	<!-- Separator -->
	<!-- wp:separator {"style":{"color":{"text":"var:preset|color|ground-deep"}},"className":"is-style-wide"} -->
	<hr class="wp-block-separator is-style-wide has-text-color" style="color:var(--wp--preset--color--ground-deep)" />
	<!-- /wp:separator -->

	<!-- Quote 3 -->
	<!-- wp:quote {"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
	<blockquote class="wp-block-quote" style="margin-top:var(--wp--preset--spacing--10)">
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontStyle":"italic","fontSize":"var:preset|font-size|2xl","lineHeight":"1.3","fontOpticalSizing":"auto","fontWeight":"400"},"color":{"text":"var:preset|color|ink"}}} -->
		<p style="font-family:var(--wp--preset--font-family--newsreader);font-style:italic;font-size:var(--wp--preset--font-size--2xl);line-height:1.3;font-optical-sizing:auto;font-weight:400;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'You cannot rush a natural dye. The fibre will take the colour when it is ready. Set a timer if you like; the bath does not care.', 'selvedge' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:cite {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm"},"color":{"text":"var:preset|color|ink-muted"}}} -->
		<cite style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);color:var(--wp--preset--color--ink-muted)"><?php esc_html_e( 'Maryanne Gillooly — workshop notes, 2019', 'selvedge' ); ?></cite>
		<!-- /wp:cite -->
	</blockquote>
	<!-- /wp:quote -->

</div>
<!-- /wp:group -->
