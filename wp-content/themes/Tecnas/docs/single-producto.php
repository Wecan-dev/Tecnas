<?php get_header() ?>
<?php $category_id = get_queried_object_id();?>




<?php while ( have_posts() ) : the_post(); ?>

<?php

echo '<div class="main-page main-breadcrumds">';
$rd_taxonomy = 'categoria-de-productos'; // region taxonomy
$rd_terms = wp_get_post_terms( $post->ID, $rd_taxonomy, array( "fields" => "ids" ) ); // getting the term IDs
if( $rd_terms ) {
	$term_array = trim( implode( ',', (array) $rd_terms ), ' ,' );
	$neworderterms = get_terms($rd_taxonomy, 'orderby=none&include=' . $term_array );
	foreach( $neworderterms as $orderterm ) {
		$hola = $orderterm->name;
		if($orderterm->name == 'plant-based' or $orderterm->name == 'Plant-based' or $orderterm->name == 'Plant-Based'):
			
			echo '<a  href="' . get_term_link( $orderterm ) . '"> Plant-based</a> » ';
		break;
		
		elseif($orderterm->name == 'Sistemas para apanar' or $orderterm->name == 'Sistemas para apanar' or $orderterm->name == 'Sistemas para apanar'):
			
			echo '<a  href="' . get_term_link( $orderterm ) . '"> Sistemas para apanar</a> » ';
		break;
		
		elseif($orderterm->name == 'Salsas y Aderezos' or $orderterm->name == 'Salsas y aderezos' or $orderterm->name == 'Salsas y Aderezos'):
			
			echo '<a  href="' . get_term_link( $orderterm ) . '"> Salsas y Aderezos</a> » ';
		break;
		
		else:
		
		echo '<a  href="' . get_term_link( $orderterm ) . '">' . $orderterm->name . '</a> » ';
		
		endif;
			
		
		
	}
}
the_title();
echo '</div>';

?>

  <div class="main-page">
	  <!--
	   <nav aria-label='breadcrumb'>
		  <ol class='breadcrumb'>
			<li class='breadcrumb-item'>
			<?php $postnewsTitle = lang() == "es" ? "Inicio" : "Home"; ?>
			  <a href='<?php echo bloginfo('url').'/';?>'> <?php echo $postnewsTitle ?></a>
			</li>
			 
			<li aria-current='page' class='breadcrumb-item active'><?php the_title(); ?></li>
		  </ol>
		</nav>
	  -->
	
	 
    <div class="container">
      <div class="row">

    
    <?php if( wp_is_mobile() ) : ?>     

<div class="col-lg-6">
	<div class="section-title left">
            <h1>
             <?php the_title(); ?>
            </h1>
          </div>
          <div class="portfolio-detail-img">
            <img alt="Curcumina" src="  <?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        </div>
		   <div class="col-lg-6">
          
          <div class="portfolio-detail-text">
            <p><?php the_content(); ?></p>
          </div>
			   <div class="porfolio-details__btn" >
				   <a target="_blank" href="<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicios-al-cliente";}else{echo "customer-service";} ?>" class="" ><?php if(lang() == 'es'){echo "Me interesa";}if(lang() == 'en'){echo "I'm interested";} ?></a>
			   </div>
		
        </div>
      <?php else: ?>
 <?php if( get_the_ID() %2==0 ) : ?>
        <div class="col-lg-6">
          <div class="section-title left">
            <h1>
             <?php the_title(); ?> 
            </h1>
          </div>
          <div class="portfolio-detail-text">
            <p><?php the_content(); ?></p>
          </div>
			  <div class="porfolio-details__btn" >
				   <a target="_blank" href="<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicios-al-cliente";}else{echo "customer-service";} ?>" class="" ><?php if(lang() == 'es'){echo "Me interesa";}if(lang() == 'en'){echo "I'm interested";} ?></a>
			   </div>
        </div>
        <div class="col-lg-6">
          <div class="portfolio-detail-img">
            <img alt="Curcumina" src="  <?php echo get_the_post_thumbnail_url(); ?>">
          </div>
			
        </div>
		  <?php else : ?>
		   <div class="col-lg-6">
          <div class="portfolio-detail-img">
            <img alt="Curcumina" src="  <?php echo get_the_post_thumbnail_url(); ?>">
          </div>
        </div>
		   <div class="col-lg-6">
          <div class="section-title left">
            <h1>
             <?php the_title(); ?>
            </h1>
          </div>
          <div class="portfolio-detail-text">
            <p><?php the_content(); ?></p>
          </div>
			   <div class="porfolio-details__btn" >
				   <a target="_blank" href="<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "servicios-al-cliente";}else{echo "customer-service";} ?>" class="" ><?php if(lang() == 'es'){echo "Me interesa";}if(lang() == 'en'){echo "I'm interested";} ?></a>
			   </div>
		
        </div>
      <?php endif; ?> 

        <?php endif; ?>          

           
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<style>

	@media screen and (max-width: 767px) and (min-width: 0px){
.main-page {
    padding: 50px 38px;
}
	}</style>
<?php get_footer() ?> 

