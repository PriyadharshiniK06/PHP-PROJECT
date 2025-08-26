<?php
   require_once("database.php");
   if (isset($_POST['update'])) {
	$id = mysqli_real_escape_string($connection, $_POST['id']);
	$name = mysqli_real_escape_string($connection, $_POST['email']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);	
	if (empty($id) || empty($name) || empty($password)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		$result = mysqli_query($connection, "UPDATE login SET `email` = '$name',  `password` = '$password' WHERE `id` = $id");
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='display.php'>View Result</a>";
	}
}

?>
