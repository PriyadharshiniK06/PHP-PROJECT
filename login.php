<?php
session_start();
include 'database.php';

$passwordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if email exists
    $stmt = $connection->prepare("SELECT * FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email found
        $user = $result->fetch_assoc();

        if (password_verify($password, $user["password"])) {
            // ✅ Correct password → save session & redirect
            $_SESSION["id"] = $user["id"];
            $_SESSION["email"] = $user["email"];
            header("Location: home.php");
            exit;
        } else {
            // ❌ Wrong password → show red text
            $passwordError = "Incorrect password!";
        }
    } else {
        // ❌ Email not found → redirect to signup with email prefilled
        header("Location: signup.php?email=" . urlencode($email));
        exit;
    }
}
?>
<!DOCTYPE html>
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
                        <td><?php if ($passwordError) echo "<p class='error'>$passwordError</p>"; ?></td>
                    </tr>
                    <tr>
                        <td><a href="forgot_password.html" style="color:red">Forgot Password??</a></td>
                    </tr>
                    <tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
                </table>
            </form>
        </div>
</body>
</html>