<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ashish";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  ?>
  <script> alert("connection is not successfull!!!"); </script>
  <?php
  }


?>