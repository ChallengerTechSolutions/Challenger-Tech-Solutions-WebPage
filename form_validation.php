<?php
    $usersNameErr = $usersEmailErr = $usersPasswordErr = "";
    $usersName = $usersEmail = $usersPassword = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $usersNameErr = "Username is required";
      mysqli_close($conn);
    } else {
      $usersName = test_input($_POST["username"]);
    }
  
    if (empty($_POST["email"])) {
      $usersEmailErr = "Email is required";
      mysqli_close($conn);
    } else {
      $usersEmail = test_input($_POST["email"]);
    }
  
    if (empty($_POST["password"])) {
      $usersPasswordErr = "password is required";
      mysqli_close($conn);
    } else {
      $usersPassword = test_input($_POST["password"]);
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $sql = "INSERT INTO test (usersName, usersPassword, usersEmail)
VALUES ('$usersName', '$usersPassword', '$usersEmail')";

    if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        mysqli_close($conn);
    }
?>