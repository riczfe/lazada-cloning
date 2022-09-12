<?php 
    session_start();
    if (!isset($_SESSION["loggedIn"])){
        header("Location: ../../../index.php");  
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="storageStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="storage.js"></script>
    <title>Category Name's - Depends</title>
</head>

<body onload="doShowAll()">
    <?php include '../../headerFooter/header.php' ?>
    <main>
        <!-- main root -->
		<div class="root">
            <!-- breadcrumb -->
			<div class="breadcrumb-list">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a> >
                    </li>
                    <li class="breadcrumb-item">
                        <a href="../../customer/customer.php">Category Name</a> > 
                    </li>
                    <li class="breadcrumb-item">
                        <span> Category Name</span>
                    </li>
                </ul>
            </div>
            
            <!-- PRODUCT DESCRIPTION -->
            <div class="container">
                <!-- PRODUCT IMAGE -->
                <div class="product-image">
                    <div class="main-img">
                        <img src="https://lzd-img-global.slatic.net/g/p/c21a8651c20661959e74cd71e9701a15.jpg_720x720q80.jpg_.webp" alt="productimage">
                    </div>
                    <div class="slider">
                        <div class="slide-img">
                            <img src="https://lzd-img-global.slatic.net/g/p/b03608ee3dcd8d123eabf664b34e33e2.png_120x120q80.jpg_.webp" alt="image1">
                        </div>
                        <div class="slide-img">
                            <img src="https://lzd-img-global.slatic.net/g/p/23d8a3281b6fbe23927191cbd7552ccd.jpg_120x120q80.jpg_.webp" alt="img2">
                        </div>
                        <div class="slide-img">
                            <img src="https://lzd-img-global.slatic.net/g/p/9f1704db6ce0b560396568bc5351bd06.jpg_120x120q80.jpg_.webp" alt="img3">
                        </div>
                        <div class="slide-img">
                            <img src="https://lzd-img-global.slatic.net/g/p/11bf87a43cd94d889d6136a822ae7512.jpg_120x120q80.jpg_.webp" alt="img4">
                        </div>
                    </div>
                </div>
                
                <!-- PRODUCT DETAIL -->
                <div class="detail-container">
                    <form name=ShoppingList>
                        <div class="title">
                            <br>
                            <img src="https://lzd-img-global.slatic.net/g/tps/imgextra/i1/O1CN01JUOYif22N3Uu7JX4R_!!6000000007107-2-tps-162-48.png" alt="promo">
                            <br>
                            <a name="name" id="name">Điện thoại Samsung Galaxy Z Fold3 5G (12GB / 256GB & 12GB / 512GB)</a>
                        </div>
                        <div class="brand">
                            <span>Brand: <a href="samsung.com">Samsung</a> | <a href="samsung.com">More Smartphones from Samsung</a></span>
                        </div>
                        <div class="price-tag">
                            ₫ <span class="price" id="data">41,990,000</span>
                        </div>
                    </form>    
                    <!-- ADD TO CART -->
                    <div class="cart">
                        <input type=button value="Add to Cart" onclick="SaveItem()"> 
                    </div>
                </div>

            </div>

		</div>
    </main>  
    <?php include '../../headerFooter/footer.php' ?>
</body>
</html>