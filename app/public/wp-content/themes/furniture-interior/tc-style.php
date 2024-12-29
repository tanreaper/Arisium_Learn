<?php 
	$interior_designs_custom_css ='';

	/*------ Slider show/hide -------*/
	if(get_theme_mod('interior_designs_slider_arrows') == false){
		$interior_designs_custom_css .=' .contact-outer-box{';
			$interior_designs_custom_css .=' margin: 20px 0 0;';
		$interior_designs_custom_css .='}';
	}

	// Breadcrumb bg color option
	$interior_designs_breadcrumb_background_color = get_theme_mod('interior_designs_breadcrumb_background_color');
	$interior_designs_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$interior_designs_custom_css .='background: '.esc_attr($interior_designs_breadcrumb_background_color).'!important;';
	$interior_designs_custom_css .='}';

	// Category bg color option
	$interior_designs_category_background_color = get_theme_mod('interior_designs_category_background_color');
	$interior_designs_custom_css .='.post-categories a{';
		$interior_designs_custom_css .='background:'.esc_attr($interior_designs_category_background_color).'!important;';
	$interior_designs_custom_css .='}';