<?php  require("adminheader.php"); ?>
    <div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="discount.php" class="breadcrumbs">Discount Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Delete Discount Product</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12">
        <?php 
                    if(isset($_GET['delete']) && ($_GET['delete'] == 'Success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Discount deleted successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['delete']) && ($_GET['delete'] == 'Failed')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to delete Discount';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['deleted']) && ($_GET['deleted'] == 'Success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'All discounts were deleted successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['deleted']) && ($_GET['deleted'] == 'Failed')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to delete All Discounts';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
            <?php if(!empty($dis)){  ?>
            <table class="table table-responsive" style="margin-top:40px; margin-bottom:80px;">
                <thead>
                    <tr>
                        <td>Discount Image</td>
                        <td>Discount Topic</td>
                        <td>Discount Details</td>
                        <td><a href="deleteDis.php" class="breadcrumbs">Delete all <i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dis as $discoun){  ?>
                    <tr>
                        <td><?php echo $discoun['discTopic']; ?></td>
                        <td><?php echo $discoun['discDetails']; ?></td>
                        <td><img src="<?php echo $discoun['disc_img']; ?>" alt="<?php echo $discoun['discTopic']; ?>" width="100px" height="100px"></td>
                        <td><a href="deleteDis.php?id=<?php echo $discoun['disc_id']; ?>" class="breadcrumbs">Delete <i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else{ ?> 
                <?php
                    echo'<div class="alert alert-danger alert-dismissible fade show" style=" margin-top:100px; margin-bottom:270px">';
                    echo'Sorry but there is currently no Dicount on Display available';
                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                            </button>';
                    echo'</div>';
                ?>
            <?php } ?>
        </div>
    </div>
    

<?php  require("footerss.php") ?>