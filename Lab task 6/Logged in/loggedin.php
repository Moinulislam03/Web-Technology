
 <html> 
<head> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title> 
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
  height: 300px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 321px;
  position: absolute;
  left: 36%;
  margin-left: 0px;
  top: 102;
}

</style>
<body> 
	
<div class="menu">
<?php require 'navbar.php';?>
</div>
<div class="vl"></div>
<div class="myDiv">

<div class="row">

<div class="column">
<div id="links"> 

<ul> 
<li><a href="hhttp://localhost:8081/PHP/Lab%20task%206/Logged%20in/loggedin.php"> Dashboard </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/View%20profile/viewprofile.php"> View Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Edit%20Profile/editprofile.php"> Edit Profile </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/profile%20picture/profilepicture.php"> Change Profile Picture </a></li> 
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Change%20Password/changepass.php"> Change Password </a></li>
<li><a href="http://localhost:8081/PHP/Lab%20task%206/Log%20In/login.php"> Logout </a></li>
</ul> 
</div> 
</div>


 
<div class="column">
<h1> Welcome Moinul Islam</h1>
</div>

</div> 

</div>

<div class="menu">
<?php include '../Home Page/foot.php';?>
</div>

</body> 
</html> 
