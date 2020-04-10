<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<h1>Mamber List</h1>
	<table border="1">
		<tr>
			<th>UserName</th>
			<th>FullName</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action</th>
		</tr>
		@for($i=0; $i< count($details) ; $i++)
			<tr>
				<td>{{$details[$i]['username']}}</td>
				<td>{{$details[$i]['name']}}</td>
				<td>{{$details[$i]['email']}}</td>
				@if($details[$i]['type']==1)
					<td>Admin</td>
					@else
					<td>Mamber</td>
				@endif
				<td><a href="/admin/mamberlist/delete/{{$details[$i]['id']}}">Delete</a></td>
			</tr>
		@endfor
	</table>
	<br>
	<a href="/admin">Back</a>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p >*:message</p></div>')) !!}
	@endif


</body>
</html>