@extends('layouts.master')

@section('content')
<div class="container">
	<a href="{{ route('user-view') }}">
		<button class="btn btn-success" style="margin-bottom: 20px;">Add User</button>
	</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Full Name</th>
				<th>Birthday</th>
				<th>Email</th>
				<th>Address</th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($userList as $item)
			<tr>
				<td>{{ ++$index }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->birthday }}</td>
				<td>{{ $item->email }}</td>
				<td>{{ $item->address }}</td>
				<td style="width: 60px">
					<a href="{{ route('user-edit') }}?id={{ $item->id }}">
						<button class="btn btn-warning">Edit</button>
					</a>
				</td>
				<td style="width: 60px">
					<button class="btn btn-danger" onclick="deleteUser({{ $item->id }})" type="button">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $userList->links() }}
</div>
@stop

@section('js')
<script type="text/javascript">
	function deleteUser(id) {
		var option = confirm('Are you sure to delete this user?')
		if(!option) return

		$.post('{{ route('user-delete') }}', {
			'_token': '{{ csrf_token() }}',
			'id': id
		}, function(data) {
			location.reload()
		})
	}
</script>
@stop