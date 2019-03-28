<?php 


define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT."/img");
define('SCRIPTS', THEMEROOT."/js");
define('FRAMEWORK', get_template_directory()."/framework");
define('LIBRARY', THEMEROOT.'/lib');
define('HOST', "http://localhost/en");

function register_primary_menu(){
    register_nav_menu('primary', "Primary Menu");
}
add_action("after_setup_theme", "register_primary_menu");

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('services', 'past_work'));


if ( ! function_exists( 'alpha_widget_init' ) ) {
	function alpha_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
				array(
					'name' => __( 'Main Widget Area', 'alpha' ),
					'id' => 'sidebar-1',
					'description' => __( 'Appears on posts and pages.', 'alpha' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Widget Area', 'alpha' ),
					'id' => 'footer',
					'description' => __( 'Appears on the footer.', 'alpha' ),
					'before_widget' => '<div id="%1$s" class="widget col-sm-3 %2$s">',
					'after_widget' => '</div> <!-- end widget -->',
					'before_title' => '<h5 class="widget-title">',
					'after_title' => '</h5>',
				)
			);
		}
	}

	add_action( 'widgets_init', 'alpha_widget_init' );
}


function custom_theme_assets() {
    //wp_enqueue_style('style', get_stylesheet_uri());
 /*
    wp_register_script('jquery', LIBRARY.'jquery/jquery.min.js');
    wp_register_script('bootstrap', LIBRARY.'/bootstrap/js/bootstrap.min.js', array( 'jquery' ));
    wp_register_script('jquery-migrate', LIBRARY."/jquery/jquery-migrate.min.js",);
    wp_register_script('owlcarousel', LIBRARY.'/owlcarousel/owl.carousel.min.js');
    wp_register_script('easing', LIBRARY.'/easing/easing.js');
    wp_register_script('popper', LIBRARY."/popper/popper.min.js");
    wp_register_script('scrollreveal', LIBRARY."/scrollreveal/scrollreveal.min.js");
    wp_register_script('contactform', THEMEROOT."/contactform/contactform.js");
    wp_register_script('main', THEMEROOT."/js/main.js");



    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-migrate');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('owlcarousel');
    wp_enqueue_script('easing', );
   
    wp_enqueue_script('scrollreveal');
    wp_enqueue_script('contactform');
    wp_enqueue_script('main'); 
*/
    wp_enqueue_style("googleapis", "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700");

    wp_enqueue_style("animate", LIBRARY."/animate/animate.css");
    wp_enqueue_style("font-awesome", LIBRARY."/font-awesome/css/font-awesome.css");
    wp_enqueue_style("ionicons", LIBRARY."/ionicons/css/ionicons.css");
    wp_enqueue_style("owlcarousel", LIBRARY."/owlcarousel/assets/owl.carousel.min.css");
    wp_enqueue_style("bootstrap", LIBRARY."/bootstrap/css/bootstrap.css");
    
    wp_enqueue_style("ubuntu-style", "https://fonts.googleapis.com/css?family=Ubuntu");
    wp_enqueue_style("main-style", THEMEROOT."/css/style.css");
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');
?>