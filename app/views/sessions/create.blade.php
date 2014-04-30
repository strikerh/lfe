<html>
<head>
	<title>login</title>
</head>
<body>
	@if (Auth::check())
	welcome 
	@endif
	{{ Form::open(['route' =>'sessions.store'])}}
		<div>
			{{ Form::label('UserName','User Name:') }}
			{{ Form::text('UserName') }}
		</div>
		<div>
			{{ Form::label('Password','Password:') }}
			{{ Form::password('Password') }}
		</div>
		<div>
			{{ Form::submit('login')}}
		</div>
	{{ Form::close() }}
</body>
</html>