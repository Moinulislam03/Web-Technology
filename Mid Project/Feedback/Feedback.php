<html> 
<head>  
<title>Feedback</title>

<style>
  .column {
  float: ;
  width: 25%;
  padding: 40px;
  height: 535px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<style>

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 8px 12px;
  border: none;
  border-radius: 1px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  padding: 20px;

}
</style>
</head>
<body style="background-color:LavenderBlush;">

<div class="menu">
<?php require '../Profile view + Update/Navbar.php';?>
</div>

<div class="row">
<div class="container">
  <form action="/action_page.php">
    <br>
    <label for="subject">Please let us know your valueable feedback about our coaching center:</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  <br><br>
    <input type="submit" value="SEND FEEDBACK">
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
</div>

<div class="menu">
<?php include '../View admission panel/footer.php';?>
</div>

</body>
</html>