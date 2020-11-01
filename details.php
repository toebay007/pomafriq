<?php require("headerss.php");
    if(isset(($_GET['id']))){
        $id = $_GET['id'];
?>
<?php  
     require "configN.php";

    $records = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_id = '$id'"); // fetch data from database
    while($data = $records->fetch_assoc()) {
       
?>
<div class="row">
    <div class="col-md-7 detailss">
        <img src="<?php echo $data['products_img']; ?>" alt="<?php echo $data['products_name']; ?>" class="proImg">
    </div>
    <div class="col-md-5 detailss">
        <center>
        <h5><?php echo $data['products_name']; ?></h5>
        <div>
        <span class="price">&#8358;<?php echo number_format($data['products_price'],2); ?></span>
        </div>
        <div class="form-group">
            <label for="quantity"> </label>
                <input type="number" name="quantity" value="1" min="1" id="quantity" class="form-control quantity<?php echo $data['products_id']; ?>">
        </div> 
        <div class="text-center readB">
           <?php if(isset($_SESSION['user'])){?> <a id="myWish" href="wishlist.php?product=<?php echo $data['products_name']; ?>&id=<?php echo $data['products_id']; ?>&user=<?php echo $_SESSION['user']; ?>" style="color:black"><p><u><i>Save to wishlist</i></u></p></a> <?php } else{ ?> <a href="#" data-toggle="modal" data-target="#login" style="color:black"><u><i>Login to save Product</i></u></a>  <?php  }?>
        </div>
        <div class="form-group">
                <button class="subss form-control" id="cartsAdd" onclick="add_cart('<?php echo $data['products_id']; ?>')">Add to cart</button>
        </div>
        <p>Description</p>
        <span>
        <?php echo $data['products_long']; ?> 
        </span>
        </center>
    </div>
</div>

    
    <?php }
    }  else{ ?>
        <div class="row">
            <div class="col-md-8 reader">
                <?php
                    echo'<div class="alert alert-danger alert-dismissible fade show" style="margin-bottom:270px">';
                    echo'ERROR:: NO PRODUCT SELECTED. <br/> Kindly Select a PRODUCT or <a href="index.php" style="color:red";><i>CLICK HERE to go back</i></a>"';
                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                            </button>';
                    echo'</div>';
                ?>
            </div>
            <div class="col-md-4 reader">
                <div class="col-12">
                    <h4>Products Gallery</h4>
                    <hr width="100%" class="hr">
                </div>
                    <table class="table table-borderless">
                    <tbody>
                        <?php  $i = 0; foreach ($prodsu as $produ) 
                        {  if($i % 3 == 0){
                            echo '<tr>';
                        } 
                        ?>
                                <td>
                                        <a href="details.php?id=<?php echo $produ['products_id']; ?>"><img src="<?php echo $produ['products_img']; ?>" class="proImg" alt="<?php echo $produ['products_name']; ?>"></a>
                                
                                </td>
                                <?php 
                                        
                                        if($i % 3 == 2){
                                            echo '</tr>'; } 
                                        
                                            $i++;    } ?>
                    </tbody>
                    </table>
            </div>
        </div>
  <?php  }
    require("footerss.php") ?>