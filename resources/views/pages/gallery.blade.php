@include('pages.common.header')
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bri2.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Our <span>Galleries</span></h1>
				<ul class="page-breadcrumb">
					<li><a href="home">Home</a></li>
					<li>Galleries</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	
<!-- News Section Two -->
	<section class="news-section-two alternate">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title-two centered">
				<div class="title" style="color: red;">Our Gallery</div>
				<h2 style="color: purple;">Photo  Speaks</h2>
				
			</div>
			
			<div class="row clearfix">
				
				<!-- News Block Two -->
				


				<div class="news-block-two brown col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<img style="width: 100%; height: 300px;" src="images" alt="" />
							<div class="overlay-box">
								<a href="images" data-fancybox="news" data-caption="" class="plus flaticon-plus-symbol"></a>
							</div>
						</div>
						<div class="lower-content">
							
							<p>description</p>
							
						</div>
					</div>
				</div>
				
				
				

			</div>

			
		</div>
	</section>
	
	<!--Map Info Section-->


	<section class="sponsors-section">
		<div class="auto-container">
			<div class="carousel-outer">
                <!--Sponsors Slider-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                	
					

                    <li><div class="image-box"><a href="#"><img style="width: 100%; height: 150px;" src="{{ URL::asset("/public/../$edit_gallery->images")}}" alt=""></a></div></li>
               
					
					

                </ul>
                <div class="text-center" style="margin-top: 20px;">
				<a href="facilities" class="theme-btn btn-style-fourteen">View Facilities</a>
			</div>
                
            </div>
		</div>
	</section>
	<!--End Sponsors Section-->
	
	<!-- Call To Action Two -->
	<section class="call-to-action-two">
		<div class="auto-container">
			<div class="clearfix">
				
				<div class="pull-left">
					<h2>Request for <span> Admission </span></h2>
				</div>
				<div class="pull-right">
					<a href="nurseryform" class="theme-btn btn-style-five">Request now <span class="icon fa fa-arrow-right"></span></a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Call To Action Two -->
	
	<!--Main Footer-->
	@include('pages.common.footer')
