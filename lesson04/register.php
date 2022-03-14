<?php
$fullname = $email = $pwd = "";

if(!empty($_POST)) {
	if(isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	setcookie("fullname", $fullname, time() + 24 * 60 * 60, "/");
	setcookie("email", $email, time() + 24 * 60 * 60, "/");
	setcookie("pwd", $pwd, time() + 24 * 60 * 60, "/");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Fullname</label>
			<input type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Save</button>
		</div>
	</form>
</div>
</body>
</html>