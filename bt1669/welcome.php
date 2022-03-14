<?php
require_once('form/process_welcome.php');
// include_once('form/process_welcome.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Page</title>

	<style type="text/css">
		h1, h2 {
			text-align: center;
		}
	</style>
</head>
<body>
<h1>Ho & Ten: <font color=RED><?=$fullname?></font></h1>
<h1>Email: <font color=RED><?=$email?></font></h1>
<h1>Dia Chi: <font color=RED><?=$address?></font></h1>
<h1>Mat Khau: <font color=RED><?=$pwd?></font></h1>
<h2>Dang Nhap Thanh Cong</h2>
</body>
</html>