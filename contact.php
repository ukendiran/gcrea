<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar_top.php'; ?>
<?php include_once 'includes/navbar.php'; ?>


<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <!-- Page Title -->
        <h1>Contact Us</h1>
        <!-- Page Description -->
        <p> GREATER CHENNAI REGISTERED ENGINEERS ASSOCIATION.</p>
      </div>
    </div>
  </div>
</section>

<!--====  End of Page Title  ====-->
<style>
   .details p{
        margin:10px 0px;
        
    }
</style>

<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 align-self-center">
        <div class="block">
          <div class="address-block  mb-5">
            <div class="icon">
              <i class="ti-mobile"></i>
            </div>
            <div class="details text-left">
              <p>Off: GCREA - "AMAR SINDHUR" Towers,</p>
                 <p>   No. 43, 5th Floor, Pantheon Road,</p>
                  <p>  (Near Hotel Ashoka), Egmore,</p>
                  <p>  Chennai- 600008.</p>
                  <p>  Phone:044-4553 0083</p>
                  <p>  E-mail: gcreassociation2003@gmail.com</p>
            
            </div>
          </div>
         
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0">
        <div class="google-map">
          <!-- Google Map -->
          <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="mb-5 text-center">Drop us a mail</h2>
      </div>
      <div class="col-12">
        <form action="">
          <div class="row">
            <!-- Name -->
            <div class="col-md-6 mb-2">
              <input class="form-control main" type="text" placeholder="Name" required>
            </div>
            <!-- Email -->
            <div class="col-md-6 mb-2">
              <input class="form-control main" type="email" placeholder="Your Email Address" required>
            </div>
            <!-- subject -->
            <div class="col-md-12 mb-2">
              <input class="form-control main" type="text" placeholder="Subject" required>
            </div>
            <!-- Message -->
            <div class="col-md-12 mb-2">
              <textarea class="form-control main" name="message" rows="10" placeholder="Your Message"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="col-12 text-right">
              <button class="btn btn-main-md">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/footer_bottom.php'; ?>