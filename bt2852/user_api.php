<?php
session_start();

if(!empty($_POST)) {
	$action = $_POST['action'];

	switch($action) {
		case 'delete':
			delUser();
		break;
	}
}

function delUser() {
	$index = $_POST['index'];
	array_splice($_SESSION['studentList'], $index, 1);
}