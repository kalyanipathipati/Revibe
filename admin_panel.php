<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit;
}

// Include database connection
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve total number of users
$users_query = "SELECT COUNT(*) AS total_users FROM users";
$users_result = $conn->query($users_query);
$total_users = 0;
if ($users_result && $users_result->num_rows > 0) {
    $total_users = $users_result->fetch_assoc()['total_users'];
}

// Retrieve total number of products
$products_query = "SELECT COUNT(*) AS total_products FROM sellers";
$products_result = $conn->query($products_query);
$total_products = 0;
if ($products_result && $products_result->num_rows > 0) {
    $total_products = $products_result->fetch_assoc()['total_products'];
}
// Retrieve reviews
$reviews_query = "SELECT * FROM review";
$reviews_result = $conn->query($reviews_query);
$reviews = [];
if ($reviews_result && $reviews_result->num_rows > 0) {
    while ($row = $reviews_result->fetch_assoc()) {
        $reviews[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/f4101b5333.js" crossorigin="anonymous"></script>
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px;
            background-color: #088178;
            color: white;
        }
        .header-container h2 {
            margin: 0px 350px;
            text-align: center;
            color: white;
            margin-top: 2%; /* Add margin from the top */
        
        }
        h2 {
            text-align: center;
            color: #088178;
            margin-top: 20px; /* Add margin from the top */
        }
        .links {
            text-align: center;
            margin-top: 20px;
        }
        .links a {
            display: inline-block;
            padding: 10px 20px;
            width: 200px; /* Set a fixed width for each link */
            background-color: #088178;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px; /* Add margin between links */
        }
        .links a:hover {
            background-color: #065955;
        }
        form {
            text-align: center;
            margin-top: 20px; /* Add margin from the top */
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #c0392b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #a93226;
        }
        .box {
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            background-color: #ffffff;
            border: 2px solid #088178;
            border-radius: 5px;
            text-align: center;
        } 
        .reviews {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            margin: 50px ;
        }
        .review-box {
            width: 32%;
            background-color: #ffffff;
            border: 3px solid #088178;
            border-radius: 5px;
            padding: 10px;
            margin: -30px ;
            margin-bottom: 40px;
        }
        .review-box p {
            margin: 5px 0;
        }
        .review-title {
            text-align: center;
            color: #088178;
            margin-top: 20px;
        }
       
        /* Style for subject */
        .review-box .subject {
            color: #E74C3C; /* Blue color */
            font-style: bold;
        }
    </style>
</head>
<body>
  
<div class="header-container">

    <h2>Welcome to Admin Panel</h2>
    <a href=thrift.php><i class="fas fa-user"></i></div></a>
    <div class="links">
        <a href="view_data.php">View Products and Users</a>
        <a href="add_data.php">Add Product</a>
        <a href="delete_data.php">Delete Product</a>
        <!-- Add similar links for adding and deleting users -->
    </div>
    <div class="box">
        <p>Total Users: <?php echo $total_users; ?></p>
        <p>Total Products: <?php echo $total_products; ?></p>
    </div>
    <!-- Display reviews -->
    
        <h2>Reviews</h2>
        <?php if (!empty($reviews)): ?>
            <div class="reviews">
                <?php foreach ($reviews as $review): ?>
                    <div class="review-box">
                        <p class="name"><strong>Name:</strong> <?php echo $review['name']; ?></p>
                        <p><strong>Email:</strong> <?php echo $review['email']; ?></p>
                        <p class="subject"><strong>Subject:</strong> <?php echo $review['subject']; ?></p>
                        <p><strong>Message:</strong> <?php echo $review['message']; ?></p>
                </div>

                <?php endforeach; ?>
            
        <?php else: ?>
            <p>No reviews found</p>
        <?php endif; ?>
    </div>
    <section id="header">

     <div>
            
        </div>
        </section>  
    <form action="admin_logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>



