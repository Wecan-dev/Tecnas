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
          <div id="item-0">
            <div class="card-header" id="heading-0">
              <h5 class="mb-0">
                <button aria-controls="collapse-0" aria-expanded="true" class="btn btn-link" data-target="#collapse-0" data-toggle="collapse">
                  Itaguí
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-0" class="collapse show" data-map="mapItaguí" data-parent="#accordion" id="collapse-0">
              <div class="card-body">
                Carrera 50G No. 12 sur 29 (Ver mapa). <br> <strong>PBX:</strong> (4)2854290. <br> <strong>Celular:</strong> (4)2553809. <br> <strong>E-mail:</strong> tecnas@tecnas.com.co. <br> <strong>Horario de atención:</strong> Lunes a viernes de 7:00 am a 05:30 pm
              </div>
            </div>
          </div>
          <div id="item-1">
            <div class="card-header" id="heading-1">
              <h5 class="mb-0">
                <button aria-controls="collapse-1" aria-expanded="false" class="btn btn-link" data-target="#collapse-1" data-toggle="collapse">
                  Bogotá
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-1" class="collapse false" data-map="mapBogotá" data-parent="#accordion" id="collapse-1">
              <div class="card-body">
                Cl. 17a ###69-53, Bogotá, Cundinamarca, Colombia
              </div>
            </div>
          </div>
          <div id="item-2">
            <div class="card-header" id="heading-2">
              <h5 class="mb-0">
                <button aria-controls="collapse-2" aria-expanded="false" class="btn btn-link" data-target="#collapse-2" data-toggle="collapse">
                  Cali
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-2" class="collapse false" data-map="mapCali" data-parent="#accordion" id="collapse-2">
              <div class="card-body">
                Avenida 3ra B Norte #58 - 52, Cali, Valle del Cauca, Colombia
              </div>
            </div>
          </div>
          <div id="item-3">
            <div class="card-header" id="heading-3">
              <h5 class="mb-0">
                <button aria-controls="collapse-3" aria-expanded="false" class="btn btn-link" data-target="#collapse-3" data-toggle="collapse">
                  Barranquilla
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-3" class="collapse false" data-map="mapBarranquilla" data-parent="#accordion" id="collapse-3">
              <div class="card-body">
                Cra. 44 ## 76-94, Barranquilla, Atlántico, Colombia
              </div>
            </div>
          </div>
          <div id="item-4">
            <div class="card-header" id="heading-4">
              <h5 class="mb-0">
                <button aria-controls="collapse-4" aria-expanded="false" class="btn btn-link" data-target="#collapse-4" data-toggle="collapse">
                  Bucaramanga
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-4" class="collapse false" data-map="mapBucaramanga" data-parent="#accordion" id="collapse-4">
              <div class="card-body">
                Avenida la Rosita ## 24 - 68, Bucaramanga, Santander, Colombia
              </div>
            </div>
          </div>
          <div id="item-5">
            <div class="card-header" id="heading-5">
              <h5 class="mb-0">
                <button aria-controls="collapse-5" aria-expanded="false" class="btn btn-link" data-target="#collapse-5" data-toggle="collapse">
                  Pereira
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-5" class="collapse false" data-map="mapPereira" data-parent="#accordion" id="collapse-5">
              <div class="card-body">
                Cra. 10 ##15 - 45, Dosquebradas, Risaralda, Colombia
              </div>
            </div>
          </div>
          <div id="item-6">
            <div class="card-header" id="heading-6">
              <h5 class="mb-0">
                <button aria-controls="collapse-6" aria-expanded="false" class="btn btn-link" data-target="#collapse-6" data-toggle="collapse">
                  Cucuta
                </button>
              </h5>
            </div>
            <div aria-labelledby="heading-6" class="collapse false" data-map="mapCucuta" data-parent="#accordion" id="collapse-6">
              <div class="card-body">
                Avenida 0 # 2 Norte - 118, Cúcuta, Norte de Santander, Colombia
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="points-of-sale-maps">
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapItaguí" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5043047648037!2d-75.58856113523102!3d6.196997445513781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46826fedd5f8fb%3A0x169fa94086106a8a!2sTecnas%20S.A!5e0!3m2!1sen!2sve!4v1607896622447!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapBogotá" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15907.089255876257!2d-74.1137743!3d4.6346642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9bf506de4e39%3A0x84080da6bb7e2083!2sTecnas%20S.%20A.!5e0!3m2!1sen!2sve!4v1607896818596!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapCali" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.4257899603176!2d-76.51429148524173!3d3.4883873974611252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7f29fae6db7%3A0x86b3f0b8bdbf5157!2sTecnas%20Cali!5e0!3m2!1sen!2sve!4v1607896884753!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapBarranquilla" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.571004680863!2d-74.81378768519734!3d10.995717992172949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d09370f40e1%3A0x758d4b3baec908a!2sTecnas%20Barranquilla!5e0!3m2!1sen!2sve!4v1607896922626!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapBucaramanga" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.064638178882!2d-73.12001048549214!3d7.118508194859527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fdf8688abf3%3A0x9a8b1ca2809ea336!2sTecnas%20Bucaramanga!5e0!3m2!1sen!2sve!4v1607897055289!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapPereira" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d381268.5088093184!2d-75.74110158040065!3d4.764002756671929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e388742b07f5fed%3A0x18da23d8038ac6a!2sTecnas%20Pereira!5e0!3m2!1sen!2sve!4v1607897126673!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
          </div>
          <div class="map">
            <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="mapCucuta" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9414393985194!2d-72.50322778522113!3d7.901187194308001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6645a92d0bb6c1%3A0x38cac7a40341f24!2sTecnas%20C%C3%BAcuta!5e0!3m2!1sen!2sve!4v1607897149610!5m2!1sen!2sve" style="border:0;" tabindex="0" width="100%"></iframe>
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