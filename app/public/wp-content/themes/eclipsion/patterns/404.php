<?php
/**
 * Title: 404
 * Slug: eclipsion/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"100px","letterSpacing":"12px"}}} -->
<h1 class="wp-block-heading has-text-align-center" style="font-size:100px;letter-spacing:12px"><?php echo __('4<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-custom-primary-color">0</mark>4', 'eclipsion');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('It seems the page you’re looking for has been moved or doesn’t exist. Please check the URL for errors or return to the homepage to find the information you need. If you need further assistance, feel free to contact us.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button" href="/"><?php echo __('Go to Home', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->