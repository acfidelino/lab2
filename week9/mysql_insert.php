<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprogss211db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (firstname, lastname, email, gender, comments, website)
VALUES ('$name', '$website', '$email', '$gender', '$comment', '$website')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>