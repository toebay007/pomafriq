<?php require "adminheader.php";
 $id = $_GET['product']; ?>
 <?php require "configN.php" ?>
 <?php
                        $records = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_id = '$id'"); // fetch data from database
                        while($data = $records->fetch_assoc())
                            { ?>
<center>
<div class="row">
        <div class="col-md-8 offset-md-2" id="createPro">
            <form action="productupdate.php?id=<?php echo $data['products_id']; ?>" method="post" enctype="multipart/form-data" class="formFonts">
                <h4 class="text-center">Update Product <i><u><strong><?php echo $data['products_name']; ?></strong></u></i></h4>
                
                    <div class="form-row">
                        <div class="form-group col-md-6 px-4">
                            <label for="products">Products Name</label>
                            <input type="text" class="form-control" id="products" placeholder="Name of products" value="<?php echo $data['products_name']; ?>" name="productName" required>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="productCart">Product Category</label>
                            <select name="product_category" id="productCart" class="form-control">
                                <option selected> --- <?php echo $data['category_name']; ?> --- </option> 
                                <?php foreach ($categories as $category) {?>
                                    <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?> </option>
                                    <?php }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 px-4">
                            <label for="products">Products Short Description</label>
                            <input type="text" class="form-control" id="products" placeholder="Short Description" value="<?php echo $data['products_short']; ?>" name="productShort" required>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="productPrice">Product Price</label>
                            <input type="text" name="productPrice" id="productPrice" value="<?php echo $data['products_price']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-row"> 
                        <div class="form-group col-md-6 px-4">
                            <label for="productLong">Product Detailed Description</label>
                            <textarea name="productLong" id="productLong" cols="30" rows="10" class="form-control"><?php echo $data['products_long']; ?></textarea>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="products">Products Photo</label>
                            <img src="<?php echo $data['products_img']; ?>" alt="<?php echo $data['products_name']; ?>" class="img-responsive" height="200px">
                            <input type="file" class="form-control" id="products" placeholder="Short Description" name="productImg" required>
                            
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <button class="btn subss mb-2">Update Product</button>
                    </div>
            </form>
        <?php   }  ?>
        <?php mysqli_close($mysqli);  // close connection ?>  
        </div>
    </div>
</center>
<?php require "footerss.php" ?>