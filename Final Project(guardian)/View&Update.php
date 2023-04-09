<?php
require 'Model.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: http://localhost:8081/Final%20Project(guardian)/Login/Login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile View</title>
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
  <br>
  <b>PROFILE:</b>
  <br>
   <p1> Name: Moinul Islam </p1>
    <br>
    <p2> E-mail: imoinul169@gmail.com </p2> 
    <br>
    <p3> Username: moinul
    
    <hr> <br>
    
   
    <b>UPDATE PROFILE:</b><br><br>
    <form action="" method="post" enctype="multipart/form-data">
    Name     :<input type="text" name="name" value="Moinul Islam"  ><br>
    E-mail    :<input type="email" name = "email" value="imoinul@gmail.com" ><br>
    Username: <input type="text" name="username" value="moinul">  <hr>
                    
  <input type="submit" name="submit" value="Submit" ><br>
  </form>
</fieldset><br><br><br><br><br><br>
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
</div> 
</div></div>


 <div class="menu">
 <?php include 'footer.php';?>
 </div>

</body>
</html>