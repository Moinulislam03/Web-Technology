<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["un"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $new_data = array(  
                    'name'               =>     $_POST['name'], 
                    'e-mail'          =>     $_POST["email"], 
                    'username'     =>     $_POST["un"], 
                    'gender'     =>     $_POST["gender"],  
                    'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $new_data;  
                $final_data = json_encode($array_data);  
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
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration Form</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style type='text/css'>
   
   <style type='text/css'>
   .myDiv {
  border: 1px outset black;
  background-color: white;    
  text-align: center;
} 
  </style>
  
      </head>  
      <body> 
      <fieldset>
      <div class="menu">
<?php require '../Home page/navbar.php';?><br>
</div>             
               <div class="myDiv">
                    <form method="post">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>   
                    <fieldset> 
                    <legend><b>REGISTRATION</b> </legend>
                    Name: <input type="text" name="name" ><br><hr>  
                    Email: <input type="email" name = "email" ><br><hr>
                    User Name:   <input type="text" name = "un" ><br><hr>
                    Password: <input type="password" name = "pass" ><br><hr>
                    Confirm Password: <input type="password" name = "Cpass" ><br><hr>

                    Gender:
                    
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><hr>
                   
                    Date of Birth:
                     <input type="date" name="dob"> <br><br>
                    
                     
                     <input type="submit" name="submit" value="Submit" >
                      
                    <button type="Reset">Reset</button> 
                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form>
          </fieldset> 
          </div> 
           <br>
        <div class="menu">
       <?php include '../Home page/foot.php';?>
      </div>
      </fieldset> 
      </body> 
      </html>  