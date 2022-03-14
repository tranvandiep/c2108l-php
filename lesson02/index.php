<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array + Environment Variables + Form Data in PHP</title>
</head>
<body>
<h1>Kien Thuc Array</h1>
<?php
// Phan 1: Mang index
// Khai bao mang trong PHP
// Khai bao mang rong
// C1:
$arr = []; //Nhin rat giong vs JS
// C2:
$arr = array(); //Cach khai bao moi -> na na JS (new Array())
// Do dai mang -> Length & index: 0 -> Length - 1
// Array -> PHP -> mang dong -> so phan tu trong mang no se tu dong noi ra

// Them 1 phan tu vao trong mang
$arr[] = 12; //length = 1, index: 0 -> 0
$arr[] = 55; //length = 2, index: 0 -> 1
array_push($arr, 89); //length = 3, index: 0 -> 2
array_push($arr, 19); //length = 4, index: 0 -> 3
// Xac dinh do dai cua mang trong PHP
echo sizeof($arr);
echo count($arr);

// Doc noi dung du lieu tu mang
// Khi doc noi dung phan tu trong mang -> xac dinh dc index can lay du lieu
echo "<br/>".$arr[0]."-".$arr[1];
for ($i=0; $i < count($arr); $i++) { 
	echo "<br/>".$arr[$i];
}

foreach ($arr as $v) {
	echo "<br/>".$v;
}

// Sua noi dung du lieu trong mang
// Muon sua noi dung du lieu trong mang -> xac dinh dc index can sua noi dung
// Vi du: sua index = 1 -> gia tri bang 10
$arr[1] = 10;//Xong

// Xoa 1 phan tu trong mang
// $arr = [12, 55, 89, 19]
// Cach 1: Su dung ham unset -> de xoa 1 phan tu trong mang
// unset($arr[1]);//xoa phan tu trong mang tai index = 1 -> Khong tu dong don mang
// So do khi goi lenhj $arr[1] -> Error -> die du an
// echo $arr[1];
// Cach 2:
array_splice($arr, 1, 1); //De y -> ham nay rat giong vs ham arr.splice -> trong JS
// Uu diem: tu dong don mang
for ($i=0; $i < count($arr); $i++) { 
	echo "<br/>Xoa: <br/>".$arr[$i];
}

// Chen 1 phan tu vao vi tri bat ky trong mang
// $arr = [12, 89, 19]
// Chen 2 phan tu 7, 6 vao vi tri index = 1, 2
array_splice($arr, 1, 0, 7);
array_splice($arr, 2, 0, [8, 9]); //Khac 1 chut so vs ham arr.splice trong JS
for ($i=0; $i < count($arr); $i++) { 
	echo "<br/>---".$arr[$i];
}

// Khai bao mang gom cac phan tu san co
$arr = [2, 34, 10, 100]; //Co the quan ly nhieu kieu du lieu khac nhau trong mang.
$arr = array(1, 50, 11);

// Phan 2: Mang key => value (Java, C#: Hashmap) => JS: localStorage
$arr = [];

// Them du lieu
// Xac dinh dc key: fullname, gia tri cho key do: Tran Van A
$arr['fullname'] = 'TRAN VAN A';
$arr['age'] = 20;
$arr['fullname'] = 'TRAN VAN B'; //fullname => TRAN VAN B => Sua du lieu

// Doc noi dung du lieu
// Khi muon doc du lieu -> can biet key: can lay du lieu la gi
echo "<br/>".$arr['fullname'];
// Chu y: khi truy cap vao key khong ton tai -> error
// echo "<br/>".$arr["address"];
// Do vay => Khi truy cap du lieu cua 1 key bat ky trong mang key => value => nen su dung cach sau
if(isset($arr["address"])) {
	echo "<br/>".$arr['address'];
} else {
	echo "<br/>Khong ton tai Address";
}

// Xoa phan tu trong mang
unset($arr['fullname']); //Xoa key fullname -> khoi mang.

$arr = [];
$arr = null;

// Khai bao mang -> gom cac key & value san
$std = [
	"fullname" => "Tran Van A",
	"age" => 12,
	"address" => "Ha Noi"
];
echo "<br/>".$std['fullname'];
?>
</body>
</html>