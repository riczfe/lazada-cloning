<?php

session_start();

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
	
	$new =  array('username' => "$name", 'password' => "$pass");
	
	$file["$id"] = $new;
	$db =json_encode($file,JSON_FORCE_OBJECT);
	}
	
	  $filename = '../../account.db';  
    $fp = fopen($filename, 'w'); 
    fwrite($fp, $db); 
    fclose($fp); 

    $database = json_decode(file_get_contents("../myAccount/data/user_detail.json"), 1);
    $selectOption = $_POST['dropdown'];
    if ($database == NULL) {
      $database = array();
      // throw new RuntimeException("Database not found");
    }
    array_push($database, array(
      "username" => $_POST['username'],
      "name" => $_POST['name'],
      "address" => $_POST['address'],
      "hub" => $_POST['dropdown'],
      "type" => $_POST['type']
    ));
    file_put_contents('../myAccount/data/user_detail.json', json_encode($database));
    

    echo "<p class = 'echo-css'>Registration Done</p>"; 
    // Create SESSION
    $_SESSION["username"] = $name;
    $_SESSION["password"] = $pass; 
    $script = "
    <script>window.location = 'login.php';</script>";
    $waiting = "<script>setTimeout(function(){
            window.location.href = 'www/login/login.php';
         }, 1000);</script>"; 
    echo $script;
}
else {die("<p class = 'echo-css'>Passwords Not the same</p>");}  
  

}
else {die("<p class = 'echo-css'>Fields are empty</p>");}  


}
?>