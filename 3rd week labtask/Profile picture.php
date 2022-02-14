<!DOCTYPE html>
<html>
<head>
  <title>Profile Picture</title>
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

$fileErr = "" ;
$file = "" ; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["file"])) {
    $fileErr = "Picture is required";
  } else {
    $file = $_POST["file"];
    }  
  }
?>
  <fieldset> 
   <legend><b>PROFILE PICTURE</b> </legend>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <img src="profile.png" alt="Profile" width="200" height="180">
    <input type="file" id="myfile" name="file" value="<?php echo $file;?>"><span class="red">*<?php echo $fileErr;?></span>
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
echo $file;
?>

</body>
</html>