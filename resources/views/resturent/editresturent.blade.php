<!DOCTYPE html>
<html>
<head>
	<title>Edit resturent</title>
</head>
<body>	

	<h1>Edit resturent Information</h1>


	<br>
	<form method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<td>ID</td>
				<td><input type="text" readonly name="id" value="{{$id}}"></td>
			</tr>
			<tr>
				<td>Resturent</td>
				<td><input type="text"  name="name" value="{{$name}}"></td>
			</tr>
			<tr>
				<td>Foodname</td>
				<td><input type="text"  name="foodname" value="{{$foodname}}"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text"  name="rate" value="{{$rate}}"></td>
			
			<tr>
            <tr>
				<td>borrow</td>
				<td><input type="text"  name="price" value="{{$borrow}}" disabled></td>
			
			<tr>
            <tr>
				<td>commnet</td>
				<td><input type="text"  name="comment" value="{{$comment}}"></td>
			
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Save"></td>
			</tr>
		</table>
	</form>

</body>
</html>