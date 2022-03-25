@extends('layouts.master')

@section('content')
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Room No</th>
				<th>Type</th>
				<th>Floor</th>
				<th>Price</th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
				<th style="width: 60px"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($hotelList as $item)
			<tr>
				<td>{{ ++$index }}</td>
				<td>{{ $item->room_no }}</td>
				<td>{{ $item->type }}</td>
				<td>{{ $item->floor }}</td>
				<td>{{ $item->price }}</td>
				<td style="width: 60px">
					<a href="{{ route('hotel-detail') }}?id={{ $item->id }}"><button class="btn btn-info">View</button></a>
				</td>
				<td style="width: 60px">
					<button class="btn btn-warning">Edit</button>
				</td>
				<td style="width: 60px">
					<button class="btn btn-danger">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $hotelList->links() }}
</div>
@stop