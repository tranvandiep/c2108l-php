<?php
session_start();
if(isset($_SESSION['currentUser'])) {
	header('Location: welcome.php');
	die();
}

$email = $pwd = $msg = "";
if(!empty($_POST)) {
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}

	if(!isset($_SESSION['userList'])) {
		$_SESSION['userList'] = [];
	}

	foreach($_SESSION['userList'] as $item) {
		//Kiem tra xem thong tin tai khoan
		if($item['email'] == $email && $item['pwd'] == $pwd) {
			//login thanh cong
			$_SESSION['currentUser'] = $item;

			header('Location: welcome.php');
			die();
		}
	}

	$msg = ' -> Dang nhap that bai, vui long kiem tra email hoac mat khau';
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
			Dang Nhap <font color="yellow"><?=$msg?></font>
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Email: </label>
					<input required type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Mat khau: </label>
					<input required type="password" name="pwd" class="form-control">
				</div>
				<div class="form-group">
					<p>
						<a href="register.php">Dang ky tai khoan moi</a>
					</p>
					<button class="btn btn-info text-white">Dang Nhap</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>