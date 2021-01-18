<?php get_header() ?>

  <section class="page-container detail">
      <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
    <nav aria-label='breadcrumb'>
      <ol class='breadcrumb'>
        <li class='breadcrumb-item'>
		<?php $postnewsTitle = lang() == "es" ? "destacado" : "news"; ?>
          <a href='<?php echo get_home_url() ?>/<?php echo $postnewsTitle ?>'> <?php echo $postnewsTitle ?></a>
        </li>
        <li aria-current='page' class='breadcrumb-item active'><?php the_title(); ?></li>
      </ol>
    </nav>

    <div class="section-title">
		<?php $postnewsTitlesecond = lang() == "es" ? "Alternativas Tecnas Plant Based" : "Tecnas Plant Based Alternatives"; ?>
      <h1><?php echo $postnewsTitlesecond ?></h1>
    </div>
   
    <div class="featured-card">
      <div class="featured-card-img">
		  <img src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'http://159.89.229.55/Tecnas/wp-content/uploads/2021/01/default_img_tecnas.png' ?>">
      </div>
      <div class="featured-card-info detail">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
      </div>
    </div>
    <ul class='share-social'>
		
		<?php if( get_field('facebook') ): ?>
      <li>
        <a href='<?php the_field( 'facebook' ); ?>'>
          <i class='fa fa-facebook'></i>
        </a>
      </li>
		<?php endif; ?>
		
			<?php if( get_field('instagram') ): ?>
      <li>
        <a href='<?php the_field( 'instagram' ); ?>'>
          <i class='fa fa-instagram'></i>
        </a>
      </li>
		<?php endif; ?>
		
			<?php if( get_field('twitter') ): ?>
      <li>
        <a href='<?php the_field( 'twitter' ); ?>'>
          <i class='fa fa-twitter'></i>
        </a>
      </li>
		<?php endif; ?>
		
			<?php if( get_field('share-alt') ): ?>
      <li>
        <a href='<?php the_field( 'share-alt' ); ?>'>
          <i class='fa fa-share-alt'></i>
        </a>
      </li>
		<?php endif; ?>
		
    </ul>
 <?php
            }
    } ?>
  </section>
<?php get_footer() ?>
