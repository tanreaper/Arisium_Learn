<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function interior_designs_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ibtana - WordPress Website Builder', 'interior-designs' ),
			'slug'             => 'ibtana-visual-editor',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ibtana - Ecommerce Product Addons', 'interior-designs' ),
			'slug'             => 'ibtana-ecommerce-product-addons',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'interior_designs_register_recommended_plugins' );