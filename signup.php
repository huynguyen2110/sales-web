<?php  
	session_start();
	if(isset($_SESSION['error'])){
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="process_signup.php" method="post">
	Ten
	<input type="text" name="name">
	<br>
	Email
	<input type="email" name="email">
	<br>
	Mat khau
	<input type="password" name="password">
	<br>
	Sdt
	<input type="text" name="phone_number">
	<br>
	Dia chi
	<input type="text" name="address">
	<br>
	<button>Dang ki</button>
</form>
</body>
</html>

