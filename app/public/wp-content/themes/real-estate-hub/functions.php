<?php
/**
 * Real Estate Hub functions and definitions
 *
 * @package Real Estate Hub
 * @subpackage real_estate_hub
 */

function real_estate_hub_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( "responsive-embeds" );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'real-estate-hub-featured-image', 2000, 1200, true );
	add_image_size( 'real-estate-hub-thumbnail-avatar', 100, 100, true );

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary-menu'    => __( 'Primary Menu', 'real-estate-hub' ),
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_theme_support( 'html5', array('comment-form','comment-list','gallery','caption',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', real_estate_hub_fonts_url() ) );
}
add_action( 'after_setup_theme', 'real_estate_hub_setup' );

/**
 * Register custom fonts.
 */
function real_estate_hub_fonts_url(){
	$real_estate_hub_font_url = '';
	$real_estate_hub_font_family = array();
	$real_estate_hub_font_family[] = 'Instrument Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';

	$real_estate_hub_font_family[] = 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Bad Script';
	$real_estate_hub_font_family[] = 'Bebas Neue';
	$real_estate_hub_font_family[] = 'Fjalla One';
	$real_estate_hub_font_family[] = 'PT Sans:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'PT Serif:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900';
	$real_estate_hub_font_family[] = 'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$real_estate_hub_font_family[] = 'Alex Brush';
	$real_estate_hub_font_family[] = 'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Playball';
	$real_estate_hub_font_family[] = 'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Julius Sans One';
	$real_estate_hub_font_family[] = 'Arsenal:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Slabo 13px';
	$real_estate_hub_font_family[] = 'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900';
	$real_estate_hub_font_family[] = 'Overpass Mono:wght@300;400;500;600;700';
	$real_estate_hub_font_family[] = 'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900';
	$real_estate_hub_font_family[] = 'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900';
	$real_estate_hub_font_family[] = 'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700';
	$real_estate_hub_font_family[] = 'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Quicksand:wght@300;400;500;600;700';
	$real_estate_hub_font_family[] = 'Padauk:wght@400;700';
	$real_estate_hub_font_family[] = 'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$real_estate_hub_font_family[] = 'Inconsolata:wght@200;300;400;500;600;700;800;900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$real_estate_hub_font_family[] = 'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000';
	$real_estate_hub_font_family[] = 'Pacifico';
	$real_estate_hub_font_family[] = 'Indie Flower';
	$real_estate_hub_font_family[] = 'VT323';
	$real_estate_hub_font_family[] = 'Dosis:wght@200;300;400;500;600;700;800';
	$real_estate_hub_font_family[] = 'Frank Ruhl Libre:wght@300;400;500;700;900';
	$real_estate_hub_font_family[] = 'Fjalla One';
	$real_estate_hub_font_family[] = 'Figtree:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Oxygen:wght@300;400;700';
	$real_estate_hub_font_family[] = 'Arvo:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Noto Serif:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Lobster';
	$real_estate_hub_font_family[] = 'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700';
	$real_estate_hub_font_family[] = 'Yanone Kaffeesatz:wght@200;300;400;500;600;700';
	$real_estate_hub_font_family[] = 'Anton';
	$real_estate_hub_font_family[] = 'Libre Baskerville:ital,wght@0,400;0,700;1,400';
	$real_estate_hub_font_family[] = 'Bree Serif';
	$real_estate_hub_font_family[] = 'Gloria Hallelujah';
	$real_estate_hub_font_family[] = 'Abril Fatface';
	$real_estate_hub_font_family[] = 'Varela Round';
	$real_estate_hub_font_family[] = 'Vampiro One';
	$real_estate_hub_font_family[] = 'Shadows Into Light';
	$real_estate_hub_font_family[] = 'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Rokkitt:wght@100;200;300;400;500;600;700;800;900';
	$real_estate_hub_font_family[] = 'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Francois One';
	$real_estate_hub_font_family[] = 'Orbitron:wght@400;500;600;700;800;900';
	$real_estate_hub_font_family[] = 'Patua One';
	$real_estate_hub_font_family[] = 'Acme';
	$real_estate_hub_font_family[] = 'Satisfy';
	$real_estate_hub_font_family[] = 'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Architects Daughter';
	$real_estate_hub_font_family[] = 'Russo One';
	$real_estate_hub_font_family[] = 'Monda:wght@400;700';
	$real_estate_hub_font_family[] = 'Righteous';
	$real_estate_hub_font_family[] = 'Lobster Two:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Hammersmith One';
	$real_estate_hub_font_family[] = 'Courgette';
	$real_estate_hub_font_family[] = 'Permanent Marke';
	$real_estate_hub_font_family[] = 'Cherry Swash:wght@400;700';
	$real_estate_hub_font_family[] = 'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
	$real_estate_hub_font_family[] = 'Poiret One';
	$real_estate_hub_font_family[] = 'BenchNine:wght@300;400;700';
	$real_estate_hub_font_family[] = 'Economica:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Handlee';
	$real_estate_hub_font_family[] = 'Cardo:ital,wght@0,400;0,700;1,400';
	$real_estate_hub_font_family[] = 'Alfa Slab One';
	$real_estate_hub_font_family[] = 'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700';
	$real_estate_hub_font_family[] = 'Cookie';
	$real_estate_hub_font_family[] = 'Chewy';
	$real_estate_hub_font_family[] = 'Great Vibes';
	$real_estate_hub_font_family[] = 'Coming Soon';
	$real_estate_hub_font_family[] = 'Philosopher:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Days One';
	$real_estate_hub_font_family[] = 'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Shrikhand';
	$real_estate_hub_font_family[] = 'Tangerine:wght@400;700';
	$real_estate_hub_font_family[] = 'IM Fell English SC';
	$real_estate_hub_font_family[] = 'Boogaloo';
	$real_estate_hub_font_family[] = 'Bangers';
	$real_estate_hub_font_family[] = 'Fredoka One';
	$real_estate_hub_font_family[] = 'Volkhov:ital,wght@0,400;0,700;1,400;1,700';
	$real_estate_hub_font_family[] = 'Shadows Into Light Two';
	$real_estate_hub_font_family[] = 'Marck Script';
	$real_estate_hub_font_family[] = 'Sacramento';
	$real_estate_hub_font_family[] = 'Unica One';
	$real_estate_hub_font_family[] = 'Dancing Script:wght@400;500;600;700';
	$real_estate_hub_font_family[] = 'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900';
	$real_estate_hub_font_family[] = 'DM Serif Display:ital@0;1';
	$real_estate_hub_font_family[] = 'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800';

	$real_estate_hub_query_args = array(
		'family'	=> rawurlencode(implode('|',$real_estate_hub_font_family)),
	);
	$real_estate_hub_font_url = add_query_arg($real_estate_hub_query_args,'//fonts.googleapis.com/css');
	return $real_estate_hub_font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $real_estate_hub_font_url ) );
}

/**
 * Register widget area.
 */
function real_estate_hub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'real-estate-hub' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'real-estate-hub' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar on pages.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'real-estate-hub' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'real-estate-hub' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'real-estate-hub' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'real-estate-hub' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'real-estate-hub' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'real-estate-hub' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'real_estate_hub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function real_estate_hub_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'real-estate-hub-fonts', real_estate_hub_fonts_url(), array(), null );

	// Bootstrap
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( '/assets/css/bootstrap.css' ) );

	// Theme stylesheet.
	wp_enqueue_style( 'real-estate-hub-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/tp-theme-color.php' );
	wp_add_inline_style( 'real-estate-hub-style',$real_estate_hub_tp_theme_css );
	require get_parent_theme_file_path( '/tp-body-width-layout.php' );
	wp_add_inline_style( 'real-estate-hub-style',$real_estate_hub_tp_theme_css );
	wp_style_add_data('real-estate-hub-style', 'rtl', 'replace');

	// Theme block stylesheet.
	wp_enqueue_style( 'real-estate-hub-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'real-estate-hub-style' ), '1.0' );

	// Fontawesome
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri( '/assets/css/fontawesome-all.css' ) );

	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.js' ), array( 'jquery' ), true );

	wp_enqueue_script( 'real-estate-hub-custom-scripts', esc_url( get_template_directory_uri() ) . '/assets/js/custom.js', array('jquery'), true );

	wp_enqueue_script( 'real-estate-hub-focus-nav', esc_url( get_template_directory_uri() ) . '/assets/js/focus-nav.js', array('jquery'), true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$real_estate_hub_body_font_family = get_theme_mod('real_estate_hub_body_font_family', '');

	$real_estate_hub_heading_font_family = get_theme_mod('real_estate_hub_heading_font_family', '');

	$real_estate_hub_menu_font_family = get_theme_mod('real_estate_hub_menu_font_family', '');

	$real_estate_hub_tp_theme_css = '
		body{
		    font-family: '.esc_html($real_estate_hub_body_font_family).';
		}
		.more-btn a{
		    font-family: '.esc_html($real_estate_hub_body_font_family).';
		}
		h1{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		h2{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		h3{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		h4{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		h5{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		h6{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		#theme-sidebar .wp-block-search .wp-block-search__label{
		    font-family: '.esc_html($real_estate_hub_heading_font_family).';
		}
		.menubar{
		    font-family: '.esc_html($real_estate_hub_menu_font_family).';
		}
	';
	wp_add_inline_style('real-estate-hub-style', $real_estate_hub_tp_theme_css);
}
add_action( 'wp_enqueue_scripts', 'real_estate_hub_scripts' );

/*radio button sanitization*/
function real_estate_hub_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

define('REAL_ESTATE_HUB_CREDIT',__('https://www.themespride.com/products/free-real-estate-wordpress-theme','real-estate-hub') );
if ( ! function_exists( 'real_estate_hub_credit' ) ) {
	function real_estate_hub_credit(){
		echo "<a href=".esc_url(REAL_ESTATE_HUB_CREDIT)." target='_blank'>".esc_html__(get_theme_mod('real_estate_hub_footer_text',__('Real Estate Hub WordPress Theme','real-estate-hub')))."</a>";
	}
}

//Admin Enqueue for Admin
function real_estate_hub_admin_enqueue_scripts(){
	wp_enqueue_style('real-estate-hub-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/admin.css');
	wp_enqueue_script( 'real-estate-hub-custom-scripts', esc_url( get_template_directory_uri() ). '/assets/js/real-estate-hub-custom.js', array('jquery'), true);
	wp_register_script( 'real-estate-hub-admin-script', get_template_directory_uri() . '/assets/js/real-estate-hub-admin.js', array( 'jquery' ), '', true );

	wp_localize_script(
		'real-estate-hub-admin-script',
		'real_estate_hub',
		array(
			'admin_ajax'	=>	admin_url('admin-ajax.php'),
			'wpnonce'			=>	wp_create_nonce('real_estate_hub_dismissed_notice_nonce')
		)
	);
	wp_enqueue_script('real-estate-hub-admin-script');

    wp_localize_script( 'real-estate-hub-admin-script', 'real_estate_hub_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'real_estate_hub_admin_enqueue_scripts' );

// Sanitize Sortable control.
function real_estate_hub_sanitize_sortable( $val, $setting ) {
	if ( is_string( $val ) || is_numeric( $val ) ) {
		return array(
			esc_attr( $val ),
		);
	}
	$sanitized_value = array();
	foreach ( $val as $item ) {
		if ( isset( $setting->manager->get_control( $setting->id )->choices[ $item ] ) ) {
			$sanitized_value[] = esc_attr( $item );
		}
	}
	return $sanitized_value;
}
/* Excerpt Limit Begin */
function real_estate_hub_excerpt_function($excerpt_count = 35) {
    $real_estate_hub_excerpt = get_the_excerpt();

    $real_estate_hub_text_excerpt = wp_strip_all_tags($real_estate_hub_excerpt);

    $real_estate_hub_excerpt_limit = esc_attr(get_theme_mod('real_estate_hub_excerpt_count', $excerpt_count));

    $real_estate_hub_theme_excerpt = implode(' ', array_slice(explode(' ', $real_estate_hub_text_excerpt), 0, $real_estate_hub_excerpt_limit));

    return $real_estate_hub_theme_excerpt;
}
function real_estate_hub_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function real_estate_hub_sanitize_dropdown_pages( $page_id, $setting ) {
	$page_id = absint( $page_id );
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function real_estate_hub_sanitize_checkbox( $input ) {
	// Boolean check
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function real_estate_hub_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );

	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

function real_estate_hub_sanitize_number_range( $number, $setting ) {

	// Ensure input is an absolute integer.
	$number = absint( $number );

	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;

	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );

	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );

	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

// Category count 
function real_estate_hub_display_post_category_count() {
    $real_estate_hub_category = get_the_category();
    $real_estate_hub_category_count = ($real_estate_hub_category) ? count($real_estate_hub_category) : 0;
    $real_estate_hub_category_text = ($real_estate_hub_category_count === 1) ? 'category' : 'categories'; // Check for pluralization
    echo $real_estate_hub_category_count . ' ' . $real_estate_hub_category_text;
}

//post tag
function custom_tags_filter($real_estate_hub_tag_list) {
    // Replace the comma (,) with an empty string
    $real_estate_hub_tag_list = str_replace(', ', '', $real_estate_hub_tag_list);

    return $real_estate_hub_tag_list;
}
add_filter('the_tags', 'custom_tags_filter');

function custom_output_tags() {
    $real_estate_hub_tags = get_the_tags();

    if ($real_estate_hub_tags) {
        $real_estate_hub_tags_output = '<div class="post_tag">Tags: ';

        $real_estate_hub_first_tag = reset($real_estate_hub_tags);

        foreach ($real_estate_hub_tags as $tag) {
            $real_estate_hub_tags_output .= '<a href="' . esc_url(get_tag_link($tag)) . '" rel="tag" class="me-2">' . esc_html($tag->name) . '</a>';
            if ($tag !== $real_estate_hub_first_tag) {
                $real_estate_hub_tags_output .= ' ';
            }
        }

        $real_estate_hub_tags_output .= '</div>';

        echo $real_estate_hub_tags_output;
    }
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'real_estate_hub_loop_columns');
if (!function_exists('real_estate_hub_loop_columns')) {
	function real_estate_hub_loop_columns() {
		$columns = get_theme_mod( 'real_estate_hub_per_columns', 3 );
		return $columns;
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'real_estate_hub_per_page', 20 );
function real_estate_hub_per_page( $real_estate_hub_cols ) {
  	$real_estate_hub_cols = get_theme_mod( 'real_estate_hub_product_per_page', 9 );
	return $real_estate_hub_cols;
}

/**
 * Use front-page.php when Front page displays is set to a static page.
 */
function real_estate_hub_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'real_estate_hub_front_page_template' );

add_action( 'wp_ajax_real_estate_hub_dismissed_notice_handler', 'real_estate_hub_ajax_notice_handler' );

function real_estate_hub_ajax_notice_handler() {
	if (!wp_verify_nonce($_POST['wpnonce'], 'real_estate_hub_dismissed_notice_nonce')) {
		exit;
	}
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function real_estate_hub_activation_notice() { 

	if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

    <div class="real-estate-hub-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="real-estate-hub-getting-started-notice clearfix">
            <div class="real-estate-hub-theme-notice-content">
                <h2 class="real-estate-hub-notice-h2">
                    <?php
                printf(
                /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                    esc_html__( 'Welcome! Thank you for choosing %1$s!', 'real-estate-hub' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                ?>
                </h2>

                <p class="plugin-install-notice"><?php echo sprintf(__('Click here to get started with the theme set-up.', 'real-estate-hub')) ?></p>

                <a class="real-estate-hub-btn-get-started button button-primary button-hero real-estate-hub-button-padding" href="<?php echo esc_url( admin_url( 'themes.php?page=real-estate-hub-about' )); ?>" ><?php esc_html_e( 'Get started', 'real-estate-hub' ) ?></a><span class="real-estate-hub-push-down">
                <?php
                    /* translators: %1$s: Anchor link start %2$s: Anchor link end */
                    printf(
                        'or %1$sCustomize theme%2$s</a></span>',
                        '<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
                        '</a>'
                    );
                ?>
            </div>
        </div>
    </div>
<?php }

}

add_action( 'admin_notices', 'real_estate_hub_activation_notice' );

add_action('after_switch_theme', 'real_estate_hub_setup_options');
function real_estate_hub_setup_options () {
    update_option('dismissed-get_started', FALSE );
}



/**
 * Logo Custamization.
 */

function real_estate_hub_logo_width(){

	$real_estate_hub_logo_width   = get_theme_mod( 'real_estate_hub_logo_width', 150 );

	echo "<style type='text/css' media='all'>"; ?>
		img.custom-logo{
		    width: <?php echo absint( $real_estate_hub_logo_width ); ?>px;
		    max-width: 100%;
		}
	<?php echo "</style>";
}

add_action( 'wp_head', 'real_estate_hub_logo_width' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * About Theme Page
 */
require get_parent_theme_file_path( '/inc/about-theme.php' );

/**
 * Load Theme Web File
 */
require get_parent_theme_file_path('/inc/wptt-webfont-loader.php' );
/**
 * Load Toggle file
 */
require get_parent_theme_file_path( '/inc/controls/customize-control-toggle.php' );

/**
 * load sortable file
 */
require get_parent_theme_file_path( '/inc/controls/sortable-control.php' ); 

// offer Meta
function real_estate_hub_bn_custom_meta_offer() {
    add_meta_box( 'bn_meta', __( 'Apartment Flat Meta Feilds', 'real-estate-hub' ), 'real_estate_hub_meta_callback_projects', 'post', 'normal', 'high' );
}
/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'real_estate_hub_bn_custom_meta_offer');
}

function real_estate_hub_meta_callback_projects( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'real_estate_hub_projects_meta_nonce' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $real_estate_hub_bedroom_no = get_post_meta( $post->ID, 'real_estate_hub_bedroom_no', true );
    $real_estate_hub_bathroom_no = get_post_meta( $post->ID, 'real_estate_hub_bathroom_no', true );
    $real_estate_hub_square_feet_no = get_post_meta( $post->ID, 'real_estate_hub_square_feet_no', true );
    $real_estate_hub_price_no = get_post_meta( $post->ID, 'real_estate_hub_price_no', true );
    ?>
    <div id="testimonials_custom_stuff">
        <table id="list">
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-8">
                    <td class="left">
                        <?php esc_html_e( 'No of Bedroom', 'real-estate-hub' )?>
                    </td>
                    <td class="left">
                        <input type="text" name="real_estate_hub_bedroom_no" id="real_estate_hub_bedroom_no" value="<?php echo esc_attr($real_estate_hub_bedroom_no); ?>" />
                    </td>
                </tr>
                <tr id="meta-8">
                    <td class="left">
                        <?php esc_html_e( 'No of Bathroom', 'real-estate-hub' )?>
                    </td>
                    <td class="left">
                        <input type="text" name="real_estate_hub_bathroom_no" id="real_estate_hub_bathroom_no" value="<?php echo esc_attr($real_estate_hub_bathroom_no); ?>" />
                    </td>
                </tr>
               <tr id="meta-8">
                    <td class="left">
                        <?php esc_html_e( 'No of Square Feet', 'real-estate-hub' )?>
                    </td>
                    <td class="left">
                        <input type="text" name="real_estate_hub_square_feet_no" id="real_estate_hub_square_feet_no" value="<?php echo esc_attr($real_estate_hub_square_feet_no); ?>" />
                    </td>
                </tr>
                <tr id="meta-8">
                    <td class="left">
                        <?php esc_html_e( 'Price of Flat', 'real-estate-hub' )?>
                    </td>
                    <td class="left">
                        <input type="text" name="real_estate_hub_price_no" id="real_estate_hub_price_no" value="<?php echo esc_attr($real_estate_hub_price_no); ?>" />
                    </td>
                </tr> 
            </tbody>
        </table>
    </div>
    <?php
}

/* Saves the custom meta input */
function real_estate_hub_bn_metadesig_save( $post_id ) {
    if (!isset($_POST['real_estate_hub_projects_meta_nonce']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['real_estate_hub_projects_meta_nonce']) ), basename(__FILE__))) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Goal Amount
    if( isset( $_POST[ 'real_estate_hub_bedroom_no' ] ) ) {
        update_post_meta( $post_id, 'real_estate_hub_bedroom_no', strip_tags( wp_unslash( $_POST[ 'real_estate_hub_bedroom_no' ]) ) );
    }
    // Save Raise amount
    if( isset( $_POST[ 'real_estate_hub_bathroom_no' ] ) ) {
        update_post_meta( $post_id, 'real_estate_hub_bathroom_no', strip_tags( wp_unslash( $_POST[ 'real_estate_hub_bathroom_no' ]) ) );
    }
     // Save Raise amount
    if( isset( $_POST[ 'real_estate_hub_square_feet_no' ] ) ) {
        update_post_meta( $post_id, 'real_estate_hub_square_feet_no', strip_tags( wp_unslash( $_POST[ 'real_estate_hub_square_feet_no' ]) ) );
    }
     // Save Raise amount
    if( isset( $_POST[ 'real_estate_hub_price_no' ] ) ) {
        update_post_meta( $post_id, 'real_estate_hub_price_no', strip_tags( wp_unslash( $_POST[ 'real_estate_hub_price_no' ]) ) );
    }
}
add_action( 'save_post', 'real_estate_hub_bn_metadesig_save' );
