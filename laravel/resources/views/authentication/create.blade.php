<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	{{Form:open([sessions.store])}}
		{{Form:label('username','Username:')}}
		{{Form:email('username')}}

		{{Form:label('password','Password:')}}
		{{Form:password('password')}}

		{{Form::submit('Login')}}
	{{Form:cloose()}}
</body>
</html>