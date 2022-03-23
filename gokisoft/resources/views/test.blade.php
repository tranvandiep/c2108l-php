<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test in Laravel</title>
</head>
<body>
	<h1>Welcome to learn Laravel</h1>
	{{ $a }}
	<p>
		{{ $msg }}
	</p>
	<p>
		{{ $html }}
	</p>
	<p>
		{!! $html !!}
	</p>
	<ul>
		<li>Ho & Ten: {{ $arr['fullname'] }}</li>
		<li>Dia Chi: {{ $arr['address'] }}</li>
	</ul>
	<h2>Danh Sach Mon Hoc</h2>
	<ul>
		@foreach($subjectList as $sub)
			<li>{{ $sub }}</li>
		@endforeach
	</ul>
</body>
</html>