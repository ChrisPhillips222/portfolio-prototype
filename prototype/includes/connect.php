<?php
// define variables and set to empty values


$nameErr = "";
$emailErr = ""; 
$subjErr = "";
$commentErr = "";
$firstName = "";
$lastName = "";
$email = "";
$subject = ""; 
$comment = "";

//set database log in information

$host = "localhost";
$userName = "squimsys_admin";
$password = "TheBarrowMan!3";
$dbName = "squimsys_contactform";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>