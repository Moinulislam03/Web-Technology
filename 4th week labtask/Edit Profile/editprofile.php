<html> 
<head> 
<title>Edit Profile</title> 
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
  height: 280px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.vl {
  border-left: 2px solid black;
  height: 303px;
  position: absolute;
  left: 36%;
  margin-left: 0px;
  top: 102;
}
</style> 
<body> 
	<div class="menu">
<?php require '../logged in/navbar.php';?>
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

               <fieldset> 
                    <legend><b>EDIT PROFILE</b> </legend><br>
                    Name     :<input type="text" name="name" ><br><hr>  
                    Email    :<input type="email" name = "email" ><br><hr>
                    Gender   :
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><hr>
                   
                    Date of Birth:
                     <input type="date" name="dob"> <hr>
                    
                     
                     <input type="submit" name="submit" value="Submit" ><br>
                      </fieldset><br>
                    </div>
                </div>

</div>
<div class="menu">
<?php include '../Home page/foot.php';?>
</div> 
</body>
 </html> 
