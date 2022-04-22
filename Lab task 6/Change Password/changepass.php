<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>

  <style type='text/css'>
   .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: left;
} 
  </style>
<style>
  .column {
  float: left;
  width: 35%;
  padding: 10px;
  height: 280px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 320px;
  position: absolute;
  left: 36%;
  margin-left: 0px;
  top: 102;
}
</style>
</head>
<body>

<div class="menu">
<?php require '../logged in/navbar.php';?>
</div>
<div class="vl"></div>
<div class="myDiv">

<div class="row">

<div class="column">
<div id="links"> 

<ul> 
<li><a href="hhttp://localhost:8081/PHP/Lab%20task%206/Logged%20in/loggedin.php"> Dashboard </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/View%20profile/viewprofile.php"> View Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Edit%20Profile/editprofile.php"> Edit Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/profile%20picture/profilepicture.php"> Change Profile Picture </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Change%20Password/changepass.php"> Change Password </a></li>
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Log%20In/login.php"> Logout </a></li>
</ul> 
</div> 
</div>
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
<br>
<div class="column">

  <fieldset> 
   <legend><b>CHANGE PASSWORD</b> </legend>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <br>
    Current Password : <input type="password" name="Cpass" value="<?php echo $currentPassword;?>"><span class="red">* <?php echo $currentPasswordErr ?></span>
    <br><br>

    New Password  :<input type="password" name="Npass" value="<?php echo $newPassword;?>"><span class="red">*<?php echo $newPasswordErr ?></span>
    <br><br>
    Retype New Password  :<input type="password" name="Rpass" value="<?php echo $retypeNewPassword;?>"><span class="red">*<?php echo $retypeNewPasswordErr ?></span>
    <br><br>

    <hr>
    <input type="submit" name="submit" value="Submit">
  <br><br>
  </form>
</fieldset>
</div>
</div>
</div>

<div class="menu">
<?php include '../Home page/foot.php';?>
</div>
</body>
</html>