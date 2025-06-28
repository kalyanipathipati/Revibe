<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>THRIFT STORE</title>
        <script src="https://kit.fontawesome.com/f4101b5333.js" crossorigin="anonymous"></script>
    </head>
    <style>
    #hero {
    
    background: #e3e6f3 url("images/heros.png") no-repeat;
    height: 90vh;
    width: 100;
    background-size: 600px 600px;
    background-position: top 25% right 0;
    padding: 0 80px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    object-fit: cover;
    margin-left:-15px;
    margin-right:-2px;
 width:86.72%;
    
}

#hero h4 {
    padding-bottom: 15px;
}
#hero h1 {
    color: #088178;
}
#hero button {
    background: center/cover url("images/label.png") no-repeat;
    background-color: transparent;
    color: #088178;
    border: 0;
    padding: 14px 80px 14px 65px;
    background-repeat: no-repeat;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;
}

    
    .product-card{
display: flex;
justify-content: space-between;
padding: 1000px;
flex-wrap: wrap;

}

.product-card {
display: inline-block;
vertical-align: top;
margin: 25px 25px;
width: 15%;
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

margin-left: -19px;
margin-top: -20px;
height: 300px; /* Set a fixed height */
object-fit: cover;
width: 194px;
border-radius: 20px;

/* Set a fixed width */
 /* Ensure the image covers the entire area */
}
.product-card img:hover {
 /* Scale up on hover */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box-shadow on hover */
}
.product-card:hover{

box-shadow: 20px 20px 30px rgba(0 , 0, 0, 0.6);

}
    .modal {
        display: none;
        position: fixed;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
        max-width: 90%;
        max-height: 90%;
        z-index: 1000;
    }
    .modal img {
        margin-top: 0;
        max-width: 100%;
        max-height: 300px;
        object-fit: contain;
        border: 2px solid #e3e6f3;
    }
    .modal img:hover {
transform: scale(1.1); /* Scale up on hover */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box-shadow on hover */
}
    .thumbnails {
        display: flex;
        justify-content: center;
        margin-top: 5px;
    }
    .thumbnail {
        width: 40px;
        height: 40px;
        margin: 0 5px;
        border: 1px solid #ccc;
        cursor: pointer;
    }
    .modal-thumbnail {
        display: inline-block;
        width: 100px;
        height: 100px;
        margin: 0 5px;
        border: 1px solid #e3e6f3;
        cursor: pointer;
        background-color: transparent; /* Remove background color */
    }
    .modal-thumbnail img {
        width: 200%;
        height: 200%;
        object-fit: cover;
    }
    .image-modal {
        display: none;
        position: fixed;
        top: 60%;
        left: 50%;
        transform: translateX(-50%);
        padding: 20px;
        z-index: 1001;
    }
    .image-modal img {
        max-width: 500%;
        height: auto;
        margin: auto;
    }
    /* Overlay container */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);; /* Semi-transparent background */
        z-index: 999; /* Ensure it's above other content */
        display: none; /* Initially hidden */
        backdrop-filter: blur(5px); /* Apply blur effect */
    }
    .thumbnail,
.modal-thumbnail {
width: 60px; /* Set a fixed width for the thumbnails */
height: 60px;
margin: 30px 10px; /* Adjust margin as needed */
border: 2px solid #e3e6f3;
cursor: pointer;
display: flex;
justify-content: center;
align-items: center;
transition: transform 0.2s ease, box-shadow 0.2s ease;
}


.thumbnail:hover,
.modal-thumbnail:hover {
transform: scale(1.1); /* Scale up on hover */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box-shadow on hover */
}

.thumbnail img,
.modal-thumbnail img {
max-width: 100%;
max-height: 100%;
object-fit: cover;
border-radius: 10px; /* Add border radius to images */
}
    /* Different font styles and colors for various elements */
    .product-title {
        font-size: 20px;
        color: black;
         /* Green color */
        font-weight: bold;
        text-align:center;
    }
    .product-title:hover {
transform: scale(1.1); /* Scale up on hover */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box-shadow on hover */
}
    .product-description {
        font-size: 16px;
        color: gray; /* Dark gray color */
        text-align:center;
    }
    .product-description:hover {
        transform: scale(1.1);
text-decoration: underline; /* Underline the text on hover */
}
    .product-price {
        font-size: 18px;
        color: #088178;/* Pink color */
        font-weight: bold;
        text-align:center;
    }
    .product-price:hover {
transform: scale(1.1); /* Scale up on hover */
box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Add box-shadow on hover */
}
    .seller_name {
        font-size: 16px;
        color: black; /* Blue color */
        text-align:center;
    }
    .seller_name:hover {
        transform: scale(1.1);
text-decoration: underline; /* Underline the text on hover */
}
.contact_number a {
    text-align : center;
    font-size: 14px;
    color: #088178; /* Orange color */
    border: 1px solid #088178; /* Border color same as text color */
    padding: 5px 10px; /* Add padding to create space around the text */
    transition: background-color 0.3s, color 0.3s; /* Apply transition to color change */
    border-radius: 5px; /* Add border radius for rounded corners */
    text-decoration: none; /* Remove underline */
    padding-left:25px;
    padding-right:25px;
}

.contact_number a:hover {
    background-color: #088178; /* Change background color on hover */
    color: #fff; /* Change text color on hover */
}


.close-modal {
    position: fixed;
    top: -280px; /* Adjust top position */
    left: 670px; /* Adjust right position */
    font-size: 24px; /* Increase font size */
    cursor: pointer;
    color: black; /* Change color */
    background-color: white; /* Background color */
    border: none;
    border-radius: 50%; /* Make it circular */
    padding: 5px; /* Add padding for better clickability */
    z-index: 1002; /* Ensure it's above other content */
    display: flex;
    justify-content: center;
    align-items: center;
}


#header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px 80px;
  background: #e3e6f3;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
  z-index: 999;
  position: sticky;
  margin-top:-10px;
  font-family: 'Spartan', sans-serif;
 object-fit:cover;
 margin-left:-20px;
 margin-right:-8px;
 top: 0;
  left: 0;
}

#navbar {
    display:flex;
    align-items: center;
    justify-content: center;
    
 
  
    
  z-index: 999;
  position: sticky;
  top: 0;
  left: 0;
  font-family: 'Spartan', sans-serif;
}


#navbar li {
    list-style: none;
    padding: 0 20px;
    position: relative;
    
}
#navbar li a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
} 
#navbar li a:hover,
#navbar li a.active{
    color: #088178;
}
#navbar li a.active::after,
#navbar li a:hover::after {
    content:"";
    width:30%;
    height:2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left:20px;
}


#navbar li {
    list-style: none;
    padding: 0 20px;
    position: relative;
    font-family: Arial, sans-serif;
}
#navbar li a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3s ease;
    font-family: Arial, sans-serif;
} 
#navbar li a:hover,
#navbar li a.active{
    color: #088178;
}
#navbar li a.active::after,
#navbar li a:hover::after {
    content:"";
    width:30%;
    height:2px;
    background: #088178;
    position: absolute;
    bottom: -4px;
    left:20px;
}

#page-header{
background: url("images/sbanner2.png");
width: 100;
height: 40vh;
background-size: cover;
display: flex;
justify-content: center;
text-align: center;
flex-direction: column;
padding: 14px;
margin-left: -8px;
margin-right: -8px;
}

#page-header h2,
#page-header p{
color: #fff;
}
#banner{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
text-align: center;
background: url("images/banner1.png") no-repeat;
width: 100%;
height: 60vh;
background-size: cover;
background-position: center;
}

#banner h4 {
color: #fff;
font-size: 16px;

}

#banner h2{
color: #fff;
font-size: 30px;
padding: 10px 0;
}
#banner h2 span {
color: #ef3636;
}

#banner button:hover{
background: #088178;
color: #fff;
}

#sm-banner{
display: flex;
justify-content: space-between;
flex-wrap: wrap;
}
#sm-banner .banner-box{
display: flex;
flex-direction: column;
justify-content: center;
align-items: flex-start;
text-align: center;
background: url("images/sbanner2.png") no-repeat;
width: 100%;
height: 80vh;
background-size:cover;
background-position: center;
padding: 30px;

}


#sm-banner{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
#sm-banner .banner-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    text-align: center;
    background: url("images/sbanner2.png") no-repeat;
    width: 100%;
    height: 80vh;
    background-size:cover;
    background-position: center;
    padding: 30px;

}


#banner3 {
    
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    padding: 0 50px;
}
#banner3 .banner-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background: url("images/sbanner1.png") no-repeat;
    width: 30%;
    height: 30vh;
    background-size:cover;
    background-position: center;
    padding: 20px;
    margin-bottom: 20px;

}
#banner3 .banner-box2{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background: url("images/shopbanner.png") no-repeat;
    width: 30%;
    height: 30vh;
    background-size:cover;
    background-position: center;
    padding: 20px;
    margin-bottom: 20px;

}
#banner3 .banner-box3{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background: url("images/sbanner3.png") no-repeat;
    width: 30%;
    height: 30vh;
    background-size:cover;
    background-position: center;
    padding: 20px;
    margin-bottom: 20px;

}
#banner3 h2{
    color: #fff;
    font-weight: 900;
    font-size: 22px;
}
#banner3 h3{
    color: #ec544e;
    font-weight: 800;
    font-size: 15px;
}

footer{
    font-family: 'Spartan',sans-serif; 
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
   
}
footer .col{
    display: flex;
   flex-direction: column;
   align-items: flex-start;
   margin-bottom: 10px;
}

footer .logo{
    margin-bottom: 10px;
}

footer h4{
    font-size: 18px;
    padding-bottom: 0px;
}

footer p{
    font-size:  16px;
    margin: 0 0 8 px 0;
}

footer a{
    font-size:  16px;
    text-decoration: none;
    color: #222;
    margin: 10px;
}

footer .follow{
    margin-top: 10px;

}
footer .follow i{
   color: #465b52;
   padding-right: 4px;
   cursor: pointer;
}

footer .follow i:hover,
footer a:hover {
    color: #088178;
}
/* CSS for search form */
form {
    display: flex;
    align-items: center;
}

input[type="text"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 5px;
    width: 200px;
    outline: none;
}

button[type="submit"] {
    padding: 8px 15px;
    background-color: #188078; /* Set background color */
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s; /* Add transition effect */
}

button[type="submit"]:hover {
    background-color: #0c5e52; /* Darker background color on hover */
}

    </style>
    <body>
       
        <section id="header">
            <a href="#"><img src="images/logo.png" class="logo" alt="" height="50" width ="50" ></a>
     <div>
            <ul id="navbar">
            <li><form method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search products...">
        <button type="submit">Search</button>
    </form></li>
                <li><a class="active" href="thrift.php">Home</a></li>
                <li><a  href="shop.php">Shop</a></li>
                <li><a  href="seller.html">Seller</a></li>
                <li><a  href="about.html">About</a></li>
                <li><a  href="contact.php">Contact</a></li>
                <li><a  href="account.php"><i class="fa-solid fa-user"></i></a></li>
               
           </ul>
        </div>
        </section>
        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons & up to 70% off!</p>
            <a href="shop.php">
                <button class="normal">Explore</button>
            </a>
        </section>
        

        <?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);

$select_query = "SELECT * from `sellers` LIMIT 9"; // Limit the query to fetch only 8 records
$result_query = mysqli_query($conn, $select_query);

$count = 0; // Initialize a counter

while ($row = mysqli_fetch_assoc($result_query)) {
    $seller_name = $row['seller_name'];
    $contact_number = $row['contact_number'];
    $product_name = $row['product_name'];
    $product_details = $row['product_details'];
    $product_image = $row['product_image'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
    ?>
    
    <?php
    $count++; // Increment the counter
    if ($count >= 9) { // Check if 8 records have been displayed
        break; // Exit the loop
    }
    ?>
    
    <div class="product-card">
            <img src="./product_images/<?php echo $product_image; ?>" alt="" class="card-img"
                 onclick="showModal('<?php echo $product_image; ?>')">
            <h2 class="product-title"><?php echo $product_name; ?></h2>
            <h4 class="product-description"><?php echo $product_details; ?></h4>
            <p class="product-price">Rs <?php echo $product_price; ?></p>
            <p class="seller_name">Seller name-<?php echo $seller_name; ?></p>
            
            <p class="contact_number"><a href="getcontact.php">GET NUMBER</a></p>
            <!--<p class="contact_number">Phone no-<?php echo  $contact_number; ?></p>-->
            <div class="image-modal" id="image-modal-<?php echo $product_image; ?>">
                <span class="close-modal" onclick="closeModal('<?php echo $product_image; ?>')">&times;</span>

                <div class="thumbnails">
                    <!-- Main product image thumbnail -->
                    <div class="modal-thumbnail"
                         onclick="changeModalImage('<?php echo $product_image; ?>', '<?php echo $product_image; ?>')">
                        <img src="./product_images/<?php echo $product_image; ?>" alt=""
                             data-image="<?php echo $product_image; ?>">
                    </div>
                    <!-- Additional image thumbnails -->
                    <div class="modal-thumbnail"
                         onclick="changeModalImage('<?php echo $product_image1; ?>', '<?php echo $product_image; ?>')">
                        <img src="./product_images/<?php echo $product_image1; ?>" alt=""
                             data-image="<?php echo $product_image1; ?>">
                    </div>
                    <div class="modal-thumbnail"
                         onclick="changeModalImage('<?php echo $product_image2; ?>', '<?php echo $product_image; ?>')">
                        <img src="./product_images/<?php echo $product_image2; ?>" alt=""
                             data-image="<?php echo $product_image2; ?>">
                    </div>
                    <div class="modal-thumbnail"
                         onclick="changeModalImage('<?php echo $product_image3; ?>', '<?php echo $product_image; ?>')">
                        <img src="./product_images/<?php echo $product_image3; ?>" alt=""
                             data-image="<?php echo $product_image3; ?>">
                    </div>
                </div>

                
            </div>
        </div>

    <?php
    }
    $conn->close();
    ?>

</div>

<div class="modal" id="modal">
    <img id="modal-img" src="" alt="Modal Image">
</div>

<script>
   
    function closeModal(imageName) {
        const modal = document.getElementById('modal');
        const modalContent = document.getElementById('image-modal-' + imageName);
        const thumbnails = modalContent.querySelectorAll('.modal-thumbnail');
        
        modal.style.display = 'none';
        modalContent.style.display = 'none';
        thumbnails.forEach(thumbnail => {
            thumbnail.style.display = 'none';
        });
        
        document.querySelector('.overlay').style.display = 'none';
    }
    function changeModalImage(imageName, mainImageId) {
        const modalImg = document.getElementById('modal-img');
        modalImg.src = './product_images/' + imageName;
        document.getElementById(mainImageId).src = './product_images/' + imageName;
    }

    function showModal(imageName) {
        const modal = document.getElementById('modal');
        modal.style.display = 'block';

        const modalContent = document.getElementById('image-modal-' + imageName);
        modalContent.style.display = 'block';

        const modalImg = document.getElementById('modal-img');
        modalImg.src = './product_images/' + imageName;

        const thumbnails = modalContent.querySelectorAll('.modal-thumbnail');
        thumbnails.forEach(thumbnail => {
            thumbnail.style.display = 'inline-block';
        });

        modal.addEventListener('click', () => {
            closeModal();
        });

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                changeModalImage(thumbnail.querySelector('img').getAttribute('data-image'), 'main-image-' + imageName);
                thumbnails.forEach(thumb => {
                    thumb.style.display = 'inline-block';
                });
                thumbnail.style.display = 'none';
            });
        });

        document.querySelector('.overlay').style.display = 'block';
    }
</script>
<div class="overlay"></div>


        <section id="banner3">
       
            <div class="banner-box">
            <h2>Be The One!!</h2>
                <h3> Friendly Community</h3>
                
            </div>
            <div class="banner-box banner-box2">
                <h2>Wohooo!!</h2>
                <h3>New Arrivals</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>Unlimited</h2>
                <h3>Styles For You!!</h3>
            </div>
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
                    <a href="#" onclick="alert('Privacy Policy: We may collect personal information that you provide to us when you interact with the Website, such as when you register for an account,fill out a contact form, or make a purchase. The types of personal information we may collect include-Name ,Email ,Contact number informationWe may also automatically collect certain information about your device and usage of the Website, including your IP address, browser type, operating system, referring URLs, pages viewed, and other similar information.')">Privacy Policy</a>
                    <a href="#"  onclick="alert('TERMS AND CONDITIONS:1.Product Condition: Products listed on the website may vary in condition due to their pre-owned nature. Customers should review product descriptions and images carefully before making a purchase. 2.Availability: Product availability is subject to change without notice. The thrift store reserves the right to modify or discontinue products at any time without liability. 3.Order Confirmation: Upon placing an order, customers will receive an email confirmation with details of their purchase. This confirmation serves as acknowledgment that the order has been received.4.Shipping and Delivery: Shipping times and costs may vary depending on the customers location and the shipping method selected. Estimated delivery times are provided for reference only and are not guaranteed.5.Returns and Exchanges: The thrift store may accept returns or exchanges within a specified period (e.g., 30 days) from the date of purchase. Returned items must be in their original condition and packaging.')" >Terms & Conditions</a>
                    <a href="contact.html">Contact us</a>
                </div>
                <div class="col">
                    <h4>My Account</h4>
                    <a href="login.html">login In</a>
                    <a href="signup.html">Sign In</a>
                    <a href="contact.html">Help</a>
                </div>
                
                </footer>
                
               
          
        <script src="script.js"></script>
    </body>
</html>
