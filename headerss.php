
<?php 
error_reporting(0);

session_start();

require("user.php");

//echo $_SESSION['user'];

require("blogclass.php");
$bl = new blog;
$blogK = $bl->getPost3();
$blo = new blog;
$blogs = $blo->getPost1();
$klo = new blog;
$klogs = $klo->getPost2();
$bloP = new blog;
$blogPro = $bloP->getPostPro();

require("productclass.php");
$pro = new products;
$products = $pro->getProductsHome();
$pros = new products;
$prodsu = $pros->getProductsImg();

require("cartclass.php");
$ca = new category;
$carts = $ca->getCategoryHome();

require("discountClass.php");
$prosd = new discount;
$discount = $prosd->selectDiscount();




?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            POMAFRIQ
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Comic+Neue|EB+Garamond|Gotu|Indie+Flower|Josefin+Sans|Merienda|Merienda+One|PT+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css" type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 

    <!-- Font Awesome JS -->
    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="fontawesome/css/all.css" rel="stylesheet"> 
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="container-fluid">
            <!-- Navigations -->
            <div class="row locations" id="navsss">
                <div class="col-md-6 col-sm-11 tests">
                    <div> 
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <span> Abuja, Nigeria </span> 
                        &nbsp; &nbsp;
                        <span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.471 16.471 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                            </svg>
                            <span>+234-(0)-1234-123-1234</span>
                        </span>
                        &nbsp; &nbsp;
                        <span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                            </svg>
                            <span>pomafriq@gmail.com</span>
                        </span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 tests text-center">
                    <span>
                        <a href="#"><i class="fab fa-facebook"></i> </a>
                    </span>
                    <span>
                        <a href="#"><i class="fab fa-instagram px-4"></i> </a>
                    </span>
                    <span>
                        <a href="#"> <i class="fab fa-whatsapp"></i> </a>
                    </span>
                </div>
                <div class="col-md-4 col-sm-11 tests text-center">
                    
                    <?php if(isset($_SESSION['user'])) {?>
                        <span><a href="logoutUser.php">Logout</a></span> /
                        <button type="button" class="btn notes" data-toggle="modal" data-target="#staticBackdrop">
                        <i class="fas fa-cart-plus" style="color:black"></i>
                    <span class="badge badge-light" style="height: 1.3em;" id="countNo">
                    <?php if(isset($_SESSION['product_cart'])){ 
                        echo count($_SESSION['product_cart']); 
                    }else{ 
                        echo 0;} ?></span>
                    </button>
                    <?php } else {?>
                        <!-- <span><a href="logoutUser.php">Logout</a></span>/ -->
                    <span><a href="#" data-toggle="modal" data-target="#login">Login</a></span>
                    / 
                    <span><a href="signups.php">Register</a></span>
                    <?php } ?>
                </div>
            </div>
        
            <div class="row navss">
                <div class="col-md-12 col-sm-12 Navs" style="margin-bottom: 50px;">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <?php if(isset($_SESSION['username'])) {?>
                            <li class="nav-item ">
                            <span><a class="nav-item nav-link">signed in as <?php echo ucfirst($_SESSION['username']); ?></a></span>
                        </li>
                    <?php } else{}?>
                        <li class="nav-item ">
                            <a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="shops.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SHOP
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach($carts as $cart) {?>
                                <a class="dropdown-item" href="shops.php?category=<?php echo $cart['category_name']; ?>&id=<?php echo $cart['id']; ?>"><?php echo $cart['category_name']; ?></a>
                                <?php }?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownS" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MY ACCOUNT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownS">
                            <a class="dropdown-item" href="carts.php">CARTS</a>
                            <a class="dropdown-item" href="#">CHECKOUT</a>
                            <a class="dropdown-item" href="wishlist.php">WISHLIST</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link" href=" read.php">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link" href="contact.php" href="contact.php" tabindex="-1" aria-disabled="true">CONTACT US</a>
                        </li>
                        </div>
                    </div>
                </div>
            </div>
                <?php 
                    if(isset($_GET['success']) && ($_GET['success'] == 'successful')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Registration successful click <a href="#" data-toggle="modal" data-target="#login" class="readB" style="color: green"> <i> <u> here </u> </i> </a> to login to your account';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['payment']) && ($_GET['payment'] == 'success')){
                        echo'<div class="alert text-center alert-success alert-dismissible fade show">';
                        echo'<p>Payment Successfully Received</p>';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                
        <!-- END OF NAVIGATIONS -->