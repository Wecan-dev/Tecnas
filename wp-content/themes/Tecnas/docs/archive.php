<?php get_header() ?>


  <div class="main-page">
    <div class="container">
      <div class="section-title">
        <h1><?php the_archive_title(); ?></h1>
      </div>
      <div class="row">
         <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
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
          <?php
            }
    } ?>
      </div>
    </div>
  </div>
<?php get_footer() ?> 
<script>
	const title = document.querySelector("div.section-title > h1");
	const titleString = title.innerText;
	const newTitle = titleString.replace(": ", "");
	title.innerText = newTitle;
</script>
