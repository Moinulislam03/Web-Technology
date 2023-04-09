<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile View + Update</title>
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
<div class="column">
  
  <b>PROFILE:</b>
  <br>
    Name: Moinul Islam
    <br>
    E-mail: imoinul@gmail.com
    <br>
    Gender: Male
    <br> 
    Date of Birth: 03/23/1980
    <hr> <br><br>
    
   
    <b>UPDATE PROFILE:</b><br><br>
    <form action="" method="post" enctype="multipart/form-data">
    Name     :<input type="text" name="name" value="Moinul Islam"  ><br>
                    E-mail    :<input type="email" name = "email" value="imoinul@gmail.com" ><br>
                    Gender   :
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                   
                    Date of Birth:
                     <input type="date" name="dob" value="23/03/1980">  <hr>
                    
                     
                     <input type="submit" name="submit" value="Submit" ><br>
  </form>
</fieldset>
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
href="http://localhost:8081/Project/Login/Login.php"> Log out </a></li><br>

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