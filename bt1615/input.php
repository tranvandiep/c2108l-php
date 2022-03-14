<?php
// var_dump($_POST);
// var_dump($_GET);
// $_GET = [] -> empty($_GET) -> true
// 			isset($_GET['a']) -> false
// 			isset($_GET['c']) -> false
// $_GET = ["a"=>"asdasgh", "b" => "adsadsad"] -> empty($_GET) -> false
// 			isset($_GET['a']) -> true
// 			isset($_GET['c']) -> false

// Kiem tra xem co du lieu day tu form method: post -> len hay khong
$username = $email = $pwd = "";

if(!empty($_GET)) {
	// Khai bao nhanh 3 bien cung nhan gia tri empty
	if(isset($_GET['uname'])) {
		$username = $_GET['uname'];
	}
	if(isset($_GET['email'])) {
		$email = $_GET['email'];
	}
	if(isset($_GET['password'])) {
		$pwd = $_GET['password'];
	}
}

if(!empty($_POST)) {
	// Khai bao nhanh 3 bien cung nhan gia tri empty
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	if($username == "dieptv" && $pwd == "123") {
		//Chuyen sang trang welcome.php
		header("Location: welcome.php?uname=$username&email=$email&password=$pwd");
		die(); //Ngung tra du lieu ve client
	}
}
// username, email, pwd -> lay dc thong tin tu form gui len.
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>

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
	<div class="card">
		<div class="card-header bg-info text-white">
			Nhap Thong Tin Tai Khoan
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Tai Khoan: </label>
					<input type="text" name="username" class="form-control" placeholder="Nhap ten tai khoan" value="<?=$username?>">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input type="email" name="email" class="form-control" placeholder="Nhap email" value="<?=$email?>">
				</div>
				<div class="form-group">
					<label>Mat Khau: </label>
					<input type="password" name="pwd" class="form-control" placeholder="Nhap mat khau" value="<?=$pwd?>">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Dang Ky</button>
					<button class="btn btn-warning">Xoa Form</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>