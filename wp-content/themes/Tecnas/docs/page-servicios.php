<?php get_header() ?>

  <section class="page-container">
     <?php $args = array( 'post_type' => 'servicios', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/services.jpg">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="services-text">
          <ul>
           <?php the_content(); ?>
          </ul>
        </div>
      </div>
    </div>
    <?php  endwhile; ?>  
  </section>
 <?php get_footer() ?>