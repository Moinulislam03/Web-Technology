<html> 
<head>  
<title>View Students Grade Report</title>

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
<p1 style ="background-color: skyblue; color: white; padding: 6px 16px;"> 
<b>Subjects Marks for:</b>
<a href=""> (Students Name) </a></p1><br><br>

<p2> Subjects Name :  </p2>
<select>
      <option> Subject no.1</option>
      <option> Subject no.2</option>
      <option> Subject no.3</option>
      <option>Subject no.4</option>
      <option>Subject no.5</option>
      <option selected>Subject no.1</option>
    </select>
  <p3> Session :  </p3>
<select>
      <option> 2020-21</option>
      <option> 2021-22</option>
      <option> 2022-23 </option>
    
      <option selected>2021-22</option>
    </select><br><br><br>

<p4 style ="background-color: skyblue; color: white; padding: 5px 15px;"> 
<b>Subject no. 1:   </b><br></p4>
<p5 style ="background-color: skyblue; color: white; padding: 5px 12px;"> Total Mark :100 ; Passing Mark :33 ;<br></p5>
<p6 style ="background-color: skyblue; color: white; padding: 5px 13px;"> Subject Teacher(s):
<a href=""> (Teacher Name) </a></p6>
<p7 style ="background-color: skyblue; color: white; padding: 5px 35px;"> (-/100)</p7>
 
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

<br><br><br>
 <div class="menu">
 <?php include '../View admission panel/footer.php';?>
 </div>

</body>
</html>