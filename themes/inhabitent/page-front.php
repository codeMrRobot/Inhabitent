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


    <!-- journal entry -->
    <section>
    <?php
        $args = array( 'numberposts' => '3', 'order' => 'DESC');
        $product_posts = get_posts($args);
        $thumbnail = array('large');
    
    ?>

    <div class="journal-entries">
    <?php foreach ($product_posts as $post): setup_postdata ( $post) ?>
                        <article class="journal-entry">
                        <?php the_post_thumbnail('medium')?>

                        <a href="<?php the_permalink();?>"class="read-more">Read Entry</a>
    <?php endforeach; wp_reset_postdata();?>
    </section>





    <?php get_footer(); ?>