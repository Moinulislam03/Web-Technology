<?php
    $email = "";
    $emailErr = "";
    $matchError = false;
    $errorFlag = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      if (!isset($_POST['email']) || empty($_POST['email'])) {
        $emailErr = "Email is required";
        $errorFlag = true; 
      }else{
        $email = $_POST['email'];
      }
  
      if(!$errorFlag){
        $users = json_decode(file_get_contents('http://localhost:8081/Project/Registration%20with%20student%20information/View/data.json'), true);

        if(is_array($users)){
          $matchError = "User not found";
          foreach ($users as $key => $value) {
            if($value['email'] == $_POST['email']){
                header("Location: http://localhost:8081/Project/Profile%20view%20+%20Update/ProfileView+Update.php");
              }else{
                $matchError = "Email does not match";
                break;
              }
            }

          }
      
        }else{
          $matchError = "No Email found";

        }
      }
    

    ?>
    
  <!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
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
  padding: 7px 10px;
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
    width: 30%;
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
    <br><br><br><br><br><br>
  <fieldset> 
  <legend><b>FORGOT PASSWORD</b> </legend><br>
  <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
   Enter Email: <input type="email" name="email" value ="<?php echo $email;?>"
   <span class="red"><?php echo $emailErr?></span><br><br><hr>

   <input type="submit" name="submit" value="Submit">
<br><br><br>
</form>
</fieldset>
<br><br><br><br><br><br><br><br><br>
</div>

<div class="menu">
<?php include '../View admission panel/footer.php';?>
</div>

</body>
</html>