<html> 
<head> 
<title>View Profile</title> 
</head> 
<style type='text/css'>
   .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: left;
} 
  </style> 
  
<style>
 	.column {
  float: left;
  width: 35%;
  padding: 10px;
  height: 200px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 315px;
  position: absolute;
  left: 36%;
  margin-left: 0px;
  top: 102;
}
</style>
<body> 
	<div class="menu">
<?php require '../Logged in/navbar.php';?>
</div>
<div class="vl"></div>
<div class="myDiv">

<div class="row">

<div class="column"> 

<div id="links"> 
<h2>Account</h2><hr> 
<ul> 
<li><a href="http://localhost:8081/PHP/Lab%20task%204/Logged%20in/loggedin.php"> Dashboard </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%204/View%20profile/viewprofile.php"> View Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%204/Edit%20Profile/editprofile.php"> Edit Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%204/profile%20picture/profilepicture.php"> Change Profile Picture </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%204/Change%20Password/changepass.php"> Change Password </a></li>
<li><a href="http://localhost:8081/PHP/Lab%20task%204/Log%20In/login.php"> Logout </a></li>
</ul> 
</div>
</div>

<div class="column">
<fieldset  > 
  
  <legend><b>PROFILE</b> </legend><br>
  <div class="column">
    Name: Bob
    <hr>
    Email: bob@aiub.edu
    <hr>
    Gender: Male
    <hr> 
    Date of Birth: 19/09/1998
    <hr> 

   <a  href="http://localhost:8081/PHP/Lab%20task%204/Edit%20Profile/editprofile.php">Edit profile <span class="badge"></span></a>
   </div>

   <div class="column">
    <img src="../profile picture/profile.png" alt="Profile" width="190" height="140">
    <input type="file" id="myfile" name="file"  value="Change">
    <hr> 
    </div>
   
  </form>
</fieldset> 
</div>
</div>
<br><br><br><br><br>
</div>

<div class="menu">
<?php include '../Home page/foot.php';?>
</div>

</fieldset>  
</body>
</html> 
