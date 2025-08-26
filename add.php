<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="display.php">Home</a>
	</p>

	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="ID"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="add_submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>