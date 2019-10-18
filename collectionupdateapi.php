<?php

if(isset($_POST['products']))
{
    $id=$_POST['id'];
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
$sql="UPDATE `collection` SET `id`=$id,`products`='$products',`brand`='$brand',`model`='$model',`description`='$description',`price`=$price,`rating`=$rating WHERE `id`=$id";
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