<?php

	$real_estate_hub_tp_theme_css = "";

//body-layout
$real_estate_hub_theme_lay = get_theme_mod( 'real_estate_hub_tp_body_layout_settings','Full');
if($real_estate_hub_theme_lay == 'Container'){
$real_estate_hub_tp_theme_css .='body{';
	$real_estate_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
$real_estate_hub_tp_theme_css .='}';
$real_estate_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$real_estate_hub_tp_theme_css .='body{';
			$real_estate_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$real_estate_hub_tp_theme_css .='} }';
$real_estate_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$real_estate_hub_tp_theme_css .='position: static;';
$real_estate_hub_tp_theme_css .='}';
$real_estate_hub_tp_theme_css .='.scrolled{';
	$real_estate_hub_tp_theme_css .='width: auto; left:0; right:0;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_theme_lay == 'Container Fluid'){
$real_estate_hub_tp_theme_css .='body{';
	$real_estate_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
$real_estate_hub_tp_theme_css .='}';
$real_estate_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$real_estate_hub_tp_theme_css .='body{';
			$real_estate_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$real_estate_hub_tp_theme_css .='} }';
$real_estate_hub_tp_theme_css .='.page-template-front-page .menubar{';
	$real_estate_hub_tp_theme_css .='width: 99%';
$real_estate_hub_tp_theme_css .='}';
$real_estate_hub_tp_theme_css .='.scrolled{';
	$real_estate_hub_tp_theme_css .='width: auto; left:0; right:0;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_theme_lay == 'Full'){
$real_estate_hub_tp_theme_css .='body{';
	$real_estate_hub_tp_theme_css .='max-width: 100%;';
$real_estate_hub_tp_theme_css .='}';
}

//scrol-top
$real_estate_hub_scroll_position = get_theme_mod( 'real_estate_hub_scroll_position','Right');
if($real_estate_hub_scroll_position == 'Right'){
$real_estate_hub_tp_theme_css .='#return-to-top{';
    $real_estate_hub_tp_theme_css .='right: 20px;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_scroll_position == 'Left'){
$real_estate_hub_tp_theme_css .='#return-to-top{';
    $real_estate_hub_tp_theme_css .='left: 20px;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_scroll_position == 'Center'){
$real_estate_hub_tp_theme_css .='#return-to-top{';
    $real_estate_hub_tp_theme_css .='right: 50%;left: 50%;';
$real_estate_hub_tp_theme_css .='}';
}

//Social icon Font size
$real_estate_hub_social_icon_fontsize = get_theme_mod('real_estate_hub_social_icon_fontsize');
	$real_estate_hub_tp_theme_css .='.media-links a i{';
$real_estate_hub_tp_theme_css .='font-size: '.esc_attr($real_estate_hub_social_icon_fontsize).'px;';
$real_estate_hub_tp_theme_css .='}';

// site title font size option
$real_estate_hub_site_title_font_size = get_theme_mod('real_estate_hub_site_title_font_size', 25);{
$real_estate_hub_tp_theme_css .='.logo h1 , .logo p a{';
	$real_estate_hub_tp_theme_css .='font-size: '.esc_attr($real_estate_hub_site_title_font_size).'px;';
$real_estate_hub_tp_theme_css .='}';
}

//site tagline font size option
$real_estate_hub_site_tagline_font_size = get_theme_mod('real_estate_hub_site_tagline_font_size', 15);{
$real_estate_hub_tp_theme_css .='.logo p{';
	$real_estate_hub_tp_theme_css .='font-size: '.esc_attr($real_estate_hub_site_tagline_font_size).'px;';
$real_estate_hub_tp_theme_css .='}';
}

// related post
$real_estate_hub_related_post_mob = get_theme_mod('real_estate_hub_related_post_mob', true);
$real_estate_hub_related_post = get_theme_mod('real_estate_hub_remove_related_post', true);
$real_estate_hub_tp_theme_css .= '.related-post-block {';
if ($real_estate_hub_related_post == false) {
    $real_estate_hub_tp_theme_css .= 'display: none;';
}
$real_estate_hub_tp_theme_css .= '}';
$real_estate_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_hub_related_post == false || $real_estate_hub_related_post_mob == false) {
    $real_estate_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$real_estate_hub_tp_theme_css .= '}';

// slider search btn
$real_estate_hub_mob_search_icon = get_theme_mod('real_estate_hub_mob_search_icon', true);
$real_estate_hub_search_icon = get_theme_mod('real_estate_hub_search_icon', true);
$real_estate_hub_tp_theme_css .= '#slider .search_inner {';
if ($real_estate_hub_search_icon == false) {
    $real_estate_hub_tp_theme_css .= 'display: none;';
}
$real_estate_hub_tp_theme_css .= '}';
$real_estate_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_hub_search_icon == false || $real_estate_hub_mob_search_icon == false) {
    $real_estate_hub_tp_theme_css .= '#slider .search_inner { display: none; }';
}
$real_estate_hub_tp_theme_css .= '}';

// slider post mobile width				
$real_estate_hub_post_option_mob = get_theme_mod('real_estate_hub_post_option_mob', true);
$real_estate_hub_post_option = get_theme_mod('real_estate_hub_post_option', true);
$real_estate_hub_tp_theme_css .= '#slider .block-balck, #slider .pull-up-box{';
if ($real_estate_hub_post_option == false) {
    $real_estate_hub_tp_theme_css .= 'display: none;';
}
$real_estate_hub_tp_theme_css .= '}';
$real_estate_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_hub_post_option == false || $real_estate_hub_post_option_mob == false) {
    $real_estate_hub_tp_theme_css .= '#slider .block-balck, #slider .pull-up-box{ display: none; }';
}
$real_estate_hub_tp_theme_css .= '}';

//return to header mobile				
$real_estate_hub_return_to_header_mob = get_theme_mod('real_estate_hub_return_to_header_mob', true);
$real_estate_hub_return_to_header = get_theme_mod('real_estate_hub_return_to_header', true);
$real_estate_hub_tp_theme_css .= '.return-to-header{';
if ($real_estate_hub_return_to_header == false) {
    $real_estate_hub_tp_theme_css .= 'display: none;';
}
$real_estate_hub_tp_theme_css .= '}';
$real_estate_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($real_estate_hub_return_to_header == false || $real_estate_hub_return_to_header_mob == false) {
    $real_estate_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$real_estate_hub_tp_theme_css .= '}';


//footer image
$real_estate_hub_footer_widget_image = get_theme_mod('real_estate_hub_footer_widget_image');
if($real_estate_hub_footer_widget_image != false){
$real_estate_hub_tp_theme_css .='#footer{';
	$real_estate_hub_tp_theme_css .='background: url('.esc_attr($real_estate_hub_footer_widget_image).');';
$real_estate_hub_tp_theme_css .='}';
}

// related product
$real_estate_hub_related_product = get_theme_mod('real_estate_hub_related_product',true);
if($real_estate_hub_related_product == false){
$real_estate_hub_tp_theme_css .='.related.products{';
	$real_estate_hub_tp_theme_css .='display: none;';
$real_estate_hub_tp_theme_css .='}';
}

//menu font size
$real_estate_hub_menu_font_size = get_theme_mod('real_estate_hub_menu_font_size', 14);{
$real_estate_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$real_estate_hub_tp_theme_css .='font-size: '.esc_attr($real_estate_hub_menu_font_size).'px;';
$real_estate_hub_tp_theme_css .='}';
}

// menu text tranform
$real_estate_hub_menu_text_tranform = get_theme_mod( 'real_estate_hub_menu_text_tranform','Uppercase');
if($real_estate_hub_menu_text_tranform == 'Uppercase'){
$real_estate_hub_tp_theme_css .='.main-navigation a {';
	$real_estate_hub_tp_theme_css .='text-transform: uppercase;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_text_tranform == 'Lowercase'){
$real_estate_hub_tp_theme_css .='.main-navigation a {';
	$real_estate_hub_tp_theme_css .='text-transform: lowercase;';
$real_estate_hub_tp_theme_css .='}';
}
else if($real_estate_hub_menu_text_tranform == 'Capitalize'){
$real_estate_hub_tp_theme_css .='.main-navigation a {';
	$real_estate_hub_tp_theme_css .='text-transform: capitalize;';
$real_estate_hub_tp_theme_css .='}';
}

//sale position
$real_estate_hub_scroll_position = get_theme_mod( 'real_estate_hub_sale_tag_position','right');
if($real_estate_hub_scroll_position == 'right'){
$real_estate_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $real_estate_hub_tp_theme_css .='right: 25px !important;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_scroll_position == 'left'){
$real_estate_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $real_estate_hub_tp_theme_css .='left: 25px !important;';
$real_estate_hub_tp_theme_css .='}';
}

//Font Weight
$real_estate_hub_menu_font_weight = get_theme_mod( 'real_estate_hub_menu_font_weight','400');
if($real_estate_hub_menu_font_weight == '100'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 100;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '200'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 200;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '300'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 300;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '400'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 400;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '500'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 500;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '600'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 600;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '700'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 700;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '800'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 800;';
$real_estate_hub_tp_theme_css .='}';
}else if($real_estate_hub_menu_font_weight == '900'){
$real_estate_hub_tp_theme_css .='.main-navigation a{';
    $real_estate_hub_tp_theme_css .='font-weight: 900;';
$real_estate_hub_tp_theme_css .='}';
}

$real_estate_hub_slider_arrows = get_theme_mod( 'real_estate_hub_slider_arrows','');
if($real_estate_hub_slider_arrows == false){
$real_estate_hub_tp_theme_css .='.page-template-front-page .headerbox{';
	$real_estate_hub_tp_theme_css .='position:static;background-color:#000;';
$real_estate_hub_tp_theme_css .='}';
}