<!DOCTYPE html>
<html>
<head>
	<title>Order resturent</title>
</head>
<body>	

	<h1>Order your food</h1>


	<br>
	<form method="post">
		{{csrf_field()}}
		<table border="1">
			<tr>
				<td>ID</td>
				<td><input type="text" readonly name="id" value="{{$id}}" disabled></td>
			</tr>
			<tr>
				<td>Resturent</td>
				<td><input type="text"  name="name" value="{{$name}}" disabled></td>
			</tr>
			<tr>
				<td>Foodname</td>
				<td><input type="text"  name="foodname" value="{{$foodname}}" disabled></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text"  name="rate" value="{{$rate}}" disabled></td>
			
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