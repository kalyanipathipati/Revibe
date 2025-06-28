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
    if(isset($_POST['delete_product'])) {
        // Retrieve form data for deleting product
        $product_id = $_POST['product_id'];
        // Delete product
        $query_delete_product = "DELETE FROM sellers WHERE id = '$product_id'";
        mysqli_query($conn, $query_delete_product);
        // Redirect back to the admin panel or any appropriate page
        header("Location: admin_panel.php");
        exit;
    } elseif(isset($_POST['delete_user'])) {
        // Retrieve form data for deleting user
        $username = $_POST['username'];
        // Delete user
        $query_delete_user = "DELETE FROM users WHERE username = '$username'";
        mysqli_query($conn, $query_delete_user);
        // Redirect back to the admin panel or any appropriate page
        header("Location: admin_panel.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Product and User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            color: #088178;
            margin-top: 20px;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            border: 2px solid #088178;
        }
        form:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            border-color: #088178;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #088178;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #065955;
        }
    </style>
</head>
<body>
    <h2>Delete Product</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="product_id">Product ID:</label>
        <input type="text" id="product_id" name="product_id">
        <input type="submit" name="delete_product" value="Delete Product">
    </form>

    <h2>Delete User</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <input type="submit" name="delete_user" value="Delete User">
    </form>
</body>
</html>




