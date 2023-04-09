<?php
require 'Model.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
    <style type='text/css'>
   .myDiv {
   border: 0px outset black;    
   text-align: center;
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

button[type=submit] {
  background-color: deepskyblue;
  color: white;
  padding: 7.5px 40px;
  border: none;
  border-radius: 7px;
  cursor: pointer;
}
button[type=reset] {
  background-color: palevioletred;
  color: white;
  padding: 7.5px 40px;
  border: none;
  border-radius: 7px;
  cursor: pointer;
}
</style>
</head>
<body style="background-color:#f1f1f1;">

    <div class="menu">
<?php require 'Vnav.php';?><br>
</div>
    
        <div class="myDiv">
        <br>
       <fieldset>
        <legend><b>REGISTRATION</b></legend> 
        <form class="" action="" method="post" autocomplete="off">
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br><hr>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br><hr>
      <label for="email">E-mail : </label>
      <input type="email" name="email" id = "email" required value=""> <br><hr>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value=""> <br><hr>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br><hr>
      <button type="submit" name="submit">Register</button>
      <button type="Reset">Reset</button> 


        </form>
        </fieldset>
        </div>
        <br><br> <br><br>

       <div class="menu">
       <?php include 'footer.php';?>
       </div>

</body>
</html>