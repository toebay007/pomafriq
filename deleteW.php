<?php 

if(isset(($_GET['id']))){
    $id = $_GET['id'];
?>
    <?php  
     require "configN.php";

    $records = $mysqli->query("DELETE  wishlistz FROM  wishlistz where wish_usersid= '$id'"); // fetch data from database
   
?>

<?php if($records = true){
            header("location:wishlist.php");
        }else{
            header("location:wishlist.php?f=Failed");
        } } else{ ?>

                <div class="row">
                    <div class="col-md-8 shops">
                        <div class="alert alert-danger">
                            <p>You Shouldn't be here. Kindly go back or click <a href="wishlist.php" style="color:red;">here</a></p>
                        </div>
                </div>

<?php } ?>
<?php  ?>