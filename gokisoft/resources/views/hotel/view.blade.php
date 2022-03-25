@extends('layouts.master')

@section('content')
<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Room No</th>
				<th>Type</th>
				<th>Floor</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{ $room_no }}</td>
				<td>{{ $type }}</td>
				<td>{{ $floor }}</td>
				<td>{{ $price }}</td>
			</tr>
		</tbody>
	</table>
</div>
@stop

@section('css')
<style type="text/css">
	body {
		font-size: 16px !important;
	}
</style>
@stop