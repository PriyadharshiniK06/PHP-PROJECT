<?php
session_start();
include 'database.php'; // DB connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password =$_POST["password"];
    $stmt="SELECT * FROM login where email='$email'";
    /*$stmt = $connection->prepare("SELECT ID,EMAIL,PASSWORD FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();*/
    $result =mysqli_query($connection,$stmt);
    if (mysqli_num_rows($result)==1) {
        $row = mysqli_fetch_assoc($result);
        // Plain text password check (change to password_verify() if hashed)
        if ($row['PASSWORD']===$password) {
            session_start();
            $_SESSION['profile_image'] = "image/profile-login.png";
            $_SESSION["email"] = $row["EMAIL"];
            session_write_close();
            header("Location: home.php");
            exit;
        } else {
            $error = "Password is incorrect!";
        }
    } else {
        header("Location: signup.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body{
            background-color:#232526;
        }
        div{
            width:400px;
            height:400px;
            margin:auto;
            margin-top:100px;
            background-color:#FFFFFF;
            display:flex;
            align-items: center;
            justify-content: center;
            border:5px solid #E0E0E0;
        }
        form{
            width:400px;
            height:400px;
        }
        #title{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color:#1E1E1E;
            margin-bottom:40px;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div>
    <form action="" method="post">
        <h1 id="title">LOGIN</h1>
        <table>
            <tr>
                <td style="color:#555555">Email:</td>
                <td><input type="email" name="email" placeholder="Enter Your Email Id" required></td>
            </tr>
            <tr>
                <td style="color:#555555">Password:</td>
                <td><input type="password" name="password" placeholder="Enter your Password" required></td>
            </tr>
            <?php if (!empty($error)) { ?>
            <tr>
                <td colspan="2" class="error"><?php echo $error; ?></td>
            </tr>
            <?php } ?>
            <tr>
                <td><a href="forgot_password.html" style="color:#6A5ACD; text-decoration:none;">Forgot Password??</a></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<!--!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width:400px;
            height:400px;
            margin:auto;
            background-color: bisque;
            display:flex;
            align-items: center;
            justify-content: center;
            border: 10px solid black;
        }
        form{
            width:400px;
            height:400px;
        }
        #title{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color:brown;
            margin-top:0px;
            margin-bottom:40px
        }
    </style>
</head>
<body>
        <div>
            
            <form action="" method="post">
                <h1 id="title">LOGIN/SIGN UP</h1>
                <table>
                    <tr>
                        <td><label>Email : </label></td>
                        <td><input type="email" placeholder="Enter Your Email Id" name="email"></td>
                    </tr>
                    <tr>
                        <td><label>Password: </label></td>
                        <td><input type="password" placeholder="Enter your Password" name="password"></td>
                        <td><?php /*if ($passwordError) echo "<p class='error'>$passwordError</p>"; */?></td>
                    </tr>
                    <tr>
                        <td><a href="forgot_password.html" style="color:red">Forgot Password??</a></td>
                    </tr>
                    <tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
                </table>
            </form>
        </div>
</body>
</html-->