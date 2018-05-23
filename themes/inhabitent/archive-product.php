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
				// if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
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
      
      <div class = "archive-product-content">
               <?php
                   $args = array(
                       'post_type' => 'product',
                       'posts_per_page' => -1,
                       'orderby'=> 'title',
                       'order' => 'ASC',
                   );
                   $products = new WP_Query( $args );
               ?>
                   <?php if ( $products->have_posts() ) : ?>
                       <?php while ( $products->have_posts() ) : $products->the_post(); ?>
                       <div class = "item-grid product-post">
                       <?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php echo get_the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium' ); ?>
						</a>
					<?php endif; ?>
                           <div class="item-grid product-info">
                               <span><?php the_title(); ?></span>
                               <span class = "aligncenter">&nbsp;</span>
                               <span><?php echo "\$" . CFS()->get('price'); ?></span>
                           </div>
                       </div>
                   <?php endwhile; ?>
                   <?php wp_reset_postdata(); ?>
               <?php else : ?>
                   <h2>Nothing found!</h2>
               <?php endif; ?>
           </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>