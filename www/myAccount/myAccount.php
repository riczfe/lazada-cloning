<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../index.php");  
    }
?>
<?php 
	$product_list = json_decode(file_get_contents("data/images.json") ,1);
?>
<?php 
    $user_detail = json_decode(file_get_contents("data/user_detail.json") ,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Products</title>
    <link rel="stylesheet" href="assets/imageUpload.css">
</head>
<body>
    <?php include '../headerFooter/header.php'?>
    <h2>My Account</h2>
    <a style="margin-left: 47%" href="../customer/customer.php">Back to home</a>
    <main>
        <div class="container">
        <div class="product-wrapper">
			<?php 
				foreach($product_list as $product) { ?> 
				
			<div class="product-item">
				<div class="picture-wrapper">
					<a href="">
                        <br><br>
						<img style="width:40%; display: block; margin-left: auto; margin-right: auto;" src="<?php echo $product['image']; ?>" alt="phone">
					</a>
                    <div class="product-detail">
					<div class="item-desc">
						<a href="#">
							<!-- <img src="<?php echo $product['image']; ?>" alt="illustration"> -->
						</a>
					</div>
				</div>
				</div>
			</div>


			<?php } ?>

		</div>
            <form enctype="multipart/form-data" action="ajax/images.php" method="POST">
            <div class="form-control">
                    <h3>Username</h3>
                    <br>
                  <span><?php echo $_SESSION["username"]?></span>
                  <small></small>
                  <!-- PRINTING DETAILS -->
                <div class="detail">
                    <?php foreach($user_detail as $user) { ?>
                        <?php if($_SESSION['username'] == $user['username']) {?>
                            <div class="user-detail">
                                <br>
                                <h3>Name</h3>
                                <?php echo $user['name']; ?>
                                <br><br>
                                <h3>Address</h3>
                                <?php echo $user['address']?>
                                <br><br>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
              </div>
              <div class="form-row">
                  <span>Upload Image</span>
                  <input type="file" name="image" accept="image/jpeg; image/jpg" id="image"/>
              </div>
              <br>
              <input class="btn" type="submit" value="Upload" />
              <a style="text-align: center;" href="../logout/logout.php">LOG OUT</a>
            </form>
          </div>
    </main>
    <?php include '../headerFooter/footer.php' ?>
</body>
</html>