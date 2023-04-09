<?php
require 'Model.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: http://localhost:8081/Final%20Project(guardian)/Login/Login.php");