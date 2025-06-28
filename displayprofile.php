<?php
session_start();
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username_or_email = $_SESSION["username"]; // assuming the username or email is stored in a session variable after a successful login

$sql = "SELECT * FROM users WHERE username = '$username_or_email' OR email = '$username_or_email '";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Password: " . $row["password"]. "<br>"; // it is not recommended to display the password in plain text for security reasons
    }
} else {
    echo "0 results";
}
$conn->close();

?>