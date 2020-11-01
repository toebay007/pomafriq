<?php
//error_reporting(0);
 //session_start();
require("admin.php");
$r = new Admin;
if (!isset($_SESSION['usernamezz'])) {
        header("location:admins.php");
}
$details = $r->getAdminDetails($_SESSION["usernamezz"]);

$admin = $r->countAdmin();

require("cartclass.php");
$cq = new category;
$categories = $cq->getCategory();

require("productclass.php");
$pq = new products;
$products = $pq->getProducts();

require("discountClass.php");
$d  =  new  discount;
$dis = $d->displayDiscount();

require("blogclass.php");
$b = new blog;
$post = $b->getPost();

require("contaClass.php");
$co = new contact;

require("orders.php");
$a = new orders;

$orderInfos = $a->getOrder();


?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            POMAFRIQ
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Comic+Neue|EB+Garamond|Gotu|Indie+Flower|Josefin+Sans|Merienda|Merienda+One|PT+Serif&display=swap" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet"> 
    <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.css" type='text/css'>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="container-fluid">
            <!-- Navigations -->
            <div class="row locations">
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
                <div class="col-md-4 col-sm-11 tests">
                    <?php 
                            if (isset($_SESSION['user'])) { ?>
                             <span>Hello <?php echo ucfirst($_SESSION['usernamezz']); ?>, Welcome</b></span>
                            <?php  }else { ?>
                   

                         <?php   } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 Navs">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-item nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="shops.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ORDERS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="ordersAdmins.php#ordersz">VIEW ORDERS</a>
                            <a class="dropdown-item" href="ordersAdmins.php#ordersIn">CONFIRM ORDERS</a>
                            <a class="dropdown-item" href="ordersAdmins.php#orderHis">ALL ORDERS</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownS" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            CREATE PRODUCTS
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownS">
                            <a class="dropdown-item" href="productsAdmin.php#createCategory">CREATE CATEGORY</a>
                            <a class="dropdown-item" href="productsAdmin.php#createPro">CREATE PRODUCT</a>
                            <a class="dropdown-item" href="views.php#edit_products">EDIT PRODUCT</a>
                            <a class="dropdown-item" href="deletePro.php">DELETE PRODUCTS</a>
                            </div>
                        </li>
                        
                        <?php if($_SESSION['status'] == 'Admin'){ ?>
                        <li class="nav-item">
                            <a class="nav-item nav-link" href=" adminreg.php">CREATE ADMIN</a>
                        </li>
                        <?php } else {} ?>
                        <li class="nav-item">
                            <a class="nav-item nav-link" href="logout.php" href="logout.php" tabindex="-1" aria-disabled="true">LOG OUT</a>
                        </li>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END OF NAVIGATIONS -->