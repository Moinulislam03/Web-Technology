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
  <div class="menu">
<?php require '../Home page/navbar.php';?>
</div>

  <div class="myDiv">
    <br><br><br>
  <fieldset> 
  <legend><b>FORGOT PASSWORD</b> </legend><br>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Enter Email: <input type="email" name="email"><hr>

   <input type="submit" name="submit" value="Submit">
<br><br><br>
</form>
</fieldset>
<br>
<br>
<br>
<br>
</div>
<div class="menu">
<?php include '../Home page/foot.php';?>
</div>

</body>
</html>