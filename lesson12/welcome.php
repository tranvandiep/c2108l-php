<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome PHP</title>
</head>
<body>
	<h1 style="text-align: center;">Login successfully</h1>
<?php
var_dump($_SESSION);
?>
</body>
</html>