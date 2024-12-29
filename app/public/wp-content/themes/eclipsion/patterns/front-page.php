<?php
/**
 * Title: front-page
 * Slug: eclipsion/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div id="hero" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"},"border":{"color":"#b8b8b852","width":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('⭐⭐⭐⭐⭐', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo __('Illuminate Every Aspect of Your Vision', 'eclipsion');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo __('Introducing the ultimate multipurpose theme designed to elevate your agency’s online presence. Whether you’re showcasing your portfolio, launching a new project, or creating an engaging business website, our theme offers the flexibility and sophistication you need.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-gradient-color is-style-button-hover-white-fill","style":{"border":{"radius":{"topRight":"50px","bottomRight":"0px","bottomLeft":"0px","topLeft":"50px"}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}}} -->
<div class="wp-block-button is-style-button-hover-gradient-color is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button" href="#" style="border-top-left-radius:50px;border-top-right-radius:50px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php echo __('Get Started', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full"} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero.jpg" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div id="about-us" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('ABOUT US', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Discover Our Commitment to Innovation and Excellence', 'eclipsion');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo __('We are committed to providing top-notch digital solutions designed to drive success and innovation. Our experienced team brings together diverse skills and a wealth of knowledge to tackle challenges and deliver outstanding results. From strategic planning to implementation, we focus on creating tailored solutions that align with your vision and objectives. Our dedication to excellence ensures that every project is handled with the utmost care and precision. Partner with us to transform your ideas into impactful realities and stay ahead in a rapidly evolving digital landscape.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Read More', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"shadow":"var:preset|shadow|outlined","border":{"top":{"width":"0px","style":"none"},"right":{"width":"10px"},"bottom":{"width":"10px"},"left":{"width":"0px","style":"none"}}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/about.jpg" alt="<?php echo __('', 'eclipsion');?>" style="border-top-style:none;border-top-width:0px;border-right-width:10px;border-bottom-width:10px;border-left-style:none;border-left-width:0px;box-shadow:var(--wp--preset--shadow--outlined)"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div id="our-services" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('OUR SERVICES', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Expertise You Can Trust', 'eclipsion');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/travel-planning.png" alt="<?php echo __('', 'eclipsion');?>" style="width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo __('Travel Planning', 'eclipsion');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Designing customized travel itineraries and experiences tailored to your preferences. Our travel planning services ensure seamless and enjoyable trips, from exotic vacations to business travel.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Read More', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"60px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#00a5ff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/photography.png" alt="<?php echo __('', 'eclipsion');?>" style="width:60px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo __('Photography', 'eclipsion');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Capturing stunning visuals that tell your story and enhance your brand\'s image. Our photography services range from product shots to event coverage, providing high-quality images that make an impact.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Read More', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"60px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#00a5ff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/music-production.png" alt="<?php echo __('', 'eclipsion');?>" style="width:60px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5} -->
<h5 class="wp-block-heading"><?php echo __('Music Production', 'eclipsion');?></h5>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Providing professional music production services including recording, mixing, and mastering. Whether for artists, commercials, or media projects, we deliver high-quality sound and creative direction.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Read More', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"custom-background-secondary","layout":{"type":"constrained"}} -->
<div id="call-to-action" class="wp-block-group has-custom-background-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p class="has-text-align-center" style="font-size:13px"><?php echo __('ECLIPSION', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo __('Effortless Design with Our Block Theme', 'eclipsion');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/theme-styles.png" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo __('Experience the ease of creating stunning websites with our intuitive block theme. Designed for seamless customization, our theme allows you to build and modify your site with drag-and-drop simplicity.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"custom-primary","className":"is-style-button-hover-white-fill"} -->
<div class="wp-block-button is-style-button-hover-white-fill"><a class="wp-block-button__link has-custom-primary-background-color has-background has-text-align-center wp-element-button"><?php echo __('Explore More', 'eclipsion');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div id="testimonials" class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"ABOUT"},"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('TESTIMONIALS', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('What Our Clients Are Saying', 'eclipsion');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"},"layout":{"selfStretch":"fixed","flexSize":"26%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p><?php echo __('Working with this team has been a game-changer for our business. Their innovative strategies and attention to detail have significantly boosted our online presence and sales. We couldn\'t be happier with the results.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('⭐⭐⭐⭐⭐', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo __('Marc Dubois', 'eclipsion');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('Designer', 'eclipsion');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"},"layout":{"selfStretch":"fixed","flexSize":"26%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p><?php echo __('Collaborating with this team has transformed our business. Their innovative strategies and attention to detail have significantly improved our online presence and sales. We are extremely satisfied with the results.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('⭐⭐⭐⭐⭐', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo __('Claire Martin', 'eclipsion');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('Writer', 'eclipsion');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"color":"#b8b8b852","width":"1px"},"layout":{"selfStretch":"fixed","flexSize":"26%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color" style="border-color:#b8b8b852;border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph -->
<p><?php echo __('The expertise and dedication of this team are unmatched. They took the time to understand our unique needs and delivered solutions that exceeded our expectations. Their work has truly made a difference.', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('⭐⭐⭐⭐⭐', 'eclipsion');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo __('Thomas Harris', 'eclipsion');?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}}} -->
<p style="font-size:13px"><?php echo __('Developer', 'eclipsion');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"backgroundColor":"custom-primary","layout":{"type":"constrained"}} -->
<div id="logos" class="wp-block-group has-custom-primary-background-color has-background"><!-- wp:heading {"textAlign":"center","level":6} -->
<h6 class="wp-block-heading has-text-align-center"><?php echo __('Trusted and used by 100+ Brands', 'eclipsion');?></h6>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-2.png" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-1.png" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-4.png" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#ffffff","#ffffff"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo-3.png" alt="<?php echo __('', 'eclipsion');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->