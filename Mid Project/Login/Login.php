<?php
    $uname = $pass = "";
    $unameErr = $passErr = "";
    $matchError = false; $errorFlag = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
      if (!isset($_POST['uname']) || empty($_POST['uname'])) {
        $unameErr = "*User Name is required";
        $errorFlag = true; 
      }else{
        $uname = $_POST['uname'];
      }
      
      if (!isset($_POST['pass']) || empty($_POST['pass'])) {
        $passErr = "*Password is required";
        $errorFlag = true;
      }else{
        $pass = $_POST['pass'];
      }

      if(!$errorFlag){
        $users = json_decode(file_get_contents('http://localhost:8081/Project/Registration%20with%20student%20information/View/data.json'), true);

        if(is_array($users)){
          $matchError = "User not found";
          foreach ($users as $key => $value) {
            if($value['username'] == $_POST['uname']){
              if ($_POST['pass'] == $value['password']){
                header("Location: http://localhost:8081/Project/Profile%20view%20+%20Update/ProfileView+Update.php");
              }else{
                $matchError = "Password does not match";
                break;
              }
            }

          }
      
        }else{
          $matchError = "No users found";

        }
      }
      
    }
?>

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
  border: 0px outset black;
  background-color: LavenderBlush;    
  text-align: center;
} 
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 6.5px 15px;
  border: none;
  border-radius: 1px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
  </style>
  <style>
fieldset
{
    width: 25%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}
</style>

</head>
<body style="background-color:LavenderBlush;">

<div class="menu">
<?php require '../View admission panel/Navbar.php';?>
</div>
    <div class="myDiv">
      <br><br><br>
    <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
      <fieldset>
        <span style="float: center;"><h1><img src="Ez.jpg" alt="logo" style="width:80px;"></h1></span>
    <br>
 Sign in with your Registration name and Password.

        <?php
        if($matchError){
          ?>
          <span style="color: red;"><?php echo $matchError?></span> 
          <?php
        }
        ?><br><br>
        User Name: 
        <input type="text" name="uname" value="<?php echo $uname;?>">
        <span class="red"><?php echo $unameErr?></span><br><br>
        Password: 
        <input type="password" name="pass" value="<?php echo $pass;?>">
        <span class="red"><?php echo $passErr?></span>
        <br>
        <hr>
        <input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
        <input type="submit" name="submit" value="Log In">
        <a style ="background-color: red;
  color: white;
  padding: 7.5px 11px;" href="http://localhost:8081/Project/Forgot%20password/ForgotPassword.php">Forgot Password? <span class="badge"></span></a>
         </fieldset>
    </form><br><br><br><br><br><br>
  </div>
  

<div class="menu">
<?php include '../View admission panel/footer.php';?>
</div>

</body>
</html>