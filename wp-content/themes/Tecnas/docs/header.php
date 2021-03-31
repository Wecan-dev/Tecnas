<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='<?php echo lang() == 'es' ? "Especializados en diseñar, desarrollar, fabricar, maquilar y comercializar productos, ingredientes y aditivos dirigidos a la industria de alimentos para el consumo humano, soportado en el acompañamiento técnico integral y un servicio cálido." : "Specialized in designing, developing, manufacturing, assembling, and marketing products, ingredients, and additives aimed at the food industry for human consumption, complemented by comprehensive technical support and warm service."; ?>' name='description'>
  <meta content='<?php echo lang() == 'es' ? "Ingredientes, alimentos, materias primas, cárnicos, sabores, proteínas, colorantes, lácteos, panadería, repostería, snacks, apanados, bebidas, conservantes, limpieza, desinfección, especias" : "Ingredients for food, meat, flavors, proteins, dyes, dairy, pastries, biscuits, snacks, cereals, beverages, along with preservatives, cleaning, and disinfection"; ?>' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='' property='og:title'>
  <meta content='' property='og:description'>
  <meta content='' property='og:image'>
  <title>
    
    <?php if( is_home()){ ?>
      Tecnas -  <?php echo lang() == 'es' ? "Socios en su progreso" : "Partners in your progress"; ?> 
    <?php } else{ ?>
       Tecnas - <?php echo wp_title('');
    }?>
</title>
  <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>

<link href="<?php echo get_template_directory_uri(); ?>/assets/css/page.css" rel="stylesheet">

 <link href="<?php echo get_template_directory_uri(); ?>/assets/css/clients.css" rel="stylesheet">

  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/featured.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/services.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/certifications.css" rel="stylesheet">
   <link href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/form-contact-customer.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/form-contact-customer.css" rel="stylesheet">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
   <?php wp_head(); ?>
</head>

<body>
  <nav class='navbar navbar-expand-lg navbar-top'>
    <?php 
    $lang = get_bloginfo('language');

    if( $lang == 'es-CO'): ?>
    
     <a class='navbar-brand' href='<?php echo bloginfo('url').'/';?>'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/tecnas_logo.png'>
    </a>
    <?php else: ?>

     <a class='navbar-brand' href='<?php echo bloginfo('url').'/';?>'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/tecnas_logo_ingles.png'>
    </a>
    <?php endif; ?>
   
    <div class='search-bar'>
      <form>
       <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
      </form>
    </div>
    <div class='pse-logo'>
		<a target="_blank" href="https://www.mipagoamigo.com/MPA_WebSite/ServicePayments/StartPayment?id=106&searchedCategoryId=&searchedAgreementName=TECNAS"> 
			<img alt='PSE' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-pse.png'></a>
     
    </div>
    <div class='languages'>
      <div class='switch-languages'>
        <input id='toggle' type='checkbox'>
        <label class='toggle-item' for='toggle'>
          <div class='languages-label'>
          <!--  <?php $url = explode('?', $_SERVER['REQUEST_URI'], 2);
                      if (lang() == 'es'){  "Idioma"; }else{  "Language"; $url = explode('en', $_SERVER['REQUEST_URI'], 2);}  ?>
            <a title="Español"lang="es-CO" hreflang="es-CO" href="<?php echo $url[0]; ?>">
             <div  style='margin-left: 5px; color: black;'>ESP</div>
             </a>
             <a title="English" lang="en-US" hreflang="en-US" href="<?php echo $url[0]; ?>en/">
            <div style='color: black;'>ENG</div> -->
           <?php dynamic_sidebar( 'sidebar-1' ); ?>
          </div>
        </label>
      </div>
    </div>
  </nav>
	
	
	
	
 
  <nav class='navbar navbar-expand-lg navbar-bottom navbar-bottom__opacity1'>
    <button aria-controls='navbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#navbar' data-toggle='collapse' type='button'>
      <i class='fa fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='navbar'>
      <ul class='navbar-nav margin-auto'>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "destacado";}else{echo "news";} ?>'><?php if(lang() == 'es'){echo "Destacados";}if(lang() == 'en'){echo "News";} ?></a>
        </li>



         <li class='nav-item'>
          <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='/'><?php if(lang() == 'es'){echo "Portafolio";}if(lang() == 'en'){echo "Portfolio";} ?></a>
          <ul class='dropdown-menu multi-level'>
            <li class='multi-level-nav-item'>
              <a aria-controls='categoriesCollapse' aria-expanded='false' data-toggle='collapse' href='#categoriesCollapse' role='button'><?php if(lang() == 'es'){echo "Categorías";}if(lang() == 'en'){echo "Category ";} ?></a>
            </li>
            <div class='collapse' id='categoriesCollapse'>
              <ul class='collapse-list'>
                <?php $wcatTerms = get_terms('categoria-de-productos', array('hide_empty' => 0,'orderby' => 'id', 'exclude' => '552,550,661,665', 'parent' =>0)); 
                   foreach($wcatTerms as $wcatTerm) : ?>
          <?php
            $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wcatTerm->term_id,
                           'taxonomy' => 'categoria-de-productos',
              'orderby' => 'id',
                        );
                        $wsubcats = get_categories($wsubargs)
          ?>
                <li class='collapse-nav-item'>
<?php if (empty($wsubcats)) {?>
          
             <div class='dropdown-menu level-1'>
      <?php $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => array($wcatTerm->slug),
                    'operator'        => 'IN',
                    'orderby' => 'id',
                  )),
              ); ?>
               <?php $loop = new WP_Query( $args ); ?>
               <div class='level-2'>
                 <ul>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <li>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
                   </li>
                 <?php  endwhile; ?>
                 </ul>
               </div>
          </div>
              <?php } ?> 
        
          <a data-toggle="dropdown" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
  
  <!--   <a data-toggle="<?php echo !empty($wsubcats) ? 'dropdown' : null ?>" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a> -->
                  
                    <!-- subcategia -->
                    <div class='dropdown-menu level-1'>
                       <?php
                        /*$wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wcatTerm->term_id,
                           'taxonomy' => 'categoria-de-productos',
                        );
                        $wsubcats = get_categories($wsubargs);*/
              
                        foreach ($wsubcats as $wsc):
                        ?>
              <div class='level-2'>
              <div class='menu-header'>
                <a class=""><?php echo  $wsc->name;?></a> 
              </div>
                
            <?php
                
                        $wsubargsh = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wsc->term_id,
                           'taxonomy' => 'categoria-de-productos',
              'orderby' => 'id',
                        );
                        $wsubcatsh = get_categories($wsubargsh);
                        foreach ($wsubcatsh as $wsch):
                
                        ?>
                
                <ul>
                   <li>
                    <a class="" href="<?php echo get_term_link( $wsch->slug, $wsch->taxonomy );?>"><?php echo $wsch->name;?></a> 
                   </li>
                </ul>
                 <?php
            endforeach; ?> 
                  <?php  $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => array($wsc->slug),
                    'operator'        => 'IN',
                    'orderby' => 'id',
					  //No imprime los productos hijos de la categoria del tercer nivel
					'include_children' => false,
                    
                    
                  ),
           
                ),
  
              ); ?>  
                              
              <?php $loop = new WP_Query( $args ); ?>
               <?php while ( $loop->have_posts() ) : $loop->the_post(); 
              
                ?>
                 <ul>
                  
                  <li>
                  
                    <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                   </li>
                  </ul>  
               <?php  endwhile; ?>  
               </div>  
          
                        <?php
            endforeach; ?> 
           
            <!-- end subcategoria -->
              <?php endforeach; ?>  
         
                 </li>
              </ul>
           </div>      
        <li class='collapse-nav-item multi-level-nav-item'>
                      <a style="text-transform: uppercase;"  data-toggle='dropdown' href='#'><?php if(lang() == 'es'){echo "Productos";}if(lang() == 'en'){echo "Products";} ?></a>
                 <div class='dropdown-menu level-1'>
					
               <div class='level-2'>
                 <ul>
                         
       
					  <?php if( lang() == 'es'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '661',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					  <?php if( lang() == 'en'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '665',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					 <?php
          
                        $wsubcats = get_categories($wsubargs);
					 $i=1;
                        foreach ($wsubcats as $wsc):
					
                        ?>
				


					<ul>
						<li>
							<?php switch($i): 
							case 1: ?>
						  <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 2: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 3: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 4: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 5: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 6: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 7: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 8: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php endswitch; ?>
						</li>
						 
					 </ul>
                     <?php   
                                            $i++;
                                              endforeach; 
                                              ?>
				
                 </ul>
               </div>
					   <div class='level-2'>
                 <ul>
							  <?php if( lang() == 'es'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '661',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					  <?php if( lang() == 'en'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '665',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					 <?php
                        $wsubcats = get_categories($wsubargs);
					 $i=1;
                        foreach ($wsubcats as $wsc):
                        ?>
					<ul>
						<li>
							<?php switch($i): 
							case 9: ?>
						  <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 10: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 11: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 12: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 13: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 14: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 15: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 16: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 17: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 18: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 19: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 20: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php endswitch; ?>
						</li>
						 
					 </ul>
                     <?php   
                                            $i++;
                                              endforeach; 
                                              ?>
					 	             
                  <?php  $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => 'productos',
                    'operator'        => 'IN',
                    'orderby' => 'id',
					  //No imprime los productos hijos de la categoria del segundo nivel
					'include_children' => false,
                    
                    
                  ),
           
                ),
  
              ); ?>  
                              
              <?php $loop = new WP_Query( $args ); ?>
               <?php while ( $loop->have_posts() ) : $loop->the_post(); 
              
                ?>
                 <ul>
                  
                  <li>
                  
                    <a style="color: #162d50 !important;" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                   </li>
                  </ul>  
               <?php  endwhile; ?>     
					  </ul>
               </div>
					 
          </div>
            
        </li>
           
<li class='collapse-nav-item multi-level-nav-item'>
                     <a style="text-transform: uppercase;" data-toggle='dropdown' href='#'><?php if(lang() == 'es'){echo "Productos para limpieza, desinfección e inocuidad";}if(lang() == 'en'){echo "
Products for cleaning, disinfection and safety";} ?></a>
                 <div class='dropdown-menu level-1'>
<?php $loop = new WP_Query( 'post_type=producto&categoria-de-productos=productos-para-limpieza-desinfeccion-e-inocuidad&posts_per_page=-1' ); ?>
               <div class='level-2'>
                 <ul>  
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <li>
                     <a  style="color: #162d50 !important;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
                   </li>
                 <?php  endwhile; ?>
                 </ul>
               </div>
          </div>
            
        </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "cliente";}else{echo "customers";} ?>'><?php if(lang() == 'es'){echo "Representaciones";}if(lang() == 'en'){echo "
Our Allies";} ?></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "Quiénes somos";}if(lang() == 'en'){echo "
About us";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "nuestra-empresa";}else{echo "about";} ?>'><?php if(lang() == 'es'){echo "Nuestra empresa";}if(lang() == 'en'){echo "

Our company";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicio";}else{echo "service";} ?>'><?php if(lang() == 'es'){echo "Servicios";}if(lang() == 'en'){echo "Services";} ?></a>
            </li>
            <li>
               <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "certificacion";}else{echo "certification";} ?>'><?php if(lang() == 'es'){echo "Certificaciones";}if(lang() == 'en'){echo "Certifications";} ?></a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "contáctenos";}if(lang() == 'en'){echo "
Contact Us";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "punto-de-venta";}else{echo "trading-shops";} ?>'><?php if(lang() == 'es'){echo "Punto de venta";}if(lang() == 'en'){echo "
Trading shops";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicios-al-cliente";}else{echo "customer-service";} ?>'><?php if(lang() == 'es'){echo "Servicio al cliente";}if(lang() == 'en'){echo "
Customer service";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "otros-paises";}else{echo "other-countries";} ?>'><?php if(lang() == 'es'){echo "Otros países";}if(lang() == 'en'){echo "Other countries";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "trabaje-para-nosotros";}else{echo "work-with-us";} ?>'><?php if(lang() == 'es'){echo "Trabaje para nosotros";}if(lang() == 'en'){echo "Work with us";} ?></a>
            </li>
          </ul>
        </li>
      
      
      <li class='nav-item'>
      
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "Redes Sociales";}if(lang() == 'en'){echo "Social Media";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a target="_blank" href='<?php echo get_theme_mod('contactanos-social-facebook'); ?>'>
          
        <i class="fa fa-facebook"></i>
          Facebook
        </a>
            </li>
      
        <li>
              <a target="_blank" href='<?php echo get_theme_mod('contactanos-social-youtube'); ?>'>
        <i class="fa fa-youtube-play"></i>
          YouTube
        </a>
            </li>
            
          </ul>
        </li>
      
      
      <li class='nav-item'>
    
        </li>
      </ul>
    </div>
  </nav>  

	
	  <nav class='navbar navbar-expand-lg navbar-bottom navbar-sticky'>
    <button aria-controls='navbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#navbar' data-toggle='collapse' type='button'>
      <i class='fa fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='navbar'>
      <ul class='navbar-nav margin-auto'>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "destacado";}else{echo "news";} ?>'><?php if(lang() == 'es'){echo "Destacados";}if(lang() == 'en'){echo "News";} ?></a>
        </li>



         <li class='nav-item'>
          <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='/'><?php if(lang() == 'es'){echo "Portafolio";}if(lang() == 'en'){echo "Portfolio";} ?></a>
          <ul class='dropdown-menu multi-level'>
            <li class='multi-level-nav-item'>
              <a aria-controls='categoriesCollapse' aria-expanded='false' data-toggle='collapse' href='#categoriesCollapse' role='button'><?php if(lang() == 'es'){echo "Categorías";}if(lang() == 'en'){echo "Category ";} ?></a>
            </li>
            <div class='collapse' id='categoriesCollapse'>
              <ul class='collapse-list'>
                <?php $wcatTerms = get_terms('categoria-de-productos', array('hide_empty' => 0,'orderby' => 'id', 'exclude' => '552,550,661,665', 'parent' =>0)); 
                   foreach($wcatTerms as $wcatTerm) : ?>
          <?php
            $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wcatTerm->term_id,
                           'taxonomy' => 'categoria-de-productos',
              'orderby' => 'id',
                        );
                        $wsubcats = get_categories($wsubargs)
          ?>
                <li class='collapse-nav-item'>
<?php if (empty($wsubcats)) {?>
          
             <div class='dropdown-menu level-1'>
      <?php $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => array($wcatTerm->slug),
                    'operator'        => 'IN',
                    'orderby' => 'id',
                  )),
              ); ?>
               <?php $loop = new WP_Query( $args ); ?>
               <div class='level-2'>
                 <ul>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <li>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
                   </li>
                 <?php  endwhile; ?>
                 </ul>
               </div>
          </div>
              <?php } ?> 
        
          <a data-toggle="dropdown" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
  
  <!--   <a data-toggle="<?php echo !empty($wsubcats) ? 'dropdown' : null ?>" href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a> -->
                  
                    <!-- subcategia -->
                    <div class='dropdown-menu level-1'>
                       <?php
                        /*$wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wcatTerm->term_id,
                           'taxonomy' => 'categoria-de-productos',
                        );
                        $wsubcats = get_categories($wsubargs);*/
              
                        foreach ($wsubcats as $wsc):
                        ?>
              <div class='level-2'>
              <div class='menu-header'>
                <a class="" href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo  $wsc->name;?></a> 
              </div>
                
            <?php
                
                        $wsubargsh = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wsc->term_id,
                           'taxonomy' => 'categoria-de-productos',
              'orderby' => 'id',
                        );
                        $wsubcatsh = get_categories($wsubargsh);
                        foreach ($wsubcatsh as $wsch):
                
                        ?>
                
                <ul>
                   <li>
                    <a class="" href="<?php echo get_term_link( $wsch->slug, $wsch->taxonomy );?>"><?php echo $wsch->name;?></a> 
                   </li>
                </ul>
                 <?php
            endforeach; ?> 
                  <?php  $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => array($wsc->slug),
                    'operator'        => 'IN',
                    'orderby' => 'id',
					  //No imprime los productos hijos de la categoria del tercer nivel
					'include_children' => false,
                    
                    
                  ),
           
                ),
  
              ); ?>  
                              
              <?php $loop = new WP_Query( $args ); ?>
               <?php while ( $loop->have_posts() ) : $loop->the_post(); 
              
                ?>
                 <ul>
                  
                  <li>
                  
                    <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                   </li>
                  </ul>  
               <?php  endwhile; ?>  
               </div>  
          
                        <?php
            endforeach; ?> 
           
            <!-- end subcategoria -->
              <?php endforeach; ?>  
         
                 </li>
              </ul>
           </div>      
        <li class='collapse-nav-item multi-level-nav-item'>
                      <a style="text-transform: uppercase;"  data-toggle='dropdown' href='#'><?php if(lang() == 'es'){echo "Productos";}if(lang() == 'en'){echo "Products";} ?></a>
                 <div class='dropdown-menu level-1'>
					
               <div class='level-2'>
                 <ul>
                         
       
					  <?php if( lang() == 'es'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '661',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					  <?php if( lang() == 'en'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '665',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					 <?php
          
                        $wsubcats = get_categories($wsubargs);
					 $i=1;
                        foreach ($wsubcats as $wsc):
					
                        ?>
				


					<ul>
						<li>
							<?php switch($i): 
							case 1: ?>
						  <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 2: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 3: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 4: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 5: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 6: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 7: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 8: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php endswitch; ?>
						</li>
						 
					 </ul>
                     <?php   
                                            $i++;
                                              endforeach; 
                                              ?>
				
                 </ul>
               </div>
					   <div class='level-2'>
                 <ul>
							  <?php if( lang() == 'es'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '661',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					  <?php if( lang() == 'en'){ ?>
      <?php
                  $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => '665',
							'orderby' => 'id',
                           'taxonomy' => 'categoria-de-productos',
                        );
												?>
			<?php } ?>
					 <?php
                        $wsubcats = get_categories($wsubargs);
					 $i=1;
                        foreach ($wsubcats as $wsc):
                        ?>
					<ul>
						<li>
							<?php switch($i): 
							case 9: ?>
						  <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 10: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 11: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 12: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 13: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 14: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 15: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 16: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 17: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 18: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 19: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php case 20: ?>
							 <a  style="color: #162d50 !important;" href="<?php echo get_term_link(  $wsc->slug,  $wsc->taxonomy );?>"><?php echo $wsc->name; ?></a>  
							<?php break; ?>
							<?php endswitch; ?>
						</li>
						 
					 </ul>
                     <?php   
                                            $i++;
                                              endforeach; 
                                              ?>
					 	             
                  <?php  $args =  array(
                'post_type' => 'producto',
                'post_status' => 'publish',
                'posts_per_page' => 99999,
                'tax_query' => array(
                  'relation'=>'AND', // 'AND' 'OR' ...
                  array(
                    'taxonomy' => 'categoria-de-productos',
                    'field'           => 'slug',
                    'terms'           => 'productos',
                    'operator'        => 'IN',
                    'orderby' => 'id',
					  //No imprime los productos hijos de la categoria del segundo nivel
					'include_children' => false,
                    
                    
                  ),
           
                ),
  
              ); ?>  
                              
              <?php $loop = new WP_Query( $args ); ?>
               <?php while ( $loop->have_posts() ) : $loop->the_post(); 
              
                ?>
                 <ul>
                  
                  <li>
                  
                    <a style="color: #162d50 !important;" href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                   </li>
                  </ul>  
               <?php  endwhile; ?>     
					  </ul>
               </div>
					 
          </div>
            
        </li>
           
<li class='collapse-nav-item multi-level-nav-item'>
                     <a style="text-transform: uppercase;" data-toggle='dropdown' href='#'><?php if(lang() == 'es'){echo "Productos para limpieza, desinfección e inocuidad";}if(lang() == 'en'){echo "
Products for cleaning, disinfection and safety";} ?></a>
                 <div class='dropdown-menu level-1'>
<?php $loop = new WP_Query( 'post_type=producto&categoria-de-productos=productos-para-limpieza-desinfeccion-e-inocuidad&posts_per_page=-1' ); ?>
               <div class='level-2'>
                 <ul>  
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                   <li>
                     <a  style="color: #162d50 !important;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
                   </li>
                 <?php  endwhile; ?>
                 </ul>
               </div>
          </div>
            
        </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "cliente";}else{echo "customers";} ?>'><?php if(lang() == 'es'){echo "Representaciones";}if(lang() == 'en'){echo "
Our Allies";} ?></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "Quiénes somos";}if(lang() == 'en'){echo "
About us";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "nuestra-empresa";}else{echo "about";} ?>'><?php if(lang() == 'es'){echo "Nuestra empresa";}if(lang() == 'en'){echo "

Our company";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicio";}else{echo "service";} ?>'><?php if(lang() == 'es'){echo "Servicios";}if(lang() == 'en'){echo "Services";} ?></a>
            </li>
            <li>
               <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "certificacion";}else{echo "certification";} ?>'><?php if(lang() == 'es'){echo "Certificaciones";}if(lang() == 'en'){echo "Certifications";} ?></a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "contáctenos";}if(lang() == 'en'){echo "
Contact Us";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "punto-de-venta";}else{echo "trading-shops";} ?>'><?php if(lang() == 'es'){echo "Punto de venta";}if(lang() == 'en'){echo "
Trading shops";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicios-al-cliente";}else{echo "customer-service";} ?>'><?php if(lang() == 'es'){echo "Servicio al cliente";}if(lang() == 'en'){echo "
Customer service";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "otros-paises";}else{echo "other-countries";} ?>'><?php if(lang() == 'es'){echo "Otros países";}if(lang() == 'en'){echo "Other countries";} ?></a>
            </li>
            <li>
              <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "trabaje-para-nosotros";}else{echo "work-with-us";} ?>'><?php if(lang() == 'es'){echo "Trabaje para nosotros";}if(lang() == 'en'){echo "Work with us";} ?></a>
            </li>
          </ul>
        </li>
      
      
      <li class='nav-item'>
      
          <a class='nav-link dropdown-toggle' href='#'><?php if(lang() == 'es'){echo "Redes Sociales";}if(lang() == 'en'){echo "Social Media";} ?></a>
          <ul class='dropdown-menu hoverable one-level'>
            <li>
              <a target="_blank" href='<?php echo get_theme_mod('contactanos-social-facebook'); ?>'>
          
        <i class="fa fa-facebook"></i>
          Facebook
        </a>
            </li>
      
        <li>
              <a target="_blank" href='<?php echo get_theme_mod('contactanos-social-youtube'); ?>'>
        <i class="fa fa-youtube-play"></i>
          YouTube
        </a>
            </li>
            
          </ul>
        </li>
      
      
      <li class='nav-item'>
    
        </li>
      </ul>
    </div>
  </nav>  
   
 


                      
 
                            
          
                              

                                
                    