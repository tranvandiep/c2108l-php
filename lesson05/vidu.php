<?php
session_start();

if(!empty($_POST)) {
	$data = $_POST['data'];
	$action = $_POST['action'];

	if($action == 'save') {
		$_SESSION['data'] = $data; //Them du lieu vao session
	} else if($action == 'del') {
		unset($_SESSION['data']);
		session_regenerate_id();
		session_destroy();
	}
}

// var_dump($_SESSION);
if(isset($_SESSION['data'])) {
	echo 'Data: '.$_SESSION['data'];
}

//LOGIC
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session in PHP</title>

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
			<label>Data Save Session</label>
			<input type="text" name="data" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success" name="action" value="save">Save</button>
			<button class="btn btn-danger" name="action" value="del">Delete</button>
		</div>
	</form>
</div>
</body>
</html>