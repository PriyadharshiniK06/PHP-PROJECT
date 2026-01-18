<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("database.php");

if (isset($_POST['add_submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($connection, $_POST['ID']);
	$age = mysqli_real_escape_string($connection, $_POST['email']);
	$email = mysqli_real_escape_string($connection, $_POST['password']);
		
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
		
		if (empty($age)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if (empty($email)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		$result = mysqli_query($connection, "INSERT INTO login (`ID`, `EMAIL`, `PASSWORD`) VALUES ('$name', '$age', '$email')");
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='display.php'>View Result</a>";
	}
}
?>
</body>
</html>
