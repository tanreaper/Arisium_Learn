<?php
/**
 * Title: Call to Action
 * Slug: eclipsion/call-to-action
 * Categories: eclipsion
 * Inserter: yes
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"custom-background-secondary","layout":{"type":"constrained"}} -->
<div id="call-to-action" class="wp-block-group has-custom-background-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p class="has-text-align-center" style="font-size:13px"><?php echo __('ECLIPSION', 'eclipsion'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('Effortless Design with Our Block Theme', 'eclipsion'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/theme-styles.png" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo __('Experience the ease of creating stunning websites with our intuitive block theme. Designed for seamless customization, our theme allows you to build and modify your site with drag-and-drop simplicity.', 'eclipsion'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Explore More', 'eclipsion'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->