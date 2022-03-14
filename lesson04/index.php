<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie in PHP</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h1 style="text-align: center;">Cookie in PHP</h1>

<?php
	// <!-- Code PHP: Them key = username -> value: TRAN VAN A -->
	setcookie('username', 'TRAN VAN A', time() + 1000, '/');
	// setcookie('address', 'Ha Noi', time() + 7 * 24 * 60 * 60, '/');

	// Sua du lieu cookie -> address = Nam Dinh
	// setcookie('address', 'Nam Dinh', time() + 7 * 24 * 60 * 60, '/');

	// Xoa key trong cookie thi lam the nao
	// setcookie('address', '', time(), '/');

	// Lay noi dung du lieu tu cookie
	// var_dump($_COOKIE); //Lam viec nhu $_GET | $_POST
	// $username = $address = "";

	// if(isset($_COOKIE['username'])) {
	// 	$username = $_COOKIE['username'];
	// }
	
	// if(isset($_COOKIE['address'])) {
	// 	$address = $_COOKIE['address'];
	// }

	// echo $username.'-'.$address;
	var_dump($_COOKIE);

	// empty => $v is empty (true | false)
	// empty => $arr chua phan tu hay ko (false | true)
	// isset => su kiem tra 1 key co ton tai trong mang ko
?>
<!-- BAI TOAN -->
<!-- Tao form dang ky tai khoan nguoi (email, pwd, fullname) -> save cookie -->
<!-- 
	Tao form login (email & pwd) -> nhan submit -> doc noi dung -> kiem tra xem thong tin co trung vs du lieu cookie hay ko 
		-> trung -> login thanh cong 
		-> ko -> login that bai
-->
</body>
</html>