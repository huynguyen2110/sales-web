<?php require '../check_super_admin_login.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Day la giao dien nha san xuat
<a href="form_insert.php">
	Them
</a>
<?php  
	include '../menu.php';
?>
<?php  
require '../connect.php';
$sql = "select * from manufactures";
$result = mysqli_query($connect,$sql);
?>
<table border="1" width="100%">
	<tr>
		<th>Ma</th>
		<th>Ten</th>
		<th>Dia chi</th>
		<th>Dien thoai</th>
		<th>Anh</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	<?php foreach ($result as $each): ?>
		<tr>
			<td><?php echo $each['id'] ?></td>
			<td><?php echo $each['name'] ?></td>
			<td><?php echo $each['address'] ?></td>
			<td><?php echo $each['phone'] ?></td>
			<td>
				<img height="100" src="<?php echo $each['photo'] ?>">
			</td>
			<td>
				<a href="form_update.php?id=<?php echo $each['id'] ?>">
					Sua
				</a>
			</td>
			<td>
				<a href="delete.php?id=<?php echo $each['id'] ?>">
					Xoa
				</a>
			</td>
		</tr>
	<?php endforeach ?>
</table>
</body>
</html>