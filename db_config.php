<?php 
$conn = new mysqli ("localhost","root","","result");
if($conn->connect_error) {
  die("Connect Error : ".$conn->connect_error); 
}
?>
