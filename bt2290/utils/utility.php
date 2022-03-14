<?php
function getPost($key, $slash = '\'') {
	$value = '';
	if(isset($_POST[$key])) {
		$value = $_POST[$key];
		// $value = Sinh Vien ' ABC ' => Sinh Vien \' ABC \'
		// \\ -> \
		// \' -> '
		// \' (Hieu la: ') -> \\\' (Hieu la: \')
		$value = str_replace($slash, "\\".$slash, $value);
	}

	return $value;
}

function getGet($key, $slash = '\'') {
	$value = '';
	if(isset($_GET[$key])) {
		$value = $_GET[$key];
		$value = str_replace($slash, "\\".$slash, $value);
	}

	return $value;
}

define('CART_TIME_LINE', 7*24*60*60);

function getCartFromCookie() {
	$cookieCart = [];
	if(isset($_COOKIE['cart'])) {
		$cookieCart = json_decode($_COOKIE['cart'], true); //[{"id":1, "num": 2},{...},...]

		//select * from products where id in (1, 2, 6, 5)
		if(count($cookieCart) > 0) {
			$idList = [];
			foreach($cookieCart as $item) {
				$idList[] = $item['id'];
			}
			$idList = implode(',', $idList);

			$query = "select * from products where id in ($idList)";

			$result = executeResult($query); //missing: num

			for ($i=0; $i < count($result); $i++) {
				for ($j=0; $j < count($cookieCart); $j++) {
					if($result[$i]['id'] == $cookieCart[$j]['id']) {
						$result[$i]['num'] = $cookieCart[$j]['num'];
						break;
					}
				}
			}

			// Xong phan mang
			$cookieCart = $result;
		}
	}

	// $_ENV -> chuyen du lieu trong request
	$_ENV['cart'] = $cookieCart;
	return $cookieCart;
}

function removeCartItem($cookieCart, $id) {
	if(isset($_ENV['cart'])) {
		$cookieCart = $_ENV['cart'];
	} else {
		$cookieCart = getCartFromCookie();
	}

	for ($i=0; $i < count($cookieCart); $i++) { 
		if($cookieCart[$i]['id'] == $id) {
			array_splice($cookieCart, $i, 1);
			break;
		}
	}
	setcookie('cart', json_encode($cookieCart), time() + CART_TIME_LINE, '/');
}

//$num > 0 -> OK & $num < 0
function addCartItem($id, $num) {
	$cart = [];
	if(isset($_COOKIE['cart'])) {
		$cart = json_decode($_COOKIE['cart'], true);
	}
	$isFind = false;
	for ($i=0; $i < count($cart); $i++) {
		if($cart[$i]['id'] == $id) {
			$cart[$i]['num'] += $num;
			if($cart[$i]['num'] <= 0) {
				//Xoa san pham nay khoi cart
				array_splice($cart, $i, 1);
			}

			$isFind = true;
			break;
		}
	}
	if(!$isFind && $num > 0) {
		$cart[] = [
			'id' => $id,
			'num' => $num
		];
	}

	setcookie('cart', json_encode($cart), time() + CART_TIME_LINE, '/');
}

function emptyCookie() {
	setcookie('cart', '', time(), '/');
}