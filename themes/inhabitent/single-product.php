<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
      <div><?php the_post_thumbnail( 'large' ); ?></div>
    <?php endif; ?>
      <div class="single-product-wrapper">
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <p class="price"><?php echo CFS()->get('price')?></p>
          <div class="entry-meta">
            <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
          </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
        <div class="entry-content">
          <?php the_content(); ?>
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
              'after'  => '</div>',
            ) );
          ?>
        <div>
          <button type="submit" class="single-product-buttons"><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
          <button type="submit" class="single-product-buttons"><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
          <button type="submit" class="single-product-buttons"><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
        </div>
        </div><!-- .entry-content -->
      </div> 
      <footer class="entry-footer">
        <?php red_starter_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		<?php endwhile;?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>