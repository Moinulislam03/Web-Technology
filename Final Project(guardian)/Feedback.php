<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {   
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                echo $current_data;
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                     ''               =>     $_POST['subject']
                     
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
                echo $final_data;
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }    
 }  
 ?>  
<html> 
<head>  
<title>Feedback</title>

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
 
<body>

<div class="menu">
<?php require 'Pnavbar.php';?>
</div>


 <div class="row1">
 <div class="side">
<div class="container">
  <form method="post">  
    <br>
    <label for="subject">Please let us know your valueable feedback about our coaching center:</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  <br><br>
    <input type="submit" name="submit" value="SEND FEEDBACK">
  <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
  </form>
</div></div>
   
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