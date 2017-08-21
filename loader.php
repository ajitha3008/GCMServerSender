<?php
require_once('config.php');
require_once('function.php');

// connecting to mysql
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
// selecting database
if(!mysqli_select_db($conn, DB_DATABASE))
  print "Not connected with database.";

?>