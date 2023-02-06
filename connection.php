<?php
  $servername = "localhost";
  $username = "root";
  $conn = new mysqli($servername, $username);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
return "Connected successfully";
  $username = $_POST['user'];
  $name = $_POST["IMG_id"];
  $data = $_POST["data"];
  $opis = $_POST["data"]
  $dane = $_POST["base64"];
?>
