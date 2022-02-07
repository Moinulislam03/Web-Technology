<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>
  <style type='text/css'>
    fieldset {
  font-size:15px;
  padding:15px;
  width:350px;
  line-height:2;}
	</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $dateOfBirthErr = $genderErr = $degreeErr = $bloodGroupErr = "";
$name = $email = $dateOfBirth = $gender = $degree = $bloodGroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required" ;
  } else {
    $name = $_POST["name"];
    if (preg_match("/^[a-zA-Z]*$/",$name)) {
      $nameErr = "Must start with a letter";
    }
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
    else if (str_word_count($_POST["name"])<2) {
				$nameErr = "Name must contain at least 2 word";
    }
  }
}

 
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["dateOfBirth"])) {
    $dateOfBirthErr = "Date Of Birth is required"; 
  } else {
    $dateOfBirth = $_POST["dateOfBirth"];
   }
   
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required ";
  } else {
    $gender = $_POST["gender"];
  }


if (empty($_POST["degree"])) {
    $degreeErr = "At least one of them  must be selected";
  } else {
    $degree = $_POST["degree"];
  }


if (empty($_POST["bloodGroup"])) {
    $bloodGroupErr = "Must Be selected";
  } else {
    $bloodGroup = $_POST["bloodGroup"];
  }


?>
 <fieldset> 
 	<legend><b> NAME</b> </legend>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		 <input type="text" name="name" style="height:25px; width:200px;value="<?php echo $name;?>"><span class="red">*<?php echo $nameErr ?></span>
		<hr> 
	</fieldset><br>

  <fieldset>
 	<legend><b> EMAIL </b> </legend>
	 <input type="text" name="email" style="height:25px; width:200px; value="<?php echo $email;?>"><span class="red">*<?php echo $emailErr ?></span>
	<hr>
	</fieldset> <br>

  <fieldset>
 	<legend><b> DATE OF BIRTH </b></legend>
	 <input type="date" id="birthday" name="dateOfBirth" value="<?php echo $dateOfBirth;?>"><span class="red">*<?php echo $dateOfBirthErr ?></span
	<hr>
  </fieldset> <br>

	<fieldset>
 	<legend><b> GENDER </b></legend>
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="Male">Male
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="Female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="other") echo "checked";?>
		value="Other">Other <?php echo $gender; ?> <span class="red">*<?php echo $genderErr ?></span><hr>
    </fieldset>
    <br>

    <fieldset>
 	<legend><b> DEGREE </b></legend>
    <input type="checkbox" name="tnc" value="SSC"> SSC
    <input type="checkbox" name="tnc" value="HSC"> HSC
    <input type="checkbox" name="tnc" value="BSc"> BSc
    <input type="checkbox" name="tnc" value="MSc"> MSc <?php echo $degree; ?><span class="red">*<?php echo $degreeErr ?> </span>

    <hr> 
    </fieldset> 
    <br> 

  <fieldset>
 	<legend><b> BLOOD GROUP </b> </legend>
  <input list="bloodGroup" name="bloodGroup">
  <datalist id="bloodGroup">
    <option value="A">
    <option value="A+">
    <option value="A-">
    <option value="B">
    <option value="B+">
    <option value="B-">
    <option value="AB">
    <option value="AB+">
    <option value="AB-">
    <option value="O">
    <option value="O+">
    <option value="O-"><?php echo $gender; ?> <span class="red">*<?php echo $bloodGroupErr ?> </span>

  </datalist>
   <hr>
   </fieldset>
	<br>

	<input type="submit" name=""><br>
	

	</form>

	<h2>Input Data:</h2>
	<?php 
	echo $name."<br>";
	echo $email."<br>";
	echo $dateOfBirth."<br>";
	echo $gender."<br>";
	echo $degree."<br>";
	echo $bloodGroup."<br>";
	 ?>
	
</body>
</html>