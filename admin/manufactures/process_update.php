<?php require '../check_super_admin_login.php'; ?>

<?php  
if (empty($_POST['name'])){
	header('location:index.php?error=Phai truyen ma de sua');
	exit();
}
if(empty($_POST['name']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['photo'])){
	header('location:form_update.php?error=Phai dien day du thong tin');
	exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];

require '../connect.php';

$sql = "update manufactures
set
name = '$name',
address = '$address',
phone = '$phone',
photo = '$photo'
where
id = '$id'";

mysqli_query($connect,$sql);
$error = mysqli_error($connect);
mysqli_close($connect);
if(empty($error)){
	header('location:index.php?success=Sua thanh cong');
}else{
	header("location:form_update.php?id=$id&error=Loi truy van");
}