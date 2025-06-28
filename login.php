<?php
session_start(); // Add this line at the beginning
// ... (previous code)
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);


// Process login form
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['username'];
    $pass = $_POST['password'];
   

    // Retrieve user data from the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
   
    

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if ($pass === $row["password"]) {
            echo "<script>alert('Login successful!')</script>";
            $_SESSION["username"] = $row["username"];
            $_SESSION["email"] = $row["email"];
             // Add this line to store the username in the session
            // header("Location: thrift.php");
            


            if (isset($_SESSION["username"])) 
            {
               
                 // Display the user's sign-up details if they are logged in 
                 // echo "Username: " . $_SESSION["username"]. "<br>";
                  //echo "Email: " . $_SESSION["email"]. "<br>";
                  include 'thrift.php';
                 //echo "<a href='logout.php'>Logout</a>"; 
                
            }
            exit();
        } else{
            echo "<script>alert('Incorrect password!')</script>";
           
        }
    } else {
        echo "<script>alert('User not found!')</script>";
        
    }
   
    // Close the database connection
    $conn->close();
}
?>       
