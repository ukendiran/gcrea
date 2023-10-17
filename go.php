<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>
<style>
    ul {
        text-align:left;
        list-style: square;
    }
    .form-control{
        border:1px solid #ccc !important;
        padding:10px  !important;
    }
    .section{
        min-height:500px;
    }
    button{
        font-size:18px !important;
    }
</style>
<section class="section page-title">
	<div class="container">
		<h4>Login with Mobile Number </h4>
		<div class="row">
	
			<div class="col-md-3"></div>
			<div class="col-md-6">
			    
    			    <div class="col-md-12 mt-5">
    			        <input name="mobile" id="mobile" class="form-control" type="text" pattern="/^\d+$/" onKeyPress="if(this.value.length==10) return false;" placeholder="Enter your Number" />
    			    </div>
    			    <div class="col-md-12 mt-5">
    			         <button class="btn btn-primary btn-login" type="submit" name="mobile" style="height:50px;">Get OTP</button>
    			    </div>
		
			</div>
		</div>
	</div>
</section>

<




<!--====  End of Section comment  ====-->



<?php include_once 'includes/footer.php'; ?>

<?php include_once 'includes/footer_bottom.php'; ?>