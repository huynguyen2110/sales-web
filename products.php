<style type="text/css">
	.tung_san_pham{
		width: 33%;
		height: 260px;
		border: 1px solid black;
		float: left;
	}
</style>


<?php 
require 'admin/connect.php';
$sql = "select * from products";
$result = mysqli_query($connect,$sql);
?>
<div id="giua">
	<?php foreach ($result as $each): ?>
		<div class="tung_san_pham">
			<h1>
				<?php echo $each['name'] ?>
			</h1>
			<img src="admin/products/photos/<?php echo $each['photo'] ?>" height = '100'>
			<p><?php echo $each['price'] ?>$</p>
			<a href="product.php?id=<?php echo $each['id'] ?>">
				Xem chi tiet
			</a>
		</div>
	<?php endforeach ?>

</div>