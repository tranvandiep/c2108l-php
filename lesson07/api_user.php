<?php
session_start();
require_once('dbhelp.php');

$action = getPost('action');

switch ($action) {
	case 'delete':
		deleteUserFromDB();
		break;
}

function deleteUserFromDB() {
	$id = getPost('id');

	$query = "delete from Users where id = '$id'";
	execute($query);
}