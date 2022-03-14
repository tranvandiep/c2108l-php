<?php
require_once('../../../db/dbhelper.php');
require_once('../../../utils/utility.php');

$query = "select * from category";
$dataList = executeResult($query);

$baseUrl = '../../';
require_once('../../layouts/header.php');
?>
<div class="row">

<!-- Area Chart -->
<div class="col-xl-12 col-lg-12">
<div class="card shadow mb-4">
	<div class="card-body">
	<a href="add.php"><button class="btn btn-success" style="margin-bottom: 20px">Add Category</button></a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Category Name</th>
				<th style="width: 60px;"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
<?php
$index = 0;
foreach($dataList as $item) {
	echo '<tr>
			<td>'.(++$index).'</td>
			<td>'.$item['name'].'</td>
			<td style="width: 60px;">
				<a href="add.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a>
			</td>
			<td style="width: 60px">
				<a href="delete.php?id='.$item['id'].'"><button class="btn btn-danger">Delete</button></a>
			</td>
		</tr>';
}
?>
		</tbody>
	</table>
</div></div></div></div>
<?php
require_once('../../layouts/footer.php');
?>