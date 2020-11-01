<?php session_start();

if(isset($_SESSION["username"]) && $_SESSION["username"] === true){
    header("location:admins.php");
    exit;
}
?>
<?php require "headerss.php" ?>
    <div class="row">
        <div class="col-md-8 offset-md-2 adminlog formFonts">
        <div class="wrapper">
            <h5 class="text-center"><i>Welcome to POMAFRIQ Admin Portal</i></h5>
            <?php 
                    if(isset($_GET['p']) && ($_GET['p'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Wrong login details please check that both username and password are correct';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
            <form action="loginAdmin.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn subss" value="Login">
            </div>
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span class='alert alert-danger' role='alert'>Check that your username and password is correct</span>";
                    }
                ?>  
        </form>
    </div> 
        </div>
    </div>
<?php require "footerss.php" ?>
<?php
    unset($_SESSION["error"]);
?>