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
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

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


					<!-- Contact Form -->
					<div class="contact1">
                        <div class="container-contact1">
                            <div class="contact1-pic js-tilt" data-tilt>
                                <img src="images/img-01.png" alt="IMG">
                            </div>

                            <form class="contact1-form validate-form">
                                <span class="contact1-form-title">
                                    Get in touch
                                </span>

                                <div class="wrap-input1 validate-input" data-validate = "Name is required">
                                    <input class="input1" type="text" name="name" placeholder="Name">
                                    <span class="shadow-input1"></span>
                                </div>

                                <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                                    <input class="input1" type="text" name="email" placeholder="Email">
                                    <span class="shadow-input1"></span>
                                </div>

                                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
                                    <input class="input1" type="text" name="subject" placeholder="Subject">
                                    <span class="shadow-input1"></span>
                                </div>

                                <div class="wrap-input1 validate-input" data-validate = "Message is required">
                                    <textarea class="input1" name="message" placeholder="Message"></textarea>
                                    <span class="shadow-input1"></span>
                                </div>

                                <div class="container-contact1-form-btn">
                                    <button class="contact1-form-btn">
                                        <span>
                                            Send Email
                                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
					
                <!-- Script Tags  -->
                <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
                <script src="vendor/bootstrap/js/popper.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="vendor/select2/select2.min.js"></script>
                <script src="vendor/tilt/tilt.jquery.min.js"></script>
                <script >
                    $('.js-tilt').tilt({
                        scale: 1.1
                    })
                </script>
                    <!-- Global site tag (gtag.js) - Google Analytics -->
                    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                    <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());
                    gtag('config', 'UA-23581568-13');
                </script>

                <script src="js/main.js"></script>

			</div>
		</nav>
    </header>
</body>
</html>