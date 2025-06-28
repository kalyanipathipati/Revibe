<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: account.php");
    exit;
}

// Check if the URL parameter is set
if (isset($_GET['url'])) {
    $urlToDelete = $_GET['url'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "users";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the username of the logged-in user
    $username = $_SESSION['username'];

    // Perform deletion query
    $query = "DELETE FROM sellers WHERE seller_name = '$username' AND product_image = '$urlToDelete'";
    $result = $conn->query($query);

    if ($result) {
        // Picture deleted successfully
        // You may also want to delete the actual picture file from your server's storage if applicable

        // Redirect back to the account page or any other appropriate page
        header("Location: account.php");
        exit;
    } else {
        // Error occurred during deletion
        echo "Error deleting picture.";
    }

    $conn->close();
} else {
    // URL parameter not set, redirect back to account page
    header("Location: account.php");
    exit;
}
?>
