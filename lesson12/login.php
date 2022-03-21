<?php
session_start();
if(isset($_SESSION['user'])) {
	header('Location: welcome.php');
	die();
}

	require_once('dbhelper.php');
	
$token = $_COOKIE['token'];
$sql = "select * from users where token = '$token'";
$data = executeResult($sql, true);
if($data != null) {
	$_SESSION['user'] = $data;
	header('Location: welcome.php');
	die();
}

if(!empty($_POST)) {

	$email = $_POST['email'];
	$pwd = $_POST['pwd'];

	$sql = "select * from users where email = '$email' and password = '$pwd'";
	$data = executeResult($sql, true);

	if($data != null) {
		//login thanh cong
		$_SESSION['user'] = $data;
		$token = time().md5($data['email']);
		//Luu xuong cookie
		setcookie('token', $token, time() + 7 * 86400, '/');

		//Luu xuong server
		$sql = "update users set token = '$token' where id = ".$data['id'];
		execute($sql);
		echo 'Login thanh cong';
	} else {
		echo 'Fail';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Overview PHP basic</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Email: </label>
			<input required type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Pwd: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Login</button>
		</div>
	</form>
</div>
</body>
</html>