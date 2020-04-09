<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<center>
	<h1>Login Panel</h1>
	<form method="POST">
		<table>
			<tr>
				<td>@csrf</td>
			</tr>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	<a href="/">Back</a>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p style="color:red">*:message</p></div>')) !!}
	@endif
</center>
</body>
</html>