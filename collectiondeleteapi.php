<?php

if(isset($_POST['id']))
{
  $id=$_POST['id'];
     
$servrnm="localhost";
$usernm="root";
$password="";
$dbname="shop";

$con= new mysqli($servrnm,$usernm,$password,$dbname);

 $checksql="SELECT * FROM `collection` WHERE `id`=$id";
$res=$con->query($checksql);

if($res->num_rows>0)
{

  $r=array();

$sql="DELETE FROM `collection` WHERE `id`=$id";
$result=$con->query($sql);

if($result===TRUE){
    $r["status"]= "Success";
 }
 else{
    $r["status"]= $con->error;
}
}
 else{
     $r["status"]= "invalid id";
 }
 echo json_encode($r);
 }


 else{


  $r["status"]= "invalid data";
  echo json_encode($r);

 }
 




?>