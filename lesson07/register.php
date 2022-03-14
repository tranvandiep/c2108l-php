<?php
session_start();
$fullname = $email = $pwd = $address = "";

if(!empty($_POST)) {
	// Them thong tin nguoi dung vao CSDL
	require_once('dbhelp.php');

	$fullname = getPost('fullname');
	$email = getPost('email');
	$pwd = getPost('pwd');
	$pwd = getMD5Pwd($pwd);
	//Yeu cau: pwd -> ma hoa -> ma hoa 1 chieu: password -> encrypt -> encrypt code -> ko the dich nguoc lai mat khau goc
	$address = getPost('address');

	// Mo ket noi toi CSDL
	// $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
	// mysqli_set_charset($conn, 'utf8');

	// Thuc hien query -> insert du lieu vao database
	// insert, update, delete
	$query = "insert into Users(fullname, email, password, address) values ('$fullname', '$email', '$pwd', '$address')";
	execute($query);
	// echo $query;
	// mysqli_query($conn, $query);

	// Dong ket noi CSDL
	// mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>

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
	<form method="post">
		<div class="form-group">
			<label>Fullname</label>
			<input required type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input required type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Register</button>
		</div>
	</form>
</div>
</body>
</html>