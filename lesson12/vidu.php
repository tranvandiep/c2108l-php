<?php
session_start();

$fullname = $email = $password = "";

var_dump($_SESSION);

if(!empty($_POST)) {
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$action = $_POST['action'];


	if($action == 'add') {
		$_SESSION['std'] = [
			'fullname' => $fullname,
			'email' => $email,
			'pwd' => $password
		];
		//Su dung cookie de luu
		// setcookie('fullname', $fullname, time() + 864000, '/');
		// setcookie('email', $email, time() + 864000, '/');
		// setcookie('password', $password, time() + 864000, '/');
	} else if($action == 'delete') {
		//Su dung cookie de luu
		// setcookie('fullname', '', time(), '/');
		// setcookie('email', '', time(), '/');
		// setcookie('password', '', time(), '/');
		unset($_SESSION['std']);
		// session_destroy();
	}
}
// cookie (1 tuan, 1 thang, 1 nam, ...) + session + database -> authentication -> OK
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
			<label>Full Name: </label>
			<input type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Pwd: </label>
			<input type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success" name="action" value="add">Register</button>
			<button class="btn btn-danger" name="action" value="delete">Delete</button>
		</div>
	</form>
</div>
</body>
</html>