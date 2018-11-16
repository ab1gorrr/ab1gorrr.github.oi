<?php
session_start();
if(!$_SESSION['username']){
	header("Location: index.php");
	exit;
}
require_once('connect.php');
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['lvl_acc'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$lvl_acc = $_POST['lvl_acc'];

	$query = "INSERT INTO users (username, password, lvl_acc	) VALUES ('$username', SHA('$password'), '$lvl_acc')";
	$result = mysqli_query($connetion, $query);

	if($result){
		$smsg = "Регистрация завершена, аккаунт готов к использованию";
	}else
	{
		$fsmsg = "Ошибка";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Регистрация</h2>
			<?php if(isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php } ?>
			<?php if(isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div> <?php } ?>
			<input type="text" name="username" class="form-control" placeholder="Username" required>
			<input type="password" name="password" class="form-control" placeholder="Password" required>
			<input type="text" name="lvl_acc" class="form-control" placeholder="Access level" required> 
			<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		</form>
	</div>
</body>
</html>	