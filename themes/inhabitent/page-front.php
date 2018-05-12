<?php 
/*
Template name: home
*/
/**
 *front page (home page) template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    


      <?php
   $args = array( 'numberposts' => '3', 'order' => 'DESC');
   $journal_posts = get_posts( $args );
    // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   <?php echo '<h2>' . get_the_title() . '</h2>'; ?>
   <?php echo the_post_thumbnail( 'medium' ); ?>
<?php endforeach; wp_reset_postdata(); ?>
   
  
    
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title();  ?></h1>
				</header>
	    <div class="hero-banner">
				<img src=<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-full.svg" ?> >
      </div>	
      








<?php get_footer(); ?>