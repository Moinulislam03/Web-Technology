<html> 
<head>  
<title>View Students Grade Report</title>

<script>
function showGrade(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "db_connection.php?q="+str, true);
  xhttp.send();
}
</script>

<script>
function showSubGrade(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "subject.php?q="+str, true);
  xhttp.send();
}
</script>


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

<style>
table,tr,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 4.56px;
}
</style>

</head>
<body>

 <div class="menu">
 <?php require 'Pnavbar.php';?>
 </div>

<div class="row1">
 <div class="side">
<br><br>
<form action="">
<p1 style ="background-color: skyblue; color: white; padding: 6px 16px;"> 
<b>Subjects Marks for:</b>
<input  type = "text" onkeyup = "showGrade(this.value)"></p1><br>
</form><div id="txtHint"></div><br><br>

<form action="">
<p2 style ="background-color: skyblue; color: white; padding: 6px 16px;"> 
<b>Per Subject Grade:</b> 
<select name="subject" onchange="showSubGrade(this.value)"></p2>
<option value="">Select a Subject:</option>
<option value="Subject no.1">Subject no.1</option>
<option value="Subject no.2">Subject no.2</option>
<option value="Subject no.3">Subject no.3</option>
</select>
</form><br><br>
<div id="txtHint"></div><br>



<p4 style ="background-color: skyblue; color: white; padding: 5px 15px;"><b>Grading Policy :</b></p4>
<p5 style ="background-color: skyblue; color: white; padding: 5px 10px;">|Total Mark :100 | Passing Mark :33|<br></p5><br>
<table>
  <tr>
   <td><p6 style =" color: black; padding: 5px 50px;"> 80-100  </p6></td>
   <td><p7 style =" color: black; padding: 5px 50px;"> A+</p7></td></tr>
   <tr>
    <td><p8 style =" color: black; padding: 5px 50px;"> 70-79</p8></td> 
   <td><p9 style ="color: black; padding: 5px 50px;"> A </p9></td></tr>
   <tr>
    <td><p10 style ="color: black; padding: 5px 50px;"> 60-69</p10></td> 
   <td><p11 style ="color: black; padding: 5px 50px;"> A- </p11></td></tr>
   <tr>
    <td><p12 style ="color: black; padding: 5px 50px;"> 50-59</p12></td> 
   <td><p13 style ="color: black; padding: 5px 50px;"> B </p13></td></tr>
   <tr>
    <td><p14 style ="color: black; padding: 5px 50px;"> 40-49</p14></td> 
   <td><p15 style ="color: black; padding: 5px 50px;"> B- </p15></td></tr>
   <tr>
    <td><p16 style ="color: black; padding: 5px 50px;"> 33-39</p16></td> 
   <td><p17 style ="color: black; padding: 5px 50px;"> C </p17></td></tr>
   <tr>
    <td><p18 style ="color: black; padding: 5px 50px;"> 00-32</p18></td> 
   <td><p19 style ="color: black; padding: 5px 50px;"> F </p19></td></tr>
</table>

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
</div>
</div>

 <div class="menu">
 <?php include 'footer.php';?>
 </div>

</body>
</html>