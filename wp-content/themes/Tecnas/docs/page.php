<?php get_header(); 
 while ( have_posts() ) : the_post();
 ?>


<!--None template -->
  
 

<?php if(get_field('plantilla') == 'destacados'){ ?>  

  <section class="page-container featured-page-container">
    <div class="section-title">
	<!--<?php $posDestacadotitle = lang() == "es" ? "Alternativas Tecnas Plant Based" : "Tecnas Plant Based Alternatives"; ?>
      <h1><?php echo $posDestacadotitle; ?></h1> -->
    </div>
    <div class="featured-slider">
        <?php $args = array( 'post_type' => 'destacados__'); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php if(lang() == 'es'){ ?>  
		<div class="featured-card">
			<div class="featured-card-img" href="<?php if(get_field( 'url_producto_espanol' ) != null) : the_field( 'url_producto_espanol' );  else : the_permalink();  endif; ?> ">
				 <?php if( get_field( 'video_destacados' ) ) : ?>
					<video class="" id="mivideo" autoplay preload loop muted>
                        <source src="<?php the_field( 'video_destacados' ); ?>" type="video/mp4">
                    </video>  
				<?php else : ?>
			  <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'http://159.89.229.55/Tecnas/wp-content/uploads/2021/01/default_img_tecnas.png' ?>">
				 <?php endif; ?> 
			</div>
			<div class="featured-card-info">
				<div href="<?php if(get_field( 'url_producto_espanol' ) != null) : the_field( 'url_producto_espanol' );  else : the_permalink();  endif; ?> ">
				  <h3><?php the_title(); ?></h3>
				  <p><?php the_field( 'descripcion_espanol' ); ?></p>
				</div>
			  <?php $posDestacadoBoton = lang() == "es" ? "Ver Más" : "see more"; ?>
			  <a class="btn btn-custom" href="<?php if(get_field( 'url_producto_espanol' ) != null) : the_field( 'url_producto_espanol' );  else : the_permalink();  endif; ?> "><?php echo $posDestacadoBoton; ?></a> 
			</div>
      	  </div>
		<?php }else { ?>
			<div class="featured-card">
				<div class="featured-card-img" href="<?php if(get_field( 'url_product_english' ) != null) : the_field( 'url_product_english' );  else : the_permalink();  endif; ?> ">
				  <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'http://159.89.229.55/Tecnas/wp-content/uploads/2021/01/default_img_tecnas.png' ?>">
				</div>
				<div class="featured-card-info">
					<div href="<?php if(get_field( 'url_product_english' ) != null) : the_field( 'url_product_english' );  else : the_permalink();  endif; ?> ">
					  <h3><?php the_title(); ?></h3>
						<p>
							<?php the_field( 'descripcion_ingles' ); ?>
						</p>
					</div>
				<?php $posDestacadoBoton = lang() == "es" ? "Ver Más" : "see more"; ?>
				<a class="btn btn-custom" href="<?php if(get_field( 'url_product_english' ) != null) : the_field( 'url_product_english' );  else : the_permalink();  endif; ?> "><?php echo $posDestacadoBoton; ?></a>
			</div>
      	  </div>
		<?php } ?>
       <?php  endwhile; ?>  
    </div>
  </section>
   <?php } ?> 

   <?php if(get_field('plantilla') == 'productos'){ ?>  
<div class="main-page">     
     <div class="row">
        <?php $args =  array(
          'post_type' => 'producto',
          'post_status' => 'publish',
          'posts_per_page' => 99999,

          ); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-card">
            <a href="<?php the_permalink(); ?>">
              <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
              <div class="portfolio-text">
                <h4> <?php the_title(); ?></h4>
              </div>
            </a>
          </div>
        </div>  
       <?php  endwhile; ?>
	</div>
  </div>
 <?php } ?> 

<?php if(get_field('plantilla') == 'clientes'){ ?>  
<section class="page-container">
    <div class="section-title">
			<?php $posOurAlliesTitle = lang() == "es" ? "Nuestros Aliados" : "Our Allies"; ?>
      <h1><?php echo $posOurAlliesTitle; ?></h1>
    </div>
    <div class="clients-slider">
       <?php $args = array( 'post_type' => 'clientes', 'posts_per_page' => 999 ); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php $boton_de_aliados = get_field( 'boton_de_aliados'); ?>
	<?php if ( $boton_de_aliados ) : ?>
      <a href="<?php the_field( 'boton_de_aliados' ); ?>" target="_blank" >
		  <?php endif; ?>
		<div class="client-item">
			
		 
        <img src="   <?php echo get_the_post_thumbnail_url(); ?>">
        <h3><?php the_title(); ?></h3>
			 </div>
      </a>
    <?php  endwhile; ?>  
    </div>
  </section>
  <?php } ?> 



<?php if(get_field('plantilla') == 'nuestra empresa'){ ?>  
<section class="page-container about">
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
      <div class="about-subtitle mb-0"><?php echo get_theme_mod('titulo_nuestros_pilares_nuestra_empresa_'.lang().'') ?></div>
      <?php }
         ?> 
      <div class="row">
          <?php if (get_theme_mod('nuestros_pilares_img_1') != NULL){?>  
        <div class="col-lg-3 col-md-6">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_1') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_1_titulo_'.lang().'') ?></h3>
          </div>
        </div>
         <?php }
         ?> 
           <?php if (get_theme_mod('nuestros_pilares_img_2') != NULL){?>  
        <div class="col-lg-3 col-md-6">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_2') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_2_titulo_'.lang().'') ?></h3>
            
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_3') != NULL){?>  
        <div class="col-lg-3 col-md-6">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_3') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_3_titulo_'.lang().'') ?></h3>
           
          </div>
        </div>
         <?php }
         ?> 
          <?php if (get_theme_mod('nuestros_pilares_img_4') != NULL){?>  
        <div class="col-lg-3 col-md-6">
          <div class="support-item">
            <img src="<?php echo get_theme_mod('nuestros_pilares_img_4') ?>">
            <h3><?php echo get_theme_mod('nuestros_pilares_img_4_titulo_'.lang().'') ?></h3>
           
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
    <div class="main-services">
        <div class="services-img">
          <img alt="<?php the_title(); ?>" src="<?php echo get_the_post_thumbnail_url(); ?>">
        </div>
        <div class="services-text">
         
           <?php the_content(); ?>
          
        </div>
      </div>
    <?php  endwhile; ?>  
  </section>
  <?php }
         ?>


<?php if(get_field('plantilla') == 'certificaciones'){ ?>  
   <section class="page-container">
    <div class="section-title">
      <h1> <?php echo get_theme_mod('certificaciones_titulo_'.lang().'') ?></h1>
      <p> <?php echo get_theme_mod('certificaciones_descripcion_'.lang().'') ?></p>
    </div>
    <div class="certifications-slider">
		    <?php $args = array( 'post_type' => 'Certificaciones',); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="certification-item">
       <img src="<?php echo get_the_post_thumbnail_url(); ?>">
        <h3><?php the_title(); ?></h3>
      </div>
       <?php  endwhile; ?>  
    </div>
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
				<?php $postcontactTitle = lang() == "es" ? "Contáctenos" : "Contact us"; ?>
              <h1><?php echo $postcontactTitle ?></h1>
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
                <img class="main-contact__img" src="<?php echo get_theme_mod('direccion_img'); ?>">
                <span class="main-contact__text">
                <?php echo get_theme_mod('contactanos-direccion_tittulo_'.lang().''); ?>
                  <br>
                  <a target="_blank" href="<?php echo get_theme_mod('contactanos-direccion_url'); ?>"><?php echo get_theme_mod('contactanos-direccion'); ?></a>
                </span>
              </li>
                <?php }
         ?> 
  <?php if (get_theme_mod('contactanos-telefono_tittulo_'.lang().'') != NULL) { ?> 
              <li>
                <img class="main-contact__img" src="<?php echo get_theme_mod('telefono_img'); ?>">
                <span class="main-contact__text">
                  <?php echo get_theme_mod('contactanos-telefono_tittulo_'.lang().''); ?>
                  <br>
                  <a  target="_blank" href="tel:<?php echo get_theme_mod('contactanos-telefono_url'); ?>"><?php echo get_theme_mod('contactanos-telefono'); ?></a>
                </span>
              </li>
                <?php }
         ?> 
            <?php if (get_theme_mod('contactanos-correo_tittulo_'.lang().'') != NULL) { ?> 
              <li>
                <img class="main-contact__img" src="<?php echo get_theme_mod('correo_img'); ?>">
                <span class="main-contact__text">
                   <?php echo get_theme_mod('contactanos-correo_tittulo_'.lang().''); ?>
                  <br>
                  <a target="_blank" href="mailto:"><?php echo get_theme_mod('contactanos-correo'); ?></a>
                </span>
              </li>
                <?php }
         ?> 
            </ul>
            <ul class="contact-info-horizontal">
               <?php if (get_theme_mod('facebook_img') != NULL) { ?> 
              <li>
                <a  target="_blank" href="<?php echo get_theme_mod('contactanos-social-facebook'); ?>">
                 <img src="<?php echo get_theme_mod('facebook_img'); ?>">
                </a>
              </li>
              <?php }
         ?> 
          <?php if (get_theme_mod('instagram_img') != NULL) { ?> 
              <li>
             <a target="_blank" href="<?php echo get_theme_mod('contactanos-sociales_instagram'); ?>">
                  <img src="<?php echo get_theme_mod('instagram_img'); ?>">
                </a>
              </li>
               <?php }
         ?> 
               <?php if (get_theme_mod('youtube_img') != NULL) { ?> 
              <li>
                <a  target="_blank" href="<?php echo get_theme_mod('contactanos-social-youtube'); ?>">
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
         <div class="main-page">
    <div class="section-title left">
		<?php $posTitle = lang() == "es" ? "Tiendas comerciales" : "Commercial stores"; ?>
		<h1><?php echo $posTitle; ?></h1>
    </div>
    <div class="row">
      <div class="col-lg-5 col-xs-12 col-sm-12">
        <div class="points-of-sale-list" id="accordion">
           <?php $args = array( 'post_type' => 'punto_de_venta'); ?>
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
		  <?php $index = $loop->current_post ?>
          <div id="item-0">
            <div class="card-header" id="heading-<?php the_ID();?>">
              <h5 class="mb-0">
                <button aria-controls="p<?php the_ID();?>" aria-expanded="<?php echo $index === 0 ? "true" : "false" ?>" class="btn btn-link" data-target="#p<?php the_ID();?>" data-toggle="collapse">
                 <?php the_title(); ?>
                </button>
              </h5>
            </div>
              <div aria-labelledby="heading-<?php the_ID();?>" class="collapse <?php echo $index === 0 ? "show" : null ?>" data-map="map-<?php the_ID();?>" data-parent="#accordion" id="p<?php the_ID();?>">
              <div class="card-body">
               <?php the_content(); ?>
				<div class="map map-mobile">
			
					<iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="2<?php the_ID();?>" src="<?php the_field( 'url_embed_mapa' ); ?>" style="border:0;" tabindex="0" width="100%"></iframe>
					
			  </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?> 
        </div>
      </div>
      <div class="col-lg-7 d-none d-lg-block">
        <div class="points-of-sale-maps">
           <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product;  ?>
          <div class="map">
			 <iframe allowfullscreen="" aria-hidden="false" frameborder="0" height="310" id="map-<?php the_ID();?>" src="<?php the_field( 'url_embed_mapa' ); ?>" style="border:0;" tabindex="0" width="100%"></iframe>
			 
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
            
              <?php if(lang() == 'es'){echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) );}if(lang() == 'en'){ echo FrmFormsController::get_form_shortcode( array( 'id' => 6, 'title' => false, 'description' => false ) );} ?>    
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>

          <?php if(get_field('plantilla') == 'otros países'){ ?>  
         
  <div class="main-page countries">
    <div class="row">
      <div class="col-lg-4">
		   <?php if (get_theme_mod('paises_continente_titulo_'.lang().'') != NULL) { ?> 
        <div class="section-title left">
          <h1><?php echo get_theme_mod('paises_continente_titulo_'.lang().'') ?></h1>
        </div>
		   <?php }
         ?>

        <div class="countries-info">
			 <?php if (get_theme_mod('paises_descripcion_'.lang().'') != NULL) { ?> 
          <p><?php echo get_theme_mod('paises_descripcion_'.lang().'') ?></p>
          <p>
			  <?php }
         ?>
			   <?php if (get_theme_mod('paises_continente_correo_direccion') != NULL) { ?> 
            <a href="mailto:"><?php echo get_theme_mod('paises_continente_correo_direccion') ?></a>
			  <?php }
         ?>
          </p>
        </div>
        <div class="countries-list">
			    <?php $args = array( 'post_type' => 'paises', 'post_per_page' => 1); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
         <ul>
            <li>
              <h5><?php the_title(); ?></h5>
              <ul>
                <?php the_content(); ?>
              </ul>
            </li>
          </ul>
			 <?php endwhile; ?> 
        </div>
      </div>
      <div class="col-lg-8">
		   <?php if (get_theme_mod('paises__img') != NULL) { ?> 
        <div class="countries-img">
          <img src="<?php echo get_theme_mod('paises__img') ?>">
        </div>
		    <?php }
         ?>
      </div>
    </div>
  </div>
    
            <?php }
         ?>

<?php if(get_field('plantilla') == 'Políticas de datos'){ ?>
 <div class="main-contact">
    <div class="container">
		<div class="section-title">
	      <h1><?php the_title(); ?></h1>
    </div>
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
              <?php if(lang() == 'es'){echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) );}if(lang() == 'en'){ echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); } ?> 
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php }
         ?>
   <?php  endwhile; ?>
  <?php get_footer() ?>  