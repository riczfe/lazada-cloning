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
<link rel="stylesheet" href="Customer.css"/>
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<title>Login</title>
</head>
<body>
    <?php include '../headerFooter/header.php'?>
    <div class = "container">
        <div class = "forms">
            <!-- Registration Form-->
            <div class = "form register">
                <span class = "title">Register</span>

                <form action="register-ss.php" method = "post">
                    <div class = "input-field">
                        <input type="text" placeholder="Username" pattern="[a-zA-Z]{8,15}" class="form-control"  name = 'username'
                            title="Only letter and length 8-15 characters" required>    
                        <i class = "uil uil-user"></i>
                    </div>
                    <div class = "input-field">
                        <input type="text" placeholder="Type 'customer' to confirm" name="type" pattern="customer" required>
                        <i class = "uil uil-user"></i>
                    </div>
                    <div class = "input-field">
                        <input type="text" placeholder="Name" name="name" pattern=".{5,}" required>
                        <i class = "uil uil-user"></i>
                    </div>
                    <div class = "input-field">
                        <input type="text" placeholder="Address" name="address" pattern=".{5,}" required>
                        <i class="uil uil-building"></i>
                    </div>

                    <div class = "input-field">
                        <input type="password" class = "password" placeholder="Password" name = 'password'
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*\W)(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter and one special character, and at least 8 or 20 characters" required>
                        <i class = "uil uil-eye-slash showHidePw"></i>
                        <i class = "uil uil-lock icon"></i>
                    </div> 
                    <div class = "input-fields">
                    <div class = "input-field">
                        <input type="password" class = "password" placeholder=" Repeat Password" name="repassword"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*\W)(?=.*[A-Z]).{8,20}" title="Must contain at least one number and one uppercase and lowercase letter and one special character, and at least 8 or 20 characters" required>
                        <i class = "uil uil-eye-slash showHidePw"></i>
                        <i class = "uil uil-lock icon"></i>
                    </div>
                    <div class="form-row">
                        <span>Upload Image</span>
                        <input type="file" name="image" id="image"/>
                    </div>
                    <div class = "checkbox-password">
                    </div>  

                    <div class = "input-field button">
                        <input type="submit" name = 'submit' value = "Create an account" class = "log-now">
                    </div>
                    </div>
                </form>

                <div class = "signup-link">
                    <span class = "text">Already have an account?
                        <a href = "./Login.php" class = "Login-link">Login Now</a>
                    </span>     
                </div>   
            </div>
        </div>
        <?php include '../headerFooter/footer.php'?>
    </div>
    
<script src="Loginjs.js"></script>
</body>
</html>