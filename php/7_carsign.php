<?php
header('Content-Type:application/json;charset=UTF8');
$conn = mysqli_connect('127.0.0.1','root','', 'huimaiche', 3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="SELECT * FROM carsign";
$result=mysqli_query($conn,$sql);

$output=[];
while(($row=mysqli_fetch_assoc($result))!=null){
	$output[]=$row;
}
echo json_encode($output);