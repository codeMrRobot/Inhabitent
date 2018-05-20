<?php
/**
 *  Adventure template file.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
  <h1 class="page-title">Latest Adventures</h1>
		<main id="main" class="site-main" role="main">
		  <?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
			<?php endif; ?>
			<?php while ( have_posts() ) : the_post(); ?>
      <div class="adventure-grid">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
            <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
            <div class="read-more-wrapper">
              <a href="<?php the_permalink(); ?>"class="advbtn read-more">read more →</a>
            </div>
          </header><!-- .entry-header -->
        </article><!-- #post-## -->
			</div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
	  	<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
	  	<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>