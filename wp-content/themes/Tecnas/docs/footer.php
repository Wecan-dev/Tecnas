 <footer>
    <div class='footer-top'>
      <ul class='footer-links'>
         <?php if (get_theme_mod('footer_contacto_'.lang().'') != NULL) { ?>         
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_theme_mod('footer_contacto_url_'.lang().''); ?>'><?php echo get_theme_mod('footer_contacto_'.lang().''); ?></a>
        </li>
         <?php }
         ?> 
         <?php if (get_theme_mod('footer_politicas_'.lang().'') != NULL) { ?>   
        <li class='nav-item'>
          <a class='nav-link' href='<?php echo get_theme_mod('footer_politicas_url_'.lang().'') ?>'><?php echo get_theme_mod('footer_politicas_'.lang().'') ?></a>
        </li>
          <?php }
         ?> 
          <?php if (get_theme_mod('footer_email') != NULL){?> 
        <li class='nav-item'>
          <a class='nav-link' href='mailto:<?php echo get_theme_mod('footer_email') ?>'><?php echo get_theme_mod('footer_email') ?></a>
        </li>
        <?php }
         ?> 
      </ul>
      <ul class='footer-images'>
          <?php if (get_theme_mod('aliados_item_1') != NULL){?> 
        <li>
			  <?php if (get_theme_mod('aliados_item_1_url') != NULL){?> 
          <a class='nav-link' target="_blank" href='<?php echo get_theme_mod('aliados_item_1_url') ?>'>
			     <?php }
         ?> 
            <img src='<?php echo get_theme_mod('aliados_item_1') ?>'>
          </a>
        </li>
         <?php }
         ?> 
        <?php if (get_theme_mod('aliados_item_2') != NULL){?> 
        <li>
          <a class='nav-link' target="_blank" href='<?php echo get_theme_mod('aliados_item_2_url') ?>'>
            <img src='<?php echo get_theme_mod('aliados_item_2') ?>'>
          </a>
        </li>
         <?php }
         ?> 
        <?php if (get_theme_mod('aliados_item_3') != NULL){?> 
        <li>
          <a class='nav-link' target="_blank" href='<?php echo get_theme_mod('aliados_item_3_url') ?>'>
            <img src='<?php echo get_theme_mod('aliados_item_3') ?>'>
          </a>
        </li>
         <?php }
         ?> 
        <?php if (get_theme_mod('aliados_item_4') != NULL){?> 
        <li>
          <a class='nav-link' target="_blank" href='<?php echo get_theme_mod('aliados_item_4_url') ?>'>
            <img src='<?php echo get_theme_mod('aliados_item_4') ?>'>
          </a>
        </li>
         <?php }
         ?> 
      </ul>
    </div>
	  <a class="boton-subir slider-top" href="#" id="js_up">
	  <i class=" fa fa-angle-up" ></i>
  </a>
    <div class='footer-bottom'>
      <span>Powered by Sigma 2020</span>
    </div>
  </footer>
  <script src='https://use.fontawesome.com/70a3cb5d53.js'></script>
  <script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/main.js'></script>
 <script>
	 	$('.hide-mobile-s').click(function(){	

		$('.test-class').addClass('hide-mobile-none');
		$('.toggle-none-mobile').addClass('hide-mobile-j');
		$('.toggle-none-mobile').removeClass('hide-mobile-s');
		console.log('funciona 2');

	});
	 
	$('.hide-mobile-j').click(function(){	

		$('.test-class').removeClass('hide-mobile-none');
		$('.toggle-none-mobile').addClass('hide-mobile-s');
		$('.toggle-none-mobile').removeClass('hide-mobile-j');
		console.log('funciona');

	});
	 
    $('#accordion').on('shown.bs.collapse', function() {
      $("iframe").css("display", "none");

      const shownElement = $(".collapse.show")
      const mapId = shownElement[0].dataset.map
      $("#" + mapId).css("display", "block")
    })
  </script>
</body>
  <?php wp_footer(); ?>
</html>