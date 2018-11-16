<?php
session_start();
if($_SESSION['username']){
    header("Location: index.php");
    exit();
}
	require_once('connect.php');
	if (isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM users WHERE username='$username' and password = SHA('$password')";
	$result= mysqli_query($connection,$query) or die(mysql_error($connection));
	$cound = mysqli_num_rows($result);

	if($cound == 1) {
		$_SESSION['username'] = $username;
	}else{
		echo "Ошибка авторизации";
	}
}
	If (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		header("Location: index.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/log.style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Авторизация</h2>

			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Войти в систему</button>
		</form>
	</div>
</body>
</html>	