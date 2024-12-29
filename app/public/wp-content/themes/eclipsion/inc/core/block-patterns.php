<?php

/**
 * eclipsion: Block Patterns
 *
 * @since eclipsion 1.0.0
 */

/**
 * Registers pattern categories for eclipsion
 *
 * @since eclipsion 1.0.0
 *
 * @return void
 */
function eclipsion_register_pattern_category()
{
	$block_pattern_categories = array(
		'eclipsion' => array('label' => __('Eclipsion', 'eclipsion')),
	);

	$block_pattern_categories = apply_filters('eclipsion_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'eclipsion_register_pattern_category', 9);
