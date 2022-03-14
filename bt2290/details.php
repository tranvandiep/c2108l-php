<?php
session_start();

require_once('utils/utility.php');
require_once('db/dbhelper.php');

$id = getGet('id');
$sql = "select * from products where id = '$id'";
$product = executeResult($sql, true);

if($product == null) {
	header('Location: error.php');
	die();
}

if(!isset($_COOKIE['cart'])) {
	$_COOKIE['cart'] = '[]';
}

if(!empty($_POST)) {
	$num = getPost('num');
	// Giai phap Session - START
	// if(!isset($_SESSION['cart'])) {
	// 	$_SESSION['cart'] = [];
	// }

	// $isFind = false;
	// for ($i=0; $i < count($_SESSION['cart']); $i++) { 
	// 	if($_SESSION['cart'][$i]['id'] == $id) {
	// 		$_SESSION['cart'][$i]['num'] += $num;
	// 		$isFind = true;
	// 		break;
	// 	}
	// }

	// if(!$isFind) {
	// 	$_SESSION['cart'][] = [
	// 		'id' => $id,
	// 		'title' => $product['title'],
	// 		'thumbnail' => $product['thumbnail'],
	// 		'price' => $product['price'],
	// 		'num'=> $num
	// 	];
	// }

	// var_dump($_SESSION['cart']);
	// Giai phap Session - END
	// Giai phap Cookie - START
	addCartItem($id, $num);
	// Giai phap Cookie - END
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
			<div class="col-md-5">
				<img src="<?=$product['thumbnail']?>" style="width: 100%;">
			</div>
			<div class="col-md-7">
				<h3><?=$product['title']?></h3>
				<p style="font-size: 20px; color: red">
					<?=$product['price']?> VND
				</p>
				<!-- <form method="post">
					<p>
						<input type="number" name="id" value="<?=$id?>" class="form-control" style="width: 200px; display: none;">
						<input required type="number" min="1" max="100" name="num" value="1" class="form-control" style="width: 200px">	
					</p>
					<button class="btn btn-success" style="width: 200px">Add to cart</button>
				</form> -->
				<input required type="number" min="1" max="100" name="num" value="1" class="form-control" style="width: 200px">
				<button class="btn btn-success" style="width: 200px" onclick="addToCart(<?=$id?>, )">Add to cart</button>
			</div>
		</div>
	</div>

<script type="text/javascript">
	var cartList = JSON.parse(`<?=$_COOKIE['cart']?>`)

	function addToCart(id) {
		var num = $('[name=num]').val()
		//update cookie
		var isFind = false
		for (var i = 0; i < cartList.length; i++) {
			if(cartList[i].id == id) {
				cartList[i].num = parseInt(cartList[i].num) + parseInt(num)
				isFind = true
				break
			}
		}

		if(!isFind) {
			cartList.push({
				'id': id,
				'num': num
			})
		}

		document.cookie = `cart=${JSON.stringify(cartList)};path=/`
		alert('Them vao gio hang thanh cong!!!')
	}
</script>
</body>
</html>