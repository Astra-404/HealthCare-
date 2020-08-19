<?php
include("includes/db.php");

$sql = "select * from category";

$result = mysqli_query($con, $sql);

?>

<!DOCTYPE>
<html>
<head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <link rel="stylesheet" href="nav.css">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <title>Olex</title>
        <link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
</head>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<style>
    .submit{
        background-color: #055ec2;
          color:#fff;
          background-image: linear-gradient(-45deg, #055ec2, #07a8ff); 
          border: 1px solid rgba(0,0,0,0);
    }
</style>
<body>
    <div class="container" style="margin-top:40px;">
    <p class="text-center" style="font-size: 30px; font-weight: 500; margin-left:55px; ">Add Your Product</p>
        <form method="post" style="padding:40px 80px;" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Produc Name</label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control"  placeholder = "Product Name" required>
                </div>
            </div>

          
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Product Category</label>
                <div class="col-sm-10">
                <select class="form-control" name="category">
                <?php
                   while($row = mysqli_fetch_array($result)){
                    $name = $row['category_name'];

            ?>
                    
                        <option value=<?php echo "$name" ?>><?php echo "$name" ?></option>
                    
                    <?php
                   }
                   ?>
                   </select>
               
                </div>
            </div>

            <div class="form-group row">
                <label for="mrp" class="col-sm-2 col-form-label">M.R.P</label>
                <div class="col-sm-10">
                <input type="text" name="mrp" class="form-control" placeholder="MRP" required>
                </div>
            </div>

            

            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Selling Price</label>
                <div class="col-sm-10">
                <input type="text" name="price" class="form-control" placeholder="Selling Price" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="mrp" class="col-sm-2 col-form-label">Is Best Seller</label>
                <div class="col-sm-10">
                <select class="form-control" name="isbestseller">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="mrp" class="col-sm-2 col-form-label">Is New Arrival</label>
                <div class="col-sm-10">
                <select class="form-control" name="isnewarrival">
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Features</label>
                <div class="col-sm-10">
                    <textarea name="features"></textarea>
                </div>
            </div>

          
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 1</label>
                <div class="col-sm-10">
                    <textarea name="bullet1"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 2</label>
                <div class="col-sm-10">
                    <textarea name="bullet2"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 3</label>
                <div class="col-sm-10">
                    <textarea name="bullet3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 4</label>
                <div class="col-sm-10">
                    <textarea name="bullet4"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 5</label>
                <div class="col-sm-10">
                    <textarea name="bullet5"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 6</label>
                <div class="col-sm-10">
                    <textarea name="bullet6"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="features" class="col-sm-2 col-form-label">Bullet Points 7</label>
                <div class="col-sm-10">
                    <textarea name="bullet7"></textarea>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="image1" class="col-sm-2 col-form-label">Upload Image 1</label>
                <div class="col-sm-10">
                   <input type="file" class="" name="image1" accepted="jpg, jpeg, png, gif">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="image2" class="col-sm-2 col-form-label">Upload Image 2</label>
                <div class="col-sm-10">
                <input type="file" class="" name="image2">
                </div>
            </div>

            <div class="form-group row">
                <label for="file[]" class="col-sm-2 col-form-label">Upload Image3</label>
                <div class="col-sm-10">
                <input type="file" class="" name="image3" multiple>
                </div>
            </div>
            <div class="form-group row">
                <label for="image4" class="col-sm-2 col-form-label">Upload Image 4</label>
                <div class="col-sm-10">
                <input type="file" class="" name="image4">
                </div>
            </div>

            <div class="form-group row">
                <label for="image4" class="col-sm-2 col-form-label">Upload Image 5</label>
                <div class="col-sm-10">
                <input type="file" class="" name="image5">
                </div>
            </div>

            <div class="form-group row">
                <label for="image4" class="col-sm-2 col-form-label">Upload Image 6</label>
                <div class="col-sm-10">
                <input type="file" class="" name="image6">
                </div>
            </div>

            

           
               <div class="row justify-content-center">
            
                <input type="submit" class="btn btn-primary text-center btn-lg submit" name="submit">
              </div>
   


        </form>
    </div>

    <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $mrp = $_POST['mrp'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $features = $_POST['features'];
    $isbestseller = $_POST['isbestseller'];
    $isnewarrival = $_POST['isnewarrival'];
    $bullet1 = $_POST['bullet1'];
    $bullet2 = $_POST['bullet2'];
    $bullet3 = $_POST['bullet3'];
    $bullet4 = $_POST['bullet4'];
    $bullet5 = $_POST['bullet5'];
    $bullet6 = $_POST['bullet6'];
    $bullet7 = $_POST['bullet7'];


    $image1 = $_FILES["image1"];
    $image1_name = $_FILES["image1"]["name"];
    $tmp_image1 = $_FILES['image1']['tmp_name'];
    $size_image1 = $_FILES['image1']['size'];
    $Error_image1 = $_FILES['image1']['error'];
    $type_image1 = $_FILES['image1']['type'];

    $image2 = $_FILES["image2"];
    $image2_name = $_FILES["image2"]["name"];
    $tmp_image2 = $_FILES['image2']['tmp_name'];
    $size_image2= $_FILES['image3']['size'];
    $Error_image2 = $_FILES['image2']['error'];
    $type_image2 = $_FILES['image2']['type'];

    $image3 = $_FILES["image3"];
    $image3_name = $_FILES["image3"]["name"];
    $tmp_image3 = $_FILES['image3']['tmp_name'];
    $size_image3 = $_FILES['image3']['size'];
    $Error_image3 = $_FILES['image3']['error'];
    $type_image3 = $_FILES['image3']['type'];

    $image4 = $_FILES["image4"];
    $image4_name = $_FILES["image4"]["name"];
    $tmp_image4 = $_FILES['image4']['tmp_name'];
    $size_image4 = $_FILES['image4']['size'];
    $Error_image4 = $_FILES['image4']['error'];
    $type_image4 = $_FILES['image4']['type'];

    $image5 = $_FILES["image5"];
    $image5_name = $_FILES["image5"]["name"];
    $tmp_image5 = $_FILES['image5']['tmp_name'];
    $size_image5 = $_FILES['image5']['size'];
    $Error_image5 = $_FILES['image5']['error'];
    $type_image5 = $_FILES['image5']['type'];

    $image6 = $_FILES["image6"];
    $image6_name = $_FILES["image6"]["name"];
    $tmp_image6 = $_FILES['image6']['tmp_name'];
    $size_image6 = $_FILES['image6']['size'];
    $Error_image6 = $_FILES['image6']['error'];
    $type_image6 = $_FILES['image6']['type'];
    
    $image_ext1 = explode(".", "$image1_name");
    $actual_ext1 = strtolower(end($image_ext1));

    $image_ext2 = explode(".", "$image2_name");
    $actual_ext2 = strtolower(end($image_ext2));

    $image_ext3 = explode(".", "$image3_name");
    $actual_ext3 = strtolower(end($image_ext3));

    $image_ext4 = explode(".", "$image4_name");
    $actual_ext4 = strtolower(end($image_ext4));
    $image_ext5 = explode(".", "$image5_name");
    $actual_ext5 = strtolower(end($image_ext5));
    $image_ext6 = explode(".", "$image6_name");
    $actual_ext6 = strtolower(end($image_ext6));



    $allowed = array("jpg", "png", "jpeg", "gif");
    
    if(in_array($actual_ext1, $allowed)){
        if($Error_image1 === 0){
            if($size_image1 < 5000000){
                $fileNameNew1 = uniqid('', true).".".$actual_ext1;
                $path = "upload/".$fileNameNew1;
                $upload1 = move_uploaded_file($tmp_image1, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }


    if(in_array($actual_ext2, $allowed)){
        if($Error_image2 === 0){
            if($size_image2 < 5000000){
                $fileNameNew2 = uniqid('', true).".".$actual_ext2;
                $path = "upload/".$fileNameNew2;
                $upload2 = move_uploaded_file($tmp_image2, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }

    if(in_array($actual_ext3, $allowed)){
        if($Error_image3 === 0){
            if($size_image3 < 5000000){
                $fileNameNew3 = uniqid('', true).".".$actual_ext3;
                $path = "upload/".$fileNameNew3;
                $upload3 = move_uploaded_file($tmp_image3, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }

    if(in_array($actual_ext4, $allowed)){
        if($Error_image4 === 0){
            if($size_image4 < 5000000){
                $fileNameNew4 = uniqid('', true).".".$actual_ext4;
                $path = "upload/".$fileNameNew4;
                $upload4 = move_uploaded_file($tmp_image4, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }

    if(in_array($actual_ext5, $allowed)){
        if($Error_image5 === 0){
            if($size_image5 < 5000000){
                $fileNameNew5 = uniqid('', true).".".$actual_ext5;
                $path = "upload/".$fileNameNew5;
                $upload5 = move_uploaded_file($tmp_image5, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }

    if(in_array($actual_ext6, $allowed)){
        if($Error_image6 === 0){
            if($size_image6 < 5000000){
                $fileNameNew6 = uniqid('', true).".".$actual_ext6;
                $path = "upload/".$fileNameNew6;
                $upload6 = move_uploaded_file($tmp_image6, $path);
            }
            else{
                echo "<script>alert('Your file is too big!')</script>"; 
            }
        }
      
        else{
            echo "<script>alert('There was an error in file')</script>"; 
        }
 
    }
    else{
        echo "<script>alert('File Type Now Allowed')</script>"; 
    }

    if($upload1){
        if($upload2){
            if($upload3){
                if($upload4){
                    if($upload5){
                        if($upload6){
                            $insert_product = "INSERT INTO product (product_name, SellingPrice, MRP, product_description, Category, IsBestSeller, IsNewArrival, Image1, Image2, Image3, Image4, Image5, Image6, features, bullet1, bullet2, bullet3, bullet4, bullet5, bullet6, bullet7) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmt = mysqli_stmt_init($con);
                            if(!mysqli_stmt_prepare($stmt, $insert_product)){
                                echo "SQL Error";
                            }
                            else{
                                mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $name, $price, $mrp, $description, $category, $isbestseller, $isnewarrival, $fileNameNew1, $fileNameNew2, $fileNameNew3, $fileNameNew4, $fileNameNew5, $fileNameNew6, $features, $bullet1, $bullet2, $bullet3, $bullet4, $bullet5, $bullet6, $bullet7);
                                $execute = mysqli_stmt_execute($stmt);
                                if($execute){

                                
                                echo '<script>alert("Upload Successfully")</script>';
                                echo '<script>window.open("index.php", "_self")</script>';
                            }
                            }
                        }
                        else{
                            echo "<script>alert('Somethin went wrong)</script>";
                        }
                    }
                    else{
                        echo "<script>alert('Somethin went wrong)</script>";
                    }

                }
                else{
                    echo "<script>alert('Somethin went wrong)</script>";
                }

            }
            else{
                echo "<script>alert('Somethin went wrong)</script>";
            }
        }
        else{
            echo "<script>alert('Somethin went wrong)</script>";
        }
       
    }   
    else{
        echo "<script>alert('Somethin went wrong)</script>";
    }

    
}
?>
