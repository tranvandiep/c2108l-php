<?php
session_start();

$username = $email = $pwd = $index = "";

if(!empty($_POST)) {
	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if(isset($_POST['pwd'])) {
		$pwd = $_POST['pwd'];
	}
	if(isset($_POST['index'])) {
		$index = $_POST['index'];
	}

	// Luu thong tin sinh vien vao session
	// $_SESSION['studentList'] = [...]
	if(!isset($_SESSION['studentList'])) {
		$_SESSION['studentList'] = [];
	}

	// index: xac dinh phan tu trong mang -> sua/xoa du lieu
	if($index == '') {
		$_SESSION['studentList'][] = [
			'username'=>$username,
			'email'=>$email,
			'pwd'=>$pwd
		];
	} else {
		$_SESSION['studentList'][$index] = [
			'username'=>$username,
			'email'=>$email,
			'pwd'=>$pwd
		];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quan Ly Sinh Vien</title>

	<!-- Bootstrap -> thiet ke GUI -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<style type="text/css">
		h2 {
			text-align: center;
		}

		.form-group {
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-header bg-info text-white">
			Nhap thong tin tai khoan
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group">
					<label>Tai khoan: </label>
					<input type="number" name="index" value="" style="display: none;">
					<input required type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input required type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Mat khau: </label>
					<input required type="password" name="pwd" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-info text-white">Luu thong tin</button>
					<button class="btn btn-warning" type="reset">Nhap lai</button>
				</div>
			</form>
		</div>
	</div>

	<div class="card" style="margin-top: 20px;">
		<div class="card-header bg-info text-white">
			Danh sach sinh vien
		</div>
		<div class="card-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tai khoan</th>
						<th>Email</th>
						<th>Mat khau</th>
						<th style="width: 60px"></th>
						<th style="width: 60px"></th>
					</tr>
				</thead>
				<tbody>
<?php
if(isset($_SESSION['studentList'])) {
	$index = 0;
	foreach($_SESSION['studentList'] as $item) {
		echo '<tr>
				<td>'.($index + 1).'</td>
				<td>'.$item['username'].'</td>
				<td>'.$item['email'].'</td>
				<td>'.$item['pwd'].'</td>
				<td style="width: 60px">
					<button class="btn btn-warning" onclick="editUser('.$index.', \''.$item['username'].'\', \''.$item['email'].'\', \''.$item['pwd'].'\')">Sua</button>
				</td>
				<td style="width: 60px">
					<button class="btn btn-danger" onclick="deleteUser('.$index.')">Xoa</button>
				</td>
			</tr>';
		$index++;
	}
}
?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	function deleteUser(index) {
		var option = confirm('Ban co chac chan muon xoa tai khoan nay khong?')
		if(!option) return

		// ajax -> gui yeu len server bang js/jquery -> get/post -> tat ca cac hanh dong them/sua/xoa -> post & select -> get
		$.post('user_api.php', {
			'index': index,
			'action': 'delete'
		}, function(data) {
			//sau khi server gui du lieu ve -> tra ve day
			//Chu y: su dung js -> update UI
			//Tai lai trang de ve lai
			location.reload()
		})
	}

	function editUser(index, username, email, pwd) {
		$('[name=index]').val(index)
		$('[name=username]').val(username)
		$('[name=email]').val(email)
		$('[name=pwd]').val(pwd)
	}
</script>
</body>
</html>