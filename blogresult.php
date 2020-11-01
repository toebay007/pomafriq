<?php require "adminheader.php" ?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="adminsBlog.php" class="breadcrumbs">Back to Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Updated</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 tabss" style="margin-bottom: 200px">
        <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Blog Updated successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'ERROR::: Failed to create Blog';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'wrong')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'ERROR::: Check image extension and ensure what you are uploading is an image';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'data_fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'ERROR::: Could not upload to database';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['products']) && ($_GET['products'] == 'no_input')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'ERROR::: Check that all fields are field correctly';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
        </div>
    </div>
<?php require "footerss.php" ?>