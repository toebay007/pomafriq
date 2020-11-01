<?php require "adminheader.php" ?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">View and Edit Products</li>
            </ol>
        </nav>
    </div>
    <div class="row mb-2">
        <div class="col-md-2 tabss">
            <div class="form-row">
                <button class="btn btn-block form-control subss searchPro">Search by Products</button>
            <button class="btn btn-block form-control subss viewcat">View all Categories</button>
            <button class="btn btn-block form-control subss viewPro">View all Products</button>
            </div>
        </div>
        <div class="col-md-10 tabss" style="margin-bottom: 200px;">
            <div class="col-12 searchP mt-2">
                <h4 class="text-center">Search Products</h4>
                <form action="searchupload.php" method="post">
                    <div class="input-group col-md-10 offset-md-1">
                                <input type="search" name="searchs" class="form-control" placeholder="Search for category" required>
                            <span class="input-group-btn">
                                    <input type="submit" name="submit" class="btn subss" style="margin-top: 0px" value="Search">
                            </span>
                    </div>
                </form>
            </div>
            <?php 
                    if(isset($_GET['s']) && ($_GET['s'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show mt-2">';
                        echo'product not found';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>

            <div class="col-12 viewC mt-2">
                <h4 class="text-center">View all Categories</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Photo </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($categories as $category) {?>
                        <tr>
                            <td><?php echo $category['category_name']; ?></td>
                            <td><img src="<?php echo $category['category_pic']; ?>" class="proImgAdmin" alt="<?php echo $category['category_pic']; ?>"></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-12 viewP mt-2">
                <h4 class="text-center">View all Products</h4>
                <table class="table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>
                                Products
                            </th>
                            <th>
                                Products Picture
                            </th>
                            <th>
                                Products Category
                            </th>
                            <th>
                                Products price
                            </th>
                             <th>
                                Products Description
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product) {?>
                        <tr>
                            <td><?php echo $product['products_name']; ?></td>
                            <td><img src="<?php echo $product['products_img']; ?>" class="proImgAdmin" alt="<?php echo $product['products_name']; ?>"></td>
                            <td><?php echo $product['category_name']; ?></td>
                            <td>&#8358;<?php echo number_format($product['products_price'],2); ?></td>
                            <td><?php echo $product['products_long']; ?></td>
                        </tr>
                        <?php }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php require "footerss.php" ?>