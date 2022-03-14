<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

//giai phap Session - START
// if(!isset($_SESSION['cart'])) {
// 	$_SESSION['cart'] = [];
// }
//giai phap Session - END

$cookieCart = getCartFromCookie();

if(!empty($_POST)) {
	$id = getPost('id');

	// Xoa 1 san pham khoi gio hang - giai phap Session - START
	// for ($i=0; $i < count($_SESSION['cart']); $i++) { 
	// 	if($_SESSION['cart'][$i]['id'] == $id) {
	// 		array_splice($_SESSION['cart'], $i, 1);
	// 		break;
	// 	}
	// }
	// Xoa 1 san pham khoi gio hang - giai phap Session - END
	// Giai phap su dung cookie - START
	removeCartItem($id);
	// Giai phap su dung cookie - END
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Init Database</title>

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
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="init.php">Init DB</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="cart.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li>
    </ul>
  </div>
</nav>
	<div class="container" style="padding: 20px;">
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Thumbnail</th>
						<th>Title</th>
						<th>Price</th>
						<th>Num</th>
						<th>Total</th>
						<th style="width: 60px"></th>
					</tr>
				</thead>
				<tbody>
<?php
$index = 0;
// foreach($_SESSION['cart'] as $item) {
foreach($cookieCart as $item) {
	echo '<tr>
						<td>'.(++$index).'</td>
						<td><img src="'.$item['thumbnail'].'" style="width: 200px"/></td>
						<td>'.$item['title'].'</td>
						<td>'.$item['price'].'</td>
						<td>
							<input type="number" min="0" max="100" value="'.$item['num'].'" class="form-control" style="width: 80px"/>
							</td>
						<td>
							'.($item['price'] * $item['num']).'
						</td>
						<td>
							<form method="post">
								<input type="number" name="id" value="'.$item['id'].'" class="form-control" style="width: 200px; display: none;">
								<button class="btn btn-danger">Delete</button>
							</form>
						</td>
					</tr>';
}
?>
				</tbody>
			</table>

			<a href="checkout.php"><button class="btn btn-warning">Checkout</button></a>
		</div>
	</div>
</body>
</html>