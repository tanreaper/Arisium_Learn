<?php

$real_estate_hub_tp_theme_css = '';

//theme color
$real_estate_hub_tp_color_option = get_theme_mod('real_estate_hub_tp_color_option');

if($real_estate_hub_tp_color_option != false){
$real_estate_hub_tp_theme_css .='button[type="submit"], .top-header,.main-navigation .menu > ul > li.highlight,.more-btn a,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn ,#slider button[type="submit"], #return-to-top:hover,.toggle-nav i,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .error-404 [type="submit"],wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.wc-block-cart__submit-container a, .wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before {';
$real_estate_hub_tp_theme_css .='background-color: '.esc_attr($real_estate_hub_tp_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_color_option != false){
$real_estate_hub_tp_theme_css .='#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,#project h3,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a, .page-box h4 a ,.readmore-btn a, .article h2,.wp-block-heading,h2, h3,.box-content a,h1,.logo a, .logo p,.nav ul li a:hover,#theme-sidebar h2.wp-block-heading,#project .btn-box a,.box-info i ,.wc-block-components-totals-coupon a ,.wc-block-grid__product a,a.added_to_cart.wc-forward,a.wc-block-components-product-name ,a:hover,a,#theme-sidebar .wp-block-search .wp-block-search__label,#theme-sidebar .wp-block-search .wp-block-search__label,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,#theme-sidebar a:hover, #footer li a:hover, .main-navigation a:hover, #theme-sidebar .widget_tag_cloud a:hover,#footer p.wp-block-tag-cloud a:hover,#footer .tagcloud a:hover{';
$real_estate_hub_tp_theme_css .='color: '.esc_attr($real_estate_hub_tp_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_color_option != false){
$real_estate_hub_tp_theme_css .='.readmore-btn a,#footer .tagcloud a:hover,.wp-block-tag-cloud a:hover,.post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,.readmore-btn a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$real_estate_hub_tp_theme_css .='border-color: '.esc_attr($real_estate_hub_tp_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}

if($real_estate_hub_tp_color_option != false){
$real_estate_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
    $real_estate_hub_tp_theme_css .='border-left-color: '.esc_attr($real_estate_hub_tp_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_color_option != false){
$real_estate_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
    $real_estate_hub_tp_theme_css .='border-bottom-color: '.esc_attr($real_estate_hub_tp_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}

//preloader

$real_estate_hub_tp_preloader_color1_option = get_theme_mod('real_estate_hub_tp_preloader_color1_option');
$real_estate_hub_tp_preloader_color2_option = get_theme_mod('real_estate_hub_tp_preloader_color2_option');
$real_estate_hub_tp_preloader_bg_color_option = get_theme_mod('real_estate_hub_tp_preloader_bg_color_option');

if($real_estate_hub_tp_preloader_color1_option != false){
$real_estate_hub_tp_theme_css .='.center1{';
	$real_estate_hub_tp_theme_css .='border-color: '.esc_attr($real_estate_hub_tp_preloader_color1_option).' !important;';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_preloader_color1_option != false){
$real_estate_hub_tp_theme_css .='.center1 .ring::before{';
	$real_estate_hub_tp_theme_css .='background: '.esc_attr($real_estate_hub_tp_preloader_color1_option).' !important;';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_preloader_color2_option != false){
$real_estate_hub_tp_theme_css .='.center2{';
	$real_estate_hub_tp_theme_css .='border-color: '.esc_attr($real_estate_hub_tp_preloader_color2_option).' !important;';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_preloader_color2_option != false){
$real_estate_hub_tp_theme_css .='.center2 .ring::before{';
	$real_estate_hub_tp_theme_css .='background: '.esc_attr($real_estate_hub_tp_preloader_color2_option).' !important;';
$real_estate_hub_tp_theme_css .='}';
}
if($real_estate_hub_tp_preloader_bg_color_option != false){
$real_estate_hub_tp_theme_css .='.loader{';
	$real_estate_hub_tp_theme_css .='background: '.esc_attr($real_estate_hub_tp_preloader_bg_color_option).';';
$real_estate_hub_tp_theme_css .='}';
}

// footer-bg-color
$real_estate_hub_tp_footer_bg_color_option = get_theme_mod('real_estate_hub_tp_footer_bg_color_option');

if($real_estate_hub_tp_footer_bg_color_option != false){
$real_estate_hub_tp_theme_css .='#footer{';
	$real_estate_hub_tp_theme_css .='background: '.esc_attr($real_estate_hub_tp_footer_bg_color_option).' !important;';
$real_estate_hub_tp_theme_css .='}';
}