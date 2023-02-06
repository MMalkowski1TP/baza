<?php
  require "connections/connection.php"
  $user = $_POST["user"];
  $name = $_POST["name"];
  $data = $_POST["data"];
  $wpis = $_POST["wpis"];
  
  $sql = "USE task_maciej";
  


  $sql = "INSERT INTO wpis (project_name, czas, autor, wpis)
VALUES ($name, $data, $user, $dane)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "INSERT INTO wpis (project_name, czas, autor, wpis)
VALUES ($name, $data, $user, $dane)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>
