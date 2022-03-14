<?php
$emailLogin = $pwdLogin = "";

if(!empty($_POST)) {
	if(isset($_POST['email-login'])) {
		$emailLogin = $_POST['email-login'];
	}
	if(isset($_POST['pwd-login'])) {
		$pwdLogin = $_POST['pwd-login'];
	}

	$emailCookie = $pwdCookie = "";
	if(isset($_COOKIE['email'])) {
		$emailCookie = $_COOKIE['email'];
	}
	if(isset($_COOKIE['pwd'])) {
		$pwdCookie = $_COOKIE['pwd'];
	}

	// so sanh du lieu tu form gui len & cookie
	if($emailCookie == $emailLogin && $pwdLogin == $pwdCookie) {
		echo 'Dang nhap thanh cong';
	} else {
		echo 'Danh nhap that bai';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email-login" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="pwd-login" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Login</button>
		</div>
	</form>
</div>
</body>
</html>