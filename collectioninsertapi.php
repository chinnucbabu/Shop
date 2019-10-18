<?php

if(isset($_POST['products']))
{
    $products=$_POST['products'];
    $brand=$_POST['brand'];
    $model=$_POST['model'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $rating=$_POST['rating'];

   
    
    $servrnm="localhost";
    $usernm="root";
    $password="";
    $dbname="shop";
    
    $con= new mysqli($servrnm,$usernm,$password,$dbname);
    $sql="INSERT INTO `collection`(`products`, `brand`, `model`, `description`, `price`, `rating`) VALUES ('$products','$brand','$model','$description',$price,$rating)";
    $result=$con->query($sql);
    
    if($result===TRUE)
    {
       $r["status"]= "Success";
    }
    else
    {
        $r["status"]= $con->error;
    }
    echo json_encode($r);
    }


?>