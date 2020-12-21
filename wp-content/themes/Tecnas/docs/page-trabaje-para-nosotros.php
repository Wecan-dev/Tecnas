<?php get_header() ?>

  <div class="main-contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="customer-service-text">
            <div class="section-title left">
              <h1>Trabaje para nosotros</h1>
            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took.</p>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="customer-service-form">
            <form>
             
              <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
              
             
              
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php get_footer() ?>