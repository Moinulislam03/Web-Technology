<?php 
session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:http://localhost:8081/Project/Login/Login.php");
}
else {
	header("location:http://localhost:8081/Project/Login/Login.php");
}

 ?>