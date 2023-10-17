<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/navbar.php'; ?>
<style>
    .list{
        text-align:left;
        margin-left:30px;
    }
    .list p{
        text-align:left;
        margin-top:10px;
    }
    .mt-10{
        margin-top:10px;
    }
    .service-box p {
        margin-bottom:5px;
    }
  .gradient-banner {
      padding:0px;
      height:500px;
      background-color:#fff;
  }
  .about-slider{
      height:100%;
  }
  #carouselExampleIndicators img{
      max-height:30% !important;
  }
    #about{
        padding:0px;
    }
</style>

<div class="bg-dark">
<div class="container" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/training/anniversary-new-name-intro/1. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/training/anniversary-new-name-intro/2. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/training/anniversary-new-name-intro/3. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/training/anniversary-new-name-intro/4. 20th ANNIVERSARY & NEW NAME INDUCTION 13-09-2022.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/training/anniversary-new-name-intro/022A4624.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<!--====  End of Hero Section  ====-->
<?php include_once 'includes/home.php'; ?>
	<div class="container">
		<div class="row  text-center">
		    <h3 class="mt-5" style="width:100%;text-align:center">About Us</h3>
	    </div>
    </div>
<?php include_once 'pages/about.php'; ?>
<?php //include_once 'includes/board_members.php'; ?>
<div class="container">
		<div class="row  text-center">
		    <h3 class="mt-5" style="width:100%;text-align:center; padding-bottom:20px;">Contact Us</h3>
	    </div>
    </div>

<?php include_once 'pages/contact.php'; ?>

<!--=====================================
=            Client Slider              =
======================================-->
<section class="section clients bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-10 m-auto text-center">
				<h3>Our Sponcers</h3>
				<div class="client-slider">
				    <?php
        $imageFolder = "images/sponcers/"; // Replace with the actual path to your image folder
        $imageCounter = 1;

        // Get all image files from the folder
        $images = glob($imageFolder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        // Loop through the images and display them
        foreach ($images as $image) {
            $imageId = "image" . $imageCounter;
            ?>	<!-- Testimonial 01 -->
			
					<div class="item mb-4">
						<img class="m-auto" src="<?= $image ?>" alt="business-finder">
					</div>
					    <?php
            $imageCounter++;
        }
        ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Client Slider  ====-->




<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/footer_bottom.php'; ?>