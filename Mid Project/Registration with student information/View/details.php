<?php  
include '../Controller/Controller.php' ;

$name = $_GET['name'];

$student = studentInfo($name);

	echo $student['name'];
	echo "<br>";
	echo $student['email']; 
	echo "<br>";
	echo $student['un'];
	echo "<br>";
	echo $student['gender'];
	echo "<br>";
	echo $student['dob'];
	echo "<br>";

?>