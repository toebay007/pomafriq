<?php require "adminheader.php"; ?>
<div class="col-md-12"> 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">CREATE ADMIN</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-10 offset-md-1 formFonts">
        <?php 
                    if(isset($_GET['reg']) && ($_GET['reg'] == 'password')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check that all inputs are correctly filled';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['reg']) && ($_GET['reg'] == 'fail')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'Check that both password and confirm password MATCHES';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
            <form action="signUpdetails.php" method="post">
                <div class="form-group">
                    <label>Firstname</label>
                    <input type="text" name="finame" class="form-control" value="">
                </div> 
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="laname" class="form-control" value="">
                </div> 
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="">
                    </div> 
                    <div class="form-group col-md-6">
                        <label>Emails</label>
                        <input type="text" name="emails" class="form-control" value="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" name="confirm_password" class="form-control" value="">
                        </div>   
                <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" name="password" class="form-control" value="">
                    </div>
                </div>
                    <div class="form-group col-md-6 px-1">
                        <label>Phone Number</label>
                        <input type="number" name="phoneNo" class="form-control" value="">
                    </div>
                <div class="form-group">
                    <input type="submit" class="btn subss" value="Submit" onclick="confirm('Are you sure you want to create a new admin?')";>
                </div>
            </form>
        </div>
    </div>
<?php require "footerss.php" ?>