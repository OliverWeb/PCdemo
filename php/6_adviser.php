<?php
header('Content-Type:application/json;charset=UTF8');
$conn = mysqli_connect('127.0.0.1','root','', 'huimaiche', 3306);
$sql="set names UTF8";
mysqli_query($conn,$sql);
$sql="select * from adviser";
$result=mysqli_query($conn,$sql);

$output=[];
while($row=mysqli_fetch_assoc($result)){
	$output[]=$row;
}
echo json_encode($output);