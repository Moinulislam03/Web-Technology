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
  .column {
  float: ;
  width: 50%;
  padding: 40px;
  height: 475px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body style="background-color:LavenderBlush;">

<div class="menu">
<?php require '../Profile view + Update/Navbar.php';?>
</div>

<div class="row">
<br>
<div class="column">
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
  <br><br>
  </form>
 </div>

 <div class="column">
<div id="links"> 
 <ul>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;" 
href="http://localhost:8081/Project/Profile%20view%20+%20Update/ProfileView+Update.php"> View and Update Profile</a></li><br> 
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Project/Change%20password/ChangePassword.php"> Change Password </a></li><br> 
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Project/View%20study%20materials/ViewStudyMaterials.php"> View Study Materials</a></li> <br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Project/View%20students%20grade%20report/ViewStudentsGradeReport.php"> View Students Grade Report </a></li> <br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Project/Feedback/Feedback.php"> Feedback </a></li><br>
<li><a style ="background-color: purple; color: white; padding: 4px 10px;"
href="http://localhost:8081/Project/Login/Login.php"> Log Out </a></li>
 </ul>
</div> 
</div>
</div>
<br><br><br>

<div class="menu">
<?php include '../View admission panel/footer.php';?>
</div>

</body>
</html>