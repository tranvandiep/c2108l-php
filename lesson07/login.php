<?php
session_start();
require_once('dbhelp.php');
// if(isset($_SESSION['currentUser'])) {
// 	header('Location: list.php');
// 	die();
// }
$user = validateLogin();
if($user != null) {
	header('Location: list.php');
	die();
}

$msg = $email = $pwd = "";

if(!empty($_POST)) {
	// Them thong tin nguoi dung vao CSDL
	$email = getPost('email');
	$pwd = getPost('pwd');
	$pwd = getMD5Pwd($pwd);

	// Mo ket noi toi CSDL
	// $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	// mysqli_set_charset($conn, 'utf8');

	// Thuc hien query -> insert du lieu vao database
	// $query = "insert into Users(fullname, email, password, address) values ('$fullname', '$email', '$pwd', '$address')";
	// echo $query;
	$query = "select * from Users where email = '$email' and password = '$pwd'";
	$data = executeResult($query, true);
	// $resultset = mysqli_query($conn, $query);

	// $data = [];
	// while(($row = mysqli_fetch_array($resultset, 1)) != null) {
	// 	$data[] = $row;
	// }

	// Dong ket noi CSDL
	// mysqli_close($conn);

	if($data != null) {
		//login thanh cong
		$_SESSION['currentUser'] = $data;
		$token = getMD5Pwd($data['email'].time());

		//Luu token vao database
		$query = "update Users set token = '$token' where id = ".$data['id'];
		execute($query);

		//Luu vao cookie
		setcookie('token', $token, time() + 7 * 24 * 60 * 60, '/');

		header('Location: list.php');
		die();
	} else {
		$msg = 'Danh Nhap That Bai!';
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

	<style type="text/css">
		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<h1 style="text-align: center; color: red;"><?=$msg?></h1>
	<form method="post">
		<div class="form-group">
			<label>Email</label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Login</button>
		</div>
	</form>
</div>
</body>
</html>