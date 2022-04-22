<!DOCTYPE html>
<html>
<head>
  <title>Log In</title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
 
  <style type='text/css'>
   .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: center;
} 
  </style>
  <style>
fieldset
{
    width: 40%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}
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

   } 
 
}
  
?>
  <?php 
    session_start();
    $uname = "Bob";
    $pass = "admin";
    $msg = "";

    if (isset($_POST['name'])) {
      if ($_POST['name']==$uname && $_POST['password']==$pass) {
        $_SESSION['name'] = $uname;
        header("location:http://localhost:8081/PHP/Lab%20task%204/Logged%20in/loggedin.php");
      }else{
        $msg = "Invalid Username or Password";
      }
    }
   ?>

<div class="menu">
<?php require '../Home page/navbar.php';?>
</div>

<div class="myDiv">

<br><br><br>

  <fieldset  > 
  <legend><b>LOGIN</b> </legend><br>
  <?php 
  if (isset($msg)) {
    echo "$msg";
   } ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    User Name  :<input type="text" name="name" value="<?php if(isset($_COOKIE['uname'])){echo $_COOKIE['uname']; } ?>"" <?php echo $userName;?>"><span class="red">*<?php echo $userNameErr ?></span>
    <br><br>

    Password  :<input type="password" name="password" value="<?php if(isset($_COOKIE['pass'])) {echo $_COOKIE['pass'];} ?>""<?php echo $password;?>"><span class="red">*<?php echo $passwordErr ?></span>
    
    <hr>
    <input type="checkbox" name="remember" value="Remember Me">Remember Me<br><br>
    <input type="submit" name="login" value="Submit">

   <a  href="http://localhost:8081/PHP/Lab%20task%204/Forgot%20Password/Forgotpass.php">Forgot Password? <span class="badge"></span></a>
  
  </form><br>
</fieldset>
<br><br><br><br>
</div>

<div class="menu">
<?php include '../Home page/foot.php';?>
</div>

</body>
</html>