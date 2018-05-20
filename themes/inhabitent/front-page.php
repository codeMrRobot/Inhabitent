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
    <?php if ( is_home() && ! is_front_page() ) : ?>


    <header>
      <h1 class="page-title screen-reader-text">
        <?php single_post_title();  ?>
      </h1>
    </header>

    <?php endif; ?>

    <div class="hero-banner">
      <img src=<?php echo get_template_directory_uri() . "/images/logos/inhabitent-logo-full.svg" ?> >
    </div>
  </main>

    <section class="product-info container max-contain">
      <h2>shop stuff</h2>
      <?php
					$terms = get_terms( array(
							'taxonomy' => 'Product-Type',
							'hide_empty' => 0,
					) );
					if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
				?>
        <div class="product-type-blocks">
          <?php foreach ( $terms as $term ) : ?>
          <div class="product-type-block-wrapper">
          
            <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>"
            />
            <p>
              <?php echo $term->description; ?>
            </p>
            <p>
              <a href="<?php echo get_term_link( $term ); ?>" class="btn">
                <?php echo $term->name; ?> Stuff</a>
            </p>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>

<?php /* journal entry loop */?>
			<div class="max-contain">
			<h2>inhabitant journal</h2>
			<?php
			$args = array( 'numberposts' => '3', 'order' => 'ASC');
			$product_posts = get_posts( $args );
			$thumbnail = array( 'large' );?>
			
				<section class="journal-wrapper">
					<div class="journal-entries">			
					<?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
					<article class="journal-entry">
					<?php the_post_thumbnail( 'medium' ); ?>
						<div class="journal-info">
								<a href="<?php the_permalink(); ?>" class="read-more">Read Entry</a>
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
							<div class="journal-date">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
	  			 	</div>
					</div>
					</article>
					<?php endforeach; wp_reset_postdata(); ?>
					</div>				
				</section>
      </div>
      

<?php /* 	Adventure loop */ ?>
<div class="max-contain">
  <h2>latest adventures</h2>
  <?php	$args = array( 'posts_per_page' => 4, 'post_type' => 'adventure'  );
    $adventure_posts = get_posts($args);?>
  <section class="adventures-wrapper">
    <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post );?>
    <div class="container">
      <article class="adventure-entry">
        <?php the_post_thumbnail( 'medium' ); ?>
        <div class="adventure-info">
          <a href="<?php the_permalink(); ?>" class="adventure-read-more">Read More</a>
          <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );?>
        </div>
      </article>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
  </section>
  <p class="advreadmore"><a href="<?php echo home_url() . '/adventure'; ?>" class="moreadventures read-more">More Adventures</a>
  <p>
</div>
</main><!-- #main -->
</div><!-- #primary -->



<?php get_footer(); ?>