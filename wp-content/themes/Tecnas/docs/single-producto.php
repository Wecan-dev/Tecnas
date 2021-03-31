<?php get_header() ?>
<?php $category_id = get_queried_object_id();?>




<?php while ( have_posts() ) : the_post(); ?>
  <div class="main-page">
	  
	  	<?php previous_post_link( ' %link', '<div class="portfolio-arrow portfolio-arrow__left" ><i class="fa fa-angle-left" ></i> </div>', true, '', 'categoria-de-productos' ); ?>
	 
	  	
		<?php next_post_link( ' %link', '<div class="portfolio-arrow portfolio-arrow__right" ><i class="fa fa-angle-right" ></i> </div>', true, '', 'categoria-de-productos' ); ?>
	 
    <div class="container">
      <div class="row">

    
          
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

