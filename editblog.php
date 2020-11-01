<?php require("adminheader.php") ?>

<?php
if(isset($_GET['edit'])){
    $id = $_GET['edit']; 
?>
 <?php require "configN.php" ?>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="tabss">
            <?php
                        $records = $mysqli->query("SELECT * FROM blogs where id = '$id'"); // fetch data from database
                        while($data = $records->fetch_assoc())
                            {?>
                <h5 class="text-center">Edit Blog Post</h5>
                <p class="text-center"><?php echo $data['Topic']; ?></p>
                <form action="bloggedit.php?id=<?php echo $data['id']; ?>" class="formFonts" method="POST" enctype="multipart/form-data">
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
                        <button class="btn subss" style="margin-bottom: 30px;">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <?php   }  ?>
        <?php mysqli_close($mysqli);  // close connection
        } else{
           return "adminsBlog.php";
        } ?>
    </div>
<?php require("footerss.php")  ?>