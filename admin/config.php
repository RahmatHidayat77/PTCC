<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost","root"," ");
mysqli_select_db($con, "db_kios") or die(mysqli_error($con));
?>
