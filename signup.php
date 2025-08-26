<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Insert into DB
    $stmt = $connection->prepare("INSERT INTO login (EMAIL, PASSWORD) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // ✅ Auto-login after signup
        session_start();
        $_SESSION["id"] = $stmt->insert_id; // Auto-generated ID
        $_SESSION["email"] = $email;
        $_SESSION['profile_image']='image/profile-login.png';
        session_write_close();
        header("Location: home.php");
        
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}

// Prefill email if redirected from login
$prefillEmail = isset($_GET["email"]) ? htmlspecialchars($_GET["email"]) : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
      body{
            background-color:#121212;
        }
        div{
            width:400px;
            height:400px;
            margin:auto;
            margin-top:100px;
            background-color:#FAFAFA;
            display:flex;
            align-items: center;
            justify-content: center;
            border:5px solid #DDDDDD;
        }
        form{
            width:400px;
            height:400px;
        }
        #title{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            color:#222222;
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
        <h1 id="title">SIGN UP</h1>
        <table>
            <tr>
                <td style="color:#555555"><label>Email : </label></td>
                <td><input type="email" placeholder="Enter Your Email Id" name="email" required></td>
            </tr>
            <tr>
                <td style="color:#555555"><label>Password: </label></td>
                <td><input type="password" placeholder="Enter your Password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submission"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
