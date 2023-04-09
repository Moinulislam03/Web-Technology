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

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
<style> 
.row1 {  
  display: flex;
  flex-wrap: wrap;
}
.side {
  flex: 80%;
  background-color: #f1f1f1;
  padding: 20px;
}
.main {
  flex: 20%;
  background-color: white;
  padding: 20px;
}
</style>
</head>
<body>

<div class="menu">
<?php require 'Pnavbar.php';?>
</div>

 <div class="row1">
 <div class="side">
<br><br>
  <b>CHANGE PASSWORD:</b>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <br>
    Current Password : <input type="password" name="Cpass" value="<?php echo $currentPassword;?>"><span class="red">* <?php echo $currentPasswordErr ?></span>
    <br><br>

    New Password :<input type="password" name="Npass" value="<?php echo $newPassword;?>"><span class="red">*<?php echo $newPasswordErr ?></span>
    <br><br>
    Retype New Password  :<input type="password" name="Rpass" value="<?php echo $retypeNewPassword;?>"><span class="red">*<?php echo $retypeNewPasswordErr ?></span>
    <br><br>

    <hr>
    <input type="submit" name="submit" value="Submit">
  
  </form>
  </div>

 <div class="main">
<div id="links"> 
 <ul>

<li><a style ="background-color: purple; color: white; padding: 4px 10px;" 
href="http://localhost:8081/Final%20Project(guardian)/View&Update.php"> View and Update Profile</a></li><br> 
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Final%20Project(guardian)/ChangePassword.php"> Change Password </a></li><br> 
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Final%20Project(guardian)/ViewStudyMaterials.php"> View Study Materials</a></li> <br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Final%20Project(guardian)/ViewStudentsGradeReport.php"> View Students Grade Report </a></li> <br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Final%20Project(guardian)/Feedback.php"> Feedback </a></li><br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Final%20Project(guardian)/Loginpage.php"> Log out </a></li><br>

 </ul>

</div> <br><br><br><br><br><br><br><br><br>
</div></div>

<div class="menu">
<?php include 'footer.php';?>
</div>

</body>
</html>