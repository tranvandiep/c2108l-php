<?php
define('HOST', 'localhost');
define('DATABASE', 'C2108L');
// define('USERNAME', 'dieptv');
// define('PASSWORD', 'F3!KcshQRe8otOjO');
define('USERNAME', 'root');
define('PASSWORD', '');

function getPost($key, $slash = '\'') {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		// $value = Sinh Vien ' ABC ' => Sinh Vien \' ABC \'
		// \\ -> \
		// \' -> '
		// \' (Hieu la: ') -> \\\' (Hieu la: \')
		$value = str_replace($slash, "\\".$slash, $value);
	}

	return $value;
}

function getGet($key, $slash = '\'') {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = str_replace($slash, "\\".$slash, $value);
	}

	return $value;
}

function getMD5Pwd($pwd) {
	$encrypt = md5($pwd);
	//length: 32 ky tu (a-zA-Z0-9)
	//Chu y: md5 -> hack -> Ko an toan nua -> table hash -> Tim ra mat khau goc
	$encrypt = md5('4957sdJKHG987&*^dfhdfd'.$encrypt.'()49085IUYd9854574Jhdh');

	return $encrypt;
}

function validateLogin() {
	//Check theo phien lam viec -> session
	if(isset($_SESSION['currentUser'])) {
		return $_SESSION['currentUser'];
	}

	//Check login tang 2
	$token = '';
	if(isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];
		$query = "select * from Users where token = '$token'";
		$data = executeResult($query, true);

		if($data != null) {
			$_SESSION['currentUser'] = $data;
			return $data;
		}
	}

	//TH nay khong ton tai token trong cookie + phien lam viec cung ko thay
	return null;
}