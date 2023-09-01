<?php

function loginUser($username, $password)
{
    $host = "localhost";
    $dbname = "dcarr10";
    $username = "root";
    $password = "";
    
    $conn = new mysqli($host, $dbname, $username, $password);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    
    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];
        
        if (password_verify($password, $hashedPassword)) {
            echo "Login successful!";
            $loggedIn = true;
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "User not found. Please check your username.";
    }
    
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    loginUser($username, $password);
}

function signUpUser($username, $password)
{

    $host = "localhost";
    $dbname = "dcarr10";
    $username = "root";
    $password = "";
    

    $conn = new mysqli($host, $dbname, $username, $password);
    
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);
    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Sign up successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_username = $_POST["new_username"];
    $new_password = $_POST["new_password"];

    signUpUser($new_username, $new_password);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign Up - Family Tree Deals</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Family Tree Deals</h1>
        <div class="sign-in-up">
            <a href="Index.html">Home</a>
        </div>
    </header>
    <div class="sign-form">
        <h2>Sign In</h2>
        <form action="signin.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign In</button>
        </form>

        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="new_username">New Username</label>
                <input type="text" id="new_username" name="new_username" required>
            </div>
            <div class="form-group">
                <label for="new_password">New Password</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>