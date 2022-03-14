<?php
if(!empty($_POST)) {
	// Kiem tra $_POST co du lieu -> thuc thi code o day
	$email = $pwd = "";

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	echo $email.'-'.$pwd;
}
if(!empty($_GET)) {
	// Kiem tra $_GET co du lieu -> thuc thi code o day
	$email = $pwd = "";

	if(isset($_GET['email'])) {
		$email = $_GET['email'];
	}
	if(isset($_GET['pwd'])) {
		$pwd = $_GET['pwd'];
	}

	echo $email.'-'.$pwd;
}
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_REQUEST || $_GET + $_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nhap thong tin sinh vien</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<!-- method: get -> $_GET, method: post -> $_POST -->
	<form method="post">
		<div class="form-group">
			<label>Email: </label>
			<!-- name: email -> key & value: noi dung nhap vao form -->
			<input type="text" name="email" placeholder="Enter email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password: </label>
			<!-- name: pwd -> key & value: noi dung nhap vao form -->
			<input type="password" name="pwd" placeholder="Enter pwd" class="form-control">

			<!-- TH nay -> khong co name -> du lieu trong input se ko dc day len Server -->
			<!-- <input type="text" placeholder="Test" placeholder="Enter test"> -->
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Login</button>
			<button class="btn btn-warning" type="reset">Reset</button>
		</div>
	</form>
</div>
</body>
</html>