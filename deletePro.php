<?php require "adminheader.php" ?>
    <div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Delete Product</li>
            </ol>
        </nav>
    </div>
    <div class="col-md-12 tabss">
            <div class="col-12 mt-2" style="margin-bottom:200px;">
                <h4 class="text-center">Search Products to Delete</h4>
                <form action="searchuploads.php" method="POST">
                    <div class="input-group col-md-10 offset-md-1">
                                <input type="search" name="searchs" class="form-control" placeholder="Search for Products" required>
                            <span class="input-group-btn">
                                    <input type="submit" name="submit1" class="btn subss" style="margin-top: 0px" value="Search">
                            </span>
                    </div>
                </form>
                <?php 
                    if(isset($_GET['s']) && ($_GET['s'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'ERROR::: Product not available';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
            </div>
            
         </div>
<?php require "footerss.php" ?>