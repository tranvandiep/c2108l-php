<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page</title>

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
			Dang Ky Tai Khoan
		</div>
		<div class="card-body">
			<form method="post" action="{{ route('user-post') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Ho & ten: </label>
					<input required type="text" name="fullname" class="form-control">
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
					<label>Dia chi: </label>
					<input required type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<p>
						<a href="login.php">Toi da co tai khoan</a>
					</p>
					<button class="btn btn-info text-white">Dang Ky</button>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>