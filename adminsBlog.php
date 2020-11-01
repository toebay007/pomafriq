<?php require "adminheader.php" ?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create and Edit Blog Post</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-2 tabss">
            <button class="btn btn-block create subss">Create</button>
        </div>
        <div class="col-md-2 tabss">
            <button class="btn btn-block viewsB subss">View and Edit</button>
        </div>
    </div>
    <div class="row creaT">
        <div class="col-12 mb-2 tabss">
            <h4 class="text-center">Create Blog Post</h4>
            <?php 
                    if(isset($_GET['blog']) && ($_GET['blog'] == 'success')){
                        echo'<div class="alert alert-success alert-dismissible fade show">';
                        echo'Blog created successfully';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['blog']) && ($_GET['blog'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Failed to create blog';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['blog']) && ($_GET['blog'] == 'wrong')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check image extension and ensure what you are uploading is an image';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['blog']) && ($_GET['blog'] == 'data_fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Could not upload to database';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['blog']) && ($_GET['blog'] == 'no_input')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check that all fields are field correctly';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
            <form action="blogupload.php" class="formFonts" method="post" enctype="multipart/form-data">
            <div class="form-group tabss px-4">
                        <label for="topic">
                            Topic
                        </label>
                        <input type="text" name="topic" id="topic" class="form-control">
                    </div>
                    <div class="form-group tabss px-4">
                        <label for="shortD">Introduction</label>
                            <textarea name="shortD" id="shortD" class="form-control" cols="10"></textarea>
                    </div>
                    <div class="form-group tabss px-4">
                        <label for="longD">Content</label>
                            <textarea name="longD" id="longD" class="form-control"rows="10"></textarea>
                    </div>
                    <div class="form-row px-4">
                        <div class="form-group col-md-6">
                            <label for="photos">Upload Photo</label>
                                <input type="file" name="photos" id="photos" class="form-control">
                        </div>
                    </div>
                    <div class="form-group px-4">
                        <button class="btn subss" style="margin-bottom: 30px;">Upload</button>
                    </div>
            </form>
        </div>
    </div>
    <div class="row views">
        <div class="col-12 tabss">
            <h4 class="text-center">View Post</h4>
                    <table class="table table-bordered formFonts">
                        <thead>
                            <tr><th>Topic</th>
                                <th>Short Content</th>
                                <th>Content</th>
                                <th>Photo</th>
                                <th>Date Created</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($post as $blogged) {?>
                            <tr>
                                <td>
                                <?php echo $blogged['Topic']; ?>
                                </td>
                                <td>
                                <?php echo $blogged['intro']; ?>
                                </td>
                                <td>
                                <?php echo nl2br($blogged['details']); ?>
                                </td>
                                <td><img src="<?php echo $blogged['photos']; ?>" alt="<?php echo $blogged['Topic']; ?>" class="proImgAdmin"></td>
                                <td>
                                 <?php echo $blogged['created']; ?>
                                </td>
                                <td><a href="editblog.php?edit=<?php echo $blogged['id']; ?>"><button type="submit" class="btn btn-block subss">Edit</button></a></td>
                            </tr>
                        </tbody>
                    <?php }
                                ?>
                    </table>
        </div>
    </div>
<?php require "footerss.php" ?>