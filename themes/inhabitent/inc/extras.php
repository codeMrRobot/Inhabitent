<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

/**
 * Logo link */
function inhabitent_starter_login_logo_url($url) {
  return "http://localhost:8888/inhabitent";
}
add_filter('login_headerurl', 'inhabitent_starter_login_logo_url');


function my_login_logo() { ?>
	<style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/build/images/logos/inhabitent-logo-tent.svg');
	height:65px;
	width:320px;
	background-size: 320px 65px;
	background-repeat: no-repeat;
				padding-bottom: 30px;
			}
	</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function logo_login_url(){
	return home_url();
}
add_action('login_headerurl', 'logo_login_url');
function inhabitent_logo_title(){
	return 'inhabitent';
}
add_filter('login_headertitle', 'inhabitent_logo_title');
function inhabitent_dynamic_css(){
	if ( ! is_page_template( 'page-templates/about.php' ) ){
			return;
	}
	$image = CFS()->get( 'about_header_image' );
	if ( ! $image ) {
			return;
	}
	$hero_css = ".page-template-about .entry-header {
		background:
			linear-gradient(to bottom, rgba(0,0,0, 0.2), rgba(0,0,0, 0.2)),
			url({$image}) no-repeat center bottom;
			linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% );
			background-size:cover,cover;
	}";
	
	
	wp_add_inline_style( 'tent-style', $hero_css);
}
add_action ( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );
function inhabitent_limit_archive_posts($query){
if ( $query->is_archive ) {
		$query->set( 'posts_per_page', 20) ;
}
return $query;
}
add_filter( 'pre_get_posts', 'inhabitent_limit_archive_posts' );
