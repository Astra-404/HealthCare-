<?php
include("includes/db.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Olex</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      
        <meta name="keywords" content= ""/>

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
		    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		    <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
   
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
        <link rel="stylesheet" href="assets/css/media-queries.css">
        <link rel="stylesheet" href="assets/css/carousel.css">
        <noscript>
          <link rel="stylesheet" type="text/css" href="css/nojs.css" />
        </noscript>
    </head>
    <!-- style for footer start-->
    <style>
      * {
  
}

.footer {
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;
    background: #007bff;
    display: block;

}

.inner-footer {
    width: 95%;
    margin: auto;
    padding: 30px 10px;
    display: flex;
    flex-wrap: wrap;
    box-sizing: border-box;
    justify-content: center;

}

.footer-items {
    width: 25%;
    padding: 10px 20px;
    box-sizing: border-box;
}

h1 {
    font-size: 35px;
    color: #fff;
    text-transform: uppercase;
}

.footer-items p {
    color: grey;
    font-size: 16px;
    text-align: justify;
    line-height: 25px;
}

h2 {
    margin: 5px 0;
    color: rgb(212, 211, 211);
    font-size: 16px;
    font-weight: lighter;
    text-transform: uppsercase;
}

.border {
    height: 2px;
    width: 50px;
    background: rgb(233, 233, 233);
}

ul {
    list-style: none;
    color: #fff;
    font-size: 15px;
    letter-spacing:  0.5px;
}

ul a {
    text-decoration: none;
    outline: none;
    color: #fff;
    transition: 0.3s;
}

ul a:hover {
    color: rgb(211, 30, 30);
}

ul li {
    margin: 10px 0;
    padding: 5px;
}

li i {
    margin-right: 20px;
}

.socialMedia {
    width: 100%;
    color: #fff;
    text-align: center;
}

.socialMedia a {
    text-decoration: none;
}

.socialMedia i {
    height: 15px;
    width: 15px;
    margin: 20px 5px;
    padding: 10px;
    color: #fff;
    border-radius: 50%;
    border: 1px solid grey;
    transition: 0.3s;
}

.socialMedia i:hover {
    background: grey;
}

.footer-bottom {
    text-align: center;
    padding: 10px;
    color: #fff;
    background-color: #747373;
    font-size: 12px;
}

@media screen and (max-width: 1085px) {
    .footer-items {
        width: 50%;
    }
}
@media screen and (max-width: 990px) {
    .footer-items {
        width: 100%;
    }
}



    </style>
    <!-- style for footer end-->

    <style>
      a:hover{
        text-decoration: none;
      }
      #NewArrival{
        display:flex;

      }
      #best_seller{
        display: none;

      }
   
      .item{
        color:white;
      }
      .border_div{
        border-bottom:1px solid rgba(0, 0, 0, .1);
        border-right:1px solid rgba(0, 0, 0, .1);
      }
      .border_div:hover{
        background-color:#3e8af3;
      }
         .border_div:hover .category_text{
       color:white;
      }
      .border_div:hover h3{
        color:white;
      }
      .featured-details a{
        background-color:#4e97fd;  
      }
      
      
      .featured-img img{
         height:270px;
          width:100%;
        transition: all 1s;
        background-size: cover;
      }
      .features:hover img{
        transform: scale(1.2);
      }
      .features:hover a{
          background-color:#e4573d;
      }
      .bottom_border{
        border-bottom:1px solid rgba(0, 0, 0, .1);
      }
      .top_border{
        border-top:1px solid rgba(0, 0, 0, .1);
      }
      .category_text{
        color:#999;
      }
      .category_details img{
        margin: 25px 0px;

      }
      .category_details h3, p{
        margin-bottom: 1rem;
      }
 #footer {
    font-size: 14px;
    background: #37517e;
}
      .li{
        color:#394973; 
     
      }
      .li a:hover{
        color:white;
      }
      .CategoryButton{
        background-color:white; 
        border:1px solid #dddddd; 
        
           font-size: 13px;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
        padding: 10px 40px; 
        margin:10px;
        border-radius:5px;
    }
       .CategoryButton:hover{
          background-color: #055ec2;
          color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
          border: 1px solid rgba(0,0,0,0);
          
        
    }
 

    .quick a{
       background-color: #055ec2;
        color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
    }
    .quick:hover a{
      text-decoration:none;
      color:white;
    }

#footer .footer-bottom {
    padding-top: 30px;
    padding-bottom: 30px;
    color: #fff;
}

#footer .credits {
    float: right;
    font-size: 13px;
}


.p-tag:hover{
  color: blue;
  cursor:pointer;
}
.category_slider li{
  margin:10px;
}
@media (max-width: 768px) {
    #footer .footer-bottom {
        padding-top: 20px;
        padding-bottom: 20px;
    }
    #footer .copyright,
    #footer .credits {
        text-align: center;
        float: none;
    }
    #footer .credits {
        padding-top: 4px;
    }
}
</style>
    <body>
      <header>
          <nav class="navbar-expand-lg navigation">
      <ul>
        <img class="navLogo" src="images/logo.png" alt="logo" width="50" height="50">
        <li class="logo">Olex Health Care</li>
        <li class="items"><a href="#">Home</a></li>
        <li class="items"><a href="about.html">About</a></li>
        <li class="nav-item items dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shop
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 1</a>
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 2</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 1</a>
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 2</a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 1</a>
                  <a class="dropdown-item" href="#" style="color: #0B1F52;">Cat 2</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="items"><a href="contactUs.html">Contact</a></li>
        
        <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
</ul>
</nav>

        <div class="">

		<div id="da-slider" class="da-slider" style="height:80vh;">
        <div class="da-slide">
          <h2>Warm welcome</h2>
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
          <a href="#" class="da-link" style="width: 10%;">Shop Now</a>
          <div class="da-img"><img src="images/1.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
          <h2>Easy management</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <a href="#" class="da-link" style="width: 10%;">Shop Now</a>
          <div class="da-img"><img src="images/2.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
          <h2>Revolution</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <a href="#" class="da-link" style="width: 10%;">Shop Now</a>
          <div class="da-img"><img src="images/3.png" alt="image01" /></div>
        </div>
      
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
      </div>
    </div>

    
</header>



<!-- Shop By category start-->
<section style="padding-top:40px;">
  <div class="container" style="">
    <div class="shop" style="margin-left:200px; margin-right: 200px;">
        <h3 style="font-size: 14px; text-transform: uppercase; color: #0b1f52 ; font-weight:  700; line-height: 20px;">Our Products</h3>
        <h1 style="font-size:36px; color: #0b1f52; font-weight: 600; line-height: 40px; margin-top:10px;">Shop By Category</h1>
        <p style="font-size: 16px; font-weight: 300; color:#666666; line-height: 26px; margin-top: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
    </div>
    <div class="row justify-content-center">
      <ul id="myDiv" style="display: flex;">
          <li class="li"><a class="btn btn-primary CategoryButton active" id="CategoryButton1" onclick="myFunction();">New Arrival</a></li>
          <li class="li"><a class="btn btn-primary CategoryButton" id="CategoryButton2" onclick="myFunction1();">Best Seller</a></li>
          
      </ul>
    </div>

    <style>
      .Card:hover .product_detail{
        visibility: visible;
        transform: translateY(15%);
      }
        .Card:hover .quick{
        visibility: visible;
        transform: translateY(-30%);
        animation:fadeIn, 300ms;
      }
      .product_detail{
        visibility: hidden;
      /*  transform:translateY(-30%);*/
        transition: all 0.3s;
      }
          .quick{
        visibility: hidden;
        transition-duration: 300ms, 1ms;
        
      }
      #NewArrival{
        animation: fade 0.5s linear;

      }
       #best_seller{
        animation: fade 0.5s linear;

      }
       #other{
        animation: fade 0.5s linear;

      }
      .product_details{
        text-align: center;
      }
      .quicks{
        text-align: center;
      }
      @keyframes fade{
        from{
          opacity :0;

        }
        to{
          opacity: 1;
        }
      }
    </style>
 
     
<!-- NEw arrival start -->
    <div class="row" id="NewArrival" style="padding: 0px; margin:20px 0px;">
    <?php
            getNewArrival();
            
            ?>
        

    </div>
    <!-- New Arrival End -->
    <!-- Best Seller Start -->
        <div class="row" id="best_seller" style="padding: 0px; margin:20px 0px;">
          
          <?php
            getBestSeller();
            
            ?>
           
    </div>
    <!-- Best Seller End -->

    <!-- 3rd Button start -->
    <!-- <div class="row" id="other" style="padding: 0px; margin:20px 0px;"> -->
          
<!--         
    </div> -->
    <!-- 3rd Button End -->
  </div>
</section>
<!-- Shop by category end -->


<!-- Category slider start-->
<section style="padding:40px 0px;">

     <!-- Top content -->
        <div class="top-content">
          <div class="container-fluid">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner row w-100 mx-auto" role="listbox">
                  <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
             </div>
            

            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                       <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden; height: 100%;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <a href="">
                    <div class="Card" style="position: relative;  overflow:hidden;">
                        <div class="">
                            <div class="product_details" style="margin:5px 10px;background-color: transparent; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;">
                                <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;">Aquaiung Smart Snorkel</p>
                                <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; 310</p>
                            </div>
                        </div>

                        <div class="">
                            <div class="quicks" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px; color:white;">
                              <a class="btn btn-primary">Quick View</a>
                            </div>
                        </div>
                
                          <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                            <div class="images" style="background-color: #eef1fb;  height: 300px; border-radius: 15px;">
                                <img src="images/3.png" style="vertical-align: middle; width: 100%; margin-top:25%;">
                            </div>
                          </a>

              

                    </div>
                  </a>
            </div>

              </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
            </div>
          </div>
        </div>
 
</section>
<!-- Category slider end-->

<!-- Fotter -->
<footer>
    <div class="footer">
        <div class="inner-footer">
            <div class="footer-items">
                <h1>Olex Healthcare</h1>
            </div>
            <div class="footer-items">
                <h2>Site Map</h2>
                <div class="border"></div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            
            <div class="footer-items">
                <h2>Contact Us</h2>
                <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map" aria-hidden="true"></i>Addr Line 1</li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Addr Line 2</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Phone</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i>Mail</li>
                </ul>
                <div class="socialMedia">
                    <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            Copyright &copy; Olex Healthcare 2020. All Rights Reserved.
        </div>
    </div>
</footer>
<!-- Fotter -->

    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   -->
   <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
	
		</script>	
 <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
    </script>
    <script>
      function myFunction() {
  document.getElementById("NewArrival").style.display = "flex";
  document.getElementById("best_seller").style.display = "none";
  // document.getElementById("other").style.display = "none";


}
      function myFunction1() {
  document.getElementById("NewArrival").style.display = "none";
  document.getElementById("best_seller").style.display = "flex";
  // document.getElementById("other").style.display = "none";

}
//       function myFunction2() {
//   document.getElementById("NewArrival").style.display = "none";
//   document.getElementById("best_seller").style.display = "none";
//   document.getElementById("other").style.display = "flex";

// }

var btnContainer = document.getElementById("myDiv");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("CategoryButton");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>

      <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>
</html>