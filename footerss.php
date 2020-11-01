 <!-- modal for signing up -->
 <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel1">Sign Up</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
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
                                        <input type="password" class="form-control" id="pwd1" placeholder="Password" autocomplete="new-password" name="pwd1" required> 
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="pwd2" placeholder="Password" autocomplete="new-password" name="pwd2" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="tel" class="form-control" id="phoneNo" placeholder="phone number" name="phoneNo" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" name="username" id="username" class="form-control" autocomplete="username" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
                                </div>
                                
                                
                                <div class="form-group">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        I agree to terms and conditions of usage on this website.
                                    </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn subss">Sign Up</button>
                            </form>      
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of modal for signUp -->

            <!-- Modal for Login -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="userEmail" aria-describedby="emailHelp" placeholder="Enter Username" name="userUser" required>
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="userPwd" placeholder="Password" name="userPwd" autocomplete="current-password" required>
                            </div>
                            <div>
                                <span style="color: rgb(51, 69, 151);">Don't have an account?<a href="signups.php" class="readB" style="color: rgb(51, 69, 151);"><u> Sign up</u></a> </span>
                            </div>
                            <button type="submit" class="btn subss">Login</button>
                        </form>                
                    </div>
                </div>
            </div>
        </div>
<!-- Footer -->
        <div class="row footers">
                <div class="col-md-4 footer">
                    <h5>About Pomafriq cosmetics</h5>
                    <p>Nunc et ornare tellus. Quisque imperdiet interdum commodo. Integer laoreet tristique neque quis laoreet. Duis ut ultrices est, sed feugiat leo.</p>
                </div>
                <div class="col-md-4 footer">
                    <h5>Contact Us</h5>
                    <div class="shopsDd">
                        <p>Address</p>
                    </div>
                    <div class="shopsDd">
                        <p>Map</p>
                    </div>
                    <div class="shopsDd">
                        <p>Phone Number</p>
                    </div>
                </div>
                <div class="col-md-4 footer">
                    <div>
                        <h5>Follow Us on</h5>
                    </div>
                    <div class="shopsDd">
                    <a href="#"><img src="images/fbs.png" alt="facebook Image" width="30px" height="30px"> <span> Facebook</span></a>
                    </div>
                    <div class="shopsDd">
                        <a href="#"><img src="images/insta.png" alt="instagram Link" width="30px" height="30px" > <span>Instagram</span></a>
                    </div>
                    <div class="shopsDd">
                       <a href="#"><img src="images/whatsapp.png" alt="whatsapp Link" width="30px" height="30px" > <span>Whatsapp</span></a> 
                    </div>
                </div>
                <hr class="hr" width="90%">
                <div class="col-md-12 footer">
                    <p>copyright@ All rights reserved<span class="justifys">designed by TOG 2020</span></p>
                    
                </div>
            </div>

            <script src='js/jquery.js' type='text/javascript' ></script>
            <script src='js/popper.min.js' type='text/javascript' ></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <script src='js/bootstrap.min.js'  type='text/javascript'></script>
            
        <script type="text/javascript" src="styles.js"></script>
<script>

        function add_cart(p_id=""){
            var quantity = $(".quantity"+p_id).val();
            $.ajax({
                type:"post",
                url: 'ajaxadd.php',
                data:{action:'add',p_id:p_id,quantity:quantity},
                success:function(result){
                    $('.cart_data').html(result);
                    cartCount();
                   }
            });

        }

        add_cart();

        function cartCount(){
            $.ajax({
                type: "post",
                url: "ajax2.php",
                success:function (result){
                    $('#countNo').html(result);
                }
            });
        }

        function remove_cart(p_id){
            $.ajax({
                type: "post",
                url: "ajaxadd.php",
                data:{action:'delete',p_id:p_id},
                success:function(result){
                    $('.cart_data').html(result);
                    cartCount();
                }
            });
        }

        function empty_cart(){
            $.ajax({
                type: "post",
                url: "ajaxadd.php",
                data:{action:'empty'},
                success:function(result){
                    $('.cart_data').html(result);
                    cartCount();
                }
            })
        }

</script>
        </div>
            <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-shopping-basket"></i>Pomaafriq Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body cart_data">
                        
                            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>