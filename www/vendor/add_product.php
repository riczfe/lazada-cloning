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
    <title>Add New Products</title>
    <link rel="stylesheet" href="assets/add.css">
</head>
<body>
    <?php include '../headerFooter/header.php'?>
    <h2>Add New Products</h2>
    <a href="../logout/logout.php" style="margin-left:50%;">LOG OUT</a>
    <main>
        <div class="container">
            <form enctype="multipart/form-data" action="ajax/add_product.php" method="POST">
              <div class="form-control">
                  <input type="text" id="name" name="product_name" placeholder="Name of product" required />
                  <span></span>
                  <small></small>
              </div>
              <div class="form-control">
                  <input required placeholder="Type the price" type="number" name="price" min="0" oninput="validity.valid||(value='');">
                  <span></span>
                  <small></small>
              </div>
              <div class="form-row">
                  <span>Upload Image</span>
                  <input type="file" name="image" accept="image/jpeg, image/jpg" id="image"/>
              </div>
              <div class="form-control">
                  <input maxlength="500" type="text" name="description" id="description" placeholder="Describe your product" required />
                  <span></span>
                  <small></small>
              </div>
              <input class="btn" type="submit" value="Upload" />
            </form>
          </div>
    </main>
    <?php include '../headerFooter/footer.php'?>
</body>
</html>