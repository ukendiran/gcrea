<?php include_once 'includes/header.php'; ?>

<?php include_once 'includes/navbar.php'; ?>
<!--================================
=            Page Title            =
=================================-->

<!--====  End of Page Title  ====-->
<style>
   .details p{
        margin:10px 0px;
        
    }

    .section{
        padding:30px 0px;
    }
</style>

<div class="jumbotron">
      <h3 class="text-center">Contact Us</h3>
      
    </div>

<section class="section page-title" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <!-- Page Title -->

        <!-- Page Description -->
        <p> GREATER CHENNAI REGISTERED ENGINEERS ASSOCIATION.</p>
        
        <?php 
        if(isset($_GET['msg'])){
            if($_GET['msg'] =="success"){
                echo "<div class='alert alert-success'>Email Sent successfully</div>";
            }else{
                echo "<div class='alert alert-danger'>Email Not Sent</div>";
            }
        }
        ?>
      </div>
    </div>
  </div>
</section>






<?php include_once 'pages/contact.php'; ?>
<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/footer_bottom.php'; ?>
