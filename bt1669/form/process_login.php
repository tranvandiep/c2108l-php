<?php
$msg = "";

if(!empty($_POST)) {
	$email = $pwd = "";

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	// Lay noi dung luu tru trong cookie
	$emailCookie = $pwdCookie = "";

	if(isset($_COOKIE['email'])) {
		$emailCookie = $_COOKIE['email'];
	}
	if(isset($_COOKIE['pwd'])) {
		$pwdCookie = $_COOKIE['pwd'];
	}

	if($email == $emailCookie && $pwd == $pwdCookie) {
		//login thanh cong -> chuyen sang trang welcome
		header('Location: welcome.php');
		die();
	}
	$msg = "Danh Nhap That Bai";
}