<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Management Page</title>

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
	<a href="?m=users&action=view"><button class="btn btn-success" style="margin-bottom: 20px">Add User</button></a>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Full Name</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>Address</th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
<?php
foreach($userList as $item) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$item->fullname.'</td>
			<td>'.$item->email.'</td>
			<td>'.$item->birthday.'</td>
			<td>'.$item->address.'</td>
			<td>
				<a href="?m=users&action=edit&id='.$item->id.'"><button class="btn btn-warning">Edit</button></a>
			</td>
			<td>
				<a href="?m=users&action=delete&id='.$item->id.'"><button class="btn btn-danger">Delete</button></a>
			</td>
		</tr>';
}
?>
		</tbody>
	</table>
</div>
</body>
</html>