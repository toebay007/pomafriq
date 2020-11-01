<?php require "headerss.php";    
if(isset(($_GET['id']))) {
$id = $_GET['id'];
$user = $_SESSION['user'];

require("wishclass.php");
$w = new wish;

$wis = $w->createWish($id,$user);
$wishs = $w->SelectWish($user);
require "configN.php";

    $records = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_id = '$id'"); // fetch data from database
    while($data = $records->fetch_assoc()) {
       
  ?>
    <div class="row">
        <div class="col-md-10 offset-md-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="breadcrumbs">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumbs">My Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 shops">
            <div class="col-12">
                <h4>Wish List</h4>
                <hr width="100%" class="hr">
            </div>
            <div class="col-12 shopsD">
                <table class="table table-borderless table-responsive">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Price</th>
                            <th></th>
                            <th></th>
                            <th> <a href="deleteW.php?id=<?php echo $user; ?>"><button class="subss">Empty List <i class="fa fa-trash"></i></button></a></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($wishs as $wishes) {  ?>
                        <tr>
                            <td><?php echo $wishes['wish_pro_name']; ?></td>
                            <td><img class='img-reponsive' height='100px' src="<?php echo $wishes['wish_pro_img']; ?>" alt="<?php echo $wishes['wish_pro_name']; ?>"></td>
                            <td>&#8358;<?php echo number_format($wishes['wish_pro_price'],2); ?></td>
                            <td> <input type="hidden" name="quantity" value="1" min="1" id="quantity" class="form-control quantity<?php echo $data['products_id']; ?>"> </td>
                            <td><button class="subss" onclick="add_cart('<?php echo $data['products_id']; ?>')">Add to Cart <i class="fas fa-cart-plus"></i></button></td>
                            <td><a href="deleteWish.php?id=<?php echo $wishes['wishz_id']; ?>"> <button class="subss"> <i class="fa fa-trash"></i> </button> </a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <?php } } else if($user = $_SESSION['user'])
 {
    
    require("wishclass.php");
    $w = new wish;
    $wishs = $w->SelectWish($user);
    if(!empty($wishs)){  
        ?>
            <div class="row">
        <div class="col-md-8 shops">
            <div class="col-12">
                <h4>Wish List</h4>
                <hr width="100%" class="hr">
            </div>
            <div class="col-12 shopsD">
                <table class="table table-borderless table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Price</th>
                            <th></th>
                            <th></th>
                            <th scope="col"><a href="deleteW.php?id=<?php echo $user; ?>"><button class="subss">Empty WishList <i class="fa fa-trash"></i></button></a></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($wishs as $wishes) {  ?>
                        <tr>
                            <td><?php echo $wishes['wish_pro_name']; ?></td>
                            <td><img class='img-reponsive' height='100px' src="<?php echo $wishes['wish_pro_img']; ?>" alt="<?php echo $wishes['wish_pro_name']; ?>"></td>
                            <td>&#8358;<?php echo number_format($wishes['wish_pro_price'],2); ?></td>
                            <td><input type="hidden" name="quantity" value="1" min="1" id="quantity" class="form-control quantity<?php echo $wishes['wish_pro_id']; ?>"></td>
                            <td><button class="subss" onclick="add_cart('<?php echo $wishes['wish_pro_id']; ?>')">Add to Cart <i class="fas fa-cart-plus"></i></button></td>
                            <td><a href="deleteWish.php?id=<?php echo $wishes['wishz_id']; ?>"><button class="subss"> <i class="fa fa-trash"></i> </button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        <?php }else{ ?>
                <div class="row">
                <div class="col-md-8 shops">
                    <div class="col-12">
                        <h4>Wish List</h4>
                        <hr width="100%" class="hr">
                    </div>
                <div class="alert alert-primary">
                    <p>You have no wished product </p>
                </div>
                </div>
                <?php  }  ?>
        
    <?php } else{  ?>
            <div class="row">
                <div class="col-md-8 shops">
                <div class="col-12">
                    <h4>Wish List</h4>
                    <hr width="100%" class="hr">
                </div>
                <div class="alert alert-primary">
                    <p>You have no wished product </p>
                </div>
                </div>
        <?php  }  ?>
        <div class="col-md-4 shops">
                <div class="col-12">
                    <h4>Blog Post</h4>
                    <hr width="100%" class="hr">
                </div>
                <table class="table table-borderless">
                    <tbody>
                        <?php foreach ($blogPro as $blogPros) {?>
                        <tr>
                            <td><a href="read.php?id=<?php echo $blogPros['id']; ?>" class="readB"><span><?php echo $blogPros['Topic']; ?></span></a></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>

<?php require "footerss.php"    ?>