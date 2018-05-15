<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive Product
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<h1 class="page-title">shop stuff</h1>

			<?php
				$terms = get_terms( array(
						'taxonomy' => 'product-type',
						'hide_empty' => 0,
				) );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
			?>
				<div class="shop-category-wrapper">
					<div class="shop-category">
					<?php foreach ( $terms as $term ) : ?>
						<p><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></p>
					<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
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
						<p class="item-name"><?php echo get_the_title(); ?> ....</p>
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