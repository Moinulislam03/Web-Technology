<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
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

$currentPasswordErr = $newPasswordErr = $retypeNewPasswordErr = "";
$currentPassword = $newPassword = $retypeNewPassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Cpass"])) {
    $currentPasswordErr = "Current Password is required";
  } else {
    $currentPassword = $_POST["Cpass"];
  }
  if($currentPassword!=12345){
   $currentPasswordErr="Current Password does not Matched";
  }

  if (empty($_POST["Npass"])) {
    $newPasswordErr = "New Password is required";
  } else {
    $newPassword = $_POST["Npass"];
  }
  

  if (empty($_POST["Rpass"])) {
    $retypeNewPasswordErr = "Retype New Password is required";
  } else {
    $retypeNewPassword = $_POST["Rpass"];
  }
  if($retypeNewPassword!=$newPassword){
   $retypeNewPasswordErr="Retyped Password does not Matched";
  }

}
  
?>
  <fieldset> 
   <legend><b>CHANGE PASSWORD</b> </legend>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    Current Password : <input type="password" name="Cpass" value="<?php echo $currentPassword;?>"><span class="red">* <?php echo $currentPasswordErr ?></span>
    <br>

    New Password  :<input type="password" name="Npass" value="<?php echo $newPassword;?>"><span class="red">*<?php echo $newPasswordErr ?></span>
    <br>
    Retype New Password  :<input type="password" name="Rpass" value="<?php echo $retypeNewPassword;?>"><span class="red">*<?php echo $retypeNewPasswordErr ?></span>
    <br>

    <hr>
    <input type="submit" name="submit" value="Submit">
  
  </form>
</fieldset>
<br>
<br>
<br>
<br>

<?php
echo "<h2>Your Input:</h2>";
echo $currentPassword;
echo "<br>";
echo $newPassword;
echo "<br>";
echo $retypeNewPassword;

?>
</body>
</html>