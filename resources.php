<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>
<?php 
session_start();
  if (!isset($_SESSION["is_logged_in"]))
   {
      header("location: go.php");
   }
?>
<style>
    ul {
        text-align:left;
        list-style: square;
    }
    .about-slider{
        height:300px;
    }
    .resources a {
        font:#333 !important;
    }
    

    .resources a {
        font: #333 !important;
    }
    ul.resources li a {
        text-decoration: none;
        color: #333 !important;
    }
    table {
        text-align:left;
    }
    .download {
        text-align:center;
    }
    .form-control{
        border:1px solid #ccc !important;
        padding:5px !important;
    }
</style>


<section class="section page-title" id="about">
	<div class="container">
		<p class="text-right"><a href="logout.php">Logout</a></p>
		<p><input type="text" class="form-control" placeholder="Search"></p>
		<h2>Resources</h2>
		<div class="row">
			<!-- Page Title -->
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<!-- Page Description -->
				<table class="resources table table-bordered">
				    <tr class="bg-info text-white">
				        <th class="text-center">S.NO</th>
				        <th>File Name</th>
				        <th class="text-center">Download</th>
				    </tr>
				    <tr>
				        <td class="text-center"> 1</td>
				        <td> Extnension-16.10.2016</td>
				        <td class="text-center"><a href="resources/Extnension-16.10.2016.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 2</td>
				        <td> hud_t_118_2023</td>
				        <td class="text-center"><a href="resources/hud_t_118_2023.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 3</td>
				        <td> Extnension-16.10.2016</td>
				        <td class="text-center"><a href="resources/New-Doc-2019-02-05-16.53.36" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 4</td>
				        <td> Revised delegation of Powers 20.08.22</td>
				        <td class="text-center"><a href="resources/Revised-delegation-of-Powers-20.08.22.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 5</td>
				        <td> Online approval process 4.10.21</td>
				        <td class="text-center"><a href="resources/Online-approval-process-4.10.21.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 6</td>
				        <td>PP_deligation_corp</td>
				        <td class="text-center"><a href="resources/PP_deligation_corp.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 7</td>
				        <td>Reg extension 29.2.2024</td>
				        <td class="text-center"><a href="resources/Reg-extension-29.2.2024.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 8</td>
				        <td> TNC&TN ACT 1971 Amendments</td>
				        <td class="text-center"><a href="resources/TNC&TN-ACT-1971-Amendments.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 9</td>
				        <td>TNCDBR Amendments 2023.pdf</td>
				        <td class="text-center"><a href="resources/TNCDBR-Amendments-2023.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				    <tr>
				        <td class="text-center"> 10</td>
				        <td> TNCDBR-2019-RegistrationFormat.pdf</td>
				        <td class="download"><a href="resources/TNCDBR-2019-RegistrationFormat.pdf" download> <i class="ti-download"></i> </a></td> 
					</tr>
				<tr>
				</table>
			</div>
			</div>
			
			<div class="col-md-12 mt-5">
			    <div class="col-md-12">
		
			</div>
			</div>
		</div>
	</div>
</section>



<?php include_once 'includes/footer.php'; ?>
<?php include_once 'includes/footer_bottom.php'; ?>