<?php

// include_once "db-apcwebprog.php";
include_once "../../lab3/ci4/app/Views/pages/db-localhost.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $website = htmlspecialchars($_POST['website']);
  $comment = htmlspecialchars($_POST['comment']);
  $gender = htmlspecialchars($_POST['gender']);

  $sql = "INSERT INTO myguests (name, email, gender, comments, website)
          VALUES ('$name', '$email', '$gender', '$comment', '$website')";

  if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/lab3/ci4/public/guest?query=success');
  } else {
    header('Location: http://localhost/lab3/ci4/public/guest?query=fail');
  }

  $conn->close();
}
?>