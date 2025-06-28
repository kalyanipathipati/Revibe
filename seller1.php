<!DOCTYPE html>
<html>
    <head>
<style>
     body {
        margin: 80px;
    }
    .product-card {
    display: inline-block;
    vertical-align: top;
    margin: 10px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: calc(20% - 20px);
}
.product-card img {
    width: 105%;
    border-radius: 20px;
    height: 300px; /* Set a fixed height */
    object-fit: cover;
 /* Set a fixed width */
     /* Ensure the image covers the entire area */
}
</style>
</head>
        <body>
<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);

$select_query = "SELECT * from `sellers`";
$result_query = mysqli_query($conn, $select_query);

while ($row = mysqli_fetch_assoc($result_query)) {
    $seller_name = $row['seller_name'];
    $contact_number = $row['contact_number'];
    $product_name = $row['product_name'];
    $product_details = $row['product_details'];
    $product_image = $row['product_image'];
    $product_price = $row['product_price'];
    echo '<div class="product-card">';
    echo"<img src='./product_images/$product_image'   alt=''  >  ";
    //echo '<img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '">';
    echo '<h2 class="product-title">' . $row['product_name'] . '</h2>';
    echo '<p class="product-description">' . $row['product_details'] . '</p>';
    echo '<p class="product-price">Rs ' . $row['product_price'] . '</p>';
    echo '</div>';
}

$conn->close();
?>
</body>
</html>