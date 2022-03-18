<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit User Page</title>

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
	<form method="post" action="?m=users&action=post">
		<div class="form-group">
			<label>Full Name:</label>
			<input required type="text" name="id" class="form-control" value="<?=$user->id?>" style="display: none;">
			<input required type="text" name="fullname" class="form-control" value="<?=$user->fullname?>">
		</div>
		<div class="form-group">
			<label>Email: </label>
			<input required type="text" name="email" class="form-control" value="<?=$user->email?>">
		</div>
		<div class="form-group">
			<label>Birthday: </label>
			<input required type="date" name="birthday" class="form-control" value="<?=$user->birthday?>">
		</div>
		<div class="form-group">
			<label>Address</label>
			<input required type="text" name="address" class="form-control" value="<?=$user->address?>">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Register</button>
		</div>
	</form>
</div>
</body>
</html>