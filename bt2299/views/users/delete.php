<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirm Delete Page</title>

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
	<h2>Are you sure to delete this user?</h2>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
<?php
	echo '<tr>
			<td>'.$user->fullname.'</td>
			<td>'.$user->email.'</td>
			<td>'.$user->birthday.'</td>
			<td>'.$user->address.'</td>
		</tr>';
?>
		</tbody>
	</table>
	<form method="post" action="?m=users&action=confirm-delete">
		<input type="text" name="id" style="display: none;" value="<?=$user->id?>">
		<button class="btn btn-danger">Confirm Delete</button>
	</form>
</div>
</body>
</html>