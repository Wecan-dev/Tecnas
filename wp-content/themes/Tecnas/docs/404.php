<?php get_header() ?>

  <section class="not-found">
    <h1>¿No encuentras lo que buscas?</h1>
    <div class="not-found-text">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/pointer.svg">
      <p> <a href="<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "productos";}else{echo "products";} ?>">
      	Click aquí para ir al portafolio y conocer nuestras alternativas
      </a></p>
    </div>
  </section>
  <?php get_footer() ?>