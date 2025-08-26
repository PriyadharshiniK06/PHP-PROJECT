<?php
    require_once("database.php");
    $ID=$_GET['id'];
    $result=mysqli_query($connection,"SELECT * FROM login WHERE id = $ID");
    $resultData = mysqli_fetch_assoc($result);
    $id = $resultData['ID'];
    $email = $resultData['EMAIL'];
    $password = $resultData['PASSWORD'];
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="display.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="ID" value="<?php echo $id; ?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
