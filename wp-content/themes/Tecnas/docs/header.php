<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='' name='description'>
  <meta content='' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='' property='og:title'>
  <meta content='' property='og:description'>
  <meta content='' property='og:image'>
  <title>Tecnas | Socios en su progreso</title>
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
       <link href="assets/css/form-contact-customer.css" rel="stylesheet">
</head>
 <?php wp_head(); ?>
<body>
  <nav class='navbar navbar-expand-lg navbar-top'>
    <a class='navbar-brand' href='<?php echo bloginfo('url').'/';?>'>
      <img src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/tecnas_logo.png'>
    </a>
    <div class='search-bar'>
      <form>
        <div class='input-group'>
          <input class='search-input'>
          <div class='input-group-append'>
            <span class='input-group-text'>
              <i class='fa fa-search'></i>
            </span>
          </div>
        </div>
      </form>
    </div>
    <div class='pse-logo'>
      <img alt='PSE' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-pse.png'>
    </div>
    <div class='languages'>
      <div class='switch-languages'>
        <input id='toggle' type='checkbox'>
        <label class='toggle-item' for='toggle'>
          <div class='languages-label'>
            <div style='margin-left: 5px'>ESP</div>
            <div>ENG</div>
          </div>
        </label>
      </div>
    </div>
  </nav>
  <nav class='navbar navbar-expand-lg navbar-bottom'>
    <button aria-controls='navbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#navbar' data-toggle='collapse' type='button'>
      <i class='fa fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='navbar'>
      <ul class='navbar-nav margin-auto'>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo bloginfo('url').'/featured';?>'>Destacados</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' data-toggle='dropdown' href='/'>Portafolio</a>
          <ul class='dropdown-menu multi-level'>
            <li class='multi-level-nav-item'>
              <a aria-controls='categoriesCollapse' aria-expanded='false' data-toggle='collapse' href='#categoriesCollapse' role='button'>Categorías</a>
            </li>
            <div class='collapse' id='categoriesCollapse'>
                 <?php $wcatTerms = get_terms('categoria-de-productos', array('hide_empty' => 0, 'parent' =>0)); 
                   
                   foreach($wcatTerms as $wcatTerm) : 
                                                      ?>
              <ul class='collapse-list'>
                <li class='collapse-nav-item'>
                   <a data-toggle='dropdown' href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
                   <!-- subcategia -->
                    <div class='dropdown-menu level-1'>
                      <div class='level-2'>
                        <div class='menu-header'>
          <?php
          
                        $wsubargs = array(
                           'hierarchical' => 1,
                           'show_option_none' => '',
                           'hide_empty' => 0,
                           'parent' => $wcatTerm->term_id,
                           'taxonomy' => 'categoria-de-productos'
                        );
                        $wsubcats = get_categories($wsubargs);
                        foreach ($wsubcats as $wsc):
                        ?>
                        
          
                                <a class="" href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a> 
              <?php $args =  array(
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
               )),
          ); ?>
              <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

          <ul>
                        <li>
                          <a href='<?php the_permalink(); ?>'><?php the_title(); ?></a>
                        </li>
                      </ul>
 <?php  endwhile; ?>  

                        <?php
                        endforeach;
                        ?>   
            </div>

      
            </div>
            </div>

                 <?php   
                                           
                                              endforeach; 
                                              ?>                        
        
            </div>
            <li class='multi-level-nav-item'>
              <a href='#'>Productos</a>
            </li>
            <li class='multi-level-nav-item'>
              <a href='#'>Productos para limpieza, desinsfección e inocuidad</a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo bloginfo('url').'/cliente';?>'>Representaciones</a>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='#'>Quiénes somos</a>
          <ul class='dropdown-menu one-level'>
            <li>
              <a href='<?php echo bloginfo('url').'/about';?>'>Nuestra empresa</a>
            </li>
            <li>
              <a href='<?php echo bloginfo('url').'/Servicios';?>'>Servicios</a>
            </li>
            <li>
               <a href='<?php echo bloginfo('url').'/certificaciones';?>'>Certificaciones</a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link dropdown-toggle' href='contact.html'>Contacténos</a>
          <ul class='dropdown-menu one-level'>
            <li>
              <a href='<?php echo bloginfo('url').'/punto-de-venta';?>'>Punto de Venta</a>
            </li>
            <li>
              <a href='<?php echo bloginfo('url').'/servicios-al-cliente';?>'>Servicios al cliente</a>
            </li>
            <li>
              <a href='<?php echo bloginfo('url').'/otros-paises';?>'>Otros países</a>
            </li>
            <li>
              <a href='<?php echo bloginfo('url').'/trabaje-para-nosotros';?>'>Trabaje para nosotros</a>
            </li>
          </ul>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='#'>Redes Sociales</a>
        </li>
      </ul>
    </div>
  </nav>  

   
 


                      
 
                            
          
                              

                                
                    