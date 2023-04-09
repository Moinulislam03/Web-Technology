<?php
require 'Model.php';

if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: http://localhost:8081/Final%20Project(guardian)/Profile%20view%20+%20Update/ProfileView+Update.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
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
  background-color: #f1f1f1;    
  text-align: center;
} 
button[type=submit] {
  background-color: lightskyblue;
  color: white;
  padding: 8px 110px;
  border: none;
  border-radius: 7px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: deepskyblue;
}
input[type=text] {
 
  padding: 4px 35px;
  border-radius: 7px;
}
input[type=password] {
 
  padding: 4px 35px;
  border-radius: 7px;
}
  </style>
  <style>
fieldset
{
    width: 24%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}
</style>

</head>
<body>

<div class="menu">
<?php require 'Vnav.php';?>
</div>
    <div class="myDiv">
      <br><br><br>
    
      <fieldset>
        
        <p1><a href="http://localhost:8081/Final%20Project(guardian)/ViewAdmissionPanel.php"> <img src="Ez.jpg" alt="logo" style="width:85px;"></a></p1>
    <br><br>
 Sign in with your Registration name password.
   
        <form class="" action="" method="post" autocomplete="off"><br>
      <label for="usernameemail"> </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br><br>
      <label for="password"></label>
      <input type="password" name="password" id = "password" required value=""> <br>
    </form>
      <hr>
        <input type="checkbox" name="remember_me" value="remembered">Remember me<br>
        <form action="http://localhost:8081/Final%20Project(guardian)/View&Update.php">
        <button type="submit" name="submit">Log In</button></form>
        <br><br>Don't have any account?
        <a  href="http://localhost:8081/Final%20Project(guardian)/Registration.php">Register now <span class="badge"></span></a>
         </fieldset>
    </form><br><br><br><br>
  </div>
  

<div class="menu">
<?php include 'footer.php';?>
</div>

</body>
</html>