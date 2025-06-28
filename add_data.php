<?php
// Include database connection
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $seller_name = $_POST['seller_name'];
    $contact_number = $_POST['contact_number'];
    $product_name = $_POST['product_name'];
    $product_details = $_POST['product_details'];
    $product_price = $_POST['product_price'];
    // Get the uploaded file
    $product_image = $_FILES['product_image']['name'];
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    // accessing temporary image
    $temp_image = $_FILES['product_image']['tmp_name'];
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Check if any of the fields are empty
    if(empty($seller_name) || empty($contact_number) || empty($product_name) || empty($product_details) || empty($product_price) || empty($product_image) || empty($product_image1) || empty($product_image2) || empty($product_image3)) {
        echo "<script>alert('Please fill in all fields.');</script>";
    } else {
        // Insert the form data into the database
        move_uploaded_file($temp_image,"./product_images/$product_image");
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");
        $insert_products="INSERT INTO `sellers` (seller_name, contact_number, product_name, product_details, product_price, product_image, product_image1, product_image2, product_image3) VALUES ('$seller_name','$contact_number','$product_name','$product_details','$product_price','$product_image','$product_image1','$product_image2','$product_image3')";
        $result_query=mysqli_query($conn,$insert_products);
        if($result_query) {
            echo "<script>alert('Successfully inserted the products')</script>";
            //header("Location: seller1.php");
        } else {
            echo "<script>alert('Error inserting data into the database.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Set height to viewport height */
    }
    .container {
        text-align: center;
    }
    h2 {
        text-align: center;
        color: #088178;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left:30px;
    }
    form {
        width: 120%; /* Adjusted width */
        max-width: 600px; /* Set maximum width */
        max-height: 450px; /* Set maximum height */
        background-color: #ffffff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease-in-out;
        margin: auto;
        box-sizing: border-box;
        font-size: 14px; /* Adjusted font size */
        border: 2px solid #088178;
        margin-right:140px;
    }
    form:hover {
        box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.3);
    }
    label {
            font-weight: bold;
            font-size: 16px; /* Adjusted font size */
            display: inline-block;
            width: 152px; /* Fixed width for labels */
            text-align: left;
            margin-bottom: 5px; /* Adjusted margin */
           
        }
    input[type="text"],
    textarea {
        width: 70%; /* Adjusted width */
        padding: 4px; /* Reduced padding */
        margin-top: 2px;
        margin-bottom: 2px; /* Adjusted margin */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px; /* Adjusted font size */
        display: inline-block;
        vertical-align: top; /* Align to the top */
    }
    textarea {
        height: 40px; /* Reduced height */
        resize: vertical; /* Allow vertical resizing */
    }
    input[type="file"] {
        width: 70%; /* Adjusted width */
        padding: 4px; /* Reduced padding */
        margin-top: 2px;
        margin-bottom: 2px; /* Adjusted margin */
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 14px; /* Adjusted font size */
        display: inline-block; /* Display inline */
        vertical-align: top; /* Align to the top */
    }
    input[type="submit"] {
        width: 100%;
        background-color: #088178;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 0; /* Reduced padding */
        cursor: pointer;
        margin-top: 10px;
        font-size: 16px; /* Adjusted font size */
    }
    input[type="submit"]:hover {
        background-color: #065955;
    }
    /* Clearfix to ensure proper layout */
    .clearfix::after {
        content: "";
        display: table;
        clear: both;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Add Product</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="clearfix">
                <label for="seller_name">Seller Name:</label>
                <input type="text" id="seller_name" name="seller_name">
            </div>
            <div class="clearfix">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number">
            </div>
            <div class="clearfix">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name">
            </div>
            <div class="clearfix">
                <label for="product_details">Product Details:</label>
                <textarea id="product_details" name="product_details"></textarea>
            </div>
            <div class="clearfix">
                <label for="product_price">Product Price:</label>
                <input type="text" id="product_price" name="product_price">
            </div>
            <div class="clearfix">
                <label for="product_image">Product Image:</label>
                <input type="file" id="product_image" name="product_image">
            </div>
            <div class="clearfix">
                <label for="product_image1"></label>
                <input type="file" id="product_image1" name="product_image1">
            </div>
            <div class="clearfix">
                <label for="product_image2"></label>
                <input type="file" id="product_image2" name="product_image2">
            </div>
            <div class="clearfix">
                <label for="product_image3"></label>
                <input type="file" id="product_image3" name="product_image3">
            </div>
            <input type="submit" value="Add Product">
        </form>
    </div>
</body>
</html>














