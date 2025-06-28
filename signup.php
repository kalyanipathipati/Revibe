<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

// Check if the username already exists in the database
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "The username is already in use. Please choose a different username.";
    exit();
}

// Check if the email already exists in the database
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "The email address is already in use. Please use a different email address.";
    exit();
}

// Hash the password for security
// $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

// Prepare SQL statement
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pass')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    include "thrift.php";
    echo "signed up successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>