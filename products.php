<style type="text/css">
	.tung_san_pham{
		width: 33%;
		height: 290px;
		border: 1px solid black;
		float: left;
	}
	.center-block {
	display: block;
	margin-right: auto;
	margin-left: auto;
	}
</style>


<?php 
require 'admin/connect.php';


if(isset($_GET['page'])){
	$page = $_GET['page'];
}else{
	$page = 1;
}
$search = '';
if(isset($_GET['search'])){
	$search = $_GET['search'];
}

$sql = "select count(*) from products
where name like '%$search%'";
$result = mysqli_query($connect,$sql);
$array_number_products = mysqli_fetch_array($result);
$number_products = $array_number_products['count(*)'];

$products_per_page  = 6;
$number_pages= ceil($number_products/$products_per_page);
$offset = $products_per_page * ($page - 1);



$sql = "select * from products
where name like '%$search%'
limit $products_per_page offset $offset ";

$result = mysqli_query($connect,$sql);


?>
<div>	
	<caption>
		<form>
			<input class="center-block" type="search" name="search" value="<?php echo $search ?>">
		</form>
	</caption>	
</div>

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
			<br>
			<?php if(!empty($_SESSION['id'])){ ?>
				<br>
				<button 
					data-id=<?php echo $each['id'] ?>
					class = 'btn-add-to-cart'
				>
					Them vao gio hang
				</button>		
			<?php } ?>
		</div>
	<?php endforeach ?>

</div>

<?php for($i = 1; $i <= $number_pages; $i++){ ?>
	<a href="?page=<?php echo $i ?>&search=<?php echo $search ?>">
		<?php echo $i ?>
	</a>
<?php } ?>

<?php mysqli_close($connect); ?>
