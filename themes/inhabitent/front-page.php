<?php
/**
 *front page (home page) template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title();  ?></h1>
				</header>
			<?php endif; ?>
			<div class="hero-banner">
				<img src=<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-full.svg" ?> >
      </div>	
      








<?php get_footer(); ?>