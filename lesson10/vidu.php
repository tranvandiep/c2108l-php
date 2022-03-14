<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OOP: Su dung Class Object trong PHP</title>
</head>
<body>
<?php
require_once('product.php');

$p = new Product(); //Ham tao -> constructor
$p->id = 1;
$p->title = 'San pham 1';
$p->thumbnail = 'Link hinh anh';
$p->price = 2000;
$p->content = 'Noi dung bai viet';
$p->createdAt = date('Y-m-d H:i:s');
$p->updatedAt = date('Y-m-d H:i:s');

echo $p->title;

$p->dumpData();
?>
</body>
</html>