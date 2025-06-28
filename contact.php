
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <script src="https://kit.fontawesome.com/f4101b5333.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add CSS styles for form and people classes */
        .people {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .people > div {
            text-align: center;
        }

        .people img {
            width: 150px;
            height: 150px;
            border-radius: 20%;
            margin-bottom: 10px;
        }

        .people p {
            font-size: 14px;
            line-height: 1.6;
        }

        form {
        width: 50%; /* Adjusted width */
        max-width: 600px; /* Set maximum width */
        max-height: 450px; /* Set maximum height */
        background-color: #ffffff;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
        transition: box-shadow 0.3s ease-in-out;
        
        margin-top: 2%;
        margin-left: 220px;
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
        margin-left:80px;
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
    
    
    #contact-details span {
            color:#088178;
            font-weight:bold;
        }
    </style>
        

</head>
<body>
   


<section id="header">
    <a href="#"><img src="images/logo.png" class="logo" alt="" height="50" width="50"></a>
    <div>
        <ul id="navbar">
            <li><a href="thrift.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="seller.html">Seller</a></li>
            <li><a href="about.html">About</a></li>
            <li><a class="active" href="contact.html">Contact</a></li>
            <li><a href="account.php"><i class="fa-solid fa-user"></i></a></li>

        </ul>
    </div>
</section>
<section id="page-header" class="about-header">
    <h2>
        Let's talk!!
    </h2>
    <p>Leave A Message We Love To Hear From You</p>
</section>
<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our locations or contact us today</h2>
        
        <div>
            <li>
            <i class="fa-solid fa-map-location-dot"></i>
                <p>19, Late Prin, V.K. Joag Path, Pune 411001 </p>
            </li>
            <li>
            <i class="fa-solid fa-envelope-open-text"></i>
                <p>contactrevibe@gmail.com</p>
            </li>
            <li>
            <i class="fa-solid fa-phone"></i>
                <p>24*7</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.930138814338!2d73.87774350801239!3d18.532058882490976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0f88217370f%3A0x6d37fbed17f04892!2sNess%20Wadia%20College%20of%20Commerce!5e0!3m2!1sen!2sin!4v1709914791355!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>


    <div class="people">
        <div>
            <img src="images/hero2.png" alt="">
            <p><span>Kalyani Pathipati</span>Senior Marketing <br> Phone :9075365687<br>E-mail:kprevibe@gmail.com</p>
        </div>
        <div>
            <img src="images/hero2.png" alt="">
            <p><span>Cheryl Ashirvadam</span>Operations Management <br> Phone :7350753390 <br>E-mail:carevibe@gmail.com</p>
        </div>
    
    </div>
    
    <form action="" method="post">
        <span><center>LEAVE A MESSAGE</center></span>
        <h2><center>We Love To Hear From You</center></h2>
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="email" placeholder="Your E-mail">
        <input type="text" name="subject" placeholder="Your Subject">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        
        <input type="submit" value="Submit">
    </form>
    
    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "users";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if all form fields are set
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            // Form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            // SQL query to insert data into the review table
            $sql = "INSERT INTO review (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

            if ($conn->query($sql) === TRUE) {
                echo "Review submitted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "All form fields are required";
        }

        $conn->close();
    }
    ?>


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

</body>
</html>
