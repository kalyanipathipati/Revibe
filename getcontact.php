<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your meta tags, title, and other head content here -->
    <style>
        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #f0f0f0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            cursor: pointer;
            margin: 20px;
            max-width: 300px; /* Adjust the maximum width as needed */
            margin-left:35%;
            margin-top:15%;
        }

        .product-card1 {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
           
            cursor: pointer;
            margin: 20px;
            max-width: 300px; /* Adjust the maximum width as needed */
            margin-left: 35%;
        }

        

        .product-card:hover {
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        
        .seller_name,
        .contact_number {
            color: #018878;
            font-size: 16px;
            margin: 10px 0;
            transition: color 0.3s ease;
        }

        .product-card:hover .seller_name,
        .product-card:hover .contact_number {
            color: #01665e;
        }

        .product-card1 a {
            text-decoration: none; /* Remove underline */
            color: inherit; /* Inherit color from parent */
            padding: 10px;
            border-radius: 5px;
            background-color: #018878;
            color: white;
            transition: background-color 0.3s ease;
        }

        .product-card1 a:hover {
            background-color: #01665e;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    // Check if the user is logged in
    $servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
    $username = "root";
    $password = "";
    $database = "users";
    $conn = new mysqli($servername, $username, $password, $database);
    $select_query = "SELECT * from `sellers` LIMIT 9"; // Limit the query to fetch only 8 records
    $result_query = mysqli_query($conn, $select_query);
    $count = 0; // Initialize a counter
    ?>

    <?php if (isset($_SESSION['username'])) { ?>
        <?php while ($row = mysqli_fetch_assoc($result_query)) {
            $seller_name = $row['seller_name'];
            $contact_number = $row['contact_number'];
        } ?>
        <div class="product-card">
            <p class="seller_name">Seller name - <?php echo $seller_name; ?></p>
            <p class="contact_number">Phone no - <?php echo $contact_number; ?></p>
        </div>
        <div class="product-card1"><a href="thrift.php">GO BACK</a></div>
    <?php } else { ?>
        <?php header("Location: account.php"); exit; ?>
    <?php } ?>

    <!-- Display uploaded pictures and delete links/buttons -->

</body>
</html>
