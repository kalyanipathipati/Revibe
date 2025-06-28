<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        width: 300px;
        padding: 20px;
        border: 2px solid #088178;
        border-radius: 5px ;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        transition: box-shadow 0.3s ease-in-out;
    }
    .container:hover {
        box-shadow: 0 0 20px rgba(0,0,0,0.2);
    }
    input[type="text"],
    input[type="password"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
        transition: border-color 0.3s ease-in-out;
        background-color: #fff;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
    }
    input[type="submit"] {
        border: none;
        background-color: #088178;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }
    input[type="submit"]:hover {
        background-color: red;
    }
    .sign-up {
        text-align: center;
        margin-top: 10px;
    }
    .go-back {
        text-align: center;
        margin-top: 10px;
        
    }
</style>
</head>
<body>
    <div class="container">
        <h2><center>Login</center></h2>
        <form id="loginForm" action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <div class="sign-up">
            <p>Don't have an account? <a href="signup.html">Sign Up</a></p>
        </div>
        <div class="go-back">
            <p>Go back to <a href="thrift.php">Home Page</a></p>
        </div>
    </div>
    <?php
    session_start();
    
    // Check if the user is already logged in
    if (isset($_SESSION["username"])) {
        header("Location: getcontact.php");
        exit;
    }
    ?>

</body>
</html>