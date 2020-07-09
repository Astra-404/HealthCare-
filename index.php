<!DOCTYPE html>
<html>
<head>
	<title>Medication</title>
	<meta charset="URF8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Important header tags -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>			
</head>
<body>
	<header>
		<nav class="navbar nabbar-expand-lg">
			<div class="container">
				<div class="row">
					
					<div class="nav-content" style="display:flex;">
						
						<div class="nav-item">
							<ul style="list-style: none; display: flex;">
								<li style="padding-left: 0px;"><a class="" href="index.php">Home</a></li>
								<li style="padding-left: 30px;"><a class="" href="">Product</a></li>
								<li style="padding-left: 30px;"><a class="" href="contact.php">Contact</a></li>
								<li style="padding-left: 30px;"><a class="" href="about.php">About</a></li>
			
							</ul>
						</div>
					
						
							<div class="nav-brand text-center" style="padding-left: 40%;">
								<a class="logo" href="index.php"><img src="images/logo.png" height="70.0938px"></a>
							</div>


						
					</div>
					</div>
					
					
					
			</div>
		</nav>
	</header>
	<section class="imageCarousel">
		<!-- Slider Image Carousel -->
		<div id="carouselSlider" class ="carousel slide" data-ride="carousel"data-interval="4000">
		<!-- Indicators start -->
			<ol class="carousel-indicators">
				<li data-target="#carouselSlider" data-slide-to="0" class="active"></li>
				<li data-target="#carouselSlider" data-slide-to="1"></li>
				<li data-target="#carouselSlider" data-slide-to="2"></li>
			</ol>
		<!-- Indicators end -->
		<!-- Carousel Inner start -->
		
			<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
				<div class="carousel-item active">
					<img src="images/slide1.jpg" height="750px" width="100%">
					<div class="carousel-caption">
						<h1>Best Health Care</h1>
						<h3>Very Epic</h3>
						<a class="btn btn-outline-light btn-lg" href="#"style="margin-top: 20px; ">Apply Now</a>
					</div>    
				</div>
			<!-- Slide 2 -->
			<div class="carousel-item">
				<img src="images/slide2.jpg" height="750px" width="100%">
				<div class="carousel-caption" id="carousel2">
					<h1>Instant Money</h1>
					<h3>Any Time, Any Where</h3>
					<a class="btn btn-outline-light btn-lg" href="#"style="margin-top: 20px; ">Apply Now</a>
				</div>
			</div>
			<!-- Slide 3 -->
			<div class="carousel-item">
				<img src="images/slide3.jpg"  height="750px" width="100%">
				<div class="carousel-caption">
					<h1>Instant Money</h1>
					<h3>Any Time, Any Where</h3>
					<a class="btn btn-outline-light btn-lg" href="#"style="margin-top: 20px; ">Shop Now</a>
				</div>
			</div>
		</div>
		<!-- Carusel Inner End -->
		<!-- prev and next arrow start -->
		<a class="carousel-control-prev" href="#carouselSlider" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselSlider" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	<!-- Prev and next arrow end -->
	</section>

	<!-- Featured Products -->
	<section class="featureProd" style="padding-top:10px;">
		<div class="container" style=" margin-top: 35px; width: 100%;">
			<div class="row justify-content-center" style="text-align:center;">

				<div class="col-lg-4 col-md-4 col-sm-12" style="width: 396px;">
				<div class="content" style="background-color: #f4ede7; width: 396px;">
					<!-- Featured product 1 -->
					<div class="prodImg"><img src="images/products/1.png" height='280px' width='100%'> </div>
				</div>	
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12" style="padding-right:30px; width: 396px;">
					<div class="content" style="background-color: #e3efed; width: 396px;">
				<!-- Featured product 2 -->
					<div class="prodImg"><img src="images/products/2.png" height='280px' width='100%'> </div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12" style="width: 396px;">
					<div class="content"  style="background-color: #e7f2f8; width: 396px;">
					<!-- Featured product 3 -->
						<div class="prodImg"><img class="prodImg" src="images/products/3.png" height='280px' width='100%'> </div>
					</div>
				</div>
			</div>
		</div>
	</section>



</div> 
</body>
</html>