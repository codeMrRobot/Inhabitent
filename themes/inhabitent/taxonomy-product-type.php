<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php if ( have_posts() ) : ?>
    <div class ="container">
			<header class="page-header">
				<?php
					single_term_title( '<h1 class="tax-page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header>
			<div class="archive-product-content">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="item-grid">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php echo get_the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
					<?php endif; ?>
					<div class="name-price">
						<p class="item-name"><?php echo get_the_title(); ?> ......</p>
						<p class="price-meta"> ......
							<?php echo CFS()->get('price');?>
						</p>
					</div>
			</article><!-- #post-## -->
			</div>
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>