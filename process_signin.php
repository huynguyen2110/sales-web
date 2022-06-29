<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select * from customers
where email = '$email' and password = '$password'";

require 'admin/connect.php';

$result = mysqli_query($connect,$sql);
$number_rows = mysqli_num_rows($result);


if($number_rows == 1){
	session_start();
	$each = mysqli_fetch_array($result);
	$_SESSION['id'] = $each['id'];
	$_SESSION['name'] = $each['name'];
	header('location:user.php');
	exit();
}

session_start();
$_SESSION['error'] = 'Dang nhap sai r';
header('location:signin.php');


