<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if (!empty($username)){
	if (!empty($password)){

		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "testdb";

		// Create connection
		$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		else{
			$sql = "INSERT INTO account (username, password) values ('$username','$password')";
			if ($conn->query($sql)){
				echo "New record is inserted sucessfully";
			}

			else{
				echo "Error: ". $sql ." ". $conn->error;
			}
			$conn->close();
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}
}
else{
	echo "Username should not be empty";
	die();
}

?>
