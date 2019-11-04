<?php
function openConn() {
  $servername = "127.0.0.1";
  $username = "JohnDoe";
  $password = "Password1!!!";
  $dbname = "wingswingswings";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

function closeConn($conn) {
  $conn->close();
}
?>
