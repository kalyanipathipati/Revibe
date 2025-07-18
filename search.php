<!DOCTYPE HTML>
<html>
<head>
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
</head>
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
<?php
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "";
$database = "users";
$conn = new mysqli($servername, $username, $password, $database);

$select_query = "SELECT * from `sellers` LIMIT 9"; // Limit the query to fetch only 8 records
$result_query = mysqli_query($conn, $select_query);

// Include your database connection file if not already included
// Replace 'your_connection_file.php' with the actual filename
//require_once 'thrift.php';

if(isset($_GET['query'])) {
    // Get the search query from the form
    $search_query = $_GET['query'];

    // Perform a search query
    $search_query = mysqli_real_escape_string($conn, $search_query); // Prevent SQL injection
    $search_query = htmlspecialchars($search_query); // Prevent XSS attacks

    // Search for products based on product name or description
    $search_sql = "SELECT * FROM sellers WHERE product_name LIKE '%$search_query%' OR product_details LIKE '%$search_query%'";
    $search_result = mysqli_query($conn, $search_sql);

    // Display search results
    if(mysqli_num_rows($search_result) > 0) {
        // Output each search result
        while($row = mysqli_fetch_assoc($search_result)) {
            // Display the product details
            echo "<div class='product-card'>";
            echo "<img src='./product_images/".$row['product_image']."' alt='' class='card-img' onclick='showModal(\"".$row['product_image']."\")'>";
            echo "<h2 class='product-title'>".$row['product_name']."</h2>";
            echo "<h4 class='product-description'>".$row['product_details']."</h4>";
            echo "<p class='product-price'>Rs ".$row['product_price']."</p>";
            echo "<p class='seller_name'>Seller name-".$row['seller_name']."</p>";
            echo "<p class='contact_number'><a href='getcontact.php'>GET NUMBER</a></p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
}
?>

</body>
<html>