<?php
  require "connections/connection.php";
  $username = $_POST['user'];
  $name = $_POST["IMG_id"];
  $data = $_POST["data"];
  $dane = $_POST["base64"];
  
  $sql = "USE task_maciej";
  


  $sql = "INSERT INTO image (project_name, czas, autor, base64_data)
  VALUES ($name, $data, $username, $dane)";

$conn->close();
?>
