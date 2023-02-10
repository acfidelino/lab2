<!DOCTYPE html>
<html>
<!-- Head -->
<head>
    <title>A.F. Portfolio</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="css/styles.css" >
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/8cbc507dd9.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "navbar.php" ?>
<div class="container">

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

        $sql = "SELECT * FROM myguests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table'>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Comments</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Registration Date</th>
                    </tr>
                    </thead>";
                    // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tbody>
                    <tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["firstname"]." ".$row["lastname"]."</td>
                        <td>".$row["gender"]."</td>
                        <td>".$row["comments"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["website"]."</td>
                        <td>".$row["reg_date"]."</td>
                        </tr>
                        </tbody>";
                    }
        echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

</div>
</body>
</html>