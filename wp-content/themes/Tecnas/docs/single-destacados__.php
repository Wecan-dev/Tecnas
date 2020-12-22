<?php get_header() ?>

  <section class="page-container detail">
      <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
    <nav aria-label='breadcrumb'>
      <ol class='breadcrumb'>
        <li class='breadcrumb-item'>
          <a href='<?php echo get_home_url() ?>/<?php if(lang() == 'es'){echo "destacados";}else{echo "featured";} ?>'><?php if(lang() == 'es'){echo "Destacados";}if(lang() == 'en'){echo "Featured";} ?></a>
        </li>
        <li aria-current='page' class='breadcrumb-item active'><?php the_title(); ?></li>
      </ol>
    </nav>

    <div class="section-title">
      <h1><?php if(lang() == 'es'){echo "Alternativas Tecnas Plant Based";}if(lang() == 'en'){echo "Tecnas Plant Based Alternatives";} ?></h1>
    </div>
   
    <div class="featured-card">
      <div class="featured-card-img">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
      </div>
      <div class="featured-card-info detail">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>
    </div>
    <ul class='share-social'>
      <li>
        <a href=''>
          <i class='fa fa-facebook'></i>
        </a>
      </li>
      <li>
        <a href=''>
          <i class='fa fa-instagram'></i>
        </a>
      </li>
      <li>
        <a href=''>
          <i class='fa fa-twitter'></i>
        </a>
      </li>
      <li>
        <a href=''>
          <i class='fa fa-share-alt'></i>
        </a>
      </li>
    </ul>
 <?php
            }
    } ?>
  </section>
<?php get_footer() ?>
