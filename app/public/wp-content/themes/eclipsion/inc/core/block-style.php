<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package eclipsion
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function eclipsion_register_block_styles() {
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-opacity',
                'label' => __('Hover: Opacity', 'eclipsion')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-white-fill',
                'label' => __('Hover: White Fill', 'eclipsion')
            )
        );
    }
    add_action('init', 'eclipsion_register_block_styles');
}
