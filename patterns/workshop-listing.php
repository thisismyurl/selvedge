<?php
/**
 * Title: Workshop Listing
 * Slug: selvedge/workshop-listing
 * Categories: selvedge-workshop
 * Viewport Width: 1280
 * Inserter: true
 * Description: Two-column workshop listing — static cards with indigo top border, date, title, capacity, and booking button. Vocabulary: woven, dyed, warp-planned, not "handmade" or "craft".
 */
?>
<!-- wp:group {"className":"selvedge-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|12","bottom":"var:preset|spacing|12","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group selvedge-section" style="padding-top:var(--wp--preset--spacing--12);padding-bottom:var(--wp--preset--spacing--12);padding-left:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|2"},"border":{"bottom":{"color":"var:preset|color|rule","style":"solid","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--8);border-bottom:1px solid var(--wp--preset--color--rule)">
		<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|xl","letterSpacing":"-0.015em","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
		<h2 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);letter-spacing:-0.015em;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Upcoming Workshops', 'selvedge' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"},"color":{"text":"var:preset|color|indigo"}}} -->
		<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:500;color:var(--wp--preset--color--indigo)"><a href="/workshops" style="color:inherit;text-decoration:none"><?php esc_html_e( 'All workshops →', 'selvedge' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Workshop grid -->
	<!-- wp:columns {"isStackedOnMobile":true,"style":{"spacing":{"blockGap":"var:preset|spacing|6","padding":{"top":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--8)">

		<!-- Workshop 1 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"selvedge-workshop-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group selvedge-workshop-card">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|indigo"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--wp--preset--color--indigo)"><?php esc_html_e( 'Saturday 12 July · 10:00–16:00', 'selvedge' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|xl","lineHeight":"1.1","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);line-height:1.1;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Natural Dye Fundamentals: Plant Sources and Mordants', 'selvedge' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|ink-secondary"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);line-height:1.7;color:var(--wp--preset--color--ink-secondary)"><?php esc_html_e( 'A working introduction to natural dye practice — mordanting technique, plant extraction, and colour sampling on woven wool and linen. All materials included. Capacity: 8 participants.', 'selvedge' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"600"},"color":{"text":"var:preset|color|ink"}}} --><p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:600;color:var(--wp--preset--color--ink)"><?php esc_html_e( '$280 CAD', 'selvedge' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link" href="/workshops/natural-dye-fundamentals" style="border-radius:0"><?php esc_html_e( 'Book →', 'selvedge' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- Workshop 2 -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"selvedge-workshop-card","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group selvedge-workshop-card">
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|2xs","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|indigo"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--2xs);font-weight:600;letter-spacing:0.08em;text-transform:uppercase;color:var(--wp--preset--color--indigo)"><?php esc_html_e( 'Saturday 9 August · 10:00–17:00', 'selvedge' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|newsreader","fontWeight":"600","fontSize":"var:preset|font-size|xl","lineHeight":"1.1","fontOpticalSizing":"auto"},"color":{"text":"var:preset|color|ink"}}} -->
				<h3 style="font-family:var(--wp--preset--font-family--newsreader);font-weight:600;font-size:var(--wp--preset--font-size--xl);line-height:1.1;font-optical-sizing:auto;color:var(--wp--preset--color--ink)"><?php esc_html_e( 'Rigid Heddle Weaving: Warp Planning and Structure', 'selvedge' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|base","lineHeight":"1.7"},"color":{"text":"var:preset|color|ink-secondary"}}} -->
				<p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--base);line-height:1.7;color:var(--wp--preset--color--ink-secondary)"><?php esc_html_e( 'Warp colour theory, sett calculation, and plain weave structure on a rigid heddle loom. Participants warp and weave a sampler to keep. No prior weaving experience required. Capacity: 6 participants.', 'selvedge' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3","margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5)">
					<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"600"},"color":{"text":"var:preset|color|ink"}}} --><p style="font-family:var(--wp--preset--font-family--jakarta);font-size:var(--wp--preset--font-size--sm);font-weight:600;color:var(--wp--preset--color--ink)"><?php esc_html_e( '$320 CAD', 'selvedge' ); ?></p><!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons">
						<!-- wp:button {"style":{"border":{"radius":"0"},"typography":{"fontFamily":"var:preset|font-family|jakarta","fontSize":"var:preset|font-size|sm","fontWeight":"500"}}} -->
						<div class="wp-block-button"><a class="wp-block-button__link" href="/workshops/rigid-heddle-weaving" style="border-radius:0"><?php esc_html_e( 'Book →', 'selvedge' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
