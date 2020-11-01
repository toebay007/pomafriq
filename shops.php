<?php require "headerss.php";  
if(isset(($_GET['id']))){
$id = $_GET['id'];
?>

<?php require "configN.php";

                    $records = $mysqli->query("SELECT * FROM category JOIN products ON category.id=products.products_category WHERE id = '$id' LIMIT 1"); // fetch data from database
                    while($data = $records->fetch_assoc())
                        {?>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php" class="breadcrumbs">Home</a></li>
                    <li class="breadcrumb-item active breadcrumbs" aria-current="page"><?php echo $data['category_name']; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <?php   }  ?>
        <?php mysqli_close($mysqli);  // close connection ?>  
    <div class="row">
        <div class="col-md-8 shops">
            <div class="col-12">
                <h4>Shops</h4>
                <hr width="100%" class="hr">
            </div>
           
            <div class="col-12 shopsD">
                <table class="table table-borderless table-responsive">
                    <tbody><?php require "configN.php";

                            $recordss = $mysqli->query("SELECT * FROM category JOIN products ON category.id=products.products_category WHERE id = '$id'"); // fetch data from database
                            $fix = '';
                            $i = 0;
                            while($datas = $recordss->fetch_assoc()){
                            ?>
                       <?php  
                                 if($i % 3 == 0){
                                     echo '<tr>';
                                 }?>   
                            <td>
                                
                                   <div>
                                        <div class="col-12">
                                                <img src="<?php echo $datas['products_img']; ?>" class="proImg" alt="<?php echo $datas['products_name']; ?>">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                    <?php echo $datas['products_name']; ?>
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label for="quantity"> </label>
                                                    <input type="number" name="quantity" value="1" min="1" id="quantity" class="form-control quantity<?php echo $datas['products_id']; ?>">
                                            </div> 
                                            <div class="pros">
                                                <p>
                                                    &#8358;<?php  echo number_format($datas['products_price'],2); ?>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="details.php?id=<?php echo $datas['products_id']; ?>"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                                <button class="btn btn-block cartsAdd" onclick="add_cart('<?php echo $datas['products_id']; ?>')"> Add to Cart</button> 
                                        </div>
                                    </div>
                                   
                            </td>
                                <?php if($i % 3 == 2){
                                    echo '</tr>';
                                } ?>   

                            <?php $i++; }  ?>
                                <?php mysqli_close($mysqli);  // close connection ?> 
                    </tbody>
                </table>
            </div>
        </div>
        <?php } else { ?>
            <div class="row">
                <div class="col-md-8 shops">
                    <div class="col-12">
                        <h4>Shops</h4>
                        <hr width="100%" class="hr">
                    </div>
                    <div class="col-12 shopsD">
                <table class="table table-borderless table-responsive">
                    <tbody><?php require "configN.php";

                            $recordss = $mysqli->query("SELECT * FROM `products` ORDER BY RAND() LIMIT 6"); // fetch data from database
                            $fix = '';
                            $i = 0;
                            while($datas = $recordss->fetch_assoc()){
                            ?>
                       <?php  
                                 if($i % 3 == 0){
                                     echo '<tr>';
                                 }?>   
                            <td>
                                
                                   <div>
                                        <div class="col-12">
                                                <img src="<?php echo $datas['products_img']; ?>" class="proImg" alt="<?php echo $datas['products_name']; ?>">
                                            </div>
                                            <div class="col-12">
                                                <p class="pros">
                                                    <b>
                                                    <?php echo $datas['products_name']; ?>
                                                    </b>
                                                </p>
                                            </div>
                                            <div class="form-group">
                                                <label for="quantity"> </label>
                                                    <input type="number" name="quantity" value="1" min="1" id="quantity" class="form-control quantity<?php echo $datas['products_id']; ?>">
                                            </div> 
                                            <div class="pros">
                                                <p>
                                                    &#8358;<?php  echo number_format($datas['products_price'],2); ?>
                                                </p>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                            <a href="details.php?id=<?php echo $datas['products_id']; ?>"> <button class="btn btn-block details"> View Details</button> </a>
                                            </div>
                                            <div class="col-12" style="text-align: center;">
                                                <button class="btn btn-block cartsAdd" onclick="add_cart('<?php echo $datas['products_id']; ?>')"> Add to Cart</button> 
                                        </div>
                                    </div>
                                   
                            </td>
                                <?php if($i % 3 == 2){
                                    echo '</tr>';
                                } ?>   

                            <?php $i++; }  ?>
                                <?php mysqli_close($mysqli);  // close connection ?> 
                    </tbody>
                </table>
            </div>
                </div>
      <?php  } ?>
        <div class="col-md-4 shops">
            <div class="col-12">
                    <h4>Products Gallery</h4>
                    <hr width="100%" class="hr">
            </div>
            <div class="col-12">
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
                
                <div class="col-12">
                    <h4>Latest News</h4>
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