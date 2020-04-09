<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
<body>

	<h1>Sign Up here</h1>
	<form method="POST">
		<table>
			<tr>
				<td>@csrf</td>
			</tr>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name"></td>
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
				<td>Email :</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<select name="type">
						<option value="">Select Type</option>
						<option value="1">ADMIN</option>
						<option value="2">USER</option>
					</select>
				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="sign up">
				</td>
			</tr>
		</table>
	</form>
	<a href="/">Back</a>
	<br>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p style="color:red">*:message</p></div>')) !!}
	@endif

</body>
</html>