<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	if(empty($_GET['id'])){
		header('location:index.php?error=Phai truyen ma de sua');
	}
	$id = $_GET['id'];
	include '../menu.php';
	require '../connect.php';
	$sql = "select * from manufactures
	where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
?>


<form method="post" action="process_update.php">
	<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
	Ten
	<input type="text" name="name" value="<?php echo $each['name'] ?>">
	<br>
	Dia chi
	<textarea name="address"><?php echo $each['address'] ?></textarea>
	<br>
	Dien thoai
	<input type="text" name="phone" value="<?php echo $each['phone'] ?>">
	<br>
	Anh
	<input type="text" name="photo" value="<?php echo $each['photo'] ?>">
	<br>
	<button>Sua</button>
</form>
</body>
</html>
