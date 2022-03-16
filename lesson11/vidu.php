<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OOP in PHP</title>
</head>
<body>
<h1 style="text-align: center;">Welcome to learn OOP in PHP</h1>

<?php
require_once('people.php');
require_once('student.php');

$p = new People();
$p->fullname = 'TRAN VAN A';
$p->birthday = '10/10/1999';
$p->cmtnd = '1231232312';
$p->address = 'Ha Noi';
$p->echo();

$s = new Student();
$s->fullname = 'Sinh Vien A';
$s->birthday = '10/10/2000';
$s->cmtnd = '345345345';
$s->address = 'Nam Dinh';
$s->rollno = 'R001';
$s->echo();
$s->learning();

// $stdList = [];
// $stdList[] = new Student(); //Code nhanh -> co the khai bao tuong minh -> thiet lap thuoc tinh
// $stdList[] = new Student();
// $stdList[] = new Student();
// $stdList[] = new Student();
// $stdList[] = new Student();
?>

</body>
</html>