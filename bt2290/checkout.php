<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

//Giai phap Session - START
// if(!isset($_SESSION['cart'])) {
// 	$_SESSION['cart'] = [];
// }
// GIai phap session - STOP
$cookieCart = getCartFromCookie();

//Giai phap Session - START
// if(!empty($_POST) && isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
// 	$fullname = getPost('fullname');
// 	$email = getPost('email');
// 	$phoneNumber = getPost('phone_number');
// 	$address = getPost('address');
// 	$order_date = date('Y-m-d H:i:s');

// 	$sql = "insert into orders(fullname, email, phone_number, address, order_date) values ('$fullname', '$email', '$phoneNumber', '$address', '$order_date')";
// 	execute($sql);

// 	$sql = "select * from orders where order_date = '$order_date'";
// 	$orderItem = executeResult($sql, true);

// 	$orderId = $orderItem['id'];

// 	foreach($_SESSION['cart'] as $item) {
// 		$product_id = $item['id'];
// 		$num = $item['num'];
// 		$price = $item['price'];
// 		$sql = "insert into order_detail(order_id, product_id, num, price) values ($orderId, '$product_id', '$num', '$price')";
// 		execute($sql);
// 	}

// 	unset($_SESSION['cart']);
// 	header('Location: complete.php');
// 	die();
// }
// Giai Phap session - STOP
if(!empty($_POST) && count($cookieCart) > 0) {
	$fullname = getPost('fullname');
	$email = getPost('email');
	$phoneNumber = getPost('phone_number');
	$address = getPost('address');
	$order_date = date('Y-m-d H:i:s');

	$sql = "insert into orders(fullname, email, phone_number, address, order_date) values ('$fullname', '$email', '$phoneNumber', '$address', '$order_date')";
	execute($sql);

	$sql = "select * from orders where order_date = '$order_date'";
	$orderItem = executeResult($sql, true);

	$orderId = $orderItem['id'];

	foreach($cookieCart as $item) {
		$product_id = $item['id'];
		$num = $item['num'];
		$price = $item['price'];
		$sql = "insert into order_detail(order_id, product_id, num, price) values ($orderId, '$product_id', '$num', '$price')";
		execute($sql);
	}

	emptyCookie();
	header('Location: complete.php');
	die();
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
						<td>'.$item['num'].'</td>
						<td>'.($item['price'] * $item['num']).'</td>
					</tr>';
}
?>
				</tbody>
			</table>

			<form method="post">
				<div class="form-group">
					<label>Fullname: </label>
					<input required type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input required type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone Number: </label>
					<input required type="tel" name="phone_number" class="form-control">
				</div>
				<div class="form-group">
					<label>Address: </label>
					<input required type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success">Checkout Complete</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>