<?php get_header() ?>

  <section class="page-container">
     <?php $args = array( 'post_type' => 'servicios', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="main-services">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.jpg">
        </div>
        <div class="services-text">
          <?php the_content(); ?>
        </div>
    </div>
    <?php  endwhile; ?>  
  </section>
 <?php get_footer() ?>