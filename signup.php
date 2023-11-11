<?php
// signup.php

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $sql);
    header('location: login.php');

    if ($result) {
        echo "Signup successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
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
        input[type="email"],
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

        p{
            text-align: center;
        }
        p a{
            text-decoration: none;
            color: #000
        }

        p a:hover{
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="fb.png">
        <form action="signup.php" method="POST">
            
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" require>
                <input type="submit" name="Sign Up" value="Sign Up">
    </form>
        <p>Already have an account? <a href="login.php">Log in</a></p>
    </div>
    </div>
</body>
</html>
