<?php
$servername = "localhost";
$username = "webprogss211";
$password = "webprogss211";
$dbname = "webprogss211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO acfidelino_myguests (name, email, gender, comments, website)
VALUES ('$name', '$email', '$gender', '$comment', '$website')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>