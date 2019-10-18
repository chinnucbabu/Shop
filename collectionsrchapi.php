<?php
if(isset($_POST['model']))
{
$model=$_POST['model'];

$servname="localhost";
$username="root";
$password="";
$dbname="shop";


$connection=new mysqli($servname,$username,$password,$dbname);
$sql="SELECT `id`, `products`, `brand`, `model`, `description`, `price`, `rating` FROM `collection` WHERE `model` like '%$model%'";
$result=$connection->query($sql);

if($result->num_rows>0)
{
  $r=array();
  $r["status"]="success";
while($row=$result->fetch_assoc() )
{
     $r["datas"][]=$row;

    
}
  echo json_encode($r);
}
else{
    echo "Invalid  model no";
}


}
?>