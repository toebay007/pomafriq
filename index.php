    <?php require "headerss.php" ?>
        <!-- FIRST DISPLAY -->
       
        <div class="row firstDisplays">
            <div class="col-md-12 firstDisplay">
                <img src="images/display.png" alt="display" width="100%" height="400px">
            </div>
        </div>
        <!-- End of display -->
            <!-- DISCOUNT -->
            
            <div class="row feature mx-4">
                <div class="col-md-12">
                    <h2 class="features">TOP SELLING PRODUCTS</h2>
                </div>
                <div class="col-md-3 col-sm-6 testi">
                    <div class="col-md-10 offset-md-1 testis">
                        <img src="images/06.jpg" width="100%" class="proImg" alt="">
                        <div>
                            <p class="text-center mt-4">
                                <b>Hand Sanitizers</b>
                            </p>
                            <p class="text-center">
                                <a href="shops.php" class="subss">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 testi">
                    <div class="col-md-10 offset-md-1 testis">
                        <img src="images/06.jpg" width="100%" class="proImg" alt="">
                        <div>
                            <p class="text-center mt-4">
                                <b>Hand Sanitizers</b>
                            </p>
                            <p class="text-center">
                                <a href="shops.php" class="subss">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 testi">
                    <div class="col-md-10 offset-md-1 testis">
                        <img src="images/07.jpg" width="100%" class="proImg" alt="">
                        <div>
                            <p class="text-center mt-4">
                                <b>Hand Sanitizers</b>
                            </p>
                            <p class="text-center">
                                <a href="shops.php" class="subss">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 testi">
                    <div class="col-md-10 offset-md-1 testis">
                        <img src="images/04.jpg" width="100%" class="proImg" alt="">
                        <div>
                            <p class="text-center mt-4">
                                <b>Hand Sanitizers</b>
                            </p>
                            <p class="text-center">
                                <a href="shops.php" class="subss">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of DISCOUNT -->

            <!-- Featured category -->
            <div class="row feature">
                <div class="col-md-12">
                <?php if(!empty($carts)){ ?>
                    <h2 class="features">FEATURED CATERGORY</h2>
                </div>
                <div class="col-md-10 offset-md-1 testi">
                                <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                                    <div class="MultiCarousel-inner">
                                        <?php foreach($carts as $cart) {?>
                                        <div class="item">
                                            <div class="pad15">
                                                <img src="<?php echo $cart['category_pic']; ?>" width="100%" class="proImg" alt="">
                                                <div>
                                                    <p class="text-center mt-4">
                                                        <b><?php echo $cart['category_name']; ?></b>
                                                    </p>
                                                    <p>
                                                        <a href="shops.php?id=<?php echo $cart['id']; ?>" class="subss">View more</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <button class="btn slides leftLst"><</button>
                                    <button class="btn slides rightLst">></button>
                                </div> 
                                <?php } else{ ?>
                                    <?php  }  ?>                 
                            </div>
                        </div>
            <!-- End of features -->
            <!-- Testimony -->
            <div class="row">
                <div class="col-md-12 discounts">
                    <h2 class="text-center">WHAT <b>OUR CUSTOMERS</b> ARE SAYING</h2>
                    <div class="container my-4">
             <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                    <div class="row">
                    <div class="col-md-4">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/01.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/07.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                        <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/05.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  rm -rf .git                  <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                <div class="carousel-item">

                    <div class="row">
                            <div class="col-md-4">
                            <div class="mb-2">
                            <div class="text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="images/06.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <span><i>Student/ Central University</i></span>
                                </div>
                            </div>
                        </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="mb-2">
                                    <div class="text-center">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="images/03.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <span><i>Student/ Central University</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 clearfix d-none d-md-block">
                                <div class="mb-2">
                                    <div class="text-center">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="images/08.jpg" width="150px" style="border-radius: 50%;" height="150px" alt=""></h5>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <span><i>Student/ Central University</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                    <!--/.Second slide-->

                </div>
                <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->


        </div>
                </div>
            </div>
            <!-- end of testimony -->

            <!-- Products list -->
            <div class="row feature">
                <?php if(!empty($products)){ ?>
                <div class="col-md-12 features">
                    <h2>FEATURED PRODUCTS</h2>
                </div>
                <div class="col-md-12">
                    <div class="MultiCarousel" data-items="1,2,3,4" data-slide="1" id="MultiCarousel"  data-interval="1000">
                            
                    <div class="MultiCarousel-inner">
                        <?php foreach($products as $product) {?>
                                <div class="item">
                                    <div class="pad15">
                                    <div class="col-12">
                                            <img src="<?php echo $product['products_img']; ?>" class="proImg" alt="<?php echo $product['products_name']; ?>">
                                        </div>
                                        <div class="col-12">
                                            <p class="pros">
                                                <b>
                                                <?php echo $product['products_name']; ?>
                                                </b>
                                            </p>
                                        </div>
                                        <div class="pros">
                                            <p>
                                                <b>
                                                &#8358;<?php echo number_format($product['products_price'],2); ?>
                                                </b>
                                            </p>
                                        </div>
                                        <div class="text-center">
                                            <p><input type="number" style="max-width: 50px" value="1" min="1" class="form-control-inline quantity<?php echo $product['products_id']; ?>"></p>
                                        </div>
                                        <div class="col-12" style="text-align: center;">
                                        <a href="details.php?product=<?php echo $product['products_name']; ?>&id=<?php echo $product['products_id']; ?>"> <button class="btn btn-block details"> View Details</button> </a>
                                        </div>
                
                                        <div class="col-12" style="text-align: center;">
                                            <button type="button" class="btn btn-block cartsAdd" id="cartsAdd" onclick="add_cart('<?php echo $product['products_id']; ?>')"> Add to Cart</button>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                                ?>
                            </div>
                            <button class="btn slides leftLst"><</button>
                            <button class="btn slides rightLst">></button>
                        </div>
                </div>
                        <?php }else {} ?>
            </div>
            <!-- end of products -->
            <!-- DISCOUNT DIV -->
            <div class="row dis">
                <?php if(!empty($discount)){ ?>
                <div class="col-12">
                    <center>
                            <h2>DISCOUNTS AVAILABLE</h2>
                    </center>
                </div>
                
                <div class="col-md-1 discon mb-4" style="background-color: white;">

                </div>
                <?php foreach ($discount as $discounts) {?>
                <div class="col-md-10 discon discons mb-4" style=" background: url(<?php echo $discounts['disc_img']; ?>); background-attachment: scroll; background-repeat: no-repeat; background-size: 100% 300px;">
               
                       <center> 
                           <h3 class="discont"><?php echo $discounts['discTopic']; ?></h3>
                        <p class="discont"><?php echo $discounts['discDetails']; ?></p> 
                    </center>           
                    <div class="disz">
                        <a href="shops.php"><button class="col-md-2 offset-md-5 subss disss"> Shop Now</button></a>
                    </div>
                </div>
                <div class="col-md-1 discon mb-4" style="background-color: white;">

                </div>
                <?php }  }else{}  ?>
            </div>
            <!-- END OF DICOUNT DIV -->
            <!-- latest News -->
            <div class="row">
                <?php if(!empty($blogK) && !empty($blogs) && !empty($klogs)){ ?>
                <div class="col-md-12 features">
                    <h2>LATEST NEWS</h2>
                </div>
                    <div class="col-md-4 testi">
                        <?php foreach ($blogK as $blog) {?>
                                    <div class="item-box-blog">
                                        <div class="item-box-blog-image">
                                            <!--Date-->
                                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?php echo $blog['created']; ?></span> </div>
                                            <!--Image-->
                                            <img src="<?php echo $blog['photos']; ?>" alt="<?php echo $blog['Topic']; ?>" class="proImgAdmin">
                                        </div>
                                        <div class="item-box-blog-body">
                                            <!--Heading-->
                                            <div class="item-box-blog-heading">
                                            <a href="#" tabindex="0" style="color:black;">
                                                <h5><?php echo $blog['Topic']; ?></h5>
                                            </a>
                                            </div>
                                            <!--Data-->
                                            <!-- <div class="item-box-blog-data" style="padding: px 15px;">
                                            <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                            </div> -->
                                            <!--Text-->
                                            <div class="item-box-blog-text">
                                            <p><?php echo $blog['intro']; ?></p>
                                            </div>
                                            <div class="mt"> <a href="read.php?id=<?php echo $blog['id']; ?>" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                            <!--Read More Button-->
                                        </div>
                                    </div>
                                    <?php }
                                    ?>
                    </div>
                    
                    <div class="col-md-4 testi">    
                                <?php foreach ($blogs as $blogss) {?>
                                <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        <!--Date-->
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?php echo $blogss['created']; ?></span> </div>
                                        <!--Image-->
                                        <figure> <img alt="" src="<?php echo $blogss['photos']; ?>" alt="<?php echo $blogss['Topic']; ?>" class="img-responsive"> </figure>
                                    </div>
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0" style="color:black;">
                                            <h5><?php echo $blogss['Topic']; ?></h5>
                                        </a>
                                          </div>
                                        <div class="item-box-blog-text">
                                        <p><?php echo $blogss['intro']; ?></p>
                                        </div>
                                        <div class="mt"> <a href="read.php?id=<?php echo $blogss['id']; ?>" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                        <!--Read More Button-->
                                    </div>
                                </div>
                                     <?php }
                                ?>
                    </div>
                    <div class="col-md-4 testi">
                            <?php foreach ($klogs as $klog) {?>
                            <div class="item-box-blog">
                                    <div class="item-box-blog-image">
                                        <!--Date-->
                                        <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><?php echo $klog['created']; ?></span> </div>
                                        <!--Image-->
                                        <figure> <img alt="" src="<?php echo $klog['photos']; ?>" alt="<?php echo $klog['Topic']; ?>" class="img-responsive"> </figure>
                                    </div>
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                        <a href="#" tabindex="0" style="color:black;">
                                            <h5><?php echo $klog['Topic']; ?></h5>
                                        </a>
                                          </div>
                                        <!--Data-->
                                        <!-- <div class="item-box-blog-data" style="padding: px 15px;">
                                        <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                        </div> -->
                                        <!--Text-->
                                        <div class="item-box-blog-text">
                                        <p><?php echo $klog['intro']; ?></p>
                                        </div>
                                        <div class="mt"> <a href="read.php?id=<?php echo $klog['id']; ?>" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                        <!--Read More Button-->
                                    </div>
                                </div>
                        <?php }
                                ?>
                                <?php }else {} ?>
                            </div>
            </div>
            <!-- End of news -->
            <!-- subscribe -->
            <div class="row subs">
                <div class="col-12 modal-body text-center">
                    <form action="subscribe.php" method="POST">
                        <h4>Subscribe to our newsletter</h4>	
                            <p>Join our subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
                            <?php 
                                if(isset($_GET['emails']) && ($_GET['emails'] == 'success')){
                                    echo'<div class="alert text-center alert-success alert-dismissible fade show">';
                                    echo'<p>Thanks for subscribing to our Newsletter</p>';
                                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span></button>';
                                    echo'</div>';
                                }
                            ?>
                            <?php 
                                if(isset($_GET['emails']) && ($_GET['emails'] == 'failed')){
                                    echo'<div class="alert text-center alert-danger alert-dismissible fade show">';
                                    echo'<p>Please check that you are entering a valid Email address</p>';
                                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span></button>';
                                    echo'</div>';
                                }
                            ?>
                            <?php 
                                if(isset($_GET['emails']) && ($_GET['emails'] == 'already')){
                                    echo'<div class="alert text-center alert-warning alert-dismissible fade show">';
                                    echo'<p>Sorry but the mail you just entered already exists as a Subscriber</p>';
                                    echo'<button type="button" class="close" data-dismiss="alert" aria-label="close">
                                            <span aria-hidden="true">&times;</span></button>';
                                    echo'</div>';
                                }
                            ?>
                            <div class="input-group col-md-10 offset-md-1">
                                        <input type="email" class="form-control" name="emails" placeholder="Enter your email">
                                        <span class="input-group-btn">
                                            <input type="submit" name="submit" class="btn subss" style="margin-top: 0px" value="Subscribe">
                                        </span>
                            </div>

                    </form>
                </div>
            </div>
            <!-- End of subscription -->

            <div class="row">
                <div class="col-md-3 fixed">
                    <i class="fas fa-shipping-fast icts"></i> <span class="ictss">Fast Delivery</span>
                </div>
                <div class="col-md-3 fixed">
                    <i class="fas fa-lock icts"></i> <span class="ictss">Trusted and Secured</span>
                </div>
                <div class="col-md-3 fixed">
                    <i class="fas fa-clock icts"></i> <span class="ictss">24/7 Services</span>
                </div>
                <div class="col-md-3 fixed">
                    
                </div>
            </div>
           
<?php require "footerss.php" ?>