@extends('layouts.master')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header bg-info text-white">
			Add User
		</div>
		<div class="card-body">
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			<form method="post" action="{{ route('user-post') }}" onsubmit="return checkPwd();">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Full Name: </label>
					<input required type="text" name="fullname" class="form-control">
				</div>
				<div class="form-group">
					<label>Email: </label>
					<input required type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Birthday: </label>
					<input type="date" name="birthday" class="form-control">
				</div>
				<div class="form-group">
					<label>Password: </label>
					<input required type="password" name="pwd" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirm Password: </label>
					<input required type="password" name="confirm_pwd" class="form-control">
				</div>
				<div class="form-group">
					<label>Address: </label>
					<input type="text" name="address" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-info text-white">Add User</button>
				</div>
			</form>
		</div>
	</div>
</div>
@stop

@section('js')
<script type="text/javascript">
	function checkPwd() {
		var pwd = $('[name=pwd]').val()
		var confirmpwd = $('[name=confirm_pwd]').val()

		if(pwd != confirmpwd) {
			alert('Password does not match, plz check it again.')
			return false
		}

		return true
	}
</script>
@stop