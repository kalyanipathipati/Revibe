
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-U/A Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>Ecommerce</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/df8483066c.js" crossorigin="anonymous"></script>
        
<style>
   
  .product-card{
    display: flex;
    justify-content: space-between;
    padding: 100px;
    flex-wrap: wrap;
    
 }

  .product-card {
    display: inline-block;
    vertical-align: top;
    margin: 25px 25px;
    width: 20%;
    min-width: 50px;
    padding: 10 px 12px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0 , 0, 0, 0.2);
    padding: 20px;
      /* Remove the margin from the first image */
    transition: 0.2s ease;
    position: relative;
    
 }
  .product-card img {
    width: 105%;
    border-radius: 20px;
    height: 300px; /* Set a fixed height */
    object-fit: cover;
    margin :15px -4px;
 /* Set a fixed width */
     /* Ensure the image covers the entire area */
  }
.product-card:hover{
    box-shadow: 20px 20px 30px rgba(0 , 0, 0, 0.6);

  }

  .product-card:nth-child(1) {
    margin-left: 70px; /* Remove the margin from the first image */
}
</style>
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="images/logo.png" class="logo" alt="" height="50" width ="50" ></a>
     <div>
            <ul id="navbar">
                <li><a  href="thrift.php">Home</a></li>
                <li><a  class="active" href="shop.php">Shop</a></li>
                <li><a  href="seller.html">Seller</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a  href="account.php"><i class="fa-solid fa-user"></i></a></li>
           </ul>
        </div>
        </section>

<section id="page-header">
           
            <h2>#Stayhomeandshop</h2>
            
            <p>Save more money</p>
            
            </section>
       
 
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



   </section>
    <footer class="section-p1">
                    <div class="col">
                        <img src="img/logo.png" alt="">
                        <h4>Contact</h4>
                        <p><strong>Address:</strong> 19, Late Prin, V.K. Joag Path, Pune 411001</p>
                        <p><strong>Phone:</strong> 26163149</p>
                        <p><strong>Hours:</strong>10:00-18:00, Mon-Sat</p>
                        
                    </div>
                </div>
                <div class="col">
                    <h4>About</h4>
                    <a href="about.html">About us</a>
                    <a href="about.html">Information</a>
                    <a href="about.html">Privacy Policy</a>
                    <a href="about.html">Terms & Conditions</a>
                    <a href="contact.html">Contact us</a>
                </div>
                <div class="col">
                    <h4>My Account</h4>
                    <a href="login.html">login In</a>
                    <a href="signup.html">Sign In</a>
                    <a href="contact.html">Help</a>
                </div>
                
    </footer>           
   </body>
</html>