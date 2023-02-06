<?php
  require "connections/connection.php"
  $user = $_POST["user"];
  $name = $_POST["name"];
  $data = $_POST["data"];
  $dane = $_POST["sound_base64"];
  $des = $_POST["des"];
  $sql = "USE task_maciej";
  

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $sql = "INSERT INTO sound (project_name, czas, autor, base64_data)
VALUES ($name, $data, $user, $dane)";
$conn->close();
?>

