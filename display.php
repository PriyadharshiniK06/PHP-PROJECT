<?php
require_once("database.php");
$result = mysqli_query($connection, "SELECT * FROM login ORDER BY id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h2>Home Page</h2>
    <p>
		   <a href="add.php">Add New Data</a>
	  </p>
   <table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
      <td><strong>ID</strong></td>
			<td><strong>Email</strong></td>
      <td><strong>Password</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
        while ($res = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>".$res['ID']."</td>";
          echo "<td>".$res['EMAIL']."</td>";
          echo "<td>".$res['PASSWORD']."</td>";	
          echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | 
          <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
        }
		?>
	</table>
</body>
</html> 