<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP tutorial for beginer</title>
</head>
<body>
<h1 style="text-align: center;">Welcome to learn PHP</h1>

<?php
// Noi de viet code php -> Tao ra bao nhieu tag nay cung dc -> de vi tri nao cung duoc
// Hien thi dong hello world bang PHP
echo 'Hello World!!!';

$x; //$x: khong xac dinh kieu du lieu cu the
$x = 5; //Kieu du lieu la so nguyen
echo '<br/>Gia tri x = '.$x;
// echo $x;
$x = 'Xin Chao'; //Kieu du lieu la String
// echo $x;

//Hien thi 1 dong nhieu thong tin
echo '<br/>Gia tri x = '.$x; //Su dung dau '
echo '<br/>Gia tri x = '.$x.' okok';
echo '<br/>Gia tri x = $x okok';

//Hien thi du lieu theo dau "
echo "<br/>Gia tri x = ".$x;
echo "<br/>Gia tri x = ".$x.' okok';
echo "<br/>Gia tri x = ".$x." okok";
echo "<br/>Gia tri x = $x okok"; //TH su dung khac cua "

//Khai niem hang so -> const -> Bien khong the thay doi dc gia tri
const URL = "gokisoft.com";
echo '<br/>'.URL;
// URL = 'Xin Chao ABC'; //error -> URL -> const
// echo '<br/>'.URL;

define('BASE_URL', 'https://gokisoft.com');
echo '<br/>'.BASE_URL;

//operator: .
$x = 'xin ';
$y = 'chao';
$z = $x.$y;
echo '<br/>'.$z;

// $x = $x.$y;
$x .= $y;
echo '<br/>'.$x;

$x = 6;
$k = ($x == 6)?'Xin Chao':'Tam Biet';
echo '<br/>k = '.$k;
$k = ($x == 7)?'Xin Chao':'Tam Biet';
echo '<br/>k = '.$k;

$x = 5;
$y = 7;
$z = $x + $y;
echo '<br/>'.$z;
$z = $x . $y;
echo '<br/>'.$z;
$x = "5";
$y = "7";
$z = $x + $y;
echo '<br/>'.$z;

// Chu y:
$a = 60;
$b = 60;
$c = 60;
$a = $b = $c = 60;

if($a + $b + $c == 180) {
	echo 'The triangle is valid';
}

//Viet cach khac -> neu trong if chi co 1 dong lenh
if($a + $b + $c == 180)
	echo 'The triangle is valid';
?>
</body>
</html>