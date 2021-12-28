<?php
$servername = "sql6.freesqldatabase.com";
$username = "sql6461812";
$password = "mXwCu2ChkH";

try {
  $conn = new PDO("mysql:host=$servername;dbname=sql6461812", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>