<?php
//about theme info
add_action( 'admin_menu', 'furniture_interior_gettingstarted' );
function furniture_interior_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'furniture-interior'), esc_html__('Get Started', 'furniture-interior'), 'edit_theme_options', 'furniture_interior_guide', 'furniture_interior_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function furniture_interior_admin_theme_style() {
   wp_enqueue_style('furniture-interior-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_theme_file_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'furniture_interior_admin_theme_style');

//guidline for about theme
function furniture_interior_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'furniture-interior' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="furniture_interior_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'furniture-interior' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="furniture_interior_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'furniture-interior' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="furniture_interior_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'furniture-interior' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Furniture Interior Theme', 'furniture-interior' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( FURNITURE_INTERIOR_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'furniture-interior' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'furniture-interior'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'furniture-interior'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/dashboard/images/screenshot.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'Furniture Interior is a stunningly magnificent theme with a responsive layout that suits perfectly the needs of decoration businesses, architecture firms, furniture houses and home decor, sofa, dining table, interior designers, Multi-Family house. Built-in kitchens etc. It is also suitable for industries that are related to the manufacturing of interior designing materials, false ceiling makers, and relevant businesses. This professional and exceedingly stylish theme comprises excellent content spaces and sections and embraces a strong powerful Bootstrap-based design that makes it easily editable. With very little effort required on your part, you can easily customize the design with the help of the personalization options given in the intuitive theme options panel. Its use is not confined only to a single niche as you can easily modify it and use it as a multipurpose theme. Call To Action Button (CTA) makes it interactive and along with this, there are stunning CSS animations. The clean and secure codes make it quick to work and pages to load at lightning-fast speed. Social media icons are extremely useful for making your appearance on social media platforms as well. Along with that, you will find the testimonial section, team section, banner, and plenty of shortcodes included as a part of this theme.', 'furniture-interior' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Furniture Interior Theme Information', 'furniture-interior' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_theme_file_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( INTERIOR_DESIGNS_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'furniture-interior' ); ?></a></p>
				<p><a href="<?php echo esc_url( INTERIOR_DESIGNS_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'furniture-interior' ); ?></a></p>
				<p><a href="<?php echo esc_url( INTERIOR_DESIGNS_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'furniture-interior' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Furniture Interior Pro Theme', 'furniture-interior' ); ?></h4>
				<P><?php esc_html_e( 'Furniture Interior is a stunningly magnificent theme with a responsive layout that suits perfectly the needs of decoration businesses, architecture firms, furniture houses and home decor, sofa, dining table, interior designers, Multi-Family house. Built-in kitchens etc. It is also suitable for industries that are related to the manufacturing of interior designing materials, false ceiling makers, and relevant businesses. This professional and exceedingly stylish theme comprises excellent content spaces and sections and embraces a strong powerful Bootstrap-based design that makes it easily editable. With very little effort required on your part, you can easily customize the design with the help of the personalization options given in the intuitive theme options panel. Its use is not confined only to a single niche as you can easily modify it and use it as a multipurpose theme. Call To Action Button (CTA) makes it interactive and along with this, there are stunning CSS animations. The clean and secure codes make it quick to work and pages to load at lightning-fast speed. Social media icons are extremely useful for making your appearance on social media platforms as well. Along with that, you will find the testimonial section, team section, banner, and plenty of shortcodes included as a part of this theme.', 'furniture-interior' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Theme Features', 'furniture-interior' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Simple Menu Option', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Additional section for products', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with unlimited slides', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Partner Section', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Promotional Banner Section for Products', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Seperate Newsletter Section', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Text and call to action button for each slides', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Banner & Post Type Plugin Functionality', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Product Sliders', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Slider', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Posttype', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Testimonial Listing With Shortcode', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Contact page template', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Contact Widget', 'furniture-interior' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'furniture-interior' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'furniture-interior' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'furniture-interior' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'furniture-interior' ); ?></P>
					<a href="<?php echo esc_url( FURNITURE_INTERIOR_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'furniture-interior' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'furniture-interior'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'furniture-interior' ); ?></P>
					<a href="<?php echo esc_url( FURNITURE_INTERIOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'furniture-interior'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>