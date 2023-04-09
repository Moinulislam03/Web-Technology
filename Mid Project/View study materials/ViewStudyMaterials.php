<html> 
<head>  
<title>View Study Materials</title>
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

<div class="myDiv">

<div class="row">
  
<div class="column">
<h1><u>Lecture Note:</u></h1><br>
  <ol>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;" 
href=""> New notes uploaded by ........</a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by ........ </a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by ........</a></li> 
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by ........ </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by ........ </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by ........ </a></li>

</ol> 
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
<br><br><br>
 <div class="menu">
 <?php include '../View admission panel/footer.php';?>
 </div>

</body>
</html>