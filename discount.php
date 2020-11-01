<?php require "adminheader.php" ?>
    <div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active">Discount Product</li>
                <li class="breadcrumb-item active"><a href="deleteDiscount.php" class="breadcrumbs">Delete Discount Product</a></li>
            </ol>
        </nav>
    </div>

    <div class="col-md-10 offset-md-1 tabss">
            <h4 class="text-center">Add Discounted Product Category Image</h4>
        <form action="discountUpload.php" method="post" enctype="multipart/form-data" class="formFonts">
        <hr width="80%">
                    <?php 
                    if(isset($_GET['discount']) && ($_GET['discount'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Discount created successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['discount']) && ($_GET['discount'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to create discount';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['discount']) && ($_GET['discount'] == 'wrong')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check image extension and ensure what you are uploading is an image';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['discount']) && ($_GET['discount'] == 'data_fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Could not upload to database';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <div class="form-row">
                    <div class="form-group col-md-6 px-4">
                        <label for="products">Select Discount Image</label>
                        <input type="file" name="disImage" class="form-control">
                    </div>
                    <div class="form-group col-md-6 px-4">
                        <label for="disTopic">Discount Topic</label>
                        <input type="text" name="disTopic" id="disTopic" class="form-control">
                    </div>
                </div>
                <div class="form-row"> 
                    <div class="form-group col-md-6 px-4">
                        <label for="discDetails">Discount Details</label>
                        <textarea name="discDetails" id="discDetails" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>
                    <button type="submit" class="btn subss mb-2 px-4">
                        Upload Discount Product
                    </button>
        </form>
    </div>
<?php require "footerss.php" ?>