

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php  
	session_start();
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}

?>
<form method="post" action="process_signin.php">
	Email
	<input type="email" name="email">
	<br>
	Mat khau
	<input type="password" name="password">
	<br>
	<button>Dang nhap</button>
</form>

</body>
</html>