<?php require "adminheader.php" ?>
    <div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2" id="createCategory">
            <form action="categoryupload.php" method="POST" enctype="multipart/form-data" class="formFonts">
                <h4 class="text-center mt-2">Create Category</h4>
                    <hr width="80%">
                    <?php 
                    if(isset($_GET['category']) && ($_GET['category'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Category created successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['category']) && ($_GET['category'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to create category';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['category']) && ($_GET['category'] == 'wrong')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check image extension and ensure what you are uploading is an image';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['category']) && ($_GET['category'] == 'data_fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Could not upload to database';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <div class="form-row">
                    <div class="form-group col-md-6 px-4">
                            <label for="category">Product Category</label>
                            <input type="text" class="form-control" name="category" id="category" value="">
                    </div>
                    <div class="form-group col-md-6 px-4">
                            <label for="products">Category Photo</label>
                            <input type="file" class="form-control" id="products" name="catePhoto" required>
                        </div>
                </div>
                <div class="form-group px-4">
                    <button type="submit" class="btn subss mb-2">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2" id="createPro">
            <form action="productupload.php" method="post" enctype="multipart/form-data" class="formFonts">
                <h4 class="text-center">Create Product</h4>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Products created successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to create product';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'wrong')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check image extension and ensure what you are uploading is an image';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'data_fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Could not upload to database';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'no_input')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check that all fields are field correctly';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                    <div class="form-row">
                        <div class="form-group col-md-6 px-4">
                            <label for="products">Products Name</label>
                            <input type="text" class="form-control" id="products" placeholder="Name of products" name="productName" required>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="productCart">Product Category</label>
                            <select name="product_category" id="productCart" class="form-control">
                                <option selected> --- Choose Category --- </option> 
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
                            <input type="text" class="form-control" id="products" placeholder="Short Description" name="productShort" required>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="productPrice">Product Price</label>
                            <input type="text" name="productPrice" id="productPrice" class="form-control">
                        </div>
                    </div>
                    <div class="form-row"> 
                        <div class="form-group col-md-6 px-4">
                            <label for="productLong">Product Detailed Description</label>
                            <textarea name="productLong" id="productLong" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group col-md-6 px-4">
                            <label for="products">Products Photo</label>
                            <input type="file" class="form-control" id="products" placeholder="Short Description" name="productImg" required>
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <button class="btn subss mb-2">Upload Product</button>
                    </div>
            </form>
        </div>
    </div>
<?php require "footerss.php" ?>