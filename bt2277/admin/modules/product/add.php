<?php
require_once('../../../db/dbhelper.php');
require_once('../../../utils/utility.php');

if(!empty($_POST)) {
	$title = getPost('title');
	$thumbnail = getPost('thumbnail');
	$category_id = getPost('category_id');
	$content = getPost('content');
	$price = getPost('price');
	$id = getPost('id');

	$updatedAt = $createdAt = date('Y-m-d H:i:s');

	if($id > 0) {
		$query = "update product set title = '$title', thumbnail = '$thumbnail', content = '$content', price = '$price', updated_at = '$updatedAt', category_id = '$category_id' where id = '$id'";
	} else {
		$query = "insert into product(title, thumbnail, content, price, category_id, updated_at, created_at) values ('$title', '$thumbnail', '$content', '$price', '$category_id', '$updatedAt', '$createdAt')";
	}
	
	execute($query);

	header('Location: index.php');
	die();
}

$categoryList = executeResult('select * from category');

$id = getGet('id');
$query = "select * from product where id = '$id'";
$item = executeResult($query, true);
$title = $id = $content = $price = $thumbnail = $category_id = '';
if($item != null) {
	$title = $item['title'];
	$content = $item['content'];
	$category_id = $item['category_id'];
	$price = $item['price'];
	$thumbnail = $item['thumbnail'];
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
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label>Title:</label>
					<input type="text" name="title" class="form-control" value="<?=$title?>">
					<input type="text" name="id" value="<?=$id?>" style="display: none;">
				</div>
				<div class="form-group">
					<label>Content:</label>
					<textarea class="form-control" rows="10" name="content"><?=$content?></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Save</button>
					<button class="btn btn-warning" type="reset">Reset</button>
					<p style="margin-top: 20px">
						<a href="index.php">Back to list</a>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label>Thumbnail:</label>
					<input type="text" name="thumbnail" class="form-control" value="<?=$thumbnail?>">
					<p>
						<img src="<?=$thumbnail?>" id="thumbnail_img" style="width: 200px;">
					</p>
				</div>
				<div class="form-group">
					<label>Category Name:</label>
					<select class="form-control" name="category_id">
						<option value="">-- Select --</option>
						<?php
							foreach($categoryList as $item) {
								if($item['id'] == $category_id) {
									echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
								} else {
									echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
								}
							}
						?>
					</select>
				</div>
				<div class="form-group">
					<label>Price:</label>
					<input type="number" name="price" class="form-control" value="<?=$price?>">
				</div>
			</div>
		</div>
	</form>

</div></div></div></div>
<?php
require_once('../../layouts/footer.php');
?>

<script type="text/javascript">
	$(function() {
		$('[name=thumbnail]').change(function() {
			// $('#thumbnail_img').attr('src', $('[name=thumbnail]').val())
			$('#thumbnail_img').attr('src', $(this).val())
		})
	})
</script>