<!DOCTYPE html>
<html>
<head>
	<title>Add Category</title>
</head>
<body>

<center>
	<h1>Add Category</h1>
	<br>
	<form method="POST">
		<table border="1">
				@csrf
			<tr>
				<td>Category Name:</td>
				<td><input type="text" name="catName"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<a href="/admin/medicine">Back</a>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p>*:message</p></div>')) !!}
	@endif

	<hr>
<h1>Category List</h1>
	<table border="2">
		<tr>
			<th>Category ID</th>
			<th>Category Name</th>
		</tr>
		@for($i=0;$i< count($cat);$i++)
			<tr>
				<td align="center">{{$cat[$i]['cat_id']}}</td>
				<td align="center">{{$cat[$i]['cat_name']}}</td>
			</tr>
		@endfor
	</table>
</center>
</body>
</html>