<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'admin/config.php';
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pas=md5($pass);
$query=mysqli_query($con, "select * from admin where uname='$uname' and pass='$pas'")or die(mysqli_error());
if(mysqli_num_rows($query)==1){
	$_SESSION['uname']=$uname;
	header("location:admin/index.php");
}else{
	header("location:index.php?pesan=gagal")or die(mysqli_error());
	// mysqli_error();
}
// echo $pas;
 ?>