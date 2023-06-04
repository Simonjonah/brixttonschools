@include('pages.common.header')


    <!--End Main Header -->
	<style type="text/css">
		.brixton{
			display: inline-block;
    		max-width: 100%;
   		 	height: auto;
    		margin-left: 161px;
		}
	</style>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Nursery <span>Form</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
        </div>
    </section>
    
	<!-- Contact Page Section -->
	<section class="contact-page-section" style="margin-bottom: 30px;">
		<div class="auto-container">
			<div class="inner-container">
				<div class="sec-title centered">
				<h2>NIGERIAN CHRISTIAN INSTITUTE <br>EARLY LEARNING CENTRE</h2>

				<h5 style="color: #000">30 BABANGIDA AVENUE, P.M.B. 1096</h5>
				<span><img style="width: 90px; " src="images/sch14.jpg"></a></span>
			</div>
					<h4>REGISTRATION FORM</h4>
					<P>Please fill and return in a file to the Head Teacher's office at the above Address</P>
				
				<div class="row clearfix">
					<!-- Info Column -->
					<div class="info-column col-lg-6 col-md-12 col-sm-12">
						<div class="contactform">
							<form method="post" action="" enctype="multipart/form-data">
							
								<div class="form-group">
									<h5>Pupil's Name in (Full)</h5>
									<input class="form-control" type="text" name="fulname" value="" placeholder="Pupil's Name in (Full)" required="">
								</div>
								
								<div class="form-group">
									<h5>Home or Permanent Address</h5>
									<input class="form-control" type="text" name="permanent_address" value="" placeholder="Home or Permanent Address" required="">
								</div>
								<div class="form-group">
									<h5>Place of Birth</h5>
									<input class="form-control" type="text" name="placeofbirth" value="" placeholder="Place of birth" required="">
								</div>
								<div class="form-group">
									<h5>Blood Group</h5>
									<input class="form-control" type="text" name="bloodgroup" value="" placeholder="Blood Group" required="">
								</div>
								<div class="form-group">
									<h5>Class Child is seeking adminssion into</h5>
									<select class="form-control" type="text" name="class" required="">
										<option>PLEASE SELECT CLASS</option>
										<option selected="selected">CRECHE ONE</option>
										<option selected="selected">CRECHE TWO </option>
										<option selected="selected">TRANSITION </option>
										<option selected="selected">NURSERY ONE </option>
										<option selected="selected">NURSRY TWO</option>
										<option selected="selected">PRIMARY ONE</option>
										<option selected="selected">PRIMARY TWO</option>
										<option selected="selected">PRIMARY THREE</option>
										<option selected="selected">PRIMARY FOUR</option>
										<option selected="selected">PRIMARY FIVE </option>
									</select>
									
								</div>
								<h5>Select Gender</h5>
								<div class="form-group">
									<select class="form-control" name="gender" required="">
										<option selected="selected">Male</option>
										<option selected="selected">Female</option>
									</select>
								</div>
								<div class="form-group">
									<h5>Which Skill(s) do you need us to Work with your child?</h5>
									<select class="form-control" type="text" name="child_skill" required="">
										<option>PLEASE SELECT Skills</option>
										<option selected="selected">Eating by self</option>
										<option selected="selected">Toilet Training </option>
										<option selected="selected">Others Please Specify</option>										
									</select>
								</div>
								<div class="form-group">
									<h5>Occupation of Father</h5>
									<input class="form-control" type="text" name="occupationoffather" value="" placeholder="Occupation of Father" required="">
								</div>
								
								<div class="form-group">
									<h5>Jop Title of Father</h5>

									<input class="form-control" type="text" name="fatherjob" value="" placeholder="Jop Title of Father" required="">
								</div>
								<div class="form-group">
									<h5>Father's Phone Number</h5>
									<input class="form-control" type="text" name="fathernumber" value="" placeholder="Father's Phone Number" required="">
								</div>

								<h5>Name of Father</h5>
								<div class="form-group">
									<input class="form-control" type="text" name="fathername" value="" placeholder="Name Of Father">
								</div>
								<p>Attach Photocopies of</p>
								<div class="form-group">
									<span> (i) Birth Certificate <input class="form-control" type="file" name="birth_certificate" required=""></span>
								</div>
								<div class="form-group">
									<span> (ii) Genotype/Blood Group <input class="form-control" type="file" name="genotype_certificates" required=""></span>
								</div>
								<div class="form-group">
									<span> (iii) Transfer Certificate or Original copy of that Class Results <input class="form-control" type="file" name="transfer_certificates" required=""></span>
								</div>
									                                 
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-6 col-md-12 col-sm-12">
						<div class="innercolumn">
							<div class="form-group">
								<h5>Residential Address</h5>
								<input class="form-control" type="text" name="contactaddress" value="" placeholder="Residential Address" required="">
							</div>
							<div class="form-group">
								<h5>Date of Birth</h5>
								<input class="form-control" type="date" name="dateofbirth" value="" placeholder="Date of birth" required="">
							</div>
							<div class="form-group">
									<h5>Genotype</h5>
									<input class="form-control" type="text" name="genotype" value="" placeholder="Genotype" required="">
								</div>
							
							<div class="form-group">
									<h5>Does your Child have any illness or physical Condition(s) that might affect him/her in School, IF yes Specify</h5>

								<input class="form-control" type="text" name="health" value="" placeholder="Health Status of Your Child" required="">
							</div>
							 
							<div class="form-group">
									<h5>EMAIL</h5>

								<input class="form-control" type="text" name="email" value="" placeholder="Email" required="">
							</div>
								
							<div class="form-group">
								<h4>Child Passport</h4>
                    			<input class="form-control" type="file" name="fileToUpload" id="fileToUpload" required="">
							</div>

							
		                    <div class="form-group">
								<h5>Father's Phone Number</h5>
		                        <input class="form-control" type="text" name="password" placeholder="Father's Phone Number" required="">
		                    </div>

		                    <div class="form-group">
								<h5>Mother's Name</h5>
		                        <input class="form-control" type="text" name="mothername" placeholder="Mother's Name" required="">
		                    </div>
		                	 <div class="form-group">
								<h5>Occupation of Mother</h5>
								<input class="form-control" type="text" name="motheroccupation" value="" placeholder="Occupation of Mother" required="">
							</div>
							<div class="form-group">
								<h5>Mother's Job Title</h5>
								<input class="form-control" type="text" name="motherjob" value="" placeholder="Mother's Job Title" required="">
							</div>
							<div class="form-group">
								<h5>Mother's Phone Number</h5>
								<input class="form-control" type="text" name="mothernumber" value="" placeholder="Mother's Phone Number" required="">
							</div>

							<div class="form-group">
								<h5>Date of Registration</h5>
								<input class="form-control" type="date" name="dateregister" value="" required="">
							</div>

							<div class="form-group">
								<h5>Please furnish any other information that you feel will be useful to us in providing the best care for your Child</h5>
								<textarea class="form-control" name="furnish_statement" placeholder="Please furnish any other information that you feel will be useful to us in providing the best care for your Child" required=""></textarea>
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
	@include('pages.common.footer')
