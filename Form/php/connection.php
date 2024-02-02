<?php
session_start();

$firstname = $_SESSION["firstname"];
$middlename = $_SESSION["middlename"];
$lastname = $_SESSION["lastname"];
$email = $_SESSION["email"];
$datepicker = $_SESSION["datepicker"];
$gender = $_SESSION["gender"];
$mobileno = $_SESSION["mobileno"];
$password = $_SESSION["password"];
$cpassword_ = $_SESSION["cpassword"];
$address = $_SESSION["address"];
$city = $_SESSION["city"];
$state = $_SESSION["state"];
$pincode = $_SESSION["pincode"];
$hobbiee = $_SESSION["hobbiee"];
$otherHobbiee = $_SESSION["otherHobbiee"];
$educationlevel = $_SESSION["educationlevel"];
$major = $_SESSION["major"];
$school = $_SESSION["school"];

?>


$array = array('hobbiee');
         $hobbiee = implode(",", $hobbiee);
         
  $array = array('educationlevel');
     $educationlevel = implode(",",$educationlevel);

     $array = array('major');
     $major = implode(",",$major);

     $array = array('school');
     $school = implode(",",$school);









// Database Connection //

// $servername = "localhost";
// $username = "phpmyadmin";
// $password = "Admin@123";

// $conn = new mysqli($servername, $username, $password);
// // Create connesction

// if (!$conn) {
// 	die("Connection failed: " . mysqli_connect_error());
// }
// echo "connection successfull";
// // // Create database //
// $sql = "CREATE DATABASE myForm;";
// $result = $conn->query($sql);

// if ($result) {
// 	echo "Database created successfully";
// } else {
// 	echo "Error creating database: " . mysqli_error($conn);
// }

// // Create Table //

// mysqli_close($conn);
// header('location: table.php');
