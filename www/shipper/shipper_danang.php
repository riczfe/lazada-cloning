
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ship.css">
    <script src="tet.js"></script>
    <title>Lazada - Shipping - HCMC </title>
    <link rel="stylesheet" href="../headerFooter/headerFooter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="action.js"></script>
</head>
<body> 
    <?php include '../headerFooter/header.php'?>
    <br>
    <br>
    <h1 class="page-header">Da Nang</h1>
       <div class ="shipping_container">
        <div class="ship_card" id="ship_card1">
            <div class="ship_img">
                <img src="picture/1.jpg" alt="product images"/>
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product1</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select either deliver or cancel</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop1()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox1" class="dropdown-content">
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to Delivered');invi1()">Delivered</a>
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to canceled');invi1()">Canceled</a>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ship_card" id="ship_card2">
            <div class="ship_img">
                <img src="picture/2.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product2</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop2()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox2" class="dropdown-content">
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to Delivered');invi2()">Delivered</a>
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to canceled');invi2()">Canceled</a>                                
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card3">
            <div class="ship_img">
                <img src="picture/3.jpg" alt="product images" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product3</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop3()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox3" class="dropdown-content">
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to Delivered');invi3()">Delivered</a>
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to canceled');invi3()">Canceled</a>                                
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card4">
            <div class="ship_img">
                <img src="picture/4.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product4</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop4()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox4" class="dropdown-content">
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to Delivered');invi4()">Delivered</a>
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to canceled');invi4()">Canceled</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card5">
            <div class="ship_img">
                <img src="picture/5.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product5</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop5()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox5" class="dropdown-content">
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to Delivered');invi5()">Delivered</a>
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to canceled');invi5()">Canceled</a>                                
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card6">
            <div class="ship_img">
                <img src="picture/6.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product6</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop6()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox6" class="dropdown-content">
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to Delivered');invi6()">Delivered</a>
                            <a href ="#" class="toggle" onclick="javascript:alert('changed successfully to canceled');invi6()">Canceled</a>                                
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card7">
            <div class="ship_img">
                <img src="picture/7.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product7</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop7()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox7" class="dropdown-content">
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to Delivered');invi7()">Delivered</a>
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to canceled');invi7()">Canceled</a>                                
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="ship_card" id="ship_card8">
            <div class="ship_img">
                <img src="picture/8.jpg" alt="product image" />
                <ul class="actions">
                    <li>
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <span>More detail</span>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Delivery at XXX</span>
                    </li>
                    <li>
                        <i class="fa fa-info" aria-hidden="true"></i>
                        <span>Customer name XXX</span>
                    </li>
                </ul>
            </div>
            <div class="ship_content">
                <div class="ship_product_name">
                    <h3> Product8</h3>
                </div>
                <div class="ship_price">
                    <h2>$10</h2>
                </div>
                <br>
                <p class="description">Click here to select item you want to deliver</p>
                <div class="checking_sys">
                    <div class="dropdown">
                        <button onclick="myDrop8()" class="dropbtn">Active - Click to change</button>
                        <div id="dropbox8" class="dropdown-content">
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to Delivered');invi8()">Delivered</a>
                            <a href ="#" class="toggle"  onclick="javascript:alert('changed successfully to canceled');invi8()">Canceled</a>
                        </div>
                    </div>
                </div>
        </div>
        </div>
   </div>
   <?php include '../headerFooter/footer.php'?>
</body>