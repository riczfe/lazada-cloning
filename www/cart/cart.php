<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../index.php");  
    }
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>HTML5 Local Storage Project</title>
<META charset="UTF-8">
<META name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<META NAME='rating' CONTENT='General' />
<META NAME='expires' CONTENT='never' />
<META NAME='language' CONTENT='English, EN' />
<META name="description" content="shopping cart project with HTML5 and JavaScript">
<META name="keywords" content="HTML5,CSS,JavaScript, html5 session storage, html5 local storage">
<META name="author" content="dcwebmakers.com">
<script src="../product-detail/1/storage.js"></script>
<link rel="stylesheet" href="cart.css">
<link rel="stylesheet" href="../headerFooter/headerFooter.css">
</head>

<body onload="doShowAll()">
<?php include '../headerFooter/header.php'?>
	<div style="margin-top:300px" id="items_table">
		<h3>Shopping List</h3>
		<br>
		<table id=list></table>
		<br>
		<br>
		<p>
			<label><input type=button value="Clear" onclick="ClearAll()">
				<br><i>* Delete all items</i></label><br>
			<br><label><input type=button value="Order" onclick="randomUrl()">
				<br><i>Send item to distribution hub</i></label>
		</p>
		<a href="../customer/customer.php" class="">Back to Main Page</a>
	</div>
<?php include '../headerFooter/footer.php'?>
</body>
</html>
