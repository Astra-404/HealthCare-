<?php
include("includes/db.php");
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
<body>
<div class="container" style="margin-top:40px;">
    <p class="text-center" style="font-size: 30px; font-weight: 500; margin-left:55px; ">Add Your Category</p>
        <form method="post" style="padding:40px 80px;" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                <div class="col-sm-10">
                <input type="text" name="name" class="form-control"  placeholder = "Category Name" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Upload Image</label>
                <div class="col-sm-10">
                <input type="file" name="image" class=""  placeholder = "Upload Image" required>
                </div>
            </div>

            <div class="row justify-content-center">
            
                <input type="submit" class="btn btn-primary text-center btn-lg submit" name="submit">
              </div>
   
        </form>
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
    
    

    $categody_image = $_FILES["image"];
    $image_name = $_FILES["image"]["name"];
    $tmp_image= $_FILES['image']['tmp_name'];
    $size_image= $_FILES['image']['size'];
    $Error_image = $_FILES['image']['error'];
    $type_image = $_FILES['image']['type'];

    $image_ext = explode(".", "$image_name");
    $actual_ext = strtolower(end($image_ext));

    $allowed = array("jpg", "png", "jpeg", "gif");

    if(in_array($actual_ext, $allowed)){
        if($Error_image === 0){
            if($size_image < 5000000){
                $fileNameNew = uniqid('', true).".".$actual_ext;
                $path = "category_image/".$fileNameNew;
                $upload = move_uploaded_file($tmp_image, $path);
                if($upload){
                    $insert_category = "INSERT INTO category (category_name, category_image) values (?, ?)";
                    $stmt = mysqli_stmt_init($con);
                    if(!mysqli_stmt_prepare($stmt, $insert_category)){
                        echo "SQL Error";
                    }
                    else{
                        mysqli_stmt_bind_param($stmt, "ss", $name, $fileNameNew);
                        mysqli_stmt_execute($stmt);
    
                        echo '<script>alert("Upload Successfully")</script>';
                        echo '<script>window.open("index.html", "_self")</script>';
                    }
                }
                else{
                    echo "<script>alert('Something Went Wrong')</script>";
                }
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
}