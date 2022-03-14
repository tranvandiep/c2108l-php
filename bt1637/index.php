<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fibonaci in PHP</title>
</head>
<body>
<h1 style="text-align: center;">Day gom 10 phan tu Fibonaci</h1>
<h2>Cach 1</h2>
<?php
// Cach 1
$f0 = $f1 = 1;
echo "$f0, $f1";
$count = 2;
while($count < 30) {
	$fn = $f0 + $f1;
	echo ", $fn";
	$f0 = $f1;
	$f1 = $fn;
	$count++;
}
?>
<h2>Cach 2</h2>
<?php
// Su dung de quy tim kiem so Fibonaci -> su dung function (goi toi chinh no) -> Tinh ra so Fibonaci
function fibonaci($n) {
	if($n == 0 || $n == 1) return 1;

	return fibonaci($n-2) + fibonaci($n-1);
}

for ($i=0; $i < 15; $i++) {
	$f = fibonaci($i);
	echo "$f, ";
}
?>

<h2>Cach 3: De quy co nho</h2>
<?php
$history = [1, 1];

function fibonaci2($n) {
	if($n == 0 || $n == 1) return 1;

	if(isset($history[$n - 2])) {
		$f0 = $history[$n - 2];
	} else {
		$f0 = fibonaci2($n - 2);
		$history[$n - 2] = $f0;
	}

	if(isset($history[$n - 1])) {
		$f1 = $history[$n - 1];
	} else {
		$f1 = fibonaci2($n - 1);
		$history[$n - 1] = $f1;
	}
	return $f0 + $f1;
}

for ($i=0; $i < 15; $i++) {
	$f = fibonaci2($i);
	echo "$f, ";
}
?>
</body>
</html>