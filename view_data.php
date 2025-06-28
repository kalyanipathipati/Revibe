<?php
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

// Query to fetch products from sellers table
$sellers_query = "SELECT * FROM sellers";
$sellers_result = $conn->query($sellers_query);

// Query to fetch users from users table
$users_query = "SELECT * FROM users";
$users_result = $conn->query($users_query);

// Display products from sellers table
echo "
<!DOCTYPE html>
<html>
<head>
<style>
  h2 {
    text-align: center;
    color: #088178;
  }
  table {
    width: 80%; /* Adjust table width as needed */
    border-collapse: collapse;
    margin: 0 auto; /* Center the table */
    font-size: 12px; /* Reduce font size */
    border: 1px solid #088178;
  }
  table:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box shadow on hover */
  }
  .table-title {
    background-color: #e3e6f3; /* Background color for the title box */
    color: #088178; /* Text color for the title */
    padding: 10px; /* Adjust padding */
    border: 1px solid #088178;
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add box shadow */
    width: fit-content; /* Adjust width as needed */
    margin: 0 auto 20px; /* Center the box */
  }
  .table-title:hover {
    background-color: #ddd;
   
  }
  th, td {
    padding: 5px; /* Adjust padding */
    text-align: center;
    border-bottom: 1px solid #088178;
    border-right: 1px solid #ddd;
    width: auto; /* Adjust width of table cells */
    max-width: 100px; /* Set maximum width for table cells */
    overflow: hidden; /* Hide overflowing content */
  }
  th {
    background-color: #088178; /* Background color for column names */
    color: white; /* Text color for column names */
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  tr:hover {
    background-color: #ddd;
   
  }
  

</style>
</head>
<body>
";
echo "<div class='table-title'>
<h2>SELLERS & PRODUCT LIST</h2></div>";
if ($sellers_result->num_rows > 0) {
    echo "<table><tr><th>Product ID</th><th>SELLER Name</th><th>Product Name</th><th>Product Details</th><th>Product Price</th><th>Product Image</th><th>Product Image1</th><th>Product Image2</th><th>Product Image3</th></tr>";
    while($row = $sellers_result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["seller_name"]."</td><td>".$row["product_name"]."</td><td>".$row["product_details"]."</td><td>".$row["product_price"]."</td><td>".$row["product_image"]."</td><td>".$row["product_image1"]."</td><td>".$row["product_image2"]."</td><td>".$row["product_image3"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No products found in sellers table.";
}
echo"<br>";
// Display users from users table
echo "<div class='table-title'><h2>USERS LIST</h2></div>";
if ($users_result->num_rows > 0) {
    echo "<table><tr><th>User ID</th><th>Username</th><th>Email</th></tr>";
    while($row = $users_result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No users found in users table.";
}

echo "
</body>
</html>
";

// Close connection
$conn->close();
?>






