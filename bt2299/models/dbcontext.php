<?php
require_once('config.php');

//create database
function initDB() {
	// Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD);
	mysqli_set_charset($conn, 'utf8');

	// Thuc hien query -> insert du lieu vao database
	// $query = "insert into Users(fullname, email, password, address) values ('$fullname', '$email', '$pwd', '$address')";
	// echo $query;
	mysqli_query($conn, SQL_CREATE_DATABASE);

	// Dong ket noi CSDL
	mysqli_close($conn);
}

/**
 * Ham nay se su dung cho TH cau truy van: insert, update, delete
 */
function execute($query) {
	// Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// Thuc hien query -> insert du lieu vao database
	// $query = "insert into Users(fullname, email, password, address) values ('$fullname', '$email', '$pwd', '$address')";
	// echo $query;
	mysqli_query($conn, $query);

	// Dong ket noi CSDL
	mysqli_close($conn);
}

function executeResult($query, $isSingle = false) {
	// Mo ket noi toi CSDL
	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	mysqli_set_charset($conn, 'utf8');

	// Thuc hien query -> insert du lieu vao database
	// $query = "insert into Users(fullname, email, password, address) values ('$fullname', '$email', '$pwd', '$address')";
	// echo $query;
	// $query = "select * from Users where email = '$email' and password = '$pwd'";
	$resultset = mysqli_query($conn, $query);

	if($isSingle) {
		$data = mysqli_fetch_array($resultset, 1);
	} else {
		$data = [];
		while(($row = mysqli_fetch_array($resultset, 1)) != null) {
			$data[] = $row;
		}
	}

	// Dong ket noi CSDL
	mysqli_close($conn);

	return $data;
}