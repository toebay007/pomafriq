<?php require("headerss.php"); ?>
 <div class="row">
 <div class="col-md-12">
 <nav aria-label="breadcrumb">
     <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.php" class="breadcrumbs">Home</a></li>
         <li class="breadcrumb-item active" aria-current="page">Blog</li>
     </ol>
 </nav>
 </div>
</div>
<?php if(isset(($_GET['id']))){
    $id = $_GET['id'];

    require "configN.php";

                    $records = $mysqli->query("SELECT * FROM blogs  WHERE id = '$id'"); // fetch data from database
                    while($data = $records->fetch_assoc())
                        {
   ?>
    <div class="row">
        <div class="col-md-9 reader">
                <img src="<?php echo $data['photos']; ?>" alt="<?php echo $data['Topics']; ?>" width="100%" height="500px">
        <div class="col-12 reads">
            <h4><?php echo $data['Topic']; ?></h4>
        </div>
        <div class="col-12 reads">
        <?php echo nl2br($data['details']); ?>
        </div>
        </div>
            <?php   }  ?>
                <?php mysqli_close($mysqli);  // close connection ?>  
        <div class="col-md-3 reader">
            <div class="col-12">
                        <h4>Latest News</h4>
                        <hr width="100%" class="hr">
                    </div>
                    <table class="table table-borderless">
                        <tbody>
                            <?php foreach ($blogPro as $blogPros) {?>
                            <tr>
                                <td><a href="read.php?id=<?php echo $blogPros['id']; ?>" class="readB"><span><?php echo $blogPros['Topic']; ?></span></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            </div>
    </div>
<?php } else {
  ?>  
  <div class="row">
    <div class="col-md-9 reader">
       <?php
       require "configN.php";

                $records = $mysqli->query("SELECT * FROM `blogs` ORDER BY id DESC LIMIT 1"); // fetch data from database
                while($datass = $records->fetch_assoc())
           { ?>
                <img src="<?php echo $datass['photos']; ?>" alt="<?php echo $datass['Topics']; ?>" width="100%" height="500px">
            <div class="col-12 reads">
                <h4><?php echo $datass['Topic']; ?></h4>
            </div>
            <div class="col-12 reads">
            <?php echo nl2br($datass['details']); ?>
            </div>
        </div>
            <?php   }  ?>
                <?php mysqli_close($mysqli);  // close connection ?> 
        <div class="col-md-3 reader">
            <div class="col-12">
                <h4>Posted Blog News</h4>
                <hr width="100%" class="hr">
            </div>
                <table class="table table-borderless">
                    <tbody>
                        <?php foreach ($blogPro as $blogPros) { ?>
                        <tr>
                            <td><a href="read.php?id=<?php echo $blogPros['id']; ?>" class="readB"><span><?php echo $blogPros['Topic']; ?></span></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
                    
<?php } ?>
<?php require("footerss.php") ?>