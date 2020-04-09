<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
</head>
<body>
	<center>
		<h1>Welcome {{ Session::get('userid') }}</h1>
		<br>
		<fieldset>
			<a href="/admin/profile">Profile</a> <br>
			<a href="/admin/userlist">All User</a><br>
			 <a href="/logout">logout</a>
		</fieldset>
	</center>

</body>
</html>