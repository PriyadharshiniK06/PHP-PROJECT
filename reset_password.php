<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
</head>
<body>
  <h2>Reset Your Password</h2>
  <form action="update_password.php" method="post">
    <?php
      if (isset($_GET['email'])) {
          $email = $_GET['email'];
          echo '<input type="hidden" name="email" value="' . htmlspecialchars($email) . '">';
      } else {
          echo "Invalid access.";
          exit();
      }
    ?>
    <label>New Password:</label>
    <input type="password" name="new_password" required>
    <button type="submit">Update Password</button>
  </form>
</body>
</html>
