<?php
$host = "localhost";
$user_id = "root";
$password = "";
$database = "CMS";
$hostName = "http://localhost/HospitalManagementSystem/index.php";
$conn = mysqli_connect($host, $user_id, $password, $database);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}