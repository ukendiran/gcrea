<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>
<?php 
session_start();
  if (!isset($_SESSION["is_logged_in"]))
   {
      //header("location: go.php");
   }
?>
<style>
    ul {
        text-align:left;
        list-style: square;
    }
    .form-control{
        border:1px solid #ccc !important;
    }
    .card img {
        height:200px;
    }
</style>
<section class="section page-title">
   <div class="container mt-5">
    <h1 class="text-center">Image Gallery</h1>
    <div class="row">
        <?php
        $imageFolder = "images/projects/2023-09/"; // Replace with the actual path to your image folder
        $imageCounter = 1;

        // Get all image files from the folder
        $images = glob($imageFolder . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

        // Loop through the images and display them
        foreach ($images as $image) {
            $imageId = "image" . $imageCounter;
            echo '
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="' . $image . '" class="card-img-top" alt="Gallery Image" data-zoomable="' . $imageId . '" id="' . $imageId . '">
                </div>
            </div>';
            $imageCounter++;
        }
        ?>
    </div>
</div>


</section>

<




<!--====  End of Section comment  ====-->



<?php include_once 'includes/footer.php'; ?>


<?php include_once 'includes/footer_bottom.php'; ?>