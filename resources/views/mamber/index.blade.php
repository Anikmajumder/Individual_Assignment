<!DOCTYPE html>
<html>
<head>
	<title>Mamber Home</title>
</head>
<body>
	<center>
		<h1>Welcome {{ Session::get('userid') }}</h1>
		<br>
		<fieldset>
			<a href="/mamber/profile">Profile</a> <br>
            <a href="/mamber/resturent/resturentlist">Resturent</a><br>
            <a href="/logout">logout</a>
		</fieldset>
	</center>

</body>
</html>