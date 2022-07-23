<?php require '../check_admin_login.php'; ?>
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
	$sql = "select 
	products.*,
	manufactures.name as manufacturer_name
	from products
	join manufactures on products.manufacturer_id = manufactures.id";
	$result = mysqli_query($connect,$sql);
	?>
	<h1>Quan ly san pham</h1>
	<a href="form_insert.php">
		Them
	</a>
	<table border = "1" width="100%">
		<tr>
			<th>Ma</th>
			<th>Ten</th>
			<th>Anh</th>
			<th>Gia</th>
			<th>Ten nha san xuat</th>
			<th>Sua</th>
			<th>Xoa</th>
		</tr>
		<?php foreach ($result as $each): ?>
			<tr>
				<td><?php echo $each['id'] ?></td>
				<td><?php echo $each['name'] ?></td>
				<td>
					<img height="100" src="photos/<?php echo $each['photo'] ?>">
				</td>
				<td><?php echo $each['price'] ?></td>
				<td><?php echo $each['manufacturer_name'] ?></td>
				<td>
					<a href="form_update.php?id=<?php echo $each['id'] ?>">Sua</a>
				</td>
				<td>
					<a href="delete.php?id=<?php echo $each['id'] ?>">Xoa</a>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>