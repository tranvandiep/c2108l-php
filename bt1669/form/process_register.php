<?php
$fullname = $email = $address = $pwd = "";
if(!empty($_POST)) {
	if(isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['address'])) {
		$address = $_POST['address'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	setcookie('fullname', $fullname, time() + 24 * 60 * 60, '/');
	setcookie('email', $email, time() + 24 * 60 * 60, '/');
	setcookie('address', $address, time() + 24 * 60 * 60, '/');
	setcookie('pwd', $pwd, time() + 24 * 60 * 60, '/');

	// Tu dong chuyen sang trang login.php
	header('Location: login.php');
	die();
}