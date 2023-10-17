<section class="service section bg-gray" id="home">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title" style="margin-bottom: 0px">
					<h2>Greater Chennai Registered Engineers Association</h2>
					<h3>Benefits for become a member</h3>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
        <?php
        
        $services = array(
                "Technical meet" =>array("GCREA provide a platform for professionals to network with like-minded individuals and industry experts.","Networking can lead to potential business partnerships and valuable connections that can advance your business."), 
                "Development of friendly network and unity among up"=>array("Membership in a GCREA grants you access to various resources","Including meeting with secretaries in housing dept., & various officials in gcc , cmda & dtcp.","Immensely helpful in making informed government orders and staying ahead of the competition."),
            	"Knowledge of planning parameters practices"=>array("It's essential to stay up-to-date with the latest rules & regulations in planning areas ."),
                "Protection of registered engineer's rights"=>array("to sort out grievances and issues which are evolving in various government departments."),
                "Job sharing & Job guidance"=>array("Collaborative projects","collaboration in non familiar zones and panchayat unions."),
                "TECHNICAL GUIDANCE FROM SENIORS"=>array("Industry knowledge and education:","Organize workshops, seminars, and training sessions","To keep members updated with the latest circulars, G.O-s and regulations in the planning sector.","Staying in association can help you
 competitive and improve your expertise."),
                "Easy Mobilization of man power"=>array(),
                "Discount from sponsers"=>array("Special deals and discounts with sponsors and service providers exclusively for our members.","This can result in cost savings on materials,
tools and other essential services.
")
        );

        foreach ($services as $key => $service){
        ?>		
			<div class="col-lg-12 mr-auto align-self-center mt-5">
				<div class="service-box mt-10">
					<div class="row align-items-center">
						<div class="col-md-12">
							<!-- Service 01 -->
							<div class="service-item">
							
								<!-- Heading -->
								<h3><?= $key ?></h3>
								<?php 
								foreach ($service as $row){
								    echo "<p>".$row."</p>";
								}
								?>
								<!-- Description -->
								<?php ?>
							</div>
						</div>
					</div>
				</div>
			</div>
				<?php } ?>
		</div>
	</div>
</section>