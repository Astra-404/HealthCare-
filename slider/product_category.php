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
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

		<noscript>
			<link rel="stylesheet" type="text/css" href="css/nojs.css" />
		</noscript>
    </head>
    <style>
      .quick a{
       background-color: #055ec2;
        color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
    }
    .quick:hover a{
      text-decoration:none;
      color:white;
    }
      a:hover{
        text-decoration: none;
      }
      .submit{
        background-color: #055ec2;
          color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
          border: 1px solid rgba(0,0,0,0);
          margin-top:20px;
          padding:15px;
      }
      .d-flex{
        padding: 20px 0px;
      }


 #footer {
    font-size: 14px;
    background: #37517e;
    bottom:0px;
   /* position: fixed;*/
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
 
      .Card:hover .product_detail{
        visibility: visible;
        transform: translateY(15%);
      }
        .Card:hover .quick{
        visibility: visible;
        transform: translateY(-30%);
        animation:fadeIn, 300ms;
      }
      .Card{
        margin-top:15px;
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
      .quick{
        color:white;
        text-align: center;
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
    <p class="text-center" style="padding:60px 0px;">Home / <span style="color: #07a8ff; font-weight: 700;">Category</span></p>
  </div>
</section>
<!-- category section start -->
<section style="padding: 40px 0px; ">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-12">
        <p style="font-size: 30px; font-weight: 700; color:#0b1f52;">Category</p>
        <div class="type">
          <ul style="display: block; list-style: none;">
              <?php
                getCategory();
              ?>
          
          </ul>
        </div>
      </div>
      <div class="col-lg-9 col-md-12">
        <div class="row" id="NewArrival" style="padding: 0px; margin:20px 0px;">

        <?php

        $limit = 2;
        if(isset($_GET['page'])){
          if($_GET['page'] < 1){
            echo "<script>window.open('product_category.php', '_self')</script>";

          }
          
      
          else{
          $id = $_GET['page'];
          if(is_numeric($id) == true){
            try{
              $page = $id;
            }
            catch(PDOException $e){
              /**
               * You can log PDO exceptions to PHP's system logger, using the
               * log engine of the operating system
               *
               * For more logging options visit http://php.net/manual/en/function.error-log.php
               */
              error_log('PDOException - ' . $e->getMessage(), 0);
              /**
               * Stop executing, return an Internal Server Error HTTP status code (500),
               * and display an error
               */
              http_response_code(500);
              die('Error establishing connection with database');
            }
          }
          else{
            echo "<script>window.open('product_category.php', '_self')</script>";
          }
        }
        }
        else{
          $page = 1;
        }
       
        $start = ($page - 1) * $limit;


        if(!isset($_GET['category'])){
          $sql = "select * from product where IsBestSeller = ? LIMIT $start, $limit";
          $stmt = mysqli_stmt_init($con);
         
          $result = ("select * from product where IsBestSeller = ?");
          $stmt = mysqli_stmt_init($con);
          if(!mysqli_stmt_prepare($stmt, $result)){
            echo "SQL Error";
        }
        else{
          $yes = "yes";
          mysqli_stmt_bind_param($stmt, "s", $yes);
          $execute = mysqli_stmt_execute($stmt);
         
          $result= mysqli_stmt_store_result($stmt);
          $proCount =  $stmt->num_rows;
          
         
          $total = $proCount;
          $pages = ceil( $total / $limit ); 
          if($page == $pages){
            $Next = $pages;
          }
          else{
            $Next = $page + 1;
          }
          if($page == 1){
            $Previous = 1;
          }
          else{

          $Previous = $page - 1;
          }
         
        }

         
          if(!mysqli_stmt_prepare($stmt, $sql)){
              echo "SQL Error";
          }
          else{
             $yes = "yes";
              mysqli_stmt_bind_param($stmt, "s", $yes);
              mysqli_stmt_execute($stmt);
              $result= mysqli_stmt_get_result($stmt);
              while($row = mysqli_fetch_array($result)){
                $product_name = $row['product_name'];
                $price = $row['SellingPrice'];
                $image1 = $row['Image1'];

              
      ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="Card" style="position: relative;  overflow:hidden;">
                  <div class="">
                    <div class="product_detail" style="margin:10px 10px;background-color: white; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%; text-align: center;">
                      <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;"><?php echo $product_name ?></p>
                      <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; <?php echo $price ?></p>
                    </div>
                  </div>

                  <div class="">
                    <div class="quick" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px;">
                      <a class="btn btn-primary">Quick View</a>
                    </div>
                  </div>
                
                    <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                      <div class="images" style="background-color: #eef1fb;  border-radius: 15px;">
                        <img src="upload/<?php echo $image1 ?>" style="vertical-align: middle;  margin-top:25%; width: 100%;">
                      </div>
                    </a>

                

              </div>
          </div>
          <?php
        }
      }
    }
        else{
            $category_name = $_GET['category'];
            $sql = "select * from product where  Category = ? LIMIT $start, $limit";
            $stmt = mysqli_stmt_init($con);
           
            $result = ("select * from product where  Category = ?");
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt, $result)){
              echo "SQL Error";
          }
          else{
            $yes = "yes";
            mysqli_stmt_bind_param($stmt, "s", $category_name);
            $execute = mysqli_stmt_execute($stmt);
           
            $result= mysqli_stmt_store_result($stmt);
            $proCount =  $stmt->num_rows;
            
           
            $total = $proCount;
            $pages = ceil( $total / $limit ); 
            if($page == $pages){
              $Next = $pages;
            }
            else{
              $Next = $page + 1;
            }
            if($page == 1){
              $Previous = 1;
            }
            else{

          
            $Previous = $page - 1;
            }
          }


           
           
           
           
           
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "SQL Error";
            }
            else{
               
                mysqli_stmt_bind_param($stmt, "s", $category_name);
                mysqli_stmt_execute($stmt);
                $result= mysqli_stmt_get_result($stmt);
                while($row = mysqli_fetch_array($result)){
                  $product_name = $row['product_name'];
                  $price = $row['SellingPrice'];
                  $image1 = $row['Image1'];

                
        ?>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="Card" style="position: relative;  overflow:hidden;">
                    <div class="">
                      <div class="product_detail" style="margin:10px 10px;background-color: white; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%; text-align: center;">
                        <p class="p-tag" style="margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;"><?php echo $product_name ?></p>
                        <p style="margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;">&#8377; <?php echo $price ?></p>
                      </div>
                    </div>

                    <div class="">
                      <div class="quick" style="margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px;">
                        <a class="btn btn-primary">Quick View</a>
                      </div>
                    </div>
                  
                      <a href="" style="overflow:hidden; position: relative; z-index: 3; top:0;">
                        <div class="images" style="background-color: #eef1fb; border-radius: 15px;">
                          <img src="upload/<?php echo $image1 ?>" style="vertical-align: middle;  margin-top:25%; width: 100%;">
                        </div>
                      </a>

                  

                </div>
            </div>
            <?php
              }
            }
          }
          
        ?>

        </div>
      </div>
    </div>
    <div clas="row justify-content-center">
      <div class="col-md-12">
      <nav aria-label="Page navigation example" >
          <ul class="pagination" style="padding-left:50%; margin-top:20px;">
            <?php
             if(isset($_GET['category'])){
               ?>
              <li class="page-item"><a class="page-link" href="product_category.php?category=<?= $category_name;?>&&page=<?= $Previous; ?>">Previous</a></li>

              <?php
             }
             else{
              ?>
              <li class="page-item"><a class="page-link" href="product_category.php?page=<?= $Previous; ?>">Previous</a></li>
            <?php
             }
             ?>
              <?php
                for($i = 1; $i <= $pages; $i++) :
                  if(isset($_GET['category'])){

                 
              ?>
                <li><a  class="page-link" href="product_category.php?category=<?= $category_name;?>&&page=<?= $i; ?>" id="page"><?= $i; ?></a></li>
                
              <?php
               }
               else{
                 ?>
                <li><a  class="page-link" href="product_category.php?page=<?= $i; ?>" id="page"><?= $i; ?></a></li>
                <?php
               }
              endfor;
              ?>
              <?php
                if(isset($_GET['category'])){
               ?>
      
              <li class="page-item"><a class="page-link" href="product_category.php?category=<?= $category_name;?>&&page=<?= $Next; ?>">Next</a></li>

              <?php
             }
             else{
              ?>
              <li class="page-item" id="next"><a class="page-link" href="product_category.php?page=<?= $Next; ?>">Next</a></li>
            <?php
             }
             ?>
          </ul>
      </nav>  
      </div>
    </div>
  </div>
</section>

<!-- category section end -->

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
    </body>
</html>
