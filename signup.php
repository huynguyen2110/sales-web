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
<form method="post" action="process_signup.php">
	<h1>Form dang ki</h1>
	Ten
	<input type="text" name="name">
	<br>
	Email
	<input type="email" name="email">
	<br>
	Mat khau
	<input type="password" name="password">
	<br>
	<button>Dang ki</button>
</form>
</body>
</html>