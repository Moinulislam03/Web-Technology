<?php 

    $name = $email = $userName = $pass = $gender =   $cpass = "";
    $nameErr = $emailErr = $userNameErr = $passErr = $genderErr = $cpassErr =   
    $userExist = "" ;

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $errorFlag = false;

        if(!isset($_POST['name']) || empty($_POST['name'])){
            $nameErr = "*Name is required";
            $errorFlag = true;
        }else{
            $name = $_POST['name'];
            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameErr = "*Only letters, whitespaces, - and ' are acceptable";
                $errorFlag = true;
            }
            else if(str_word_count($name)<2){
                $nameErr = "*Name has to contain at least two words ";
                $errorFlag = true;
            }
        }
        if(empty($_POST['email'])){
            $emailErr = "*Email is required";
            $errorFlag = true;
        }else{
            $email = $_POST['email'];
            $email_pattern = "/@gmail.com/i";
            $email_matching_result = preg_match($email_pattern, $email);
            if($email_matching_result == 0){
                $emailErr = "*Email format is not valid";
                $errorFlag = true;
            }
        }

        if (!isset($_POST['uname']) || empty($_POST['uname'])) {
            $userNameErr = "*User Name is required";
            $errorFlag = true;
        }else{
            $userName = $_POST['uname'];
            if (!preg_match("/^[a-zA-z_0-9]*$/", $userName)) {
                $userNameErr = "*Only characters, alphabic numeric characters, dash, underscore can be used in username";
                $errorFlag = true;
            }
            else if(strlen($userName) < 2){
                $userNameErr = "*Username must contain at least 2 characters";
                $errorFlag = true;
            }
        }

        if (!isset($_POST['password']) || empty($_POST['password'])) {
            $passErr = "*Password is required";
            $errorFlag = true;
        }else{
            $pass = $_POST['password'];

            if (strlen($pass) < 8) {
                $passErr = "*Password must contain at least 8 characters";
                $errorFlag = true;
            }
            $special_pass_check_1 = strpos($pass, "@");
            $special_pass_check_2 = strpos($pass, "#");
            $special_pass_check_3 = strpos($pass, "%");
            $special_pass_check_4 = strpos($pass, "$");


            if($special_pass_check_1 === FALSE && $special_pass_check_2 === FALSE && $special_pass_check_3 === FALSE && $special_pass_check_4 === FALSE) {
                $passErr = "*Password must contain at least one of @, $, #, %";
                $errorFlag = true;
            }
        }
        if(!isset($_POST['cpass']) || empty($_POST['cpass'])){
            $cpassErr = "*Confirm Password is required";
            $errorFlag = true;
        }else{
            $cpass = $_POST['cpass'];

            if($_POST['password'] !== $_POST['cpass']){
            $cpassErr = "*Confirm Password Doesn't Match!";
            $errorFlag = true;
        }
        }

        if(!isset($_POST['gender']) || empty($_POST['gender'])){
            $genderErr = "*Gender field is required";
            $errorFlag = true;
        }else{
            $gender = $_POST['gender'];
        }

        if(!$errorFlag){
            $set = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'username' => $_POST['uname'],
                'password' => $_POST['password'],
                'gender' => $_POST['gender'],
                'dateOfBirth' => $_POST['dob'],
                
            ];

            if(!file_exists('data.json')){
                @file_put_contents('data.json', '');
            }

            $users = json_decode(file_get_contents('data.json'), true);

            foreach ($users as $key => $value) {
                if($value['email'] == $_POST['email'] || $value['username'] == $_POST['uname'] ){
                    $userExist = "User Already Exist!";
                    break;
                }
            }
            if(empty($userExist)){
                $users[] = $set;
                file_put_contents('data.json', json_encode($users));
                header('Location: http://localhost:8081/Project/Login/Login.php');
            }
        }
    }
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style type="text/css">
        .red{
            color: red;
        }
    </style>
    <style type='text/css'>
   .myDiv {
   border: 0px outset black;    
   text-align: center;
   } 
   </style>
   <style>
fieldset
{
    width: 25%;
    text-align:left;
    display: inline-block;
    vertical-align:middle;
}
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 6px 10px;
  border: none;
  border-radius: 1px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<body style="background-color:LavenderBlush;">

    <div class="menu">
<?php require 'Navbar.php';?><br>
</div>
    
        <div class="myDiv">
        <br>
       <fieldset>
        <legend><b>REGISTRATION</b></legend> 
        <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
            NAME:
                <input type="text" name="name" value="<?php echo $name;?>"><span class="red"><?php echo $nameErr ?></span>
                <hr>
            E-MAIL:
                <input type="email" name="email" value="<?php echo $email;?>"><span class="red"><?php echo $emailErr ?></span>
                <hr>
            USER NAME:
                <input type="text" name="uname" value="<?php echo $userName;?>"><span class="red"><?php echo $userNameErr ?></span>
                <hr>
            PASSWORD:
                <input type="password" name="password" value="<?php echo $pass;?>"><span class="red"><?php echo $passErr ?></span>
                <hr>
            CONFIRM PASSWORD:
                <input type="password" name="cpass" value="<?php echo $cpass;?>"><span class="red"><?php echo $cpassErr ?></span>
                <hr>
           GENDER:
                <input type="radio" name="gender" value="male" id="male">Male
                <input type="radio" name="gender" value="female" id="female">Female
                <input type="radio" name="gender" value="others" id="others">Others
                <br>
                <span class="red"><?php echo $genderErr ?></span>
                <hr>  
            DATE OF BIRTH:
                <input type="date" name="dob"> <br>
                <hr>
        
            <input type="submit" name="submit" value="Submit"><span>   </span>
            <button style ="background-color: #f44336;
                                    color: white;
                                   padding: 4px 8px;" type="Reset">Reset</button> 


        </form>
        </fieldset>
        </div>
        <br>

       <div class="menu">
       <?php include 'footer.php';?>
       </div>

</body>
</html>