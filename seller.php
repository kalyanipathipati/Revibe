<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    echo "<script>alert('Please login to access this page');</script>";
    echo "<script>window.location.replace('account.php');</script>";
   
    exit; // Stop further execution
}

// Connect to the database
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$seller_name = $_POST['seller_name'];
$contact_number = $_POST['contact_number'];
$product_name = $_POST['product_name'];
$product_details = $_POST['product_details'];
$product_price=$_POST['product_price'];
// $product_image = $_POST['product_image'];
// Get the uploaded file
$product_image = $_FILES['product_image']['name'];
$product_image1 = $_FILES['product_image1']['name'];
$product_image2 = $_FILES['product_image2']['name'];
$product_image3 = $_FILES['product_image3']['name'];
// accesing temporary image
$temp_image = $_FILES['product_image']['tmp_name'];
$temp_image1 = $_FILES['product_image1']['tmp_name'];
$temp_image2 = $_FILES['product_image2']['tmp_name'];
$temp_image3 = $_FILES['product_image3']['tmp_name'];

// Insert the form data into the database
move_uploaded_file($temp_image,"./product_images/$product_image");
move_uploaded_file($temp_image1,"./product_images/$product_image1");
move_uploaded_file($temp_image2,"./product_images/$product_image2");
move_uploaded_file($temp_image3,"./product_images/$product_image3");
$insert_products="INSERT INTO `sellers` (seller_name, contact_number, product_name, product_details, product_price, product_image, product_image1, product_image2, product_image3) VALUES ('$seller_name','$contact_number','$product_name','$product_details','$product_price','$product_image','$product_image1','$product_image2','$product_image3')";
$result_query=mysqli_query($conn,$insert_products);
if($result_query)
{
  echo "<script>alert('Successfully inserted the products')</script>";
  header("Location: shop.php");
}

$conn->close();

?>