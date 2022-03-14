<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

$sql = 'select * from products';
$dataList = executeResult($sql);
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
<?php
foreach($dataList as $item) {
	echo '<div class="col-md-3">
			<a href="details.php?id='.$item['id'].'"><img src="'.$item['thumbnail'].'" style="width: 100%">
			<p>'.$item['title'].'</p>
			<p style="color: red">'.$item['price'].' VND</p>
			</a>
		</div>';
}
?>
		</div>
	</div>
</body>
</html>