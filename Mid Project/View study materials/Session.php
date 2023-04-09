<?php

session_start();

	if (isset($_POST['logout'])) {
		session_destroy();
		unset($_COOKIE['user']);
		setrawcookie('user', null, -1);
		header('Location: http://localhost:8081/Project/Login/Login.php');
	}
?>