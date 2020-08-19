<?php
include("includes/db.php");
// include("admin_function.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Shree Raj Education Point</title>
	<meta charset="URF8">
<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=no">

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	

	
 
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">



</head>

<style>
    @media (max-width: 990px){
	    /* container */
        .cover .container { width: 100% !important;}
    section { padding:  0px; }
.navbar{
  padding: 0; 
}


      
      .navbar-brand{
        display: none;
      }
    
      .side-navigation{
        left: 0px;
      }
        .side-container { padding-left: 0px; }


      

.menu-toggle{
  display:block;
    float: right;
  line-height: 50px;
  font-size: 24px;
  cursor: pointer;
  
}
 .icon-bar {background: #fff;}
.white-background { background: #fff !important; }
.side-navigation { width: 100%; height: auto; }
.navbar{

 
  float:left;
  display:block;
 
}

.desktop-ul{
  width:100%;
  padding-left: 0px;
  height: auto;
  top: 50px;
  margin-left: 0;
  background-color:#e4edf6;



}

.navbar-nav li a{
  font-color: white;
}
#nav-res{

  display: none;

}



.navbar-ul{
  width: 100%;
  left: 0px;
}

.navbar-toggle { border-radius: 5px; background-color: #000; }
.desktop-ul ul{
 
  overflow: hidden;
  display: block;
}

.logo{
  color:black;
  height: 50px;
  background-color:white;
  line-height: 50px;
  font-size: 24px;
  font-weight: bold;
  display:block;

}
  




 }
 @media (max-width: 767px){
section { padding: 75px 0px; }
}
    @charset "utf-8";
html{
	scroll-behavior: smooth;
}
* { transition-timing-function: ease-in-out; -moz-transition-timing-function: ease-in-out; -webkit-transition-timing-function: ease-in-out; -o-transition-timing-function: ease-in-out; transition-duration: .2s; -moz-transition-duration: .2s; -webkit-transition-duration: .2s; -o-transition-duration: .2s; }
::selection { background:#000; color:#fff; }
::-moz-selection { background:#000; color:#fff; }
::-webkit-input-placeholder { color: #9e9d9d; text-overflow: ellipsis; }
::-moz-placeholder { color: #9e9d9d !important; text-overflow: ellipsis; opacity:1; } 
:-ms-input-placeholder { color: #9e9d9d !important; text-overflow: ellipsis; opacity:1; }
:-moz-placeholder { color: #9e9d9d !important; text-overflow: ellipsis; opacity:1; }
::-webkit-scrollbar { width:9px;}
::-webkit-scrollbar-track { -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3); -moz-box-shadow:inset 0 0 6px rgba(0,0,0,.3); box-shadow:inset 0 0 6px rgba(0,0,0,.3); }
::-webkit-scrollbar-thumb { background:rgba(210,210,210,.8); -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.5); -moz-box-shadow:inset 0 0 6px rgba(0,0,0,.5); box-shadow:inset 0 0 6px rgba(0,0,0,.5); }
::-webkit-scrollbar-thumb:window-inactive { background:rgba(210,210,210,.4) }


.setting-parallax {
  /* The image used */
  background-image: url("images/admin.jpg");

  /* Set a specific height */
  height: 507px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

.desktop-ul ul li{
  list-style: none;
}
.logo{
  display: none;
}
.navbar-brand{
  padding-left: 40px;
  padding-top: 80px; 
}
.desktop-ul ul{
    padding-left: 40px;
  }

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Ubuntu:300,400,500,700);
@media screen\0 { input { /* ie7, ie9, ie10, ie11+ only */ padding-bottom: 18px; } }
/* -------------------------------
   06 - Navigation
------------------------------- */
.navbar { top: 0; display: inline-table; position: fixed; z-index: 10; border-radius:0; width: 100%; border: none; }
.nav li { margin: 16px 21px; }

.navbar-nav a:focus { background: transparent !important; color: #fff !important; }
.navbar-nav a:hover { 
	background: transparent !important; 
	color: #cccbcb !important; 
}
.side-container { padding-left: 239px; }
.navbar-brand img {  z-index: 2; position: relative; max-width: 156px; top: -5px; }
nav.shrink { border: none !important; background: rgba(0,0,0,1);}
.navbar li.active a { border-bottom: none; }
.side-navigation { width: 245px; height: 100%; }
.side-navigation .navbar-header {background: none;}
nav.side-navigation .container { padding:70px 45px; vertical-align: top; }
.side-navigation .navbar-nav li {width: 100%; margin: 0px; padding: 18px 0px; }
.side-navigation .navbar-nav li a { color: #a09f9f !important; border-bottom: none; font-weight: 600; }
.side-navigation .navbar-nav li:last-child { border-bottom: none; } 
.side-navigation .navbar-nav li a:hover, .side-navigation .navbar-nav li.active a { 
	padding-left: 15px !important;
	color: #000 !important; 

	transition: all 0.2s ease-in-out 0s;
	text-decoration: none;
}
.navbar-nav a { padding: 0px !important; text-transform: capitalize; font-weight: 500; font-size: 16px; font-family: 'Ubuntu', sans-serif !important; color: #fff !important; }

</style>
<body>
      
    <nav class="side-navigation white-background navbar zero-margin-bottom">
        
            
                    <div class="col-12 col-md-12 col-sm-12 logo">OLEX<a href="javascript:void(0);" class="menu-toggle" onclick="myFunction3()"><i class="fa fa-bars"></i></a></div>
                    <!-- logo -->
                    <a class="internal-link navbar-brand" href="#home" style="margin-left: -15px; margin-top: -40px;">
                        <img src="images/logo.png" alt="" />
                    </a>
                    <!-- end logo -->
                
              
                    <div class="desktop-ul" id="nav-res">
                        <ul class="nav navbar-nav navbar-ul" >
                        <li><a href="add_product.php" class="internal-link" onclick="onclicka()">Add Product</a></li>
                        <li><a href="add_category.php" class="internal-link" onclick="onclicka()">Add Category</a></li>    
                        <li><a href="#courses" class="internal-link" onclick="onclicka()">View Products</a></li>
                            <li><a href="#faculty" class="internal-link" onclick="onclicka()">View Category</a></li>
                            <li><a href="#gallery" class="internal-link" onclick="onclicka()">Set password</a></li>
                        

                        </ul>
                    </div>
              
        
    </nav>
    <!-- end navigation -->

    <!-- Side Container Start-->
    <div class="cover side-container">

              <!-- Parallax main Image -->
        <section id="home" class="setting-parallax">
   
            <div class="text-center" style="padding-top: 236px;">
                <h1 style="font-weight: 700; font-size: 47px; color: white; font-family: 'Montserrat', sans-serif;">Hello Admin</h1>
                <h3 style="color: white;"></h3>
               
        
            </div>

        </section>
        <section id="product" style="padding-top: 50px;">
            <h1 class="text-muted text-center" style="margin-bottom : 40px;">View All Product</h1>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">S.No</th>
                      <th scope="col">Product Title</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                      <th scope="col">Specification</th>
                     
                    </tr>
                  </thead>
                <?php

    global $con;
    $sql = "select * from product";
    $run = mysqli_query($con, $sql);
    $i = 0;                      
    while($row=mysqli_fetch_array($run)){     
        $name = $row['product_name'];
     $i++;  
      echo '<tbody>
      <tr>

          <th scope="row">
            '.$i.'
          </th>
        
          <td>'.$name.'</td>
          <td><a href="" class="btn btn-primary">Edit</a></td>
          <td><a href="" class="btn btn-primary">Delete</a></td>
          <td><a href="" class="btn btn-primary">Add Specification</a></td>
        </tr>
    </tbody>';
    }
    ?>  

</table>
</section>

    </body>
    <html>