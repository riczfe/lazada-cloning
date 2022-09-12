<?php
    session_start();
    include("login-ss.php");
    $usernameFromRegister = "";
    $passFromRegister = "";
    if (isset($_SESSION["username"])) {
        $usernameFromRegister = $_SESSION["username"];
    }
    if (isset($_SESSION["password"])) {
        $passFromRegister = $_SESSION["password"];
    }
    unset($_SESSION["password"]);
?>

<!DOCTYPE html>
<head>
<title>Login</title>
<link rel="stylesheet" href="Loginstyle.css"/>
</head>
<body>
<?php include '../headerFooter/header.php' ?>
        <div class = "container" >
                <div class = "forms">
                    <div class = "form login">
                        <span class = "title">Login</span>

                        <form method="POST">
                            <div class = "input-field">
                                <input type="text" placeholder = "Enter your username" name = "username" required>
                                <i class = "uil uil-envelope icon"></i>
                            </div>
                            <div class = "input-field">
                                <input type="password" class = "password" placeholder = "Enter your password" name = "password" required>
                                <i class = "uil uil-eye-slash showHidePw"></i>
                                <i class = "uil uil-lock icon"></i>
                            </div>
                            <div class = "checkbox-password">
                                <a href = "#" class = "Forgot">Forgot Password</a>
                            </div>
                            
                            <div class = "input-field button">
                                <input type="submit" value = "Login Now" name = "Logincre" class = "log-now">
                            </div>
                        </form>

                        <div class = "signup-link">
                            <span class = "text">Don't have an account?
                                <a href = "./Option.php" class = "Signup-link">Register for new one</a>
                            </span>     
                        </div>   
                    </div>
                </div>
                <?php include '../headerFooter/footer.php'?>
        </div>
</body>