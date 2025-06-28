<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header("Location: account.php");
    exit; // Stop further execution
}

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

// Query to count the number of products uploaded by the user
$query = "SELECT COUNT(*) AS product_count FROM sellers WHERE seller_name = '$username'";
$result = $conn->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $productCount = $row['product_count'];
} else {
    $productCount = 0; // If there's an error or no products found
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="description" content="">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/validation.js"></script>
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/f4101b5333.js" crossorigin="anonymous"></script>
<style>
  .user-box {
        background-color: #f8f9fa;
        border-radius: 5px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
        max-width: 500px; /* Adjust width as needed */
    }

    .user p {
        margin-top: 10px;
        text-align: center;
    }

    .uploaded-image {
        max-width: 20%;
        height: auto;
        margin-bottom: 10px;
    }

    .delete-button {
        background-color: #ff0000;
        color: #ffffff;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }
        
  .image-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        justify-content: center;
    }

    .image-item {
        text-align: center;
    }
</style>
</head>
<body>
<section id="header">
    <a href="#"><img src="images/logo.png" class="logo" alt="" height="50" width ="50" ></a>
    <div>
        <ul id="navbar">
            <li><a  href="thrift.php">Home</a></li>
            <li><a  href="shop.php">Shop</a></li>
            <li><a  href="seller.html">Seller</a></li>
            <li><a  href="about.html">About</a></li>
            <li><a  href="contact.html">Contact</a></li>
            <li><a  class="active" href="account.php"><i class="fa-solid fa-user"></i></a></li>
        </ul>
    </div>
</section>
<section>
    <?php if (isset($_SESSION['username'])) { ?>
    <div class="user-box">
        <p style="color: #088178; font-size: 1.5em;">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></p>
        <p style="color: #088178;"><?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <p style="color: #088178;">Number of products uploaded: <?php echo $productCount; ?></p>
        <div class="logout" style="text-align: center; margin-top: 10px;">
        <a href="logout.php" style="color: #088178;"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
    </div>
    
    <?php } else { ?>
    <a id="login" href="account.php" style="color: #088178;"><i class="fa fa-sign-in"></i> Login</a>
    <?php } ?>
    
    <!-- Display uploaded pictures and delete links/buttons -->
    <div class="image-container">
        <?php
        // Get uploaded pictures associated with the user
        $query = "SELECT product_image FROM sellers WHERE seller_name = '$username'";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $productImage = $row['product_image'];
                echo "<div class='image-item'>";
                echo "<img class='uploaded-image' src='./product_images/$productImage' alt='Uploaded Product Image'>";
                //echo "<p>$productImage</p>"; // Display product_image column text
                echo "<button class='delete-button' onclick=\"window.location.href='delete_picture.php?url=$productImage'\">Delete</button>";
                echo "</div>";
            }
        }
        ?>
    </div>
</section>

</body>
</html>



