<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../index.php");  
    }
?>

<?php 
	$product_list = json_decode(file_get_contents("data/products.json") ,1)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View My Products</title>
    <link rel="stylesheet" href="assets/view.css">
</head>
<body>
    <?php include '../headerFooter/header.php'?>
	<main>
	<h2>View My Products</h2>
	<a href="../logout/logout.php" style="margin-left:50%;">LOG OUT</a>
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
								<?php echo $product['name']; ?>
							</a>
						</div>
						<div class="pricing">
							<span class="price-text">₫ <?php echo number_format($product['price']); ?></span>
						</div>
						<div class="discount">
							<span class="discount-text">
							<?php echo $product['description']; ?>
							</span>
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