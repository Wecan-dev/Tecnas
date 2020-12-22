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
      <h1>Alternativas Tecnas Plant Based</h1>
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



<?php if(get_field('plantilla') == 'clientes'){ ?>  
<section class="page-container">
    <div class="section-title">
      <h1>Nuestros Aliados</h1>
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
     <?php if (get_theme_mod('titulo_nuestra_empresa') != NULL){?>  
    <div class="section-title">
      <h1><?php echo get_theme_mod('titulo_nuestra_empresa') ?></h1>
    </div>
     <?php }
         ?> 
    <div class="main-about mb-5">
      <?php if (get_theme_mod('nuestra_empresa_video') != NULL){?>  
      <div class="about-video">
        <img alt="Nuestra empresa" src="<?php echo get_theme_mod('nuestra_empresa_video') ?>">
      </div>
       <?php }
         ?> 
          <?php if (get_theme_mod('contenido_1_nuestra_empresa') != NULL){?>  
      <div class="about-text">
        <p><?php echo get_theme_mod('contenido_1_nuestra_empresa') ?></p>
        <a class="btn btn-custom" href="<?php echo get_theme_mod('url_del_boton_nuestra_empresa') ?>"><?php echo get_theme_mod('texto_del_boton_nuestra_empresa') ?></a>
      </div>
       <?php }
         ?> 
    </div>
    <div class="main-about full-width mb-5">
        <?php if (get_theme_mod('titulo_2_nuestra_empresa') != NULL){?>  
      <div class="about-subtitle"><?php echo get_theme_mod('titulo_2_nuestra_empresa') ?></div>
       <?php }
         ?> 
           <?php if (get_theme_mod('contenido_2_nuestra_empresa') != NULL){?>  
      <div class="about-text">
        <p><?php echo get_theme_mod('contenido_2_nuestra_empresa') ?></p>
        <?php }
         ?> 
      </div>
    </div>
    <div class="main-support">
       <?php if (get_theme_mod('titulo_nuestros_pilares_nuestra_empresa') != NULL){?>  
      <div class="about-subtitle"><?php echo get_theme_mod('titulo_nuestros_pilares_nuestra_empresa') ?></div>
      <?php }
         ?> 
      <div class="row">
          <?php if (get_theme_mod('nuestros_pilares_img_1') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_1') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_1_titulo') ?></h3>
          </div>
        </div>
         <?php }
         ?> 
           <?php if (get_theme_mod('nuestros_pilares_img_2') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_2') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_2_titulo') ?></h3>
            </img>
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_3') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_3') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_3_titulo') ?></h3>
            </img>
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_4') != NULL){?>  
        <div class="col-lg-3">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_4') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_4_titulo') ?></h3>
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
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_1_titulo') ?>
      </h4>
    </div>
     <?php }
         ?> 


    <?php if (get_theme_mod('nuestros_pilares_sloga_img_2') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_2') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_2_titulo') ?>
      </h4>
    </div>
     <?php }
         ?> 
   <?php if (get_theme_mod('nuestros_pilares_sloga_img_3') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_3') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_3_titulo') ?>
      </h4>
    </div>
     <?php }
         ?> 
    <?php if (get_theme_mod('nuestros_pilares_sloga_img_4') != NULL){?>  
    <div class="benefit-item">
      <img alt="Salud y Bienestar" src="<?php echo get_theme_mod('nuestros_pilares_sloga_img_4') ?>">
      <div class="benefit-divider"></div>
      <h4>
       <?php echo get_theme_mod('nuestros_pilares_sloga_img_4_titulo') ?>
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
<?php }
         ?>

<?php if(get_field('plantilla') == 'contacto'){ ?>  
 
          <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="contact-form">
            <div class="section-title left">
              <h1>Contáctenos</h1>
            </div>
            <form>
              
              
             <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 4, 'title' => false, 'description' => false ) ); ?>
            
             
              
              
              
            </form>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="contact-info">
            <ul class="contact-info-vertical">
              <li>
                <img alt="Carrera 50G No. 12 sur 29" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/place.svg">
                <span>
                  Dirección
                  <br>
                  <a href="#">Carrera 50G No. 12 sur 29</a>
                </span>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone-call.svg">
                <span>
                  Teléfono
                  <br>
                  <a href="tel:42854290">(4) 2854290</a>
                </span>
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/envelope.svg">
                <span>
                  Correo
                  <br>
                  <a href="mailto:tecnas@tecnas.com.co">tecnas@tecnas.com.co</a>
                </span>
              </li>
            </ul>
            <ul class="contact-info-horizontal">
              <li>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/youtube.svg">
                </a>
              </li>
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
      <h1>Punto de venta</h1>
    </div>
    <div class="row">
      <div class="col-lg-4"> 
        <div class="points-of-sale-list" id="accordion">
           <?php $args = array( 'post_type' => 'punto_de_venta'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while  ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div id="item-0">
            <div class="card-header" id="heading-0">
              <h5 class="mb-0">
                <button aria-controls="collapse-0" aria-expanded="true" class="btn btn-link" data-target="#p<?php the_ID();?>" data-toggle="collapse">
                 <?php the_title(); ?>
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-0" class="collapse show" data-map="p<?php the_ID();?>" data-parent="#accordion" id="p<?php the_ID();?>">
            <?php the_content(); ?>
              </div>
            </div>
              <?php 
         endwhile; ?>  
          </div>
        </div>
     

      <div class="col-lg-8">
        <div class="points-of-sale-maps">
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="<?php the_ID();?>" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5043047648037!2d-75.58856113523102!3d6.196997445513781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46826fedd5f8fb%3A0x169fa94086106a8a!2sTecnas%20S.A!5e0!3m2!1sen!2sve!4v1607896622447!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
        
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
            <div class="section-title left">
              <h1>Servicio al cliente</h1>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="customer-service-form">
            <form>
            
             
             
                <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
             
       
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>

          <?php if(get_field('plantilla') == 'otros países'){ ?>  
<div class="container main-page">
    <div class="row">
      <div class="col-lg-5">
        <div class="section-title left">
          <h1>OTROS PAÍSES</h1>
        </div>
        <div class="countries-info">
          <p>Permítanos orientarlo sobre nuestro portafolio exportable y brindarle toda la asesoría técnica y comercial que tenemos para usted.</p>
          <p>
            <a href="mailto:ventasinternacionales@tecnas.com.co">ventasinternacionales@tecnas.com.co</a>
          </p>
        </div>
        <div class="countries-list">
          <ul>
            <li>
              <h5>Centro América y el Caribe</h5>
              <ul>
                <li>Belkis Soraya Lindarte</li>
                <li>
                  <strong>E-mail:</strong>
                  blindarte@tecnas.com.co
                </li>
                <li>
                  <strong>Celular:</strong>
                  (057) 3146827317
                </li>
              </ul>
            </li>
            <li>
              <h5>Panamá, Ecuador, Perú</h5>
              <ul>
                <li>Pedro Luis Granados</li>
                <li>
                  <strong>E-mail:</strong>
                  pgranados@tecnas.com.co
                </li>
                <li>
                  <strong>Celular:</strong>
                  (057) 3206950402
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="countries-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/countries.png">
        </div>
      </div>
    </div>
  </div>
            <?php }
         ?>
 <?php if(get_field('plantilla') == 'trabaja para nosotros'){ ?>  
         <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="customer-service-text">
            <div class="section-title left">
              <h1>Trabaje para nosotros</h1>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="customer-service-form">
            <form>
             
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
              
             
              
            
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