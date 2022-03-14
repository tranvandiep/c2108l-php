<?php
require_once('form/process_register.php');
// include_once('form/process_register.php');
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
	<h2>Register Form</h2>
	<form method="post" onsubmit="return validateData();">
		<div class="form-group">
			<label>Ho & Ten: </label>
			<input required type="text" name="fullname" class="form-control">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input required type="email" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label>Dia Chi: </label>
			<input required type="text" name="address" class="form-control">
		</div>
		<div class="form-group">
			<label>Mat Khau: </label>
			<input required type="password" name="pwd" class="form-control">
		</div>
		<div class="form-group">
			<label>Xac Thuc Mat Khau: </label>
			<input required type="password" name="confirmPwd" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Dang Ky</button>
			<button class="btn btn-warning" type="reset">Nhap Lai</button>
		</div>
	</form>
</div>

<script type="text/javascript">
	function validateData() {
		if($('[name=pwd]').val() != $('[name=confirmPwd]').val()) {
			alert('Mat khau khong khop, vui long kiem tra thong tin nhap')
			return false
		}

		return true
	}
</script>
</body>
</html>