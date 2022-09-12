<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../index.php");  
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Page</title>
    <link rel="stylesheet" href="assets/vendor.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>  
    <?php include '../headerFooter/header.php'?>
    <main>
        <h2>For Vendor</h2>
        <div class="container">
            <form action="view_product.php">
                <button class="button">View My Products</button>
            </form>
            <form action="add_product.php">
                <button class="button">Add New Products</button>
            </form>
        </div>
    </main>
    <?php include '../headerFooter/footer.php'?>
</body>
</html>
