<?php get_header() ?>

  <section class="page-container">
     <?php $args = array( 'post_type' => 'Certificaciones', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
    <div class="certifications-slider">
      <div class="certification-item">
         <?php $image = get_field('certificado_imagen_1'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>ISO 9001 - 2015</h3>
      </div>
      <div class="certification-item">
         <?php $image = get_field('certificado_imagen_2'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>
          Compromiso Ambiental
          <br>
          Huella de Carbono
        </h3>
        </img>
      </div>
      <div class="certification-item">
         <?php $image = get_field('certificado_imagen_3'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>HACCP</h3>
        </img>
      </div>
      <div class="certification-item">
  <?php $image = get_field('certificado_imagen_4'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>
          Responsabilidad
          <br>
          Social
        </h3>
        </img>
      </div>
      <div class="certification-item">
        <?php $image = get_field('certificado_imagen_1'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>ISO 9001 - 2015</h3>
      </div>
      <div class="certification-item">
         <?php $image = get_field('certificado_imagen_2'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>
          Compromiso Ambiental
          <br>
          Huella de Carbono
        </h3>
        </img>
      </div>
      <div class="certification-item">
        <?php $image = get_field('certificado_imagen_3'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>HACCP</h3>
        </img>
      </div>
      <div class="certification-item">
         <?php $image = get_field('certificado_imagen_4'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <h3>
          Responsabilidad
          <br>
          Social
        </h3>
        </img>
      </div>
    </div>
     <?php  endwhile; ?>  
  </section>
<?php get_footer() ?> 