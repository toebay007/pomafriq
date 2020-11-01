<?php
    require "adminheader.php";
    $orderCount = $a->countOrders();
    $MessageCount = $co->countMessage();
    
?>
    <div class="row">
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts"><?php  echo $orderCount; ?> Orders</h5>
                <p class="text-center adtexts"><a href="ordersAdmins.php" class="taborders"><button class="btn subss">View</button></a></p>

            </div>
        </div>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Create Product</h5>
                <p class="text-center adtexts"><a href="productsAdmin.php"><button class="btn subss">Create</button></a></p>

            </div>
        </div>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">View and Edit Products</h5>
                <p class="text-center adtexts"><a href="views.php"><button class="btn subss">Search</button></a></p>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Create Posts for Blog</h5>
                <p class="text-center adtexts"><a href="adminsBlog.php"><button class="btn subss">create</button></a></p>

            </div>
        </div>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Display Products on Discount</h5>
                <p class="text-center adtexts"><a href="discount.php"><button class="btn subss">View All</button></a></p>

            </div>
        </div>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Remove Products</h5>
                <p class="text-center adtexts"><a href="deletePro.php"><button class="btn subss">Search</button></a></p>

            </div>
        </div>
    </div>
    <div class="row mt-2 mb-2">
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Contact Us <br> <span style="font-size: 15px;"><?php  if(!empty($MessageCount)){ echo $MessageCount; } else{ echo 0; }  ?> New Messages</span></h5>
                <p class="text-center adtexts"><a href="adminContact.php"><button class="btn subss">View</button></a></p>

            </div>
        </div>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts">Send Message</h5>
                <p class="text-center adtexts"><a href="#"><button class="btn subss">create</button></a></p>

            </div>
        </div>
        <?php if($_SESSION['status'] == 'Admin'){ ?>
        <div class="col-md-4 indexadmin">
            <div class="col-12 cardzs">
                <h5 class="text-center adtexts"><?php  echo $admin; ?> Admins</h5>
                <p class="text-center adtexts"><a href="adminedit.php"><button class="btn subss">List</button></a></p>
             </div>
        </div>
        <?php } else{ ?>
            <div class="col-md-4 indexadmin">
                <div class="col-12 cardzs">
                    <h5 class="text-center adtexts"><?php  echo $admin; ?> Admins</h5>
                </div>
            </div>
        <?php } ?>
    </div>
<?php 
    require "footerss.php"
?>