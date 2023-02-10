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

$sql = "SELECT id, name, email, website, reg_date
        FROM acfidelino_myguests";
$result = $conn -> query($sql);

if($result->num_rows>0){
    // output data of each rows:
    while($row = $result->fetch_assoc()){
        echo "id: ". $row["id"]. 
        "- Name: ". $row["name"].
        "- Email: ". $row["email"]. "<br>";
    }
} else {
    echo "No results";
}

$conn -> close()

?>