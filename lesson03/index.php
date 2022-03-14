<?php
$s = $a = $b = $cal = "";
if(!empty($_GET)) {
	if(isset($_GET['a'])) {
		$a = $_GET['a'];
	}
	if(isset($_GET['b'])) {
		$b = $_GET['b'];
	}
	if(isset($_GET['cal'])) {
		$cal = $_GET['cal'];
	}

	switch ($cal) {
		case '+':
			$s = $a + $b;
			break;
		case '-':
			break;
	}
}
if($s != '') {
	$s = $a.$cal.$b.'='.$s;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator Online</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style type="text/css">
		.form-group {
			margin-bottom: 15px;
		}
	</style>
</head>
<body>

<div class="container">
	<form method="get" id="MyForm">
		<input type="text" name="a" class="form-control" placeholder="Enter a" style="display: none;">
		<input type="text" name="cal" class="form-control" placeholder="Enter calculator" style="display: none;">
		<input type="text" name="b" class="form-control" placeholder="Enter b" style="display: none;">
		<button style="display: none;">Submit</button>
	</form>

	<input type="text" value="<?=$s?>">
	<br/>
	<!-- Xay du giao dien Calculator -->
	<input type="button"value="1">
	<input type="button"value="2">
	<input type="button"value="3">
	<input type="button"value="4">
	<input type="button"value="5">
	<input type="button"value="6">
	<input type="button"value="7">
	<input type="button"value="8">
	<input type="button"value="9">
	<input type="button"value=".">
	<br/>
	<input type="button"value="+">
	<input type="button"value="-">
	<input type="button"value="*">
	<input type="button"value="/">
	<input type="button"value="%">
	<br/>
	<input type="button" value="=" onclick="submitForm()">
</div>

<script type="text/javascript">
	function submitForm() {
		$('#MyForm').submit() //Gui du lieu len server
	}
</script>
</body>
</html>