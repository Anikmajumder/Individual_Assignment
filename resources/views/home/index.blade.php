<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Food blog</title>
</head>
<body>

	<h1>Welcome to Food blog</h1>
	<button><a href="/signup">Sign up</a></button> <br>
	<button><a href="/login">Login</a></button>
	<h2>Resturent List</h2>
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
				<td><a href="/login">Borrow</a></td>
				
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