<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<h1>Admin Profile Details</h1>
	<form method="POST">
		<table>
			<tr>
				<td>@csrf</td>
			</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="Username" value="{{$username}}" disabled></td>
		</tr>
		<tr>
			<td>FullName :</td>
			<td><input type="text" name="fullname" value="{{$name}}"></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="text" name="email" value="{{$email}}"></td>
		</tr>
		
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password" value=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Update"></td>
		</tr>
	</table>
	<br>
	<a href="/admin">Back</a>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p>*:message</p></div>')) !!}
	@endif
	</form>

</body>
</html>