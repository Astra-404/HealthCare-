<?php


function getProduct(){
    global $con;
    $sql = "select * from product";
    $run = mysqli_query($con, $sql);
                                 
    while($row=mysqli_fetch_array($run)){     
        $name = row['product_name'];
       
}
}