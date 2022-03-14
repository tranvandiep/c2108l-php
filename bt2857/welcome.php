<?php
session_start();
if(!isset($_SESSION['currentUser'])) {
	header('Location: login.php');
	die();
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		h2 {
			text-align: center;
		}

		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info text-white">
			Xin chao ban toi trang quan ly tai khoan nguoi dung <a href="logout.php" style="color: yellow;">Thoat</a>
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<tr>
					<td>Ho & ten: </td>
					<td><?=$_SESSION['currentUser']['fullname']?></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><?=$_SESSION['currentUser']['email']?></td>
				</tr>
				<tr>
					<td>Dia chi: </td>
					<td><?=$_SESSION['currentUser']['address']?></td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>