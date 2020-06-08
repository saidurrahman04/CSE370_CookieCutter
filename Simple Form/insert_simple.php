<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


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

$sql = "INSERT INTO register (firstname, lastname) values ('$firstname', '$lastname') ";

if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
	}
	else{
echo "Error: ". $sql ." ". $conn->error;
      }
$conn->close();
?>
