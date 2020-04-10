<!DOCTYPE html>
<html>
<head>
	<title>Add resturent</title>
</head>
<body>
<center>
	<h1>Sign Up here</h1>
	<form method="POST">
		<table>
			<tr>
				<td>@csrf</td>
			</tr>
			<tr>
				<td>Resturent Name :</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Food name :</td>
				<td><input type="text" name="foodname"></td>
			</tr>
			<tr>
				<td>PRice :</td>
				<td><input type="text" name="rate"></td>
			</tr>
			
			<tr><td></td></tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="ADD">
				</td>
			</tr>
		</table>
	</form>
	<a href="/">Back</a>
	<br>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p>*:message</p></div>')) !!}
	@endif
</center>
</body>
</html>