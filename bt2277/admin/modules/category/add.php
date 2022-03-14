<?php
require_once('../../../db/dbhelper.php');
require_once('../../../utils/utility.php');

if(!empty($_POST)) {
	$name = getPost('name');
	$id = getPost('id');

	if($id > 0) {
		$query = "update category set name = '$name' where id = '$id'";
	} else {
		$query = "insert into category(name) values ('$name')";
	}
	
	execute($query);

	header('Location: index.php');
	die();
}

$id = getGet('id');
$query = "select * from category where id = '$id'";
$item = executeResult($query, true);
$name = $id = '';
if($item != null) {
	$name = $item['name'];
	$id = $item['id'];
}
$baseUrl = '../../';
require_once('../../layouts/header.php');
?>
<div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
<div class="card shadow mb-4">
	<div class="card-body">
	<form method="post">
		<div class="form-group">
			<label>Category Name:</label>
			<input type="text" name="name" class="form-control" value="<?=$name?>">
			<input type="text" name="id" value="<?=$id?>" style="display: none;">
		</div>
		<div class="form-group">
			<button class="btn btn-success">Save</button>
			<button class="btn btn-warning" type="reset">Reset</button>
			<p style="margin-top: 20px">
				<a href="index.php">Back to list</a>
			</p>
		</div>
	</form>

</div></div></div></div>
<?php
require_once('../../layouts/footer.php');
?>