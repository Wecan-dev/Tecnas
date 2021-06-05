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
<style>
	.main-slider .main-slider-item .main-slider-btn {
    
    padding: 14px 70px;
    font-size: 24px;

}
	
.featured-card-img {
    height: auto;
}
 .navbar-top {

    padding: 0px 108px;

}
            .multi-level .collapse-nav-item:hover  .hover-dark{
            background-color: rgb(3, 50, 85) !important;
          }
    .footer-top .footer-images li:nth-child(4) a img {
    height: 150px !important;
    width: 150px !important;
}
	    .page-container {
    padding: 45px 110px 110px 110px !important;
}
    .featured-page-container .section-title {
    margin-bottom: 25px;
}
	.main-contact {
    padding: 50px 0;
}
	.navbar-top .navbar-brand img {
    width: 100px;
}
	.main-page {
    padding: 40px !important;
      padding-bottom: 5px !important;
}
    
        .multi-level .level-2 {
  
    overflow-y: hidden;
    max-height: 550px !important;
      transition: 0.3s ease-in-out;
}
    
    @media screen and (max-width: 768px) and (min-width: 0px){
		
	li.lang-item.lang-item-2.lang-item-en:lang(en):before {
    content: "";
    display: block;
    transition: all 0.2s ease;
    width: 50px;
    height: 32px;
    top: 50%;
    left: 50px;
    border-radius: 18px;
    background: #a3bc2d;
    transform: translateY(-50%);
    position: absolute;
    z-index: -1;
}
		
		.main-slider .main-slider-item .main-slider-btn {
    padding: 7px 20px;
    font-size: 14px;
}
		.navbar-top {
    padding: 0px 10px;
}


		.hide-mobile-active{
			display: block !important;
		}
		.hide-mobile-none{
			display: none !important;
		}
		.multi-level .level-2 {
    overflow-y: hidden;
    max-height: 650px !important;
    transition: 0.3s ease-in-out;
}
		.portfolio-detail-text p, .portfolio-detail-text li, .portfolio-detail-text span {
    font-size: 15px;
  
    line-height: 26px;
   
}
		.main-page {
    padding: 20px 5px !important;
}
		.switch-languages label.toggle-item {
    width: 110px;
 
    height: 45px;

}
		li.lang-item.lang-item-5.lang-item-es:lang(es):before {
    content: "";
    width: 50px;
    height: 30px;
  
}
		.switch-languages label.toggle-item .languages-label {
    
    font-size: 12px;
}
		.navbar-top .navbar-brand img {
    width: 70px;
}
		    .page-container {
    padding: 45px !important;
}
.footer-top .footer-images li:nth-child(4) a img {
    height: 120px !important;
    width: 120px !important;
}
      
      .dropdown-toggle > .dropdown-menu-1 {

    overflow-y: scroll !important;
    max-height: 520px !important;
}
		
		.pse-logo {
    display: block !important;
    order: 1;
}
		
		.pse-logo img {
    width: 45px;
    height: 42px;
    object-fit: contain;
}
		.pse-logo {
    margin-left: 50px;
}
		
.client-item {
    margin-bottom: 45px !important;
    height: 200px !important;
}
    }
    
	.client-item {
    margin-bottom: 10px !important;
    height: 250px !important;
}

    
	.navbar.navbar-bottom .nav-link {
 
    padding: 10px;

}
    .navbar.navbar-bottom .nav-link {
    font-size: 15.3px;
}

.multi-level .multi-level-nav-item a {

    font-size: 11px !important;
    
}
	.multi-level .collapse-nav-item a {

    font-size: 11px;
   
}
	
	
	
	
    .multi-level .level-2:hover {
        overflow-y: scroll !important; 
      transition: 0.3s ease-in-out;
      width: 270px !important;
    }
    
    
    .multi-level .level-2::-webkit-scrollbar {
  width: 8px;
}

/* Track */
.multi-level .level-2::-webkit-scrollbar-track {
  box-shadow: inset 0 0 0px grey; 
  border-radius: 2px;
}
 
/* Handle */
.multi-level .level-2::-webkit-scrollbar-thumb {
  background: gray; 
  border-radius: 2px;
}

    #ajaxsearchliteres1 > p{
      display: none !important;
    }
    

    
    
        </style>
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
  
  
  
  <?php if(lang() == 'es'):?>
 
  <nav class='navbar navbar-expand-lg navbar-bottom'>
    <button aria-controls='navbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-target='#navbar' data-toggle='collapse' type='button'>
      <i class='fa fa-bars'></i>
    </button>
    <div class='collapse navbar-collapse' id='navbar'>
 <ul class="navbar-nav margin-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/destacado">Destacados</a>
        </li>



       <?php if ( wp_is_mobile() ) : ?>
	    <!-- OPEN MOBILE-->
	 <li class="toggle-none-mobile nav-item  dropdown-toggle-no hide-mobile-j">
          <a class="nav-link active dropdown-toggle " data-toggle="dropdown" href="">Portafolio</a>
          <ul class="dropdown-menu multi-level test-class " >
            <li class="multi-level-nav-item">
              <a aria-controls="categoriesCollapse" aria-expanded="false" data-toggle="collapse" href="#categoriesCollapse" role="button">Categorías</a>
            </li>
            <div class="collapse" id="categoriesCollapse">
              <ul class="collapse-list">

                <!-- CARNICA -->
                <li class="collapse-nav-item">        
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/carnica/">Cárnica</a>
  
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                    <!-- CARNICA - SABORIZACION -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                
                    <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/condimentos-para-elaborar-embutidos-2/">Condimentos para elaborar embutidos</a>
                        </li>
                      </ul> 

                    <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/adobos-sazonadores-y-marinados/">Adobos, sazonadores y marinados</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/humos-sabores-parrilla-naturales-2/">Humos, sabores parrilla naturales</a>
                        </li>
                      </ul>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/potenciadores-naturales-de-sabor-2/">Potenciadores naturales de sabor</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/especias-y-extractos-de-especias-2/">Especias y extractos de especias</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-plus-2/">Sabores PLUS</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-naturales-natplus-2/">Sabores naturales NATPLUS</a>
                        </li>
                      </ul>  
                  </div> 

                  <!-- CARNICA - SALUD Y BIENESTAR -->
                  <div class="level-2">
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-origen-animal/">Proteínas de origen animal</a>
                        </li>
                      </ul> 
                          
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salmueras-para-marinar-sin-alergenos-adicionados/">Salmueras para marinar sin alérgenos adicionados</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>  
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/saborizacion-natural-carnica/">Saborización natural cárnica</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/alternativas-para-apanar-sin-gluten-adicionado/">Alternativas para apanar sin gluten adicionado</a>
                        </li>
                      </ul> 
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                                              
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>  
                    </div> 

                    <!-- CARNICA - FUNCIONALIDAD -->
                    <div class="level-2">
                      <div class="menu-header">
                        <a class="">Funcionalidad</a> 
                      </div>
          
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sistemas-de-textura-para-carnicos/">Sistemas de textura para cárnicos</a>
                        </li>
                      </ul> 
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistemas-para-apanar/">Sistemas para apanar</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-origen-animal/">Proteínas de origen animal</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                              
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>  
            
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fosfatos/">Fosfatos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                      </li>
                      </ul> 

                      <ul>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>                
                  </div>  

                <!-- CARNICA -->
                </div>
                </li>

                <!-- LACTEOS -->
                <li class="collapse-nav-item">
                    <a data-toggle="dropdown" style="text-transform: uppercase;" 
                    class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/lacteos/">Lácteos y Helados</a>
      
                        <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                        <div class="level-2">
                        <!-- LACTEOS - SABORIZACION -->
                        <div class="menu-header">
                          <a class="">Saborización</a> 
                        </div>
                    
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                    <!-- LACTEOS - SABORIZACION -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                            
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-lacteos/">Plant-Based</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/helados-soft-saludables/">Helados soft  saludables</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  
                
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>
                      </ul> 
                    
                  </div>  
              
                    <div class="level-2">
                    <!-- LACTEOS - FUNCIONALIDAD -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/helados-soft-saludables/">Helados soft  saludables</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/ingredientes-para-quesos/">Ingredientes para quesos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-lacteos/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul> 
             <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-quesos-analogos/">Bases para quesos análogos libre de lactosa</a>
                        </li>
                      </ul> 




                      <ul>                  
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-lacteos/">Estabilizantes para lácteos</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-bebidas/">Estabilizantes para bebidas</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul> 
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fosfatos/">Fosfatos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>  
                    
                  </div>  

                <!-- end LACTEOS  -->
                </div>
                </li>

                <!-- PANADERIA REPOSTERIA Y AREPAS  -->
                <li class="collapse-nav-item">
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/panaderia-reposteria-y-arepas-2/">panadería, repostería y arepas</a>
          
                <!-- subcategia -->
                <div class="dropdown-menu level-1">
                  <div class="level-2">
                  <!-- PANADERIA REPOSTERIA Y AREPAS - SABORIZACION -->
                    <div class="menu-header">
                      <a class="">Saborización</a> 
                    </div>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul> 
                      
                  </div>  
              
                  <div class="level-2">
                    <!-- PANADERIA REPOSTERIA Y AREPAS - SALUD Y BIENESTAR  -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-panaderia-reposteria-y-arepas-2">Plant-Based</a> 
                        </li>
                      </ul>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>  
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>


                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  
                  </div>  
              
                  <div class="level-2">
                    <!-- PANADERIA REPOSTERIA Y AREPAS - FUNCIONALIDAD  -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>                
                                
                      <ul>
                        <Li>
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                          </li>
                      </ul>


                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-panaderia-reposteria-y-arepas-2/">Plant-Based</a> 
                        </li>
                      </ul>


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 
                      

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  

                      <ul>
                      
                      <li>
                      
                        <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                      </li>
                      </ul>


                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                          </li>
                      </ul>

                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                          </li>
                      </ul>  
                    
                  </div>  
            
                <!-- end PANADERIA REPOSTERIA Y AREPAS -->
                </div>
                </li>

                <!-- BEBIDAS Y VENDING  -->
                <li class="collapse-nav-item">

                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/bebidas-y-vending/">Bebidas y Vending</a>
      
                  <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                      <div class="level-2">
                        <!-- BEBIDAS Y VENDING  - SABORIZACION  -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                    
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                    <!-- BEBIDAS Y VENDING  - SALUD Y BIENESTAR  -->
                      <div class="menu-header">
                        <a class="">Salud y Bienestar</a> 
                      </div>                  
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-vending/">Bases vending</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-bebidas-y-vending/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-nutritivas-y-refrescantes/">Bases para bebidas nutritivas y refrescantes</a>
                        </li>
                      </ul>
                          
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>
                      
                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>
                          
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>                
                        
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- BEBIDAS Y VENDING  - FUNCIONALIDAD  -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-vending/">Bases vending</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-bebidas-y-vending/">Plant-Based</a> 
                        </li>
                      </ul>
                      

                      <ul>                  
                        <li>                                                
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-bebidas/">Estabilizantes para bebidas</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>  
                  </div>  
              
                <!-- end BEBIDAS Y VENDING -->
                  </div>
                </li>

                <!-- GALLETAS Y SNACKS -->
                <li class="collapse-nav-item">
            
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/galletas-y-snacks/">Galletas y Snacks</a>
                  <!-- subcategia -->
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                      <!-- GALLETAS Y SNACKS - SABORIZACION -->                
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                
                                  
                      <ul>
                        <li>     
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>   

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul>  

                    
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- GALLETAS Y SNACKS - SALUD Y BIENESTAR -->  
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-galletas-y-snacks/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                      
                      <ul>                  
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                          </li>
                      </ul> 


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>                  
                      </ul> 


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      
                  </div>  
              
                  <div class="level-2">
                  <!-- GALLETAS Y SNACKS - FUNCIONALIDAD -->  
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>
                            
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-galletas-y-snacks/">Plant-Based</a> 
                        </li>
                      </ul>
        
                      <ul>
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                        </li>
                      </ul>


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>

                  </div>  

                <!-- end GALLETAS Y SNACKS -->
                  </div>
                </li>

                <!-- HORECA -->
                <li class="collapse-nav-item">

                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/horeca/">Horeca</a>
                  <!-- subcategia -->
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                      <!-- HORECA - SABORIZACION -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                    
                                
                    <ul>
                      <li>
                        <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salsas-y-aderezo/">Salsas y Aderezos</a> 
                      </li>
                    </ul>

                    <ul>                  
                      <li>                  
                        <a href="<?php bloginfo('url'); ?>/producto/bases-para-arroces-caldos-sopas-y-cremas/">Bases para arroces, caldos, sopas y cremas</a>
                      </li>
                    </ul>  

                    <ul>                  
                      <li>                  
                        <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                      </li>
                    </ul>  
                                  
                    <ul>
                      <li>
                        <a href="<?php bloginfo('url'); ?>/producto/condimentos-para-elaborar-embutidos-2/">Condimentos para elaborar embutidos</a>
                      </li>
                    </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/adobos-sazonadores-y-marinados/">Adobos, sazonadores y marinados</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/humos-sabores-parrilla-naturales-2/">Humos, sabores parrilla naturales</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/potenciadores-naturales-de-sabor-2/">Potenciadores naturales de sabor</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/especias-y-extractos-de-especias-2/">Especias y extractos de especias</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- HORECA - SALUD Y BIENESTAR -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/alternativas-para-apanar-sin-gluten-adicionado/">Alternativas para apanar sin gluten adicionado</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-elaborar-sustitutos-carnicos/">Bases para elaborar sustitutos cárnicos</a>
                        </li>
                      </ul> 

                        
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/salmueras-para-marinar-sin-alergenos-adicionados/">Salmueras para marinar sin alérgenos adicionados</a>
                        </li>
                      </ul>   
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-horeca/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-nutritivas-y-refrescantes/">Bases para bebidas nutritivas y refrescantes</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>  

                      

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>    
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/saborizacion-natural-carnica/">Saborización natural cárnica</a> 
                        </li>
                      </ul>
                    
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                    <div class="level-2">

                    <!-- HORECA - FUNCIONALIDAD -->
                      <div class="menu-header">
                        <a class="">Funcionalidad</a> 
                      </div>                    
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistema-para-apanar/">Sistema para apanar</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-horeca/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-elaborar-sustitutos-carnicos/">Bases para elaborar sustitutos cárnicos</a>
                        </li>
                      </ul>  
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sistemas-de-textura-para-carnicos/">Sistemas de textura para cárnicos</a>
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  
                
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                          </li>
                      </ul> 

                      

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>  
                    
                  </div>  
                <!-- end HORECA -->
                  </div>
                </li>

              </ul>
           </div>    

      
        
        
        <!-- PRODUCTOS --> 
        <li class="collapse-nav-item multi-level-nav-item">
          <a class="hover-dark" style="text-transform: uppercase; " data-toggle="dropdown" href="#">Productos</a>
            <div class="dropdown-menu level-1">
            <div class="level-2">
              <ul>
                         
                <ul>
                  <li>
                    <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sabores-carnicos/">Sabores Cárnicos</a>  
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a>  
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistemas-de-texturas/">Sistema de textura</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistema-para-apanar/">Sistemas para apanar</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-productos/">Plant-Based</a>  
                  </li>
                </ul>
                          
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/fibras-es-productos/">Fibras</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/salsas-y-aderezos/">Salsas y aderezos</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                  </li>             
                </ul>
                                  
                <ul>
                  <li>
                  </li>                  
                </ul>                          

                <ul>
                  <li>
                  </li>             
                </ul>                                

                <ul>
                  <li>
                  </li>             
                </ul>
                                  
                <ul>
                  <li>
                  </li>             
                </ul>                                

                <ul>
                  <li>
                  </li>             
                </ul>
                            
              </ul>
            </div>
             <div class="level-2">
                <ul>
                  <ul>
                    <li>
                  </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>
                
                  <ul>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sabores-otras-aplicaciones/">Sabores otras aplicaciones</a>  
                    </li>             
                  </ul>

                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a>  
                    </li>                        
                  </ul>
                  <ul>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/conservantes-y-antioxidantes/">Conservantes y antioxidantes</a>  
                    </li>
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/panaderia-reposteria-y-arepas/">Panadería, repostería y arepas</a>  
                    </li>
                    
                  </ul>
                  <ul>
                      <li>
                          <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/productos-para-lacteos-y-helados/">Productos para lácteos y helados</a>  
                      </li>
                    
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/opciones-para-bebidas-y-vending/">Opciones para bebidas y vending</a>  
                    </li>
                    
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/bases-para-arroces-caldos-sopas-y-cremas/">Bases para arroces, caldos, sopas y cremas</a>  
                    </li>
                    
                  </ul>           
                </ul>
               </div>           
          </div>
            
        </li>
        
        <!-- PRODUCTOS PARA LIMPIEZA --> 
        <li class="collapse-nav-item multi-level-nav-item">
          <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">Productos para limpieza, desinfección e inocuidad</a>
            <div class="dropdown-menu level-1">
               <div class="level-2">
                 <ul>  
                     <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-desengrasantes-neutros-biodegradables/">Detergentes desengrasantes neutros biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-desengrasantes-alcalinos-biodegradables/">Detergentes desengrasantes alcalinos biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-acidos-desincrustantes-biodegradables/">Detergentes ácidos desincrustantes biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/soluciones-especializadas/">Soluciones especializadas</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes/">Desinfectantes</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes-especializados/">Desinfectantes especializados</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes-de-contacto-directo-con-alimentos/">Desinfectantes de contacto directo con alimentos</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/sanitizacion-de-manos/">Sanitización de manos</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/especialidades-para-plantas-de-beneficio/">Especialidades para plantas de beneficio</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/productos-de-lavanderia-biodegradables/">Productos  de lavandería biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/cepillos-y-accesorios/">Cepillos y accesorios</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/kit-de-testeo-quimico/">Kit de testeo químico</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/panos-de-limpieza/">Paños de limpieza</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/indumentaria-sanitaria/">Indumentaria sanitaria</a>  
                    </li>
                  </ul>
               </div>
          </div> 
        </li>
          </ul>
        </li>
	 
	
		<!-- CLOSE MOBILE-->
		<?php else : ?>
		<!-- OPEN DESKTOP-->
	 
	 <li class="toggle-none-mobile nav-item dropdown-toggle dropdown-toggle-no hide-mobile-j">
          <a class="nav-link active dropdown-toggle-a " data-toggle="dropdown" href="">Portafolio</a>
          <ul class="dropdown-menu-1 multi-level test-class hide-mobile-none" >
            <li class="multi-level-nav-item">
              <a aria-controls="categoriesCollapse" aria-expanded="false" data-toggle="collapse" href="#categoriesCollapse" role="button">Categorías</a>
            </li>
            <div class="collapse" id="categoriesCollapse">
              <ul class="collapse-list">

                <!-- CARNICA -->
                <li class="collapse-nav-item">        
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/carnica/">Cárnica</a>
  
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                    <!-- CARNICA - SABORIZACION -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                
                    <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/condimentos-para-elaborar-embutidos-2/">Condimentos para elaborar embutidos</a>
                        </li>
                      </ul> 

                    <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/adobos-sazonadores-y-marinados/">Adobos, sazonadores y marinados</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/humos-sabores-parrilla-naturales-2/">Humos, sabores parrilla naturales</a>
                        </li>
                      </ul>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/potenciadores-naturales-de-sabor-2/">Potenciadores naturales de sabor</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/especias-y-extractos-de-especias-2/">Especias y extractos de especias</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-plus-2/">Sabores PLUS</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-naturales-natplus-2/">Sabores naturales NATPLUS</a>
                        </li>
                      </ul>  
                  </div> 

                  <!-- CARNICA - SALUD Y BIENESTAR -->
                  <div class="level-2">
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-origen-animal/">Proteínas de origen animal</a>
                        </li>
                      </ul> 
                          
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salmueras-para-marinar-sin-alergenos-adicionados/">Salmueras para marinar sin alérgenos adicionados</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>  
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/saborizacion-natural-carnica/">Saborización natural cárnica</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/alternativas-para-apanar-sin-gluten-adicionado/">Alternativas para apanar sin gluten adicionado</a>
                        </li>
                      </ul> 
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                                              
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>  
                    </div> 

                    <!-- CARNICA - FUNCIONALIDAD -->
                    <div class="level-2">
                      <div class="menu-header">
                        <a class="">Funcionalidad</a> 
                      </div>
          
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sistemas-de-textura-para-carnicos/">Sistemas de textura para cárnicos</a>
                        </li>
                      </ul> 
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistemas-para-apanar/">Sistemas para apanar</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-origen-animal/">Proteínas de origen animal</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                              
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>  
            
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fosfatos/">Fosfatos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                      </li>
                      </ul> 

                      <ul>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>                
                  </div>  

                <!-- CARNICA -->
                </div>
                </li>

                <!-- LACTEOS -->
                <li class="collapse-nav-item">
                    <a data-toggle="dropdown" style="text-transform: uppercase;" 
                    class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/lacteos/">Lácteos y Helados</a>
      
                        <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                        <div class="level-2">
                        <!-- LACTEOS - SABORIZACION -->
                        <div class="menu-header">
                          <a class="">Saborización</a> 
                        </div>
                    
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                    <!-- LACTEOS - SABORIZACION -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                            
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-lacteos/">Plant-Based</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/helados-soft-saludables/">Helados soft  saludables</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  
                
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>
                      </ul> 
                    
                  </div>  
              
                    <div class="level-2">
                    <!-- LACTEOS - FUNCIONALIDAD -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/helados-soft-saludables/">Helados soft  saludables</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/ingredientes-para-quesos/">Ingredientes para quesos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-lacteos/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul> 
             <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-quesos-analogos/">Bases para quesos análogos libre de lactosa</a>
                        </li>
                      </ul> 




                      <ul>                  
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-lacteos/">Estabilizantes para lácteos</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-bebidas/">Estabilizantes para bebidas</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul> 
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/fosfatos/">Fosfatos</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>  
                    
                  </div>  

                <!-- end LACTEOS  -->
                </div>
                </li>

                <!-- PANADERIA REPOSTERIA Y AREPAS  -->
                <li class="collapse-nav-item">
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/panaderia-reposteria-y-arepas-2/">panadería, repostería y arepas</a>
          
                <!-- subcategia -->
                <div class="dropdown-menu level-1">
                  <div class="level-2">
                  <!-- PANADERIA REPOSTERIA Y AREPAS - SABORIZACION -->
                    <div class="menu-header">
                      <a class="">Saborización</a> 
                    </div>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul> 
                      
                  </div>  
              
                  <div class="level-2">
                    <!-- PANADERIA REPOSTERIA Y AREPAS - SALUD Y BIENESTAR  -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                    
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-panaderia-reposteria-y-arepas-2">Plant-Based</a> 
                        </li>
                      </ul>
                      
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>  
                                  
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>


                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  
                  </div>  
              
                  <div class="level-2">
                    <!-- PANADERIA REPOSTERIA Y AREPAS - FUNCIONALIDAD  -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>                
                                
                      <ul>
                        <Li>
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                        </li>
                      </ul> 

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                          </li>
                      </ul>


                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-panaderia-reposteria-y-arepas-2/">Plant-Based</a> 
                        </li>
                      </ul>


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 
                      

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>  

                      <ul>
                      
                      <li>
                      
                        <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                      </li>
                      </ul>


                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                          </li>
                      </ul>

                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                          </li>
                      </ul>  
                    
                  </div>  
            
                <!-- end PANADERIA REPOSTERIA Y AREPAS -->
                </div>
                </li>

                <!-- BEBIDAS Y VENDING  -->
                <li class="collapse-nav-item">

                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/bebidas-y-vending/">Bebidas y Vending</a>
      
                  <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                      <div class="level-2">
                        <!-- BEBIDAS Y VENDING  - SABORIZACION  -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                    
                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                    <!-- BEBIDAS Y VENDING  - SALUD Y BIENESTAR  -->
                      <div class="menu-header">
                        <a class="">Salud y Bienestar</a> 
                      </div>                  
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-vending/">Bases vending</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-bebidas-y-vending/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-nutritivas-y-refrescantes/">Bases para bebidas nutritivas y refrescantes</a>
                        </li>
                      </ul>
                          
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>
                      
                      <ul>                  
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul>
                          
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>                
                        
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- BEBIDAS Y VENDING  - FUNCIONALIDAD  -->
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-vending/">Bases vending</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  

                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-bebidas-y-vending/">Plant-Based</a> 
                        </li>
                      </ul>
                      

                      <ul>                  
                        <li>                                                
                          <a href="<?php bloginfo('url'); ?>/producto/estabilizantes-para-bebidas/">Estabilizantes para bebidas</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>  
                  </div>  
              
                <!-- end BEBIDAS Y VENDING -->
                  </div>
                </li>

                <!-- GALLETAS Y SNACKS -->
                <li class="collapse-nav-item">
            
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/galletas-y-snacks/">Galletas y Snacks</a>
                  <!-- subcategia -->
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                      <!-- GALLETAS Y SNACKS - SABORIZACION -->                
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                
                                  
                      <ul>
                        <li>     
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-para-alimentos/">Sabores/Aromas para alimentos</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>   

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                        </li>
                      </ul>  

                    
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- GALLETAS Y SNACKS - SALUD Y BIENESTAR -->  
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-galletas-y-snacks/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul>  
                    
                      
                      <ul>                  
                        <li>
                          <a href="<?php bloginfo('url'); ?>/producto/sabores-aromas-naturales-top-note/">Sabores/Aromas naturales top note</a>
                          </li>
                      </ul> 


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-de-frutas-nativanox/">Antioxidante de frutas Nativanox®</a>
                        </li>                  
                      </ul> 


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>                  
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul> 

                      
                  </div>  
              
                  <div class="level-2">
                  <!-- GALLETAS Y SNACKS - FUNCIONALIDAD -->  
                    <div class="menu-header">
                      <a class="">Funcionalidad</a> 
                    </div>
                            
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-galletas-y-snacks/">Plant-Based</a> 
                        </li>
                      </ul>
        
                      <ul>
                        <li>                    
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                        </li>
                      </ul>


                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/fibras/">Fibras</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antimicrobianos-naturales-y-conservantes/">Antimicrobianos naturales y conservantes</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/proteinas-de-soya/">Proteínas de soya</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/almidones/">Almidones</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/carrageninas/">Carrageninas</a>
                        </li>
                      </ul>

                  </div>  

                <!-- end GALLETAS Y SNACKS -->
                  </div>
                </li>

                <!-- HORECA -->
                <li class="collapse-nav-item">

                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url'); ?>/categoria-de-productos/horeca/">Horeca</a>
                  <!-- subcategia -->
                  <div class="dropdown-menu level-1">
                    <div class="level-2">
                      <!-- HORECA - SABORIZACION -->
                      <div class="menu-header">
                        <a class="">Saborización</a> 
                      </div>
                    
                                
                    <ul>
                      <li>
                        <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salsas-y-aderezo/">Salsas y Aderezos</a> 
                      </li>
                    </ul>

                    <ul>                  
                      <li>                  
                        <a href="<?php bloginfo('url'); ?>/producto/bases-para-arroces-caldos-sopas-y-cremas/">Bases para arroces, caldos, sopas y cremas</a>
                      </li>
                    </ul>  

                    <ul>                  
                      <li>                  
                        <a href="<?php bloginfo('url'); ?>/producto/sazonadores-para-alimentos/">Sazonadores para alimentos</a>
                      </li>
                    </ul>  
                                  
                    <ul>
                      <li>
                        <a href="<?php bloginfo('url'); ?>/producto/condimentos-para-elaborar-embutidos-2/">Condimentos para elaborar embutidos</a>
                      </li>
                    </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/adobos-sazonadores-y-marinados/">Adobos, sazonadores y marinados</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/humos-sabores-parrilla-naturales-2/">Humos, sabores parrilla naturales</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/potenciadores-naturales-de-sabor-2/">Potenciadores naturales de sabor</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/especias-y-extractos-de-especias-2/">Especias y extractos de especias</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                  <div class="level-2">
                  <!-- HORECA - SALUD Y BIENESTAR -->
                    <div class="menu-header">
                      <a class="">Salud y Bienestar</a> 
                    </div>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/alternativas-para-apanar-sin-gluten-adicionado/">Alternativas para apanar sin gluten adicionado</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-elaborar-sustitutos-carnicos/">Bases para elaborar sustitutos cárnicos</a>
                        </li>
                      </ul> 

                        
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/salmueras-para-marinar-sin-alergenos-adicionados/">Salmueras para marinar sin alérgenos adicionados</a>
                        </li>
                      </ul>   
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-horeca/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-nutritivas-y-refrescantes/">Bases para bebidas nutritivas y refrescantes</a>
                        </li>
                      </ul> 

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/salsas-dulces-con-y-sin-azucar-adicionada/">Salsas dulces con y sin azúcar adicionada</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/reemplazantes-de-azucar/">Reemplazantes de azúcar</a>
                        </li>
                      </ul>  

                      

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/soluciones-tecnologicas-para-panaderia/">Soluciones tecnológicas para panadería</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidante-natural-ultranox/">Antioxidante natural Ultranox®</a>
                        </li>
                      </ul>    
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/saborizacion-natural-carnica/">Saborización natural cárnica</a> 
                        </li>
                      </ul>
                    
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/opciones-para-reduccion-en-sodio/">Opciones para reducción en sodio</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  
                    
                  </div>  
              
                    <div class="level-2">

                    <!-- HORECA - FUNCIONALIDAD -->
                      <div class="menu-header">
                        <a class="">Funcionalidad</a> 
                      </div>                    
                                
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistema-para-apanar/">Sistema para apanar</a> 
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-es-horeca/">Plant-Based</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-elaborar-sustitutos-carnicos/">Bases para elaborar sustitutos cárnicos</a>
                        </li>
                      </ul>  
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/sistemas-de-textura-para-carnicos/">Sistemas de textura para cárnicos</a>
                        </li>
                      </ul>
                                      
                      <ul>
                        <li>
                          <a class="" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a> 
                        </li>
                      </ul>

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/bases-para-bebidas-vegetales/">Bases para bebidas vegetales</a>
                        </li>
                      </ul>  
                
                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/mejoradores-para-panaderia-y-reposteria/">Mejoradores para panadería y repostería</a>
                          </li>
                      </ul> 

                      

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-pan-y-productos-a-base-de-queso/">Premezclas para pan y productos a base de queso</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/concentrados-para-panes-tradicionales-y-especiales/">Concentrados para panes tradicionales y especiales</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/premezclas-para-reposteria-con-y-sin-azucar-adicionada/">Premezclas para repostería con y sin azúcar adicionada</a>
                        </li>
                      </ul>  

                      <ul>                  
                        <li>                  
                          <a href="<?php bloginfo('url'); ?>/producto/antioxidantes/">Antioxidantes</a>
                        </li>
                      </ul>  
                    
                  </div>  
                <!-- end HORECA -->
                  </div>
                </li>

              </ul>
           </div>    

      
        
        
        <!-- PRODUCTOS --> 
        <li class="collapse-nav-item multi-level-nav-item">
          <a class="hover-dark" style="text-transform: uppercase; " data-toggle="dropdown" href="#">Productos</a>
            <div class="dropdown-menu level-1">
            <div class="level-2">
              <ul>
                         
                <ul>
                  <li>
                    <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sabores-carnicos/">Sabores Cárnicos</a>  
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/salmueras-para-carnes/">Salmueras para carnes</a>  
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistemas-de-texturas/">Sistema de textura</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sistema-para-apanar/">Sistemas para apanar</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/plant-based-productos/">Plant-Based</a>  
                  </li>
                </ul>
                          
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/proteinas/">Proteínas</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/fibras-es-productos/">Fibras</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/salsas-y-aderezos/">Salsas y aderezos</a>  
                  </li>             
                </ul>
                            
                <ul>
                  <li>
                  </li>                  
                </ul>
                            
                <ul>
                  <li>
                  </li>             
                </ul>
                                  
                <ul>
                  <li>
                  </li>                  
                </ul>                          

                <ul>
                  <li>
                  </li>             
                </ul>                                

                <ul>
                  <li>
                  </li>             
                </ul>
                                  
                <ul>
                  <li>
                  </li>             
                </ul>                                

                <ul>
                  <li>
                  </li>             
                </ul>
                            
              </ul>
            </div>
             <div class="level-2">
                <ul>
                  <ul>
                    <li>
                  </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>

                  <ul>
                    <li>
                    </li>             
                  </ul>
                
                  <ul>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/sabores-otras-aplicaciones/">Sabores otras aplicaciones</a>  
                    </li>             
                  </ul>

                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/colorantes-naturales-y-alimentos-colorantes/">Colorantes naturales y alimentos colorantes</a>  
                    </li>                        
                  </ul>
                  <ul>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/conservantes-y-antioxidantes/">Conservantes y antioxidantes</a>  
                    </li>
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/panaderia-reposteria-y-arepas/">Panadería, repostería y arepas</a>  
                    </li>
                    
                  </ul>
                  <ul>
                      <li>
                          <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/productos-para-lacteos-y-helados/">Productos para lácteos y helados</a>  
                      </li>
                    
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/opciones-para-bebidas-y-vending/">Opciones para bebidas y vending</a>  
                    </li>
                    
                  </ul>
                  <ul>
                    <li>
                        <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/categoria-de-productos/bases-para-arroces-caldos-sopas-y-cremas/">Bases para arroces, caldos, sopas y cremas</a>  
                    </li>
                    
                  </ul>           
                </ul>
               </div>           
          </div>
            
        </li>
        
        <!-- PRODUCTOS PARA LIMPIEZA --> 
        <li class="collapse-nav-item multi-level-nav-item">
          <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">Productos para limpieza, desinfección e inocuidad</a>
            <div class="dropdown-menu level-1">
               <div class="level-2">
                 <ul>  
                     <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-desengrasantes-neutros-biodegradables/">Detergentes desengrasantes neutros biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-desengrasantes-alcalinos-biodegradables/">Detergentes desengrasantes alcalinos biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/detergentes-acidos-desincrustantes-biodegradables/">Detergentes ácidos desincrustantes biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/soluciones-especializadas/">Soluciones especializadas</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes/">Desinfectantes</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes-especializados/">Desinfectantes especializados</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/desinfectantes-de-contacto-directo-con-alimentos/">Desinfectantes de contacto directo con alimentos</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/sanitizacion-de-manos/">Sanitización de manos</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/especialidades-para-plantas-de-beneficio/">Especialidades para plantas de beneficio</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/productos-de-lavanderia-biodegradables/">Productos  de lavandería biodegradables</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/cepillos-y-accesorios/">Cepillos y accesorios</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/kit-de-testeo-quimico/">Kit de testeo químico</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/panos-de-limpieza/">Paños de limpieza</a>  
                    </li>
                    <li>
                      <a style="color: #162d50 !important;" href="<?php bloginfo('url'); ?>/producto/indumentaria-sanitaria/">Indumentaria sanitaria</a>  
                    </li>
                  </ul>
               </div>
          </div> 
        </li>
          </ul>
        </li>
	 
			
		<!-- CLOSE DESKTOP-->
		<?php endif; ?>
	 
	 
	 
	 
	 
	  
	 
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url'); ?>/cliente">Representaciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">Quiénes somos</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a href="<?php bloginfo('url'); ?>/nuestra-empresa">Nuestra empresa</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/servicio">Servicios</a>
            </li>
            <li>
               <a href="<?php bloginfo('url'); ?>/certificacion">Certificaciones</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">contáctenos</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a href="<?php bloginfo('url'); ?>/servicios-al-cliente">Servicio al cliente</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/punto-de-venta">Puntos de venta</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/otros-paises">Otros países</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/trabaje-para-nosotros">Trabaje para nosotros</a>
            </li>
          </ul>
        </li>
      
      
      <li class="nav-item">
      
          <a class="nav-link dropdown-toggle" href="#">Redes Sociales</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a target="_blank" href="https://www.facebook.com/Tecnas/">
          
        <i class="fa fa-facebook"></i>
          Facebook
        </a>
            </li>
        
        <li>
              <a target="_blank" href="https://instagram.com/tecnas.sa?igshid=1nngn1ie1k5rx">
        <i class="fa fa-instagram"></i>
          Instagram
        </a>
            </li>
      
        <li>
              <a target="_blank" href="https://www.youtube.com/channel/UCqRC7Tl8zOd-TDhmWETO2wA">
        <i class="fa fa-youtube-play"></i>
          YouTube
        </a>
            </li>
            
          </ul>
        </li>
      
      
      <li class="nav-item">
    
        </li>
      </ul>
    </div>
  </nav>  
<?php else:?>


<nav class="navbar navbar-expand-lg navbar-bottom navbar-bottom__opacity1">
    <button aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbar" data-toggle="collapse" type="button">
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav margin-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url');?>/news">News</a>
        </li>

			<?php if ( wp_is_mobile() ) : ?>
		  <!-- OPEN MOBILE-->
		    <li class="nav-item dropdown-toggle-no" >
          <a class="nav-link active dropdown-toggle " data-toggle="dropdown" href="">Portfolio</a>
          <ul class="dropdown-menu multi-level" >
            <li class="multi-level-nav-item">
              <a aria-controls="categoriesCollapse" aria-expanded="true" data-toggle="collapse" href="#categoriesCollapse" role="button" class="">Category </a>
            </li>
            <div class="collapse" id="categoriesCollapse" style="">
              <ul class="collapse-list">
                <li class="collapse-nav-item active-bg " style="background-color: white;">
 
        
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/meat/" aria-expanded="true">Meat</a>
            
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1 ">
                      <div class="level-2">
                      <div class="menu-header">
                        <a class="">natural meat flavoring</a> 
                      </div>
                
             
                    
                              
                        <ul>
                          <li>                    
                            <a href="<?php bloginfo('url');?>/producto/seasonings-for-making-sausages/">Seasonings for making sausages</a>
                          </li>
                        </ul>  
                        
                        <ul>
                          <li>                                  
                            <a href="<?php bloginfo('url');?>/producto/adobos-seasonings-and-marinades/">Adobos, seasonings and marinades</a>
                          </li>
                          </ul>  
                        <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/smoke-natural-grill-flavors-2/">Smoke, natural grill flavors</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavor-enhancers-2/">Natural flavor enhancers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/spices-and-spice-extracts-2/">Spices and spice extracts</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-plus-2/">Flavors PLUS</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavors-natplus-2/">Natural flavors NATPLUS</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en/">Plant-Based</a> 
                   </li>
                </ul>
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/animal-originated-proteins-2/">Animal originated proteins</a>
                   </li>
                  </ul>  
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/brines-to-marinate-without-additional-allergens/">Brines to marinate without additional allergens</a>
                   </li>
                  </ul>    
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>  
                   <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-meat-flavor/">Natural meat flavor</a> 
                   </li>
                </ul>

                        
               
                           <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/alternatives-to-bread-without-added-gluten/">Alternatives to bread without added gluten</a>
                   </li>
                  </ul>              
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul> 
                    
                              
                                
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  
                    
                      
                         
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a> 
                   </li>
                </ul>
                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/texture-systems-for-meat/">Texture systems for meat</a>
                   </li>
                  </ul>  
                           <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/brewing-systems/">Brewing systems</a> 
                   </li>
                </ul>
                               
                   <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
                  <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en/">Plant-Based</a> 
                   </li>
                </ul>
              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/animal-originated-proteins-2/">Animal originated proteins</a>
                   </li>
                  </ul> 
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                     </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/phosphates/">Phosphates</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-products/">Products for dairy and ice creams</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-products/">Dairy products</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-dairy-products/">Plant-Based</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/healthy-soft-serve-ice-creams/">Healthy soft serve ice creams</a>
                   </li>
                  </ul> 
                      <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                    

                                       <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>        
                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
                   
                                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                  
                      
               
                 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  

                  
                 
                      <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul>
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/healthy-soft-serve-ice-creams/">Healthy soft serve ice creams</a>
                   </li>
                  </ul>   
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/ingredients-for-cheeses/">Ingredients for cheeses</a>
                   </li>
                  </ul>       
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-dairy-products/">Plant-Based</a> 
                   </li>
                </ul>
                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
										  
										         <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-cheese-analogues/">Bases for cheese analogues</a>
                   </li>
                  </ul> 

                       <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/dairy-stabilizers/">Dairy stabilizers</a>
                   </li>
                  </ul>  
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/stabilizers-for-drinks/">Stabilizers for drinks</a>
                   </li>
                  </ul> 
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>

                     
                      
                    
                    
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul> 
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>   
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul> 
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/phosphates/">Phosphates</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                  
                    
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas-2/">Bakery pastry and arepas</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas-2/">Bakery pastry and arepas</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul> 
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                   
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 
                                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul>

                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-bakery-pastry-and-arepas-2/">Plant-Based</a> 
                   </li>
                </ul>
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul> 
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul> 

                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul>  
                  
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul> 
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul> 
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-bakery-pastry-and-arepas-2/">Plant-Based</a> 
                   </li>
                </ul>

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>
          
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/drinks-and-vending/">Drinks and Vending</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/drinks-and-vending/">Drinks and Vending</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul> 
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vending-bases/">Vending bases</a>
                   </li>
                  </ul>  
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul>  
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-drinks-and-vending/">Plant-Based</a> 
                   </li>
                </ul>
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-nutritious-and-refreshing-drinks/">Bases for nutritious and refreshing drinks</a>
                   </li>
                  </ul> 
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                    
                
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                
                       
                     
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                         <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vending-bases/">Vending bases</a>
                   </li>
                  </ul>  
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-drinks-and-vending/">Plant-Based</a> 
                   </li>
                </ul>
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/stabilizers-for-drinks/">Stabilizers for drinks</a>
                   </li>
                  </ul>  
                       
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>   
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                    
                      
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/cookies-and-snacks/">Cookies and Snacks</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/cookies-and-snacks/">Cookies and Snacks</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                    
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-cookies-and-snacks/">Plant-Based</a> 
                   </li>
                </ul>
                                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>  
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul> 
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>

                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul> 
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                    
                    
                    
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  
            
                  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-cookies-and-snacks/">Plant-Based</a> 
                   </li>
                </ul>
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul>  
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
               
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/horeca-en/">Horeca</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/horeca-en/">Horeca</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/sauces-and-dressing/">Sauces and Dressing</a> 
                   </li>
                </ul>
                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-rices-broths-soups-and-creams/">Bases for rices, broths, soups, and creams</a>
                   </li>
                  </ul> 
                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul> 

                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/seasonings-for-making-sausages/">Seasonings for making sausages</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/adobos-seasonings-and-marinades/">Adobos, seasonings and marinades</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/smoke-natural-grill-flavors-2/">Smoke, natural grill flavors</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavor-enhancers-2/">Natural flavor enhancers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/spices-and-spice-extracts-2/">Spices and spice extracts</a>
                   </li>
                  </ul>  
                 
                    
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/alternatives-to-bread-without-added-gluten/">Alternatives to bread without added gluten</a>
                   </li>
                  </ul> 
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-preparing-meat-substitutes/">Bases for preparing meat substitutes</a>
                   </li>
                  </ul> 
                                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/brines-to-marinate-without-additional-allergens/">Brines to marinate without additional allergens</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-horeca-en/">Plant-Based</a> 
                   </li>
                </ul>
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul>  
                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-nutritious-and-refreshing-drinks/">Bases for nutritious and refreshing drinks</a>
                   </li>
                  </ul>   
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>    
                
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul> 
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul> 
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul> 


                      
                      <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-meat-flavor-health-wellness-horeca-en/">Natural meat flavor</a> 
                   </li>
                </ul>

                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                  
                  
                 
                   
                  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul>  
                 
                       
               
                    
                  
                   
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/panning-system/">Panning system</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-horeca-en/">Plant-Based</a> 
                   </li>
                </ul>
                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-preparing-meat-substitutes/">Bases for preparing meat substitutes</a>
                   </li>
                  </ul> 
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a> 
                   </li>
                </ul>
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/texture-systems-for-meat/">Texture systems for meat</a>
                   </li>
                  </ul>  
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul>  
                  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                    
                 
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                
         
                 </div></li>
              </ul>
           </div>      
        <li class="collapse-nav-item multi-level-nav-item">
                      <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">Products</a>
                 <div class="dropdown-menu level-1">
          
               <div class="level-2">
                 <ul>
                         
       
                                                      


          <ul>
            <li>
                            <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/meat-flavors/">Meat flavors</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/texture-systems/">Texture systems</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/brewing-systems-products/">Brewing systems</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-products/">Plant-Based</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/fibers-products/">Fibers</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/sauces-and-dressings/">Sauces and dressings</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            
                 </ul>
               </div>
             <div class="level-2">
                 <ul>
                                                            <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                            <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/flavors-other-applications/">Flavors other applications</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/preservatives-and-antioxidants/">Preservatives and antioxidants</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas/">Bakery pastry and arepas</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-and-ice-cream-products/">Dairy and ice cream products</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/options-for-drinks-and-vending/">Options for drinks and vending</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/bases-for-rice-broths-soups-and-creams/">Bases for rice, broths, soups and creams</a>  
                          </li>
             
           </ul>
                                             
                    
                              
                                  
            </ul>
               </div>
           
          </div>
            
        </li>
           
<li class="collapse-nav-item multi-level-nav-item">
                     <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">
Products for cleaning, disinfection and safety</a>
                 <div class="dropdown-menu level-1">
               <div class="level-2">
                 <ul>  
                                     <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-neutral-degreasing-detergents/">Biodegradable neutral degreasing detergents</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-descaling-alkaline-detergent/">Biodegradable descaling alkaline detergent</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-descaling-acid-detergents/">Biodegradable descaling acid detergents</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialized-solutions/">Specialized solutions</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/disinfectants/">Disinfectants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialized-disinfectants/">Specialized disinfectants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/disinfectants-for-direct-contact-with-food/">Disinfectants for direct contact with food</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/hand-sanitization/">Hand sanitization</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialties-for-beneficial-plants/">Specialties for beneficial plants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-cleaning-products/">Biodegradable cleaning products</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/brushes-and-accessories/">Brushes and accessories</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/chemical-testing-kits/">Chemical testing kits</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/cleaning-cloths-2/">Cleaning cloths</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/cleaning-cloths/">Sanitary clothing</a>  
                   </li>
                                  </ul>
               </div>
          </div>
            
        </li>
          </ul>
        </li>

		  <!-- CLOSE MOBILE-->
		  <?php else : ?>
		  <!-- OPEN DESKTOP-->
		  
		    <li class="nav-item dropdown-toggle dropdown-toggle-no" >
          <a class="nav-link active dropdown-toggle-a " data-toggle="dropdown" href="">Portfolio</a>
          <ul class="dropdown-menu-1 multi-level" >
            <li class="multi-level-nav-item">
              <a aria-controls="categoriesCollapse" aria-expanded="true" data-toggle="collapse" href="#categoriesCollapse" role="button" class="">Category </a>
            </li>
            <div class="collapse" id="categoriesCollapse" style="">
              <ul class="collapse-list">
                <li class="collapse-nav-item active-bg " style="background-color: white;">
 
        
                  <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/meat/" aria-expanded="true">Meat</a>
            
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1 ">
                      <div class="level-2">
                      <div class="menu-header">
                        <a class="">natural meat flavoring</a> 
                      </div>
                
             
                    
                              
                        <ul>
                          <li>                    
                            <a href="<?php bloginfo('url');?>/producto/seasonings-for-making-sausages/">Seasonings for making sausages</a>
                          </li>
                        </ul>  
                        
                        <ul>
                          <li>                                  
                            <a href="<?php bloginfo('url');?>/producto/adobos-seasonings-and-marinades/">Adobos, seasonings and marinades</a>
                          </li>
                          </ul>  
                        <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/smoke-natural-grill-flavors-2/">Smoke, natural grill flavors</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavor-enhancers-2/">Natural flavor enhancers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/spices-and-spice-extracts-2/">Spices and spice extracts</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-plus-2/">Flavors PLUS</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavors-natplus-2/">Natural flavors NATPLUS</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en/">Plant-Based</a> 
                   </li>
                </ul>
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/animal-originated-proteins-2/">Animal originated proteins</a>
                   </li>
                  </ul>  
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/brines-to-marinate-without-additional-allergens/">Brines to marinate without additional allergens</a>
                   </li>
                  </ul>    
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>  
                   <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-meat-flavor/">Natural meat flavor</a> 
                   </li>
                </ul>

                        
               
                           <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/alternatives-to-bread-without-added-gluten/">Alternatives to bread without added gluten</a>
                   </li>
                  </ul>              
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul> 
                    
                              
                                
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  
                    
                      
                         
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a> 
                   </li>
                </ul>
                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/texture-systems-for-meat/">Texture systems for meat</a>
                   </li>
                  </ul>  
                           <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/brewing-systems/">Brewing systems</a> 
                   </li>
                </ul>
                               
                   <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
                  <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en/">Plant-Based</a> 
                   </li>
                </ul>
              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/animal-originated-proteins-2/">Animal originated proteins</a>
                   </li>
                  </ul> 
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                     </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/phosphates/">Phosphates</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-products/">Products for dairy and ice creams</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-products/">Dairy products</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-dairy-products/">Plant-Based</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/healthy-soft-serve-ice-creams/">Healthy soft serve ice creams</a>
                   </li>
                  </ul> 
                      <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                    

                                       <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>        
                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
                   
                                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                  
                      
               
                 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  

                  
                 
                      <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul>
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/healthy-soft-serve-ice-creams/">Healthy soft serve ice creams</a>
                   </li>
                  </ul>   
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/ingredients-for-cheeses/">Ingredients for cheeses</a>
                   </li>
                  </ul>       
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-dairy-products/">Plant-Based</a> 
                   </li>
                </ul>
                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
										  
										         <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-cheese-analogues/">Bases for cheese analogues</a>
                   </li>
                  </ul> 

                       <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/dairy-stabilizers/">Dairy stabilizers</a>
                   </li>
                  </ul>  
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/stabilizers-for-drinks/">Stabilizers for drinks</a>
                   </li>
                  </ul> 
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>

                     
                      
                    
                    
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul> 
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>   
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul> 
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/phosphates/">Phosphates</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                  
                    
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas-2/">Bakery pastry and arepas</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas-2/">Bakery pastry and arepas</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul> 
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                   
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 
                                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul>

                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-bakery-pastry-and-arepas-2/">Plant-Based</a> 
                   </li>
                </ul>
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul> 
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul> 

                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul>  
                  
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                                          <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul> 
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul> 
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-bakery-pastry-and-arepas-2/">Plant-Based</a> 
                   </li>
                </ul>

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>
          
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/drinks-and-vending/">Drinks and Vending</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/drinks-and-vending/">Drinks and Vending</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul> 
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vending-bases/">Vending bases</a>
                   </li>
                  </ul>  
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul>  
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-drinks-and-vending/">Plant-Based</a> 
                   </li>
                </ul>
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-nutritious-and-refreshing-drinks/">Bases for nutritious and refreshing drinks</a>
                   </li>
                  </ul> 
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                    
                
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                
                       
                     
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                         <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vending-bases/">Vending bases</a>
                   </li>
                  </ul>  
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-drinks-and-vending/">Plant-Based</a> 
                   </li>
                </ul>
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/stabilizers-for-drinks/">Stabilizers for drinks</a>
                   </li>
                  </ul>  
                       
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>   
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                    
                      
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/cookies-and-snacks/">Cookies and Snacks</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/cookies-and-snacks/">Cookies and Snacks</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
             
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-and-smells-for-food/">Flavors and smells for food</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul>  
                    
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-cookies-and-snacks/">Plant-Based</a> 
                   </li>
                </ul>
                                    <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul>  
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul> 
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/flavors-natural-aromas-top-note/">Flavors/natural aromas top note</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>

                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidant-nativanox/">Antioxidant from fruits Nativanox®</a>
                   </li>
                  </ul> 
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul> 
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul>  
                    
                    
                    
                      
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul>  
            
                  
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-cookies-and-snacks/">Plant-Based</a> 
                   </li>
                </ul>
                  
                    
                              
                                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul>  
                                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/fibers-2/">Fibers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antimicrobials-and-preservatives/">Natural antimicrobials and preservatives</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/soy-protein/">Soy protein</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/starches/">Starches</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/carrageenan/">Carrageenan</a>
                   </li>
                  </ul>  
               
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                                        </div></li><li class="collapse-nav-item">
 
        
          <a data-toggle="dropdown" style="text-transform: uppercase;" class="new-class" href="<?php bloginfo('url');?>/categoria-de-productos/horeca-en/">Horeca</a>
  
  <!--   <a data-toggle="dropdown" href="<?php bloginfo('url');?>/categoria-de-productos/horeca-en/">Horeca</a> -->
                  
                    <!-- subcategia -->
                    <div class="dropdown-menu level-1">
                                     <div class="level-2">
              <div class="menu-header">
                <a class="">Flavoring</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/sauces-and-dressing/">Sauces and Dressing</a> 
                   </li>
                </ul>
                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-rices-broths-soups-and-creams/">Bases for rices, broths, soups, and creams</a>
                   </li>
                  </ul> 
                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/food-seasonings/">Food seasonings</a>
                   </li>
                  </ul> 

                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/seasonings-for-making-sausages/">Seasonings for making sausages</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/adobos-seasonings-and-marinades/">Adobos, seasonings and marinades</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/smoke-natural-grill-flavors-2/">Smoke, natural grill flavors</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-flavor-enhancers-2/">Natural flavor enhancers</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/spices-and-spice-extracts-2/">Spices and spice extracts</a>
                   </li>
                  </ul>  
                 
                    
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Health &amp; Wellness</a> 
              </div>
                             <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/alternatives-to-bread-without-added-gluten/">Alternatives to bread without added gluten</a>
                   </li>
                  </ul> 
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-preparing-meat-substitutes/">Bases for preparing meat substitutes</a>
                   </li>
                  </ul> 
                                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/brines-to-marinate-without-additional-allergens/">Brines to marinate without additional allergens</a>
                   </li>
                  </ul> 
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-horeca-en/">Plant-Based</a> 
                   </li>
                </ul>
                               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul>  
                     <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-nutritious-and-refreshing-drinks/">Bases for nutritious and refreshing drinks</a>
                   </li>
                  </ul>   
                              <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sweet-sauces-with-and-without-added-sugar/">Sweet sauces with and without added sugar</a>
                   </li>
                  </ul>    
                
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/sugar-substitutes/">Sugar substitutes</a>
                   </li>
                  </ul> 
                                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul> 
                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/technical-solutions-at-the-bakery/">Technical solutions at the bakery</a>
                   </li>
                  </ul> 
                            <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/natural-antioxidant-ultranox/">Natural antioxidant Ultranox®</a>
                   </li>
                  </ul> 


                      
                      <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/natural-meat-flavor-health-wellness-horeca-en/">Natural meat flavor</a> 
                   </li>
                </ul>

                                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/reduced-sodium-options/">Reduced sodium options</a>
                   </li>
                  </ul> 
                  
                  
                 
                   
                  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul>  
                 
                       
               
                    
                  
                   
                 
               </div>  
          
                                      <div class="level-2">
              <div class="menu-header">
                <a class="">Functionality</a> 
              </div>
                
                            
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/panning-system/">Panning system</a> 
                   </li>
                </ul>
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-horeca-en/">Plant-Based</a> 
                   </li>
                </ul>
                 <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/bases-for-preparing-meat-substitutes/">Bases for preparing meat substitutes</a>
                   </li>
                  </ul> 
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a> 
                   </li>
                </ul>
                   <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/texture-systems-for-meat/">Texture systems for meat</a>
                   </li>
                  </ul>  
                                 
                <ul>
                   <li>
                    <a class="" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a> 
                   </li>
                </ul>
               <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/vegetable-bases-for-drinks/">Vegetable bases for drinks</a>
                   </li>
                  </ul> 

                  <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/improvers-for-bakeries-and-pastry-shops/">Improvers for bakeries and pastry shops</a>
                   </li>
                  </ul>  
                  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-bread-and-cheese-products/">Premixes for bread and cheese products</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/concentrates-for-traditional-and-special-breads/">Concentrates for traditional and special breads</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/premixes-for-pastry-shops-without-added-sugar/">Premixes for pastry shops without added sugar</a>
                   </li>
                  </ul>  
                                <ul>
                  
                  <li>
                  
                    <a href="<?php bloginfo('url');?>/producto/antioxidants/">Antioxidants</a>
                   </li>
                  </ul>  
                    
                 
                 
               </div>  
          
                         
           
            <!-- end subcategoria -->
                
         
                 </div></li>
              </ul>
           </div>      
        <li class="collapse-nav-item multi-level-nav-item">
                      <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">Products</a>
                 <div class="dropdown-menu level-1">
          
               <div class="level-2">
                 <ul>
                         
       
                                                      


          <ul>
            <li>
                            <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/meat-flavors/">Meat flavors</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/salmueras-para-carnes-en/">Pickles for meat</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/texture-systems/">Texture systems</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/brewing-systems-products/">Brewing systems</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/plant-based-en-products/">Plant-Based</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/protein/">Protein</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/fibers-products/">Fibers</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/sauces-and-dressings/">Sauces and dressings</a>  
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            


          <ul>
            <li>
                          </li>
             
           </ul>
                            
                 </ul>
               </div>
             <div class="level-2">
                 <ul>
                                                            <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                          </li>
             
           </ul>
                              <ul>
            <li>
                            <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/flavors-other-applications/">Flavors other applications</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/natural-coloring-and-food-coloring/">Natural coloring and food coloring</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/preservatives-and-antioxidants/">Preservatives and antioxidants</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/bakery-pastry-and-arepas/">Bakery pastry and arepas</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/dairy-and-ice-cream-products/">Dairy and ice cream products</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/options-for-drinks-and-vending/">Options for drinks and vending</a>  
                          </li>
             
           </ul>
                              <ul>
            <li>
                             <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/categoria-de-productos/bases-for-rice-broths-soups-and-creams/">Bases for rice, broths, soups and creams</a>  
                          </li>
             
           </ul>
                                             
                    
                              
                                  
            </ul>
               </div>
           
          </div>
            
        </li>
           
<li class="collapse-nav-item multi-level-nav-item">
                     <a class="hover-dark" style="text-transform: uppercase;" data-toggle="dropdown" href="#">
Products for cleaning, disinfection and safety</a>
                 <div class="dropdown-menu level-1">
               <div class="level-2">
                 <ul>  
                                     <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-neutral-degreasing-detergents/">Biodegradable neutral degreasing detergents</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-descaling-alkaline-detergent/">Biodegradable descaling alkaline detergent</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-descaling-acid-detergents/">Biodegradable descaling acid detergents</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialized-solutions/">Specialized solutions</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/disinfectants/">Disinfectants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialized-disinfectants/">Specialized disinfectants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/disinfectants-for-direct-contact-with-food/">Disinfectants for direct contact with food</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/hand-sanitization/">Hand sanitization</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/specialties-for-beneficial-plants/">Specialties for beneficial plants</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/biodegradable-cleaning-products/">Biodegradable cleaning products</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/brushes-and-accessories/">Brushes and accessories</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/chemical-testing-kits/">Chemical testing kits</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/cleaning-cloths-2/">Cleaning cloths</a>  
                   </li>
                                    <li>
                     <a style="color: #162d50 !important;" href="<?php bloginfo('url');?>/producto/cleaning-cloths/">Sanitary clothing</a>  
                   </li>
                                  </ul>
               </div>
          </div>
            
        </li>
          </ul>
        </li>

		  <!-- CLOSE DESKTOP-->
		  <?php endif; ?>

       
        <li class="nav-item">
          <a class="nav-link" href="<?php bloginfo('url');?>/customers">
Our Allies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">
About us</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a href="<?php bloginfo('url');?>/about">

Our company</a>
            </li>
            <li>
              <a href="<?php bloginfo('url');?>/service">Services</a>
            </li>
            <li>
               <a href="<?php bloginfo('url');?>/certification">Certifications</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#">
Contact Us</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a href="<?php bloginfo('url');?>/customer-service">
Customer service</a>
            </li>
            <li>
              <a href="<?php bloginfo('url');?>/trading-shops">
Trading shops</a>
            </li>
            <li>
              <a href="<?php bloginfo('url');?>/other-countries">Other countries</a>
            </li>
            <li>
              <a href="<?php bloginfo('url');?>/work-with-us">Work with us</a>
            </li>
          </ul>
        </li>
      
      
      <li class="nav-item">
      
          <a class="nav-link dropdown-toggle" href="#">Social Media</a>
          <ul class="dropdown-menu hoverable one-level">
            <li>
              <a target="_blank" href="https://www.facebook.com/Tecnas/">
          
        <i class="fa fa-facebook"></i>
          Facebook
        </a>
            </li>
         <li>
              <a target="_blank" href="https://instagram.com/tecnas.sa?igshid=1nngn1ie1k5rx">
        <i class="fa fa-instagram"></i>
          Instagram
        </a>
            </li>
      
        <li>
              <a target="_blank" href="https://www.youtube.com/channel/UCqRC7Tl8zOd-TDhmWETO2wA">
        <i class="fa fa-youtube-play"></i>
          YouTube
        </a>
            </li>
            
          </ul>
        </li>
      
      
      <li class="nav-item">
    
        </li>
      </ul>
    </div>
  </nav>




<?php endif; ?>