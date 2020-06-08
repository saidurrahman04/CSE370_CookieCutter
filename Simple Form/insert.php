<?php
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];


if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "store";

// Create connection
    $conn = new mysqli ($host, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } 
    else {
      $sql = "INSERT INTO register (username, password, gender, email, phoneCode, phone) values ('$username', '$password', '$gender', '$email', '$phoneCode', '$phone') ";
      if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
      }
      else{
        echo "Error: ". $sql ." ". $conn->error;
      }
      $conn->close();
    }
    
    //connection code ends here

} else {
 echo "All field are required";
 die();
}
?>
