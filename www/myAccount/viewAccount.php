<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../index.php");  
    }
?>

<?php 
	$product_list = json_decode(file_get_contents("data/images.json") ,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Account</title>
    <link rel="stylesheet" href="assets/myAccount.css">
</head>
<body>
    <?php include '../headerFooter/header.php'?>
	<main>
	<h2>myAccount</h2>
	<a href="../customer/customer.php">Back to home</a>
	<div class="product-column">
		<div class="product-wrapper">
			<?php 
				foreach($product_list as $product) { ?> 
				
				<div class="product-item">
					<div class="picture-wrapper">
						<a href="">
							<img src="<?php echo $product['image']; ?>" alt="phone">
						</a>
					</div>
					<div class="product-detail">
						<div class="item-desc">
							<a href="#">
								<!-- <img src="<?php echo $product['image']; ?>" alt="illustration"> -->
							</a>
						</div>
						<div class="description">
							<h4>Username:</h4>
							<p><?php echo $_SESSION["username"]?></p>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	</main>
    <?php include '../headerFooter/footer.php'?>
</body>
</html>