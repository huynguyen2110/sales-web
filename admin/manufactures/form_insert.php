<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	include '../menu.php';
?>
<form method="post" action="process_insert.php">
	Ten
	<input type="text" name="name">
	<br>
	Dia chi
	<textarea name="address"></textarea>
	<br>
	Dien thoai
	<input type="text" name="phone">
	<br>
	Anh
	<input type="text" name="photo">
	<br>
	<button>Them</button>
</form>
</body>
</html>