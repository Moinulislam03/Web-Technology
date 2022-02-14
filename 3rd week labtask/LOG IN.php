<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
  </style>
  <style type='text/css'>
    fieldset {
  font-size:15px;
  padding:15px;
  width:350px;
  line-height:2;}
  </style>
</head>
<body>

<?php

$userNameErr = $passwordErr =  "";
$userName = $password =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $userNameErr = "Name is required";
  } else {
    $userName = $_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$userName)) {
      $userNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = $_POST["password"];

    if (!preg_match("/@[0-9]@/",$password<8)) {
      $passwordErr = "Password must not less than 8 characters";
    }
   } 
 
}
  
?>
  <fieldset> 
  <legend><b> LOGIN</b> </legend>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    User Name: <input type="text" name="name" value="<?php echo $userName;?>"><span class="red">*<?php echo $userNameErr ?></span>
    <br>

    Password  :<input type="password" name="password" value="<?php echo $password;?>"><span class="red">*<?php echo $passwordErr ?></span>
    <br>
    <hr>
    <input type="checkbox" name="tnc" value="Remember Me">Remember Me<br>
    <input type="submit" name="submit" value="Submit">

   <a  href="">Forgot Password? <span class="badge"></span></a>
  
  </form>
</fieldset>
<br>
<br>
<br>
<br>

<?php
echo "<h2>Your Input:</h2>";
echo $userName;
echo "<br>";
echo $password;

?>

</body>
</html>