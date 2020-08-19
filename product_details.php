<?php
include("includes/db.php");
if(isset($_GET['id'])){
  $id = $_GET['id'];
  global $con;
  $sql = "select * from product where Id = ?";
  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "SQL Error";
  }
  else{
      $yes = "yes";
      mysqli_stmt_bind_param($stmt, "s", $id);
      mysqli_stmt_execute($stmt);
      $result= mysqli_stmt_get_result($stmt);
      while($row = mysqli_fetch_array($result)){
        $name = $row['product_name'];
        $price = $row['SellingPrice'];
        $mrp = $row['MRP'];
        $desc = $row['product_description'];
        $category = $row['Category'];
        $IsBestSeller = $row['IsBestSeller'];
        $image1 = $row['Image1'];
        $image2 = $row['Image2'];
        $image3 = $row['Image3'];
        $image4 = $row['Image4'];
        $image5 = $row['Image5'];
        $image6 = $row['Image6'];
        $features = $row['features'];
        $bullet1 = $row['bullet1'];
        $bullet2 = $row['bullet2'];
        $bullet3 = $row['bullet3'];
        $bullet4 = $row['bullet4'];
        $bullet5 = $row['bullet5'];
        $bullet6 = $row['bullet6'];
        $bullet7 = $row['bullet7'];
        
        
      }




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
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
     <!--    <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
    </head>
    <style>
      a:hover{
        text-decoration: none;

      }
      .buy{
        background-color: #055ec2;
          color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
          border: 1px solid rgba(0,0,0,0);
      }
      .d-flex{
        padding: 20px 0px;
      }
      .active a{
        background-color: #f8f8f8;
      color:#07a8ff !important;
      }
      .li-a{
        background-color:#07a8ff;
        color:white;
      }
      ul{
        list-style:none;
      }
    li a{
      color:white !important;
    }


 #footer {
    font-size: 14px;
    background: #37517e;
    bottom:0px;
    /*position: fixed;*/
    width:100%;

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
#description, #facility{
  display: none;
}
#return{
  display: block
}


/*Product image slider*/

/* -------------------------------- 

Primary style

-------------------------------- */




a {
  color: #a5d05e;
  text-decoration: none;
}

/* -------------------------------- 

Main Components 

-------------------------------- */
.cd-gallery {
  width: 100%;
  /*max-width: 1048px;*/
  margin: auto;
}
.cd-gallery::after {
  clear: both;
  content: "";
  display: table;
}
.cd-gallery > li {
  overflow: hidden;
  position: relative;
  margin-bottom: 2em;
  background: #ffffff;
  border-radius: .25em;
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
}
.cd-gallery > li > a {
  display: block;
}
@media only screen and (min-width: 768px) {
  .cd-gallery {
    margin: 2em auto;
  }
  .cd-gallery > li {
    width: 100%;
    float: left;
    margin-right: 4%;
    margin-bottom: 2.5em;
  }
  .cd-gallery > li:nth-of-type(2n) {
    margin-right: 0;
  }
}
@media only screen and (min-width: 1048px) {
  .cd-gallery {
    margin: 2.5em auto;
  }
  .no-touch .cd-gallery > li:hover .cd-dots li.selected a {
    /* Slider dots - change background-color of the selected dot when hover over the its parent list item */
    background: #2f2933;
    border-color: #2f2933;
  }
  .no-touch .cd-gallery > li:hover .cd-dots a {
    /* Slider dots - change dot border-color when hover over the its parent list item */
    border-color: #9688a0;
  }
  .no-touch .cd-gallery > li:hover li.move-right, .no-touch .cd-gallery > li:hover li.move-left {
    /* show preview items when hover over the its parent list item */
    opacity: 0.3;
  }
}

.cd-item-wrapper {
  position: relative;
  overflow: hidden;
  margin: 3em 0;
}
.cd-item-wrapper li {
  position: absolute;
  top: 0;
  left: 25%;
  height: 100%;
  width: 50%;
  opacity: 0;
  /* Force Hardware Acceleration */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  will-change: transform, opacity;
  -webkit-transform: translateX(200%) scale(0.7);
  -moz-transform: translateX(200%) scale(0.7);
  -ms-transform: translateX(200%) scale(0.7);
  -o-transform: translateX(200%) scale(0.7);
  transform: translateX(200%) scale(0.7);
  -webkit-transition: -webkit-transform 0.4s, opacity 0.4s;
  -moz-transition: -moz-transform 0.4s, opacity 0.4s;
  transition: transform 0.4s, opacity 0.4s;
}
.cd-item-wrapper li.selected {
  /* selected item */
  position: relative;
  opacity: 1;
  -webkit-transform: translateX(0) scale(1.3);
  -moz-transform: translateX(0) scale(1.3);
  -ms-transform: translateX(0) scale(1.3);
  -o-transform: translateX(0) scale(1.3);
  transform: translateX(0) scale(1.3);
}
.cd-item-wrapper li.move-left {
  /* item on left - preview visible */
  -webkit-transform: translateX(-100%) scale(0.7);
  -moz-transform: translateX(-100%) scale(0.7);
  -ms-transform: translateX(-100%) scale(0.7);
  -o-transform: translateX(-100%) scale(0.7);
  transform: translateX(-100%) scale(0.7);
  opacity: 0.3;
}
.cd-item-wrapper li.move-right {
  /* item on right - preview visible */
  -webkit-transform: translateX(100%) scale(0.7);
  -moz-transform: translateX(100%) scale(0.7);
  -ms-transform: translateX(100%) scale(0.7);
  -o-transform: translateX(100%) scale(0.7);
  transform: translateX(100%) scale(0.7);
  opacity: 0.3;
}
.cd-item-wrapper li.hide-left {
  /* items hidden on the left */
  -webkit-transform: translateX(-200%) scale(0.7);
  -moz-transform: translateX(-200%) scale(0.7);
  -ms-transform: translateX(-200%) scale(0.7);
  -o-transform: translateX(-200%) scale(0.7);
  transform: translateX(-200%) scale(0.7);
}
.cd-item-wrapper li img {
  display: block;
  width: 100%;
}
@media only screen and (min-width: 1048px) {
  .cd-item-wrapper li.move-left,
  .cd-item-wrapper li.move-right {
    /* hide preview items */
    opacity: 0;
  }
  .cd-item-wrapper li.focus-on-left {
    /* class added to the .selected and .move-right items when user hovers over the .move-left item (item preview on the left) */
    -webkit-transform: translateX(3%) scale(1.25);
    -moz-transform: translateX(3%) scale(1.25);
    -ms-transform: translateX(3%) scale(1.25);
    -o-transform: translateX(3%) scale(1.25);
    transform: translateX(3%) scale(1.25);
  }
  .cd-item-wrapper li.focus-on-left.move-right {
    -webkit-transform: translateX(103%) scale(0.7);
    -moz-transform: translateX(103%) scale(0.7);
    -ms-transform: translateX(103%) scale(0.7);
    -o-transform: translateX(103%) scale(0.7);
    transform: translateX(103%) scale(0.7);
  }
  .cd-item-wrapper li.focus-on-right {
    /* class added to the .selected and .move-left items when user hovers over the .move-right item (item preview on the right) */
    -webkit-transform: translateX(-3%) scale(1.25);
    -moz-transform: translateX(-3%) scale(1.25);
    -ms-transform: translateX(-3%) scale(1.25);
    -o-transform: translateX(-3%) scale(1.25);
    transform: translateX(-3%) scale(1.25);
  }
  .cd-item-wrapper li.focus-on-right.move-left {
    -webkit-transform: translateX(-103%) scale(0.7);
    -moz-transform: translateX(-103%) scale(0.7);
    -ms-transform: translateX(-103%) scale(0.7);
    -o-transform: translateX(-103%) scale(0.7);
    transform: translateX(-103%) scale(0.7);
  }
  .cd-item-wrapper li.hover {
    /* class added to the preview items (.move-left or .move-right) when user hovers over them */
    opacity: 1 !important;
  }
  .cd-item-wrapper li.hover.move-left {
    -webkit-transform: translateX(-97%) scale(0.75);
    -moz-transform: translateX(-97%) scale(0.75);
    -ms-transform: translateX(-97%) scale(0.75);
    -o-transform: translateX(-97%) scale(0.75);
    transform: translateX(-97%) scale(0.75);
  }
  .cd-item-wrapper li.hover.move-right {
    -webkit-transform: translateX(97%) scale(0.75);
    -moz-transform: translateX(97%) scale(0.75);
    -ms-transform: translateX(97%) scale(0.75);
    -o-transform: translateX(97%) scale(0.75);
    transform: translateX(97%) scale(0.75);
  }
}

.cd-dots {
  /* not visible in the html document - created using jQuery */
  position: absolute;
  bottom: 95px;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  padding: .2em;
}
.cd-dots::after {
  clear: both;
  content: "";
  display: table;
}
.cd-dots li {
  display: inline-block;
  float: left;
  margin: 0 5px;
  pointer-events: none;
}
.cd-dots li.selected a {
  background: #2f2933;
  border-color: #2f2933;
}
.cd-dots a {
  display: block;
  height: 6px;
  width: 6px;
  border-radius: 50%;
  border: 1px solid #9688a0;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  -webkit-transition: border-color 0.2s, background-color 0.2s;
  -moz-transition: border-color 0.2s, background-color 0.2s;
  transition: border-color 0.2s, background-color 0.2s;
}
@media only screen and (min-width: 1048px) {
  .cd-dots li {
    pointer-events: auto;
  }
  .cd-dots li.selected a {
    background: #cccccc;
    border-color: #cccccc;
  }
  .cd-dots a {
    height: 8px;
    width: 8px;
    border-color: #cccccc;
    /* fix a bug in IE9/10 - transparent anchor not clickable */
    background-color: rgba(255, 255, 255, 0);
  }
}

.cd-item-info {
  height: 90px;
  line-height: 90px;
  padding: 0 2em;
}
.cd-item-info::after {
  clear: both;
  content: "";
  display: table;
}
.cd-item-info b, .cd-item-info .cd-price, .cd-item-info .cd-new-price {
  font-weight: bold;
  font-size: 2rem;
}
.cd-item-info b {
  float: left;
}
.cd-item-info b a {
  color: #2f2933;
}
.cd-item-info .cd-price, .cd-item-info .cd-new-price {
  /* .cd-new-price not visible in the html document - created using jQuery */
  float: right;
}
.cd-item-info .cd-price {
  color: #a5d05e;
  position: relative;
  margin-left: 10px;
  -webkit-transition: color 0.2s;
  -moz-transition: color 0.2s;
  transition: color 0.2s;
}
.cd-item-info .cd-price::after {
  /* crossing line - visible if price is on sale */
  content: '';
  position: absolute;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  left: 0;
  height: 2px;
  width: 0%;
  background-color: #a5d05e;
  opacity: 0;
  -webkit-transition: width 0.2s 0s, opacity 0s 0.2s;
  -moz-transition: width 0.2s 0s, opacity 0s 0.2s;
  transition: width 0.2s 0s, opacity 0s 0.2s;
}
.cd-item-info .cd-price.on-sale::after {
  opacity: 1;
  width: 100%;
  -webkit-transition: width 0.2s 0s, opacity 0s 0s;
  -moz-transition: width 0.2s 0s, opacity 0s 0s;
  transition: width 0.2s 0s, opacity 0s 0s;
}
.cd-item-info .cd-new-price {
  /* new price - visible if price is on sale */
  color: #e76363;
  opacity: 0;
  -webkit-transform: translateX(5px);
  -moz-transform: translateX(5px);
  -ms-transform: translateX(5px);
  -o-transform: translateX(5px);
  transform: translateX(5px);
  -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
  -moz-transition: -moz-transform 0.2s, opacity 0.2s;
  transition: transform 0.2s, opacity 0.2s;
}
.cd-item-info .cd-new-price.is-visible {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  opacity: 1;
}
@media only screen and (min-width: 768px) {
  .cd-item-info b, .cd-item-info .cd-price, .cd-item-info .cd-new-price {
    font-size: 2.4rem;
  }

}

.no-js .move-right,
.no-js .move-left {
  display: none;
}

/* -------------------------------- 

xcredits 

-------------------------------- */
.credits {
  width: 90%;
  margin: 2em auto;
  text-align: center;
}

.no-touch .credits a:hover {
  text-decoration: underline;
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
/* @media (max-width:510px) {
  #quantity{
    padding-left:1px;
  }
} */
/* #qty{
  width:21%;
} */
.bullet_points p{
    font-size:14px; font-weight: 500; color: #666666; margin-bottom:0px;
   
}
  </style>
    <body>
      <header>
          <nav class="navbar-expand-lg navigation">
      <ul style="margin-bottom: 0px;">
        <img class="navLogo" src="images/logo.png" alt="logo" width="50" height="50">
        <li class="logo">Olex Heathcare</li>
        <li class="items"><a href="#">Home</a></li>
        <li class="items"><a href="#">About</a></li>
        <li class="items"><a href="#">Shop</a></li>
        <li class="items"><a href="#">Contact</a></li>
        
        <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
</ul>
</nav>
<section style="background-color:#f4f9ff;">
  <div class="container">
    <p class="text-center" style="padding:60px 0px;">Home / <span style="color: #07a8ff; font-weight: 700;"><?php echo $category; ?></span></p>
  </div>
</section>
<section style="padding: 100px 0px;">      
<div class="container product">
  <div class="row">
    <div class="col-lg-6 col-md-12">
   
        <ul class="cd-gallery" style="">
    <li>
      <a href="#">
        <ul class="cd-item-wrapper">
          <li class="selected">
            <img src="upload/<?php echo $image1; ?>" alt="Preview image">
          </li>

          <li class="move-right">
            <img src="upload/<?php echo $image2; ?>" alt="Preview image">
          </li>

          <li class="">
            <img src="upload/<?php echo $image3; ?>" alt="Preview image">
          </li>

          <li class="">
            <img src="upload/<?php echo $image4; ?>" alt="Preview image">
          </li>
           <li class="">
            <img src="upload/<?php echo $image5; ?>" alt="Preview image">
          </li>
           <li class="">
            <img src="upload/<?php echo $image6; ?>" alt="Preview image">
          </li>
        </ul> <!-- cd-item-wrapper -->
      </a>
    </li>
  </ul>
    </div>
    <div class="col-lg-6 col-md-12">
      <p style="font-size: 24px; font-weight: 700; color: #0b1f52; margin-top: 10px;"><?php echo $name ?></p>
      <p style="font-size: 24px; font-weight: 700; color: #07a8ff;">&#8377; <?php echo $price ?>
      <span style="margin-left:5px; color:grey; font-size:20px;"><strike>&#8377; <?php echo $mrp ?></strike></span></p>
      <hr>
      <div class="d-flex">
         <div class="input-group" id="qty" style="margin-right: 20px;">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field=""  style="background-color: #333333; border-color: #333333;" >
                                          <span class="glyphicon glyphicon-minus">-</span>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="10"  style="background-color:white;" disabled="disabled">
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field=""  style="background-color: #333333; border-color: #333333;">
                                            <span class="glyphicon glyphicon-plus" style="background-color: #333333;">+</span>
                                        </button>
                                    </span>
                                </div>
        <input type="submit" class="btn btn-primary buy" value="Buy Now">
      </div>
      <hr>
      <p style="font-size:14px; font-weight: 500; color: #666666; ">
        <ul style="margin-left:-20px;">
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet1; ?>
          </li>
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet2; ?>
          </li>
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet3; ?>
          </li>

          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet4; ?>
          </li>
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet5; ?>
          </li>
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet6; ?>
          </li>
          <li class="bullet_points" style="margin:0px;">
          <?php echo $bullet7; ?>
          </li>
    </div>
  </div>
</div>
</section>
<!-- Retrun Policy -->
<section>
  <div class="container" style="padding-bottom:40px;">
    <div class="row" style="background-color:#07a8ff;">
      <ul id="myDiv" style="display: flex; list-style: none; padding:0px; margin:0px; width:100%;">
       
         <li class="liButton " onclick="myFunction1();">
          <a class="btn li-a" style="font-size: 18px; font-weight:700; padding:20px; margin-bottom: 0px;">Product description</a>
        </li>

         <li class="liButton " onclick="myFunction2();">
          <a class="btn li-a" style="font-size: 18px; font-weight:700;  padding:20px; margin-bottom: 0px;">Product Features</a>
        </li> 
        <li class="liButton active" onclick="myFunction();">
          <a class="btn li-a" style="font-size: 18px; font-weight:700;padding:20px; margin-bottom: 0px;">Retrun Policy</a>
        </li>

      </ul>

      <div style="background-color:#f8f8f8; padding:40px; width:100%;" id="description">
       <p style="font-size:14px; font-weight: 500; color: #666666; "><?php $description; ?>?></p>
      </div>

      <div style="background-color:#f8f8f8; padding:40px; width:100%;" id="facility">
       <p style="font-size:14px; font-weight: 500; color: #666666; width:100%;"><?php echo $features; ?></p>
      </div>

      <div style="background-color:#f8f8f8; padding:40px;" id="return">
       <p style="font-size:14px; font-weight: 500; color: #666666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

    
    </div>
    <div class="row" style="">
     
    </div>
  </div>
</section>


<!-- Fotter -->
 <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright text-center">
                &copy; Copyright <strong><span>OLEX Health Care</span></strong>. All Rights Reserved
            </div>
        </div>
  </footer>
<!-- Fotter -->

<!-- Java Script starting -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
	
		</script>	
    <script>
          function myFunction() {
  document.getElementById("return").style.display = "block";
  document.getElementById("description").style.display = "none";
  document.getElementById("facility").style.display = "none";


}
    function myFunction1() {
 document.getElementById("return").style.display = "none";
  document.getElementById("description").style.display = "block";
  document.getElementById("facility").style.display = "none";


}
    function myFunction2() {
 document.getElementById("return").style.display = "none";
  document.getElementById("description").style.display = "none";
  document.getElementById("facility").style.display = "block";


}

var btnContainer = document.getElementById("myDiv");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("liButton");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

    </script>
 <script>
      $(document).ready(function(){
        $('.btn').click(function(){
          $('.items').toggleClass("show");
          $('ul li').toggleClass("hide");
        });
      });
    </script>
    <!-- Script for quantity plus and minus -->
    <script>
      $(document).ready(function(){

var quantitiy=0;
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
             if(quantity<10){
            $('#quantity').val(quantity + 1);
                  }
          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>1){
            $('#quantity').val(quantity - 1);
            }
    });
    
});
    </script>
      <!-- Script for quantity plus and minus end-->
      <script>
jQuery(document).ready(function($) {
  var galleryItems = $('.cd-gallery').children('li');

  galleryItems.each(function(){
    var container = $(this);

    // preview image hover effect - desktop only
    container.on('mouseover', '.move-right, .move-left', function(event){
      hoverItem($(this), true);
    });
    container.on('mouseleave', '.move-right, .move-left', function(event){
      hoverItem($(this), false);
    });

    // update slider when user clicks on the preview images
    container.on('click', '.move-right, .move-left', function(event){
      event.preventDefault();
      if ( $(this).hasClass('move-right') ) {
        var selectedPosition = container.find('.cd-item-wrapper .selected').index() + 1;
        nextSlide(container);
      } else {
        var selectedPosition = container.find('.cd-item-wrapper .selected').index() - 1;
        prevSlide(container);
      }
    });
  });


  function hoverItem(item, bool) {
    ( item.hasClass('move-right') )
      ? item.toggleClass('hover', bool).siblings('.selected, .move-left').toggleClass('focus-on-right', bool)
      : item.toggleClass('hover', bool).siblings('.selected, .move-right').toggleClass('focus-on-left', bool);
  }

  function nextSlide(container, dots, n){
    var visibleSlide = container.find('.cd-item-wrapper .selected');
    if(typeof n === 'undefined') n = visibleSlide.index() + 1;
    visibleSlide.removeClass('selected');
    container.find('.cd-item-wrapper li').eq(n).addClass('selected').removeClass('move-right hover').prevAll().removeClass('move-right move-left focus-on-right').addClass('hide-left').end().prev().removeClass('hide-left').addClass('move-left').end().next().addClass('move-right');
  }

  function prevSlide(container, dots, n){
    var visibleSlide = container.find('.cd-item-wrapper .selected');
    if(typeof n === 'undefined') n = visibleSlide.index() - 1;
    visibleSlide.removeClass('selected focus-on-left');
    container.find('.cd-item-wrapper li').eq(n).addClass('selected').removeClass('move-left hide-left hover').nextAll().removeClass('hide-left move-right move-left focus-on-left').end().next().addClass('move-right').end().prev().removeClass('hide-left').addClass('move-left');
  }

});
</script>
      <!-- Product image slide js -->

    </body>
</html>
<?php
  }
}
else{
  header("Location: index.php");
}
?>