<?php 
    $user_detail = json_decode(file_get_contents("../myAccount/data/user_detail.json") ,1);
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if (!empty($_POST["username"]) && !empty($_POST["password"]) ) {
$name = trim($_POST["username"]);
$pass = trim($_POST["password"]);

 
	$id =  md5($_POST["username"].$_POST["password"]);
  	$file = file_get_contents('../../account.db');
    $file = json_decode($file, true);
	
	if (array_key_exists($id,$file)){  
        echo "<p>Successfully logged in.</p>";
        $_SESSION["loggedIn"] = true;
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $pass;        

        print_r($_SESSION);
        
        foreach($user_detail as $user) {
            if($_SESSION['username'] == $user['username']&& $user['type'] === 'vendor') {
                $script = "<script>
                window.location = '../vendor/vendor.php';</script>";
                echo $script;
            } 
            if($_SESSION['username'] == $user['username']&& $user['type'] === 'customer') {
                $script = "<script>
                window.location = '../customer/customer.php';</script>";
                echo $script;
            }
            if($_SESSION['username'] == $user['username']&& $user['type'] === 'shipper') {
                $script = "<script>
                window.location = '../shipper/shipper_danang.php';</script>";
                echo $script;
            }
        // if(isset($_POST['select1'])){
        //     $select1 = $_POST['select1'];
        //     switch ($select1) {
        //         case 'customer':
        //             $script = "<script>
        //             window.location = '../customer/customer.php';</script>";
        //             echo $script;
        //             break;
        //         case 'vendor':
        //             $script = "<script>
        //             window.location = '../vendor/vendor.php';</script>";
        //             echo $script;
        //             break;
        //         case 'shipper':
                    // $script = "<script>
                    // window.location = '../shipper/shipper_danang.php';</script>";
                    // echo $script;
        //         default:
        //             $script = "<script>
        //                 window.location = '../customer/customer.php';</script>";
        //                 echo $script;
        //         break;
        //     }
        }
	    die("<p class = 'echo-css'>Login Successfully</p>");
        
}
	else { 
        echo "<p class = 'echo-css'>Login does not exist</p>";
    }
	
	
    }  
}

?>