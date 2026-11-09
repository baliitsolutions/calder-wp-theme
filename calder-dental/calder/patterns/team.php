<?php
/**
 * Title: Team
 * Slug: calder/team
 * Categories: calder, team
 * Description: Three team members with photo, name and role.
 */
$calder_team = array(
	array( 'team-maya.svg', 'Dr. Maya Okafor', 'Principal dentist · Implants' ),
	array( 'team-tomas.svg', 'Dr. Tomas Lind', 'Cosmetic dentistry · Aligners' ),
	array( 'team-rina.svg', 'Dr. Rina Suarez', 'Family &amp; children\'s dentistry' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"team","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section id="team" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"640px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">The team</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size">Three dentists, two hygienists and one front desk that answers the phone.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"calder-team","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide calder-team" style="margin-top:var(--wp--preset--spacing--50)"><?php foreach ( $calder_team as $calder_member ) : ?><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/' . $calder_member[0] ) ); ?>" alt="<?php echo esc_attr( 'Photo of ' . $calder_member[1] ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"0.2rem"}}}} -->
<h3 class="wp-block-heading" style="margin-bottom:0.2rem"><?php echo esc_html( $calder_member[1] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"top":"0"}}}} -->
<p class="has-muted-color has-text-color" style="margin-top:0"><?php echo wp_kses_post( $calder_member[2] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
