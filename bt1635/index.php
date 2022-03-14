<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sinh Ngau Nhien N Quyen Sach</title>
</head>
<body>
<h1 style="text-align: center">Quan Ly Sach</h1>

<?php
$N = rand(5, 10);
?>
<table border="1" cellpadding="5">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Author</th>
			<th>Price</th>
			<th>Manufacturer</th>
		</tr>
	</thead>
	<tbody>
<?php
	for ($i=0; $i < $N; $i++) { 
		echo "<tr>
			<td>".($i + 1)."</td>
			<td>Ten sach $i</td>
			<td>Tac gia $i</td>
			<td>".(1000 + 10 * $i)."</td>
			<td>NSX $i</td>
		</tr>";
	}
?>
	</tbody>
</table>
</body>
</html>