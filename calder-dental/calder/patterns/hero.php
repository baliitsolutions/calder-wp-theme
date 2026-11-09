<?php
/**
 * Title: Hero
 * Slug: calder/hero
 * Categories: calder, banner
 * Description: Headline, introduction, two buttons and quick facts, with the tooth illustration.
 */
?>
<!-- wp:group {"tagName":"section","anchor":"top","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<section id="top" class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"56%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:56%"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Dentistry that explains itself.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted","fontSize":"large"} -->
<p class="has-muted-color has-text-color has-large-font-size">Check-ups, whitening and implants from a small team that shows you what they see, tells you what it costs, and never rushes the chair.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#book">Book a visit</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+15550142200">Call (555) 014-2200</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}},"fontSize":"small"} -->
<div class="wp-block-columns is-not-stacked-on-mobile has-small-font-size" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><strong>Same-week</strong><br>appointments for new patients</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><strong>Fixed prices</strong><br>written down before treatment</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><strong>Sedation</strong><br>available for anxious patients</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"44%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:44%"><!-- wp:group {"className":"calder-hero-visual","layout":{"type":"default"}} -->
<div class="wp-block-group calder-hero-visual"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center","width":"300px"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/tooth.svg' ) ); ?>" alt="" style="width:300px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"is-style-card","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-card"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>Open today 8am – 6pm</strong><br>Saturday 9am – 1pm</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#visit">All opening hours</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->
