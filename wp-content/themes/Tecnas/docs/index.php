<?php get_header() ?>

  <section class="main-slider">
      <?php $args = array( 'post_type' => 'banner'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="main-slider-item">
      <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
      <?php if( ! empty( $post->post_title ) ) : ?>
		<!--<div class="main-slider-text">
        	<h1><?php the_title(); ?></h1>
		</div>-->
      <?php endif; ?>
		
		
		<?php if(lang() == 'es'){ ?>
	<?php $boton_del_banner_espanol = get_field( 'boton_del_banner_espanol' ); ?>
		<?php if ( $boton_del_banner_espanol ) : ?>
			<a class="main-slider-btn" href="<?php echo esc_url( $boton_del_banner_espanol['url'] ); ?>" target="<?php echo esc_attr( $boton_del_banner_espanol['target'] ); ?>">
				<?php the_title(); ?>
				<br>
				<div>	<?php echo esc_html( $boton_del_banner_espanol['title'] ); ?> »</div>
		</a>
		<?php endif; ?>

		<?php }else { ?>
<?php $boton_del_banner_ingles = get_field( 'boton_del_banner_ingles' ); ?>
		<?php if ( $boton_del_banner_ingles ) : ?>
		<a class="main-slider-btn" href="<?php echo esc_url( $boton_del_banner_ingles['url'] ); ?>" target="<?php echo esc_attr( $boton_del_banner_ingles['target'] ); ?>">
			<?php the_title(); ?>
				<br>
			<div>	<?php echo esc_html( $boton_del_banner_ingles['title'] ); ?> »</div>
		
		</a>
	<?php endif; ?>

		<?php } ?>   
		
		
		
		
		

    </div>
    <?php  endwhile; ?>
  </section>
   <?php get_footer() ?> 

   

           

              
               