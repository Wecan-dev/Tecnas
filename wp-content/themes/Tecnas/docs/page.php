<?php get_header(); 
 while ( have_posts() ) : the_post();
 ?>


<!--None template -->
<?php if( get_the_content() != NULL){ ?>
    <?php
              // Include the page content template.
    /*  get_template_part( 'content', 'page' );*/
    the_content();

              // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;           
    ?>  
<?php } ?>   
 

<?php if(get_field('plantilla') == 'destacados'){ ?>  

  <section class="page-container">
    <div class="section-title">

      <h1> <?php if(lang() == 'es'){echo "Alternativas Tecnas Plant Based";}if(lang() == 'en'){echo "Tecnas Plant Based Alternatives";} ?></h1>
    </div>
    <div class="featured-slider">
        <?php $args = array( 'post_type' => 'destacados__'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="featured-card">
        <div class="featured-card-img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <div class="featured-card-info">
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
          <a class="btn btn-custom" href="<?php the_permalink(); ?>">Leer más</a>
        </div>
      </div>
       <?php  endwhile; ?>  
    </div>
  </section>
   <?php } ?> 

   <?php if(get_field('plantilla') == 'productos'){ ?>  
<div class="main-page">
    <div class="container">
     
      <div class="row">
        <?php $args =  array(
          'post_type' => 'producto',
          'post_status' => 'publish',
          'posts_per_page' => 99999,

          ); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4">
          <div class="portfolio-card">
            <a href="<?php the_permalink(); ?>">
              <img alt="Betacaroteno" src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="portfolio-text">
                <h4> <?php the_title(); ?></h4>
              </div>
            </a>
          </div>
        </div>
           <?php  endwhile; ?>  
      </div>
    </div>
  </div>
 <?php } ?> 

<?php if(get_field('plantilla') == 'clientes'){ ?>  
<section class="page-container">
    <div class="section-title">
      <h1><?php if(lang() == 'es'){echo "Nuestros Aliados";}if(lang() == 'en'){echo "Our Allies";} ?></h1>
    </div>
    <div class="clients-slider">
       <?php $args = array( 'post_type' => 'clientes'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="client-item">
        <img src="   <?php echo get_the_post_thumbnail_url(); ?>">
        <h3><?php the_title(); ?></h3>
      </div>
    <?php  endwhile; ?>  
    </div>
  </section>
  <?php } ?> 




<?php if(get_field('plantilla') == 'nuestra empresa'){ ?>  
<section class="page-container">
     <?php if (get_theme_mod('titulo_nuestra_empresa_'.lang().'') != NULL){?>  
    <div class="section-title">
      <h1><?php echo get_theme_mod('titulo_nuestra_empresa_'.lang().'') ?></h1>
    </div>
     <?php }
         ?> 
    <div class="main-about mb-5">
      <?php if (get_theme_mod('nuestra_empresa_video') != NULL){?>  
      <div class="about-video">
          <?php  $extension = pathinfo(get_theme_mod('nuestra_empresa_video'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img src="<?php echo get_theme_mod('nuestra_empresa_video') ?>">
              <?php } else { ?> 
                    <video class="main-banner__img" id="mivideo" autoplay preload loop muted>
                        <source src="<?php echo get_theme_mod('nuestra_empresa_video') ?>" type="video/mp4">
                    </video>  
         <?php } ?>
      </div>
       <?php }
         ?> 
          <?php if (get_theme_mod('contenido_1_nuestra_empresa_'.lang().'') != NULL){?>  
      <div class="about-text">
        <p><?php echo get_theme_mod('contenido_1_nuestra_empresa_'.lang().'') ?></p>
          <?php if (get_theme_mod('texto_del_boton_nuestra_empresa_'.lang().'') != NULL){?>  
        <a class="btn btn-custom" href="<?php echo get_theme_mod('url_del_boton_nuestra_empresa_'.lang().'') ?>"><?php echo get_theme_mod('texto_del_boton_nuestra_empresa_'.lang().'') ?></a>
         <?php }
         ?> 
      </div>
       <?php }
         ?> 
    </div>
    <div class="main-about full-width mb-5">
        <?php if (get_theme_mod('titulo_2_nuestra_empresa_'.lang().'') != NULL){?>  
      <div class="about-subtitle"><?php echo get_theme_mod('titulo_2_nuestra_empresa_'.lang().'') ?></div>
       <?php }
         ?> 
           <?php if (get_theme_mod('contenido_2_nuestra_empresa_'.lang().'') != NULL){?>  
      <div class="about-text">
        <p><?php echo get_theme_mod('contenido_2_nuestra_empresa_'.lang().'') ?></p>
        <?php }
         ?> 
      </div>
    </div>
    <div class="main-support">
       <?php if (get_theme_mod('titulo_nuestros_pilares_nuestra_empresa_'.lang().'') != NULL){?>  
      <div class="about-subtitle"><?php echo get_theme_mod('titulo_nuestros_pilares_nuestra_empresa_'.lang().'') ?></div>
      <?php }
         ?> 
      <div class="row">
          <?php if (get_theme_mod('nuestros_pilares_img_1') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_1') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_1_titulo_'.lang().'') ?></h3>
          </div>
        </div>
         <?php }
         ?> 
           <?php if (get_theme_mod('nuestros_pilares_img_2') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_2') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_2_titulo_'.lang().'') ?></h3>
            </img>
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_3') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_3') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_3_titulo_'.lang().'') ?></h3>
            </img>
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_4') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_4') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_4_titulo_'.lang().'') ?></h3>
            </img>
          </div>
        </div>
         <?php }
         ?> 
      </div>
    </div>
  </section>
  <div class="main-benefits">
     <?php if (get_theme_mod('nuestros_pilares_sloga_img_1') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_1') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_1_titulo_'.lang().'') ?>
      </h4>
    </div>
     <?php }
         ?> 


    <?php if (get_theme_mod('nuestros_pilares_sloga_img_2') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_2') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_2_titulo_'.lang().'') ?>
      </h4>
    </div>
     <?php }
         ?> 
   <?php if (get_theme_mod('nuestros_pilares_sloga_img_3') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_3') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_3_titulo_'.lang().'') ?>
      </h4>
    </div>
     <?php }
         ?> 
    <?php if (get_theme_mod('nuestros_pilares_sloga_img_4') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_4') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_4_titulo_'.lang().'') ?>
      </h4>
    </div>
     <?php }
         ?> 
  </div>
  <?php }
         ?> 

<?php if(get_field('plantilla') == 'servicios'){ ?>  
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
  <?php }
         ?>


<?php if(get_field('plantilla') == 'certificaciones'){ ?>  
       <section class="page-container">
     <?php $args = array( 'post_type' => 'Certificaciones', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="section-title">
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
    </div>
    <div class="certifications-slider">

       <?php if (get_field( 'certificado_imagen_1' ) != NULL){?>  
      <div class="certification-item">
        <?php $certificado_imagen_1 = get_field( 'certificado_imagen_1' ); ?>
<?php if ( $certificado_imagen_1 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_1['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_1['alt'] ); ?>" />
     <h3><?php the_field( 'certificado_texto_1' ); ?></h3>
<?php endif; ?>
      </div>
 <?php }
         ?> 

<?php if (get_field( 'certificado_imagen_2' ) != NULL){?>  
      <div class="certification-item">
         <?php $certificado_imagen_2 = get_field( 'certificado_imagen_2' ); ?>
<?php if ( $certificado_imagen_2 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_2['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_2['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_2' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
       <?php }
         ?>

<?php if (get_field( 'certificado_imagen_3' ) != NULL){?>  
       <div class="certification-item">
         <?php $certificado_imagen_3 = get_field( 'certificado_imagen_3' ); ?>
<?php if ( $certificado_imagen_3 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_3['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_3['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_3' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
       <?php }
         ?>

<?php if (get_field( 'certificado_imagen_4' ) != NULL){?>  
       <div class="certification-item">
         <?php $certificado_imagen_4 = get_field( 'certificado_imagen_4' ); ?>
<?php if ( $certificado_imagen_4 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_4['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_4['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_4' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
       <?php }
         ?>

<?php if (get_field( 'certificado_imagen_5' ) != NULL){?>  
      <div class="certification-item">
         <?php $certificado_imagen_5 = get_field( 'certificado_imagen_5' ); ?>
<?php if ( $certificado_imagen_5 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_5['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_5['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_5' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
       <?php }
         ?>

<?php if (get_field( 'certificado_imagen_6' ) != NULL){?>  
      <div class="certification-item">
         <?php $certificado_imagen_6 = get_field( 'certificado_imagen_6' ); ?>
<?php if ( $certificado_imagen_6 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_6['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_6['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_6' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
      <?php }
         ?>

<?php if (get_field( 'certificado_imagen_7' ) != NULL){?>  
      <div class="certification-item">
         <?php $certificado_imagen_7 = get_field( 'certificado_imagen_7' ); ?>
<?php if ( $certificado_imagen_7 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_7['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_7['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_7' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
      <?php }
         ?>

 <?php if (get_field( 'certificado_imagen_8' ) != NULL){?>  
        <div class="certification-item">
         <?php $certificado_imagen_8 = get_field( 'certificado_imagen_8' ); ?>
<?php if ( $certificado_imagen_8 ) : ?>
  <img src="<?php echo esc_url( $certificado_imagen_8['url'] ); ?>" alt="<?php echo esc_attr( $certificado_imagen_8['alt'] ); ?>" />
  <h3>
         <?php the_field( 'certificado_texto_8' ); ?>
        </h3>
         </img>
<?php endif; ?>
      </div>
<?php }
         ?>

    </div>
     <?php  endwhile; ?>  
  </section>
<?php }
         ?>

<?php if(get_field('plantilla') == 'contacto'){ ?>  
 
          <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="contact-form">
            <div class="section-title left">
              <h1><?php if(lang() == 'es'){echo "Contáctenos";}if(lang() == 'en'){echo "Contact us";} ?></h1>
            </div>
            <form>
              <?php if(lang() == 'es'){echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) );}if(lang() == 'en'){ echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) );} ?>    
              
            </form>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="contact-info">
            <ul class="contact-info-vertical">
                 <?php if (get_theme_mod('contactanos-direccion_tittulo_'.lang().'') != NULL) { ?> 
              <li>
<<<<<<< HEAD
                <img src="<?php echo get_theme_mod('direccion_img'); ?>">
                <span>
                <?php echo get_theme_mod('contactanos-direccion_tittulo_'.lang().''); ?>
                  <br>
                  <a href="#"><?php echo get_theme_mod('contactanos-direccion_'.lang().''); ?></a>
                </span>
=======
                <img alt="Carrera 50G No. 12 sur 29" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/place.svg">
                <div>
                  <span>Dirección</span>
                  <a href="#">Carrera 50G No. 12 sur 29</a>
                </div>
>>>>>>> 42121954969e398f503e608a3d269f306e59bc6c
              </li>
                <?php }
         ?> 
  <?php if (get_theme_mod('contactanos-telefono_tittulo_'.lang().'') != NULL) { ?> 
              <li>
<<<<<<< HEAD
                <img src="<?php echo get_theme_mod('telefono_img'); ?>">
                <span>
                  <?php echo get_theme_mod('contactanos-telefono_tittulo_'.lang().''); ?>
                  <br>
                  <a href="tel:"><?php echo get_theme_mod('contactanos-telefono_'.lang().''); ?></a>
                </span>
=======
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone-call.svg">
                <div>
                  <span>Teléfono</span>
                  <a href="tel:42854290">(4) 2854290</a>
                </div>
>>>>>>> 42121954969e398f503e608a3d269f306e59bc6c
              </li>
                <?php }
         ?> 
            <?php if (get_theme_mod('contactanos-correo_tittulo_'.lang().'') != NULL) { ?> 
              <li>
<<<<<<< HEAD
                <img src="<?php echo get_theme_mod('correo_img'); ?>">
                <span>
                   <?php echo get_theme_mod('contactanos-correo_tittulo_'.lang().''); ?>
                  <br>
                  <a href="mailto:"><?php echo get_theme_mod('contactanos-correo_'.lang().''); ?></a>
                </span>
=======
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope.svg">
                <div>
				  <span>Correo</span>
                  <a href="mailto:tecnas@tecnas.com.co">tecnas@tecnas.com.co</a>
                </div>
>>>>>>> 42121954969e398f503e608a3d269f306e59bc6c
              </li>
                <?php }
         ?> 
            </ul>
            <ul class="contact-info-horizontal">
               <?php if (get_theme_mod('facebook_img') != NULL) { ?> 
              <li>
                <a href="<?php echo get_theme_mod('contactanos-redes_facebook'); ?>">
                 <img src="<?php echo get_theme_mod('facebook_img'); ?>">
                </a>
              </li>
              <?php }
         ?> 
          <?php if (get_theme_mod('instagram_img') != NULL) { ?> 
              <li>
                <a href="<?php echo get_theme_mod('contactanos-sociales_instagram'); ?>">
                  <img src="<?php echo get_theme_mod('instagram_img'); ?>">
                </a>
              </li>
               <?php }
         ?> 
               <?php if (get_theme_mod('youtube_img') != NULL) { ?> 
              <li>
                <a href="<?php echo get_theme_mod('contactanos-social-youtube'); ?>">
                  <img src="<?php echo get_theme_mod('youtube_img'); ?>">
                </a>
              </li>
               <?php }
         ?> 
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php }
         ?>
<?php if(get_field('plantilla') == 'punto de venta'){ ?>  
         <div class="container main-page">
    <div class="section-title left">
      <h1><?php if(lang() == 'es'){echo "Punto de Venta";}if(lang() == 'en'){echo "Point of Sale";} ?></h1>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <div class="points-of-sale-list" id="accordion">
           <?php $args = array( 'post_type' => 'punto_de_venta'); ?>
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
          <div id="item-0">
            <div class="card-header" id="heading-0">
              <h5 class="mb-0">
                <button aria-controls="collapse-0" aria-expanded="false" class="btn btn-link" data-target="#p<?php the_ID();?>" data-toggle="collapse">
                 <?php the_title(); ?>
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-0" class="collapse" data-map="1<?php the_ID();?>" data-parent="#accordion" id="p<?php the_ID();?>">
              <div class="card-body">
               <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php endwhile; ?> 
        </div>
      </div>
      <div class="col-lg-8">
        <div class="points-of-sale-maps">
           <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="1<?php the_ID();?>" src="<?php the_field( 'mapa' ); ?>" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <?php endwhile; ?> 
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>
         <?php if(get_field('plantilla') == 'servicios al cliente'){ ?>  
         <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="customer-service-text">
             <?php if (get_theme_mod('servicio_al_cliente_titulo_'.lang().'') != NULL) { ?>  
            <div class="section-title left">
              <h1><?php echo get_theme_mod('servicio_al_cliente_titulo_'.lang().'') ?></h1>
            </div>
              <?php }
         ?> 
            <?php if (get_theme_mod('servicio_al_cliente_subtitulo_'.lang().'') != NULL) { ?>  
            <p><?php echo get_theme_mod('servicio_al_cliente_subtitulo_'.lang().'') ?></p>
             <?php }
         ?> 
          </div>
        </div>
        <div class="col-lg-8">
          <div class="customer-service-form">
            <form>
              <?php if(lang() == 'es'){echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) );}if(lang() == 'en'){ echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) );} ?>    
             
             
                
       
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>

          <?php if(get_field('plantilla') == 'otros países'){ ?>  
             <?php $args = array( 'post_type' => 'paises', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="container main-page">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-title left">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="countries-info">
          <p><?php the_content(); ?></p>
          <p>
            <a href="mailto:"><?php the_field( 'correo_internacional' ); ?></a>
          </p>
        </div>
        <div class="countries-list">
          <ul>
            <li>
              <h5><?php the_field( 'pais_o_continente' ); ?></h5>
              <ul>
                <?php the_field( 'pais_o_continente_informacion' ); ?>
              </ul>
            </li>
            <li>
              <h5><?php the_field( 'pais_o_continente_2' ); ?></h5>
              <ul>
               <?php the_field( 'pais_o_continente_informacion_2' ); ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="countries-img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
      </div>
    </div>
  </div>
     <?php endwhile; ?> 
            <?php }
         ?>
 <?php if(get_field('plantilla') == 'trabaja para nosotros'){ ?>  
         <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="customer-service-text">
               <?php if (get_theme_mod('trabaja_co_nosotros_titulo_'.lang().'') != NULL) { ?> 
            <div class="section-title left">
              <h1><?php echo get_theme_mod('trabaja_co_nosotros_titulo_'.lang().'') ?></h1>
            </div>
             <?php }
         ?>
           <?php if (get_theme_mod('trabaja_co_nosotros_subtitulo_'.lang().'') != NULL) { ?> 
            <p><?php echo get_theme_mod('trabaja_co_nosotros_subtitulo_'.lang().'') ?></p>
          </div>
           <?php }
         ?>
        </div>
        <div class="col-lg-8">
          <div class="customer-service-form">
            <form>
              <?php if(lang() == 'es'){echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) );}if(lang() == 'en'){ echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); } ?>      
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>
   <?php  endwhile; ?>
  <?php get_footer() ?>  