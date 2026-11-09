<?php
/**
 * Title: FAQ
 * Slug: calder/faq
 * Categories: calder, text
 * Description: Common questions with expandable answers.
 */
$calder_faq = array(
	array( 'Do you take emergency patients?', 'Yes. Call before 10am and we\'ll see you the same day whenever we can, including new patients.' ),
	array( 'I\'m nervous about the dentist. Can you help?', 'Tell us when you book. We\'ll give you a longer slot, explain each step before we do it, and agree a stop signal. Sedation is available for longer treatments.' ),
	array( 'Which insurance do you accept?', 'We work with most major dental insurers and can claim on your behalf. Bring your card to your first visit.' ),
	array( 'Is there parking?', 'Free parking for patients behind the building, with step-free access to every treatment room.' ),
);
?>
<!-- wp:group {"tagName":"section","anchor":"faq","align":"full","backgroundColor":"mint","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section id="faq" class="wp-block-group alignfull has-mint-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"860px","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Questions</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|line","width":"1px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--line);border-top-width:1px;margin-top:var(--wp--preset--spacing--40)"><?php foreach ( $calder_faq as $calder_item ) : ?><!-- wp:details -->
<details class="wp-block-details"><summary><?php echo esc_html( $calder_item[0] ); ?></summary><!-- wp:paragraph -->
<p><?php echo esc_html( $calder_item[1] ); ?></p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --><?php endforeach; ?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->
