<?php
// var_dump($_POST);
// var_dump($_GET);
// http://localhost:82/c2108l/bt1615/welcome.php?uname=dieptv&email=tranvandiep.it@gmail.com&password=123
// URL -> chua du lieu uname, email, passowrd -> GET
$uname = $email = $password = "";
if(!empty($_GET)) {
	if(isset($_GET['uname'])) {
		$uname = $_GET['uname'];
	}
	if(isset($_GET['email'])) {
		$email = $_GET['email'];
	}
	if(isset($_GET['password'])) {
		$password = $_GET['password'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th style="width: 200px">Ten Tai Khoan: </th>
			<td><?php echo $uname; ?></td>
		</tr>
		<tr>
			<th>Email: </th>
			<td><?=$email?></td>
		</tr>
		<tr>
			<th>Mat Khau: </th>
			<td>
				<?=$password?>
				<!-- Build URL -> gui du lieu sang trang input.php bang giao thu GET -->
				<!-- POST & GET -->
				<a href="input.php?uname=<?=$uname?>&email=<?=$email?>&password=<?=$password?>">
					<button class="btn btn-warning btn-sm">Edit</button>
				</a>
			</td>
		</tr>
	</table>
</div>
</body>
</html>