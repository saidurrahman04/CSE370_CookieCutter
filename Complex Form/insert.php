<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "testdb";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully \n";

$sql = "INSERT INTO userinfo (username, password, gender, email, phoneCode, phone) values ('$username', '$password', '$gender', '$email', '$phoneCode', '$phone') ";
      
if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
	}
	else{
echo "Error: ". $sql ." ". $conn->error;
     }
$conn->close();
?>
