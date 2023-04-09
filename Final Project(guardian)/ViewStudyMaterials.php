<html> 
<head>  
<title>View Study Materials</title>

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
#more {display: none;}
</style>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "See more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "See less"; 
    moreText.style.display = "inline";
  }
}
</script>
</head>

<body>

 <div class="menu">
 <?php require 'Pnavbar.php';?>
 </div>

<div class="row1">
 <div class="side">
<br>
<h1><u>Lecture Note:</u></h1><br>
  <ol>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;" 
href=""> New notes uploaded by (teacher name)</a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name)</a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name)</a></li> 
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li><span id="dots"></span><span id="more">
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;" 
href=""> New notes uploaded by (teacher name)</a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name)</a></li> 
<li><a style ="background-color: skyblue; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
<li><a style ="background-color: skyblue ; color: white; padding: 4px 10px;"
href=""> New notes uploaded by (teacher name) </a></li>
</span></p>
<button onclick="myFunction()" id="myBtn">See more</button>

</ol> 
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

</div> <br><br><br><br><br><br><br><br><br>
</div></div>

 <div class="menu">
 <?php include 'footer.php';?>
 </div>

</body>
</html>