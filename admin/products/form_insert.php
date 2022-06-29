<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
	require '../menu.php'; 
	require '../connect.php';
	$sql = "select * from manufactures";
	$result = mysqli_query($connect,$sql);
	?>
	<form method="post" action="process_insert.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $each['id'] ?>">
		Ten
		<input type="text" name="name">
		<br>
		Anh
		<input type="file" name="photo">
		<br>
		Gia
		<input type="number" name="price">
		<br>
		Mo ta
		<textarea name="description"></textarea>
		<br>
		Nha san xuat
		<select name="manufacturer_id">
			<?php foreach ($result as $each): ?>
				<option value="<?php echo $each['id'] ?>">
					<?php echo $each['name'] ?>	
				</option>
			<?php endforeach ?>
		</select>
		<br>
		<button>Them</button>
	</form>
</body>
</html>