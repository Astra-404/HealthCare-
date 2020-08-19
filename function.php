<?php

include("includes/db.php");
function getProduct(){
    global $con;
    $sql = "select * from product";
    $run = mysqli_query($con, $sql);
                                 
    while($row=mysqli_fetch_array($run)){     
        $name = row['product_name'];
        $sellingPrice = row['SellingPrice'];
        $MRP = row['MRP'];
        
        $Category = row['Category'];
        $IsBestSeller = row['IsBestSeller'];
        $Image1 = row['Image1'];
        $Image2 = row['Image2'];
        $Image3 = row['Image3'];
        $Image4 = row['Image4'];
        $Image5 = row['Image5'];
        $Image6 = row['Image6'];
}
}

function getCategory(){
   
        global $con;
        $sql = "select * from category";
        $run = mysqli_query($con, $sql);
                                     
        while($row=mysqli_fetch_array($run)){     
            $name = $row['category_name'];
            $image = $row['category_image'];
            
            echo  
    "<li style='margin:15px 0px;'><a href='product_category.php?category=$name' style='font-size: 15px; font-weight: 600; color:#666666;'>$name</a></li>";
            
    }
}

function getBestSeller(){
    global $con;
    $sql = "select * from product where IsBestSeller = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Error";
    }
    else{
        $yes = "yes";
        mysqli_stmt_bind_param($stmt, "s", $yes);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);

       while($row = mysqli_fetch_array($result)){
           $name = $row['product_name'];
           $image1 = $row['Image1'];
           $price = $row['SellingPrice'];
           $mrp = $row['MRP'];
           echo "
        
            <div class='col-lg-3 col-md-6 col-sm-12' style='margin-top:20px;'>
            <div class='Card' style='position: relative;  overflow:hidden;'>
                <div>
                  <div class='product_detail' style='margin:10px 10px;background-color: white; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;'>
                    <p class='p-tag' style='margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;'>$name</p>
                    <p style='margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;'>&#8377; $price</p>
                  </div>
                </div>

                <div>
                  <div class='quick' style='margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px;'>
                    <a class='btn btn-primary'>Quick View</a>
                  </div>
                </div>
              
                  <a href='' style='verflow:hidden; position: relative; z-index: 3; top:0;'>
                    <div class='images' style='background-color: #eef1fb;  border-radius: 15px;'>
                      <img src='upload/$image1' style='vertical-align: middle;  margin-top:25%; width: 100%;'>
                    </div>
                  </a>

              

            </div>
          </div>
           ";
       }
    }
}


function getNewArrival(){
  global $con;
  $sql = "select * from product where IsNewArrival = ?";
  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt, $sql)){
      echo "SQL Error";
  }
  else{
      $yes = "yes";
      mysqli_stmt_bind_param($stmt, "s", $yes);
      mysqli_stmt_execute($stmt);
      $result= mysqli_stmt_get_result($stmt);

     while($row = mysqli_fetch_array($result)){
         $name = $row['product_name'];
         $image1 = $row['Image1'];
         $price = $row['SellingPrice'];
         $mrp = $row['MRP'];
         echo "
      
          <div class='col-lg-3 col-md-6 col-sm-12' style='margin-top:20px;'>
          <div class='Card' style='position: relative;  overflow:hidden;'>
              <div>
                <div class='product_detail' style='margin:10px 10px;background-color: white; padding:5px 5px; position:absolute; z-index:99; align-content:center; width:90%;'>
                  <p class='p-tag' style='margin-bottom:5px; margin-top:10px; font-size: 14px; font-weight: 600;'>$name</p>
                  <p style='margin-bottom: 10px; color:#0f73f1; font-size: 16px; font-weight: 700;'>&#8377; $price</p>
                </div>
              </div>

              <div>
                <div class='quick' style='margin:10px 10px;padding:5px 5px; position:absolute; z-index:100; align-content:center; width:90%; bottom: 0px;'>
                  <a class='btn btn-primary'>Quick View</a>
                </div>
              </div>
            
                <a href='' style='verflow:hidden; position: relative; z-index: 3; top:0;'>
                  <div class='images' style='background-color: #eef1fb;  border-radius: 15px;'>
                    <img src='upload/$image1' style='vertical-align: middle;  margin-top:25%; width: 100%;'>
                  </div>
                </a>

            

          </div>
        </div>
         ";
     }
  }
}


?>