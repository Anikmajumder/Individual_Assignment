<!DOCTYPE html>
<html>
<head>
	<title>Resturents</title>
</head>
<body>
	<center>
		<h1>Welcome {{ Session::get('userid') }}</h1>
		<br>
		<fieldset>
			<a href="/admin/resturent/addresturent">Add resturent</a> 
			<a href="/admin/resturent/resturentlist">Resuturent list</a>
			<a href="/admin">Back</a>
		</fieldset>
	</center>
</body>
</html>