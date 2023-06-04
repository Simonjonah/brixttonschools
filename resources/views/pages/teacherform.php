<?php require_once 'common/header.php'; ?>

    <!--End Main Header -->
	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo HOME; ?>images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Teachers <span>Registration</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo HOME; ?>home">Home</a></li>
					<li>Teachers</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<div class="title"> Teachers Registration</div>
				<h2>Teachers <span>Registration</span></h2>
				
			</div>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="" enctype="multipart/form-data">
							
								<div class="form-group">
									<h5>First Name</h5>
									<input class="form-control" type="text" name="firstname" value="" placeholder="First Name" required="">
								</div>
								
								<div class="form-group">
									<h5>OtherNames</h5>
									<input type="text" name="othername" class="form-control" placeholder="Othernames" required="">
								</div>

								<div class="form-group">
									<h5>Class</h5>
									<select class="form-control" type="text" name="class" value="" placeholder="Class" required="">
										<option>Reception</option>
										<option>Pre-School</option>
										<option>KG 1</option>
										<option>KG 2</option>
										<option>Elementary 1</option>
										<option>Elementary 2</option>
										<option>Elementary 3</option>
										<option>Elementary 4</option>
										<option>Elementary 5</option>
									</select>
									
								</div>
								
								<div class="form-group">
				                  <h5>Select Alms</h5>
				                  <select class="form-control" name="alms" required="">
				                    <option>Smart</option>
				                    <option>Bright</option>
				                    <option>Clever</option>
				                    <option>Awesome</option>
				                    <option>Radiant</option>
				                    <option>Fast</option>
				                    <option>Sharp</option>
				                    <option>Brilliant</option>
				                  </select>
				                </div> 
								<div class="form-group">
									<h5>Gender</h5>
									<select class="form-control" name="gender" required="">
										<option>Male</option>
										<option>Female</option>
									</select>
								</div>
								
								
                               
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="innercolumn">
							
							<div class="form-group">
								<h5>Phone</h5>
								<input type="text" name="phone" class="form-control" placeholder="Phone" required="">
							</div>
							<div class="form-group">
								<h5>Email</h5>
								<input type="email" name="email" class="form-control" placeholder="Email" required="">
							</div>
							 
							<div class="form-group">
								<h5>Password</h5>
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
								
							<div class="form-group">
								<h4>UPLOAD PASSPORD</h4>
                				<input type="file" name="fileToUpload" id="fileToUpload" required="">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success">Submit</button>	
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- End Team Page Section -->

	
	<!--Main Footer-->
<?php require_once 'common/footer.php'; ?>