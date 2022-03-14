<?php
require_once('product.php');

if(!empty($_POST)) {
	$p = new Product();
	$p->processForm();
	$p->insert();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Product Page</title>

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
			<label>Title</label>
			<input required type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label>Thumbnail</label>
			<input required type="text" name="thumbnail" class="form-control">
		</div>
		<div class="form-group">
			<label>Price</label>
			<input required type="num" name="price" class="form-control">
		</div>
		<div class="form-group">
			<label>Content</label>
			<input required type="text" name="content" class="form-control">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Save</button>
		</div>
	</form>
</div>
</body>
</html>