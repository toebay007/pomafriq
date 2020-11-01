<?php require("adminheader.php"); ?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="deletePro.php" class="breadcrumbs">Back to delete product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Updated</li>
            </ol>
        </nav>
    </div>
<div class="row">
    <div class="col-md-10 offset-md-1" style="margin-bottom:150px;">
    
             <?php 
                    if(isset($_GET['delete']) && ($_GET['delete'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Product deleted successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
        <?php 
                    if(isset($_GET['delete']) && ($_GET['delete'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show mt-2">';
                        echo'ERROR:: product could not be deleted';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
    </div>
</div>

<?php require("footerss.php"); ?>