<?php
require_once('form/process_login.php');
// include_once('form/process_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		h2 {
			text-align: center;
		}

		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<h2>Login Form</h2>
	<h2 style="color: red"><?=$msg?></h2>
	<form method="post">
		<div class="form-group">
			<label>Email: </label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Mat Khau: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Dang Nhap</button>
		</div>
	</form>
</div>
</body>
</html>