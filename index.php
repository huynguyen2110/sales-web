
<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<title></title>
	<style type="text/css">
		#tong{
			width: 100%;
			height: 1500px;
			background: white;
		}
		#tren{
			width: 100%;
			height: 7%;
			background: pink;
		}
		#giua{
			width: 100%;
			height: 70%;
			background: white;
		}
		#duoi{
			width: 100%;
			height: 23%;
			background: purple;
		}
	</style>
</head>
<body>
<div id = "tong">
	<?php include 'menu.php' ?>
	<?php include 'slide_show.php' ?>	
	<?php include 'products.php' ?>
	<?php include 'footer.php' ?>
</div>
