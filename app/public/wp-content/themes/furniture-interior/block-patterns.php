<?php
/**
 * Furniture Interior: Block Patterns
 *
 * @package Furniture Interior
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'furniture-interior',
		array( 'label' => __( 'Furniture Interior', 'furniture-interior' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'furniture-interior/banner-section',
		array(
			'title'      => __( 'Banner Section', 'furniture-interior' ),
			'categories' => array( 'furniture-interior' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . get_theme_file_uri() . "/images/Banner.png\",\"id\":2874,\"dimRatio\":0,\"isDark\":false,\"align\":\"full\",\"className\":\"furniture-interior-banner-section\"} -->\n<div class=\"wp-block-cover alignfull is-light furniture-interior-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-2874\" alt=\"\" src=\"" . get_theme_file_uri() . "/images/Banner.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"40px\"}},\"textColor\":\"white\"} -->\n<h2 class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:40px\">LIVE THE BEST OF YOUR INTERIOR</h2>\n<!-- /wp:heading --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'furniture-interior/learn-more-section',
		array(
			'title'      => __( 'Learn More Section', 'furniture-interior' ),
			'categories' => array( 'furniture-interior' ),
			'content'    => "<!-- wp:columns {\"verticalAlignment\":\"center\",\"className\":\"furniture-interior-learn-more-section1\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center furniture-interior-learn-more-section1\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\",\"backgroundColor\":\"white\",\"className\":\"furniture-interior-shipping-section\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center furniture-interior-shipping-section has-white-background-color has-background\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":2911,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"" . get_theme_file_uri() . "/images/phone.png\" alt=\"\" class=\"wp-image-2911\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"paragraph-1\"} -->\n<p class=\"has-text-align-center paragraph-1\" style=\"font-size:15px\">012-345-6789</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-center\" style=\"font-size:15px\">info@design@gmail.com</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"33.33%\",\"backgroundColor\":\"white\",\"className\":\"furniture-interior-shipping-section\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center furniture-interior-shipping-section has-white-background-color has-background\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":2912,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"" . get_theme_file_uri() . "/images/map.png\" alt=\"\" class=\"wp-image-2912\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"paragraph-1\"} -->\n<p class=\"has-text-align-center paragraph-1\" style=\"font-size:15px\">123,YOUR STREET NAME</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-center\" style=\"font-size:15px\">New york city,USA</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"33.33%\",\"backgroundColor\":\"white\",\"className\":\"furniture-interior-shipping-section\"} -->\n<div class=\"wp-block-column furniture-interior-shipping-section has-white-background-color has-background\" style=\"flex-basis:33.33%\"><!-- wp:image {\"align\":\"center\",\"id\":2913,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"" . get_theme_file_uri() . "/images/clock.png\" alt=\"\" class=\"wp-image-2913\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}},\"className\":\"paragraph-1\"} -->\n<p class=\"has-text-align-center paragraph-1\" style=\"font-size:15px\">8:00AM-6:00PM</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"15px\"}}} -->\n<p class=\"has-text-align-center\" style=\"font-size:15px\">Monday-Saturday</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);

	register_block_pattern(
		'furniture-interior/project-section',
		array(
			'title'      => __( 'Project Section', 'furniture-interior' ),
			'categories' => array( 'furniture-interior' ),
			'content'    => "<!-- wp:columns {\"className\":\"furniture-interior-project-section pt-5\"} -->\n<div class=\"wp-block-columns furniture-interior-project-section pt-5\"><!-- wp:column {\"className\":\"furniture-interior-project-section-image ms-5\"} -->\n<div class=\"wp-block-column furniture-interior-project-section-image ms-5\"><!-- wp:image {\"id\":2942,\"width\":357,\"height\":253,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full is-resized\"><img src=\"" . get_theme_file_uri() . "/images/project-image1.png\" alt=\"\" class=\"wp-image-2942\" width=\"357\" height=\"253\" title=\"\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"textTransform\":\"uppercase\",\"fontSize\":\"18px\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\"} -->\n<h3 class=\"has-text-align-center has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:18px;text-transform:uppercase\">PAINTING DESIGN</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"furniture-interior-project-section-text\"} -->\n<div class=\"wp-block-column furniture-interior-project-section-text\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"25px\"}}} -->\n<h2 class=\"has-text-align-center\" style=\"font-size:25px\">OUR PROJECTS</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\"} -->\n<p class=\"has-text-align-center\">Loream ipsum&nbsp;is simply dummy text of the </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:columns {\"className\":\"furniture-interior-project-section-columns\"} -->\n<div class=\"wp-block-columns furniture-interior-project-section-columns\"><!-- wp:column {\"className\":\"furniture-interior-project-section-columns1\"} -->\n<div class=\"wp-block-column furniture-interior-project-section-columns1\"><!-- wp:image {\"id\":2948,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/images/project-image2.png\" alt=\"\" class=\"wp-image-2948\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"18px\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\"} -->\n<h3 class=\"has-text-align-center has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:18px\">LIGHTING</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"className\":\"furniture-interior-project-section-columns2\"} -->\n<div class=\"wp-block-column furniture-interior-project-section-columns2\"><!-- wp:image {\"id\":2949,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"" . get_theme_file_uri() . "/images/project-image3.png\" alt=\"\" class=\"wp-image-2949\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:heading {\"textAlign\":\"center\",\"level\":3,\"style\":{\"typography\":{\"fontSize\":\"18px\"}},\"backgroundColor\":\"black\",\"textColor\":\"white\"} -->\n<h3 class=\"has-text-align-center has-white-color has-black-background-color has-text-color has-background\" style=\"font-size:18px\">CEILING</h3>\n<!-- /wp:heading --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
		)
	);
}