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
    <link rel="stylesheet" href="customer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="customer.js"></script>
    <title>Customer</title>
</head>
<body>
    <?php include '../headerFooter/header.php' ?>
    <main>
        <!-- main root -->
        <div class="root">
            <!-- slideshow -->
            <div class="slide-content slide-display-container">
                <img class="mySlides" style="width: 100%; display: block;" src="https://lzd-img-global.slatic.net/g/skyline/i8/454da2a5e9a74813a9f508df003bc9c6-1360-480.jpg_1200x1200q80.jpg_.webp" alt="slide-img">
                <img class="mySlides" src="https://lzd-img-global.slatic.net/g/skyline/i8/e175f133ff7e443f94781e47287e9b94-1808-600.jpg_1200x1200q80.jpg_.webp" alt="slide-img">
                <img class="mySlides" src="https://lzd-img-global.slatic.net/g/skyline/i8/3ab8c210f9e4478d823ff6bbe483d290-1360-480.jpg_1200x1200q80.jpg_.webp" alt="slide-img">
                <img class="mySlides" src="https://lzd-img-global.slatic.net/g/skyline/i8/81a92f4886504401a4ebd34fd1e86dee-1360-480.jpg_1200x1200q80.jpg_.webp" alt="slide-img">
                
                <button class="scroll-btn scroll-black scroll-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="scroll-btn scroll-black scroll-display-right" onclick="plusDivs(+1)">&#10095;</button>
            </div>

            <!-- small slide cards -->
            <div class="row">
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/15dc65036ed45a27a0d658fc39a606cc.png_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/99f45f458ce75e6c078f6753ab27cd43.png_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/8555029738c509e1c707b7ed2bab829d.jpg_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/8fb58f5ab7f7a1c10052ff2443262d8f.jpg_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/03277e238bd7412ae02916a73d6721b5.jpg_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/baaac2d1b8e29ab9d9b7a2d3d7d50504.jpg_120x120q80.jpg_.webp" alt="slide-img">
                </div>
                <div class="column">
                    <img class="cursor" src="https://lzd-img-global.slatic.net/g/p/1b0cbfed5303a6cfdf1533f1dd4add14.jpg_120x120q80.jpg_.webp" alt="slide-img">
                </div>
            </div>

            <!-- page container -->
            <div class="page-wrapper">
                <!-- LEFT COLUMN -->
                <div class="filter-column">
                    <!-- search column -->
                <div class="search-column">
                    <h4><a href="../myAccount/myAccount.php">My Account</a></h4>
                    <a href="../logout/logout.php">Log out</a>
                </div>

                <!-- price category -->
                <div class="price-heading">
                    <div class="price-header">
                        <h4>Price</h4>
                    </div>
                    <div class="section-filter">
                        <input class="filter-btn" type="number" id="min" placeholder="Min">
                        <input class="filter-btn" type="number" id="max" placeholder="Max">
                        <button class="find-btn" id="filter_apply">
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <!-- RIGHT COLUMN -->
            <div class="product-column">
                <h1 class="product-desc">Điện Thoại Di Động, Smartphone Chính Hãng, Bảo Hành Uy Tín</h1>
                <div class="product-header">
                    <div class="matching-desc">
                        <p><a id="num"></a> items found</p>
                    </div>
                    <div class="sorting">
                        <div class="sort-desc">
                            <p>Sort By :</p>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Best Match</button>
                            <div class="dropdown-content">
                            <a href="#" class="bold">Best Match</a>
                            <a href="#">Price low to high </a>
                            <a href="#">Price high to low</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT -->
                <div class="products"></div>
                <script src="script.js"></script>
                <!-- END OF PRODUCT -->
            </div>

        </div>
    </div>
    </main>
    <?php include '../headerFooter/footer.php'?>
</body>
</html>