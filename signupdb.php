<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $email = $_POST["email"];
   $pass = $_POST["password"];
}
if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    die("EMAIL should be valid ");
}
if(strlen($_POST["password"])<8){
    die("password must be atleast 8 digits");
}
if(!preg_match("/[a-z]/i",$_POST['password'])){
    die("password must contain atleast one character");
}
if($_POST['password']!==$_POST['con_password']){
    die("password must match");
}
// //***for making password more safe  */
//  $password_hash=password_hash($_POST['password'],  PASSWORD_DEFAULT);
// print_r($_POST);
// var_dump($password_hash);

$servername="localhost";
$username="root";
$password="";
$database="project";
$mysqli=new mysqli($servername,$username,$password,$database);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
// prepare statement to check if email already exists
$stmt = $mysqli->prepare("SELECT login_id FROM login WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
// if email already exists, return error
if ($result->num_rows > 0) {
    http_response_code(400);
    echo "Email already in use,so please have a different email.";
   // echo json_encode(array("error" => "Email already in use,so please have a different email."));
    exit();
}
// insert new user account
$stmt = $mysqli->prepare("INSERT INTO login(email, pass) VALUES (?, ?)");
$stmt->bind_param("ss",$email, $pass);
$stmt->execute();
    http_response_code(201);
    // Display alert and redirect to home page
    echo "<script>alert('Sign up successful!'); window.location.href='biling.html';</script>";
    exit();
    //echo "Your account is created sucessfully";
$stmt->close();
// close database connection
$mysqli->close();
?>