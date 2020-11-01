<?php require("headerss.php"); ?>

<div class="row">
    <div class="col-md-2 signdiv">

    </div>
    <div class="col-md-8 signdiv" id="signdivs">
        <center>
            <h4>Welcome to PomaAfrig</h4>
            <span >Home and Skin Care Products</span>
        </center>
        <?php 
                    if(isset($_GET['data']) && ($_GET['data'] == 'error')){
                        echo'<div class="alert alert-danger alert-dismissible fade show">';
                        echo'LMAO>>>FIRST OF ALL YOU SHOULD NOT BE SEEING THIS <br/>ERROR:: Its not you, it is us...Kindly contact the admin';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
                <?php 
                    if(isset($_GET['short']) && ($_GET['short'] == 'password')){
                        echo'<div class="alert alert-warning alert-dismissible fade show">';
                        echo'Check that your passwords Match and Password should be more than 6 Characters';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>

            <?php 
                    if(isset($_GET['input']) && ($_GET['input'] == 'not_complete')){
                        echo'<div class="alert alert-warning alert-dismissible fade show">';
                        echo'Kindly Complete all fields for registration';
                        echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span></button>';
                        echo'</div>';
                    }
                ?>
        <div class="modal-body">
            <form action="signup.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="fname" placeholder="enter firstname" name="fname" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="lname" placeholder="enter lastname" name="lname" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" id="pwd1" placeholder="Password" name="pwd1" required> 
                    </div>
                    <div class="form-group col-md-6">
                        <input type="password" class="form-control" id="pwd2" placeholder="Confirm Password" name="pwd2" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" name="phoneNo" >
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                </div>
                
                
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridsCheck">
                        <label class="form-check-label" for="gridsCheck">
                            <span>I agree to terms and conditions of usage on this website.</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn subss signups" disabled>Sign Up</button>
            </form>      
        </div>
    </div>
    <div class="col-md-2 signdiv">
        
    </div>
</div>


<?php require("footerss.php"); ?>