<?php
require_once('../../../db/dbhelper.php');
require_once('../../../utils/utility.php');

if(!empty($_POST)) {
	$id = getPost('id');
	$query = "delete from product where id = '$id'";
	execute($query);
	
	header('Location: index.php');
	die();
}

$id = getGet('id');
$query = "select * from product where id = '$id'";
$item = executeResult($query, true);
if($item == null) {
	header('Location: index.php');
	die();
}

$baseUrl = '../../';
require_once('../../layouts/header.php');
?>
<div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
<div class="card shadow mb-4">
	<div class="card-body">
	<h4>Are you sure to delete this product?</h4>
	<form method="post">
		<div class="form-group">
			<label>Product Name: <?=$item['title']?></label>
			<input type="text" name="id" value="<?=$item['id']?>" style="display: none;">
		</div>
		<div class="form-group">
			<img src="<?=$item['thumbnail']?>" style="width: 200px;">
		</div>
		<div class="form-group">
			<button class="btn btn-danger">Delete</button>
			<p style="margin-top: 20px">
				<a href="index.php">Back to list</a>
			</p>
		</div>
	</form>

</div></div></div></div>
<?php
require_once('../../layouts/footer.php');
?>