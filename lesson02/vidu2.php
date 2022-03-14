<?php
// header('Location: index.php'); //Chu y: ham nay dc goi dau tien => truoc khi co code html | echo | var_dump
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bien moi truong trong PHP</title>
</head>
<body>
<?php
// Debug loi trong PHP - Dump du lieu
$std = [
	"fullname" => "Tran Van A",
	"age" => 12,
	"address" => "Ha Noi"
];
var_dump($std); //Giup lap trinh vien -> kiem soat dc du lieu cua chuong trinh -> debug
// Khai niem bien moi truong => array: key -> value
echo "<br/>";
var_dump($_GET);
echo "<br/>";
var_dump($_POST);
die();//gap lenh nay -> dung gui du lieu ve Client
echo "<br/>";
var_dump($_REQUEST);
echo "<br/>";
var_dump($_SERVER);
echo "<br/>";
var_dump($_ENV);
echo "<br/>";
// var_dump($_SESSION);
echo "<br/>";
var_dump($_COOKIE);

// Dieu huong website trong PHP
// Khi dang o trang vidu2.php -> xu ly 1 logic -> chuyen sang trang index.php
// header('Location: index.php'); Chu y: ham nay dc goi dau tien => truoc khi co code html | echo | var_dump
?>
</body>
</html>