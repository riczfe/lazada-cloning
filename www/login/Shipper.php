<?php
    include 'register-ss.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="Shipper.css"/>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<title>Login</title>
</head>
<body>
    <main>
    <?php include '../headerFooter/header.php' ?>
        <div class = "container">
            <div class = "forms">
   
                <!-- Registration Form-->
                <div class = "form register">
                    <span class = "title">Register</span>
    
                    <form action = "register-ss.php" method = "post">
                        <div class = "input-field">
                            <input type="text" placeholder="Username" pattern="[a-zA-Z]{8,15}" class="form-control" name = "username" 
                            title="Only letter and length 8-15 characters" required>
                            <i class = "uil uil-user"></i>
                        </div>
                        <div class = "input-field">
                            <input type="text" placeholder="Type 'shipper' to confirm" name="type" pattern="shipper" required>
                            <i class = "uil uil-user"></i>
                            </div>
                        <div class = "input-field">
                            <input type="password" class = "password" placeholder="Password" name = "password"
                            pattern="(?=.*\d)(?=.*[a-z])(?=.*\W)(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter and one special character, and at least 8 or 20 characters" required>
                            <i class = "uil uil-eye-slash showHidePw"></i>
                            <i class = "uil uil-lock icon"></i>
                        </div> 
                        <div class = "input-field">
                            <input type="password" class = "password" placeholder=" Repeat Password" name="repassword"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*\W)(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter and one special character, and at least 8 or 20 characters" required>
                            <i class = "uil uil-eye-slash showHidePw"></i>
                            <i class = "uil uil-lock icon"></i>
                        </div>
                        <div class = "input-fields">
                            <label for = "img">Profile Picture:</label>
                            <input type="file" name = "img" id = "img">
                        </div>
                        <div class = "input-field">
                            <label>Please select your location:</label>
                        </div>
                        <div class = "checkbox-hub">
                            <select name="dropdown" id="dropdown"> 
                                <option disabled>Please select your distribution hub below:</option>
                                <option name= "value1" value="Ho Chi Minh">Ho Chi Minh</option>
                                <option name= "value1" value="Da Nang">Da Nang</option>
                                <option name= "value1" value="Ha Noi">Ha Noi</option>
                            </select>
                        </div>
    
                        <div class = "input-field button">
                            <input type="submit" name = 'submit' value = "Create an account" class = "log-now">
                        </div>
                    </form>
    
                    <div class = "signup-link">
                        <span class = "text">Already have an account?
                            <a href = "./Login.php" class = "Login-link">Login Now</a>
                        </span>     
                    </div>   
                </div>
            </div>
            <?php include '../headerFooter/footer.php' ?>
        </div>
    </main>
    
<script src="Loginjs.js"></script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if (!empty($_POST["username"]) && !empty($_POST["password"])  && !empty($_POST["repassword"])) {
$name = trim($_POST["username"]);
 if ($_POST["password"] == $_POST["repassword"]){ 
 
    $pass =  md5($_POST["repassword"]);
	$id =  md5($_POST["username"].$_POST["repassword"]);
  	$file = file_get_contents('../../account.db');
    $file = json_decode($file, true);
if (empty($file)){
	$new = array(
   $id => array(
        'username' => "$name",
        'password' => "$pass"
    )
);
$userdb = $new;
$db =json_encode($userdb,JSON_FORCE_OBJECT);
	}
else if (is_array($file)){
	
	$new =  array('username' => "$name",'password' => "$pass");
	
	$file["$id"] = $new;
	$db =json_encode($file,JSON_FORCE_OBJECT);
	}
	
	   $filename = '../../account.db';  
    $fp = fopen($filename, 'w'); 
     fwrite($fp, $db); 
     fclose($fp); 
    echo "<p class = 'echo-css'>Registration Done</p>";  

}
else {die("<p class = 'echo-css'>Passwords Not the same</p>");}  
  

}
else {die("<p class = 'echo-css'>Fields are empty</p>");}  


  } 
?>