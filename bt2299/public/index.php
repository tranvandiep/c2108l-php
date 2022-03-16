<?php
require_once('../utils/utility.php');

//Khoi tao controller -> Tuong ung vs chuc nang do.

//Su ly cac chuc nang logic -> khoi tao models (list | insert | ...) -> goi view tuong ung vs chuc nang nay -> Hien thi phia nguoi dung

// Quy dinh loi goi toi controller (Controller)
// ?m=users&action=add
$m = getGet('m');
$controller = null;

switch($m) {
	case 'users':
		require_once('../controllers/UsersController.php');
		$controller = new UsersController();
	break;
	case 'notes':
	break;
	default:
		require_once('../controllers/IndexController.php');
		$controller = new IndexController();
	break;
}

if($controller != null) {
	$controller->doRequest();
}