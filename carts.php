<?php require "headerss.php"    ?>
    <div class="row">
        <div class="col-md-8 shops">
            <div class="col-12">
                <h4>Carts</h4>
                <hr width="100%" class="hr">
            </div>
            <div class="defaults col-md-12">
                <span class="muted"></span>
                <form method="post" action="#" class="justifys">
                </form>
            </div>
            <div class="col-12 shopsD" id="countNos">
            <?php if(!empty($_SESSION['product_cart'])) {?>
        <table class="table table-responsive">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="2">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                    <th scope="col"><button type="button" class="btn subss" onclick="empty_cart();"><i class="fas fa-trash-alt "></i>Empty Cart</button></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(isset($_SESSION['product_cart'])) {$total = 0;
                        foreach($_SESSION['product_cart'] as $productUnit){
                            $b = $productUnit["price"];
                            $c = $productUnit["quantity"];
                            $d = $b*$c;
                             ?>
                <tr>
                    <td><img class='img-reponsive' height='100px' src='<?php echo $productUnit['image']  ?>'></td>
                    <td><?php  echo $productUnit['name']; ?></td>
                    <td><?php  echo $productUnit['quantity']; ?></td>
                    <td> &#8358;<?php  echo number_format($productUnit['price'],2); ?></td>
                    <td> &#8358;<?php  echo number_format($d,2); ?></td>
                    <td>
                        <button class="btn subss pull-right" onclick="remove_cart('<?php echo $productUnit['p_id']; ?>')">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        </button>
                    </td>
                </tr>
                <?php $total = $total + $d; 
            }?>
                <tr>
                    <th colspan="4">Total</th>
					<th>&#8358; <?php echo number_format($total); ?></th>
                </tr>
                <tr>
                    <th>
                        <form action="checkoutFlow.php" method="POST">
                            <?php foreach ($_SESSION['product_cart'] as $productUnit) { ?>
                            <input type="hidden" name="productid[]" value="<?php echo $productUnit['p_id']; ?>">
                            <input type="hidden" name="productqty[]" value="<?php echo $productUnit['quantity']; ?>">
                            <?php } ?>
                            <input type="hidden" name="userid" value="<?php echo $_SESSION['user']; ?>">
                            <input type="hidden" name="ordertotal" value="<?php echo $total; ?>">
                            <?php if(isset($_SESSION['user'])) {?>
                                <button class="btn subss" type="submit">Proceed to Pay</button>
                            <?php } else {?>
                                <a href="#" data-toggle="modal" data-target="#login"><button type="button" class="btn subss">Kindly Login to Proceed</button></a>
                            <?php } ?>
                        </form>
                    </th>
                </tr>
                            <?php } ?>
            </tbody>
        </table>
                            <?php } else{ ?>
                                <div class="alert alert-primary" role="alert">
                                    No Order has been placed yet
                                </div>
                            <?php } ?>
            </div>
        </div>
        <div class="col-md-4 shops">
                <div class="col-12">
                    <h4>Latest Post</h4>
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




<?php require "footerss.php"    ?>