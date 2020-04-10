<!DOCTYPE html>
<html>
<head>
	<title>Resturent List</title>
</head>
<body>

	<h1>Resturent List</h1>
	<table border="1">
		<tr>
			<th>Resturent Name</th>
			<th>Food Name</th>
			<th>price</th>
			<th>borrow</th>
			<th>comment</th>
		</tr>
		@for($i=0; $i< count($details) ; $i++)
			<tr>
				<td>{{$details[$i]['name']}}</td>
				<td>{{$details[$i]['foodname']}}</td>
				<td>{{$details[$i]['rate']}}</td>
                <td>{{$details[$i]['borrow']}}</td>
                <td>{{$details[$i]['comment']}}</td>
				<td><a href="/admin/resturent/edit/{{$details[$i]['id']}}">Edit</a></td>
				<td><a href="/admin/resturent/delete/{{$details[$i]['id']}}">Delete</a></td>
			</tr>
		@endfor
	</table>
	<br>
	<a href="/mamber">Back</a>
	@if($errors->any())
    {!! implode('', $errors->all('<div><br><p >*:message</p></div>')) !!}
	@endif


</body>
</html>