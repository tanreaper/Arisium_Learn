<?php
/**
 * Theme functions and definitions
 *
 * @package Furniture Designs
 */ 

if ( ! function_exists( 'furniture_interior_enqueue_styles' ) ) :
	/**
	 * Load assets.
	 *
	 * @since 1.0.0
	 */
	function furniture_interior_enqueue_styles() {
		wp_enqueue_style( 'furniture-interior-style-parent', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'furniture-interior-block-patterns-style-frontend', get_theme_file_uri('/css/block-frontend.css') );
		wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
		wp_enqueue_style( 'furniture-interior-style', get_stylesheet_directory_uri() . '/style.css', array( 'furniture-interior-style-parent' ), '1.0.0' );
		require get_parent_theme_file_path( '/tc-style.php' );
		wp_add_inline_style( 'furniture-interior-style',$interior_designs_custom_css );
		require get_theme_file_path( '/tc-style.php' );
		wp_add_inline_style( 'furniture-interior-style',$interior_designs_custom_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'furniture_interior_enqueue_styles', 99 );

/**
 * Enqueue block editor style
 */
function furniture_interior_block_editor_styles() {
	wp_enqueue_style( 'interior-designs-font', interior_designs_font_url(), array() );
	wp_enqueue_style( 'furniture-interior-block-patterns-style-editor', get_theme_file_uri( '/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.css' );
}
add_action( 'enqueue_block_editor_assets', 'furniture_interior_block_editor_styles' );

/* Customizer */
require get_stylesheet_directory() . '/inc/customizer.php';

function furniture_interior_customize_register() {
	global $wp_customize;
	$wp_customize->remove_setting( 'interior_designs_theme_color_first' );
	$wp_customize->remove_control( 'interior_designs_theme_color_first' );
	$wp_customize->remove_setting( 'interior_designs_theme_color_second' );
	$wp_customize->remove_control( 'interior_designs_theme_color_second' );
	$wp_customize->remove_section( 'interior_designs_discover' );
	$wp_customize->remove_section( 'interior_designs_services' );
	$wp_customize->remove_section( 'interior_designs_about_theme' );
	$wp_customize->remove_setting( 'interior_designs_menu_settings_premium_features' );
	$wp_customize->remove_control( 'interior_designs_menu_settings_premium_features' );
	$wp_customize->remove_setting( 'interior_designs_service_settings_premium_features' );
	$wp_customize->remove_control( 'interior_designs_service_settings_premium_features' );
	$wp_customize->remove_setting( 'interior_designs_post_settings_premium_features' );
	$wp_customize->remove_control( 'interior_designs_post_settings_premium_features' );

	//Slider Section

	$wp_customize->add_setting('interior_designs_discover_button_text',array(
        'default'=> 'DISCOVER MORE',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('interior_designs_discover_button_text',array(
        'label' => __('Add Slider Button Text','furniture-interior'),
        'section'=> 'interior_designs_slidersettings',
        'type'=> 'text'
    ));

    $wp_customize->add_setting('interior_design_slider_button_link',array(
        'default'=> '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('interior_design_slider_button_link',array(
        'label' => esc_html__('Add Button Link','furniture-interior'),
        'section'=> 'interior_designs_slidersettings',
        'type'=> 'url'
    ));

	//About Section
		$wp_customize->add_section( 'furniture_interior_about_theme' , array(
	    	'title' => esc_html__( 'About Theme', 'furniture-interior' ),
	    	'priority' => 10,
		) );

		$wp_customize->add_setting('furniture_interior_demo_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('furniture_interior_demo_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Demo','furniture-interior') ."</h3><p>". esc_html('Our premium version of Furniture Interior has unlimited sections with advanced control fields. Dedicated support and no limititation in any field.','furniture-interior') ."</p> <a target='_blank' href='". esc_url('https://preview.themescaliber.com/interior-designs-pro/') ." '>". esc_html('View Demo','furniture-interior') ."</a>",
			'section'=> 'furniture_interior_about_theme'
		));
		
		$wp_customize->add_setting('furniture_interior_doc_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('furniture_interior_doc_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Documentation','furniture-interior') ."</h3><p>". esc_html('We have well prepared documentation that provides the general guidelines and suggestions needed for this theme.','furniture-interior') ."</p> <a target='_blank' href='". esc_url('https://preview.themescaliber.com/doc/free-furniture-interior/') ." '>". esc_html('View Documentation','furniture-interior') ."</a>",
			'section'=> 'furniture_interior_about_theme'
		));

		$wp_customize->add_setting('furniture_interior_forum_link',array(
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('furniture_interior_forum_link',array(
			'type'=> 'hidden',
			'description' => "<h3>". esc_html('Theme Support','furniture-interior') ."</h3><p>". esc_html('Regarding any theme issue, we offer 24/7 support. You can get assistance from our support staff in resolving any problem. Please get in touch with us.','furniture-interior') ."</p><a target='_blank' href='". esc_url('https://wordpress.org/support/theme/furniture-interior/') ." '>". esc_html('Support Forum','furniture-interior') ."</a>",
			'section'=> 'furniture_interior_about_theme'
		));

		$wp_customize->add_setting( 'furniture_interior_menu_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('furniture_interior_menu_settings_premium_features', array(
	    	'type'=> 'hidden',
	        'description' => "<h3>". esc_html('More Features in the Premium Version!','furniture-interior') ."</h3>
	        	<ul>
	        		<li>". esc_html('Menu Background Colors','furniture-interior') ."</li>
	        		<li>". esc_html('Menu Item Fonts','furniture-interior') ."</li>
	        		<li>". esc_html('Responsive Menu Colors','furniture-interior') ."</li>
	        		<li>". esc_html('Header Search Icons Colors','furniture-interior') ."</li>
	        		<li>". esc_html('... and Other Premium Features','furniture-interior') ."</li>
	        	</ul>
	        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/products/interior-design-wordpress-theme') ." '>". esc_html('Upgrade Now','furniture-interior') ."</a>",
	        'section' => 'interior_designs_header'
	        )
	    );


		$wp_customize->add_setting( 'furniture_interior_post_settings_premium_features',array(
        'sanitize_callback' => 'sanitize_text_field'
	    ));
	    $wp_customize->add_control('furniture_interior_post_settings_premium_features', array(
	    	'type'=> 'hidden',
	        'description' => "<h3>". esc_html('More Features in the Premium Version!','furniture-interior') ."</h3>
	        	<ul>
	        		<li>". esc_html('Section Heading Option','furniture-interior') ."</li>
	        		<li>". esc_html('Animated Elements Colors','furniture-interior') ."</li>
	        		<li>". esc_html('... and Other Premium Features','furniture-interior') ."</li>
	        	</ul>
	        	<a target='_blank' href='". esc_url('https://www.themescaliber.com/products/interior-design-wordpress-theme') ." '>". esc_html('Upgrade Now','furniture-interior') ."</a>",
	        'section' => 'interior_designs_blog_post'
	        )
	    );

	    $wp_customize->add_setting('furniture_interior_slider_prev_icon',array(
		'default'	=> 'fas fa-arrow-left',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new interior_designs_Icon_Changer(
	        $wp_customize,'furniture_interior_slider_prev_icon',array(
			'label'	=>__('Add Slider Prev Icon','furniture-interior'),
			'transport' => 'refresh',
			'section'	=> 'interior_designs_slidersettings',
			'setting'	=> 'furniture_interior_slider_prev_icon',
			'type'		=> 'icon',
		)));

		$wp_customize->add_setting('furniture_interior_slider_next_icon',array(
			'default'	=> 'fas fa-arrow-right',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control(new interior_designs_Icon_Changer(
	        $wp_customize,'furniture_interior_slider_next_icon',array(
			'label'	=> __('Add Slider Next Icon','furniture-interior'),
			'transport' => 'refresh',
			'section'	=> 'interior_designs_slidersettings',
			'setting'	=> 'furniture_interior_slider_next_icon',
			'type'		=> 'icon',
		)));
}
add_action( 'customize_register', 'furniture_interior_customize_register', 11 );

require_once( ABSPATH . WPINC . '/class-wp-customize-section.php' );

class Furniture_Interior_Customize_Section_Pro extends WP_Customize_Section {

    /**
     * Outputs the Underscore.js template.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    protected function render_template() { ?>

        <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
            <h3 class="accordion-section-title">
                {{ data.title }}

                <# if ( data.pro_text && data.pro_url ) { #>
                    <a href="{{ data.pro_url }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text }}</a>
                <# } #>
            </h3>
        </li>
    <?php }
}


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Furniture_Interior_Customize {

    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {

        static $instance = null;

        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }

        return $instance;
    }

    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}

    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {

        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );

        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }

    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {

        // Register custom section types.
        $manager->register_section_type( 'Furniture_Interior_Customize_Section_Pro' );

    }

    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */

    public function enqueue_control_scripts() {
        wp_enqueue_style( 'furniture_interior-customize-controls', get_stylesheet_directory_uri() . '/css/customize-controls-child.css' );
    }
}

// Doing this customizer thang!
Furniture_Interior_Customize::get_instance();


/* Theme Setup */
if ( ! function_exists( 'furniture_interior_setup' ) ) :

function furniture_interior_setup() {

	$GLOBALS['content_width'] = apply_filters( 'furniture_interior_content_width', 640 );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('furniture-interior-homepage-thumb',240,145,true);

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	add_theme_support ('html5', array (
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

	add_theme_support('responsive-embeds');

	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	add_editor_style( array( 'css/editor-style.css', interior_designs_font_url() ) );
}

endif;
add_action( 'after_setup_theme', 'furniture_interior_setup' );

function furniture_interior_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'furniture-interior' ),
		'description'   => __( 'Appears on blog page sidebar', 'furniture-interior' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-4 p-2">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title pt-0">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'furniture_interior_widgets_init' );

function furniture_interior_enqueue_comments_reply() {
    if( is_singular() && comments_open() && ( get_option( 'thread_comments' ) == 1) ) {
        wp_enqueue_script( 'comment-reply', '/wp-includes/js/comment-reply.min.js', array(), false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'furniture_interior_enqueue_comments_reply' );

// url
define('FURNITURE_INTERIOR_SITE_URL',__('https://www.themescaliber.com/products/free-furniture-interior-wordpress-theme','furniture-interior'));
define('FURNITURE_INTERIOR_FREE_THEME_DOC',__('https://preview.themescaliber.com/doc/free-furniture-interior/','furniture-interior'));
define('FURNITURE_INTERIOR_SUPPORT',__('https://wordpress.org/support/theme/furniture-interior/','furniture-interior'));
define('FURNITURE_INTERIOR_REVIEW',__('https://wordpress.org/support/theme/furniture-interior/reviews/','furniture-interior'));

function furniture_interior_credit_link() {
    echo "<a href=".esc_url(FURNITURE_INTERIOR_SITE_URL)." target='_blank'>".esc_html__('Furniture Interior WordPress Theme','furniture-interior')."</a>";
}

// if ( ! defined( 'INTERIOR_DESIGNS_PRO_URL' ) ) {
// 	define( 'INTERIOR_DESIGNS_PRO_URL', esc_url('https://www.themescaliber.com/products/interior-design-wordpress-theme'));
// }


/* Implement the get started page */
require get_theme_file_path() . '/inc/dashboard/getstart.php';

/* Block Pattern */
require get_theme_file_path() . '/block-patterns.php';