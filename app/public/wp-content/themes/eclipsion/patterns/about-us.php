<?php
/**
 * Title: About Us
 * Slug: eclipsion/about-us
 * Categories: eclipsion
 * Inserter: yes
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div id="about-us" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('ABOUT US', 'eclipsion'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Discover Our Commitment to Innovation and Excellence', 'eclipsion'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo __('We are committed to providing top-notch digital solutions designed to drive success and innovation. Our experienced team brings together diverse skills and a wealth of knowledge to tackle challenges and deliver outstanding results. From strategic planning to implementation, we focus on creating tailored solutions that align with your vision and objectives. Our dedication to excellence ensures that every project is handled with the utmost care and precision. Partner with us to transform your ideas into impactful realities and stay ahead in a rapidly evolving digital landscape.', 'eclipsion'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Read More', 'eclipsion'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"shadow":"var:preset|shadow|outlined","border":{"top":{"width":"0px","style":"none"},"right":{"width":"10px"},"bottom":{"width":"10px"},"left":{"width":"0px","style":"none"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about.jpg" alt="" style="border-top-style:none;border-top-width:0px;border-right-width:10px;border-bottom-width:10px;border-left-style:none;border-left-width:0px;box-shadow:var(--wp--preset--shadow--outlined)"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->