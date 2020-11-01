<?php require("adminheader.php"); ?>
<?php if(!isset($_GET['id'])) {
    header("location:ordersAdmin.php");
} 
 $orderDetails = $a->getOrderDetails($_GET['id']); 

$ordercrudeInfos = $a->getCrudeOrder(($_GET['id'])); 

$paymentcrudeInfos = $a->getCrudePaymentOrder(($_GET['id']));

?>
<div class="col-md-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="ordersAdmins.php" class="breadcrumbs">Back to Orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">Orders</li>
        </ol>
    </nav>
</div>

<?php 
       
      // echo $_GET['id']; ?>
       

<form action="orderUpdate.php" method="POST">
    <div class="form-row">
        <label for="orderstatus" class="col-md-2 col-form-label">Order Status</label>
        <div class="form-group col-md-3">
            <select name="orderstatus" id="orderstatus" class="form-control">
                <option value="<?php echo $ordercrudeInfos['orders_status']  ?>" selected><?php echo $ordercrudeInfos['orders_status']  ?></option>
                <option value="Received">Received</option>
                <option value="Delivered">Delivered</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>">
            <button type="submit" class="subss" style="margin-top: 0px;">Save</button>
        </div>    
    </div>
</form>
<form action="paymentUpdate.php" method="POST">
    <div class="form-row">
        <label for="paymentstatus" class="col-md-2 col-form-label">Payment Status</label>
        <div class="form-group col-md-3">
            <select name="paymentstatus" id="paymentstatus" class="form-control">
                <option value="<?php echo $paymentcrudeInfos['payment_status']  ?>" selected><?php echo $paymentcrudeInfos['payment_status']  ?></option>
                <option value="Paid on delivery">Paid on delivery</option>
                <option value="Paid with transfer">Paid with transfer</option>
            </select>
        </div>
        <div class="form-group col-md-3">
            <input type="hidden" name="orderid" value="<?php echo $_GET['id']; ?>">
            <?php 
                if($paymentcrudeInfos['payment_status'] === 'success'){
                   echo'<button type="button" class="subss" style="margin-top: 0px;" disabled>Already paid</button>'; 
                }else{
                    echo'<button type="submit" class="subss" style="margin-top: 0px;">Save</button>';
                }
            
            ?>
            
        </div>    
    </div>
</form>

<table class="table table-reponsive table-boardered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub-total</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            if(is_array($orderDetails) || is_object($orderDetails)){
                foreach ( $orderDetails as $detail) {
            $b = $detail['products_price'];
            $c = $detail['orddetails_qty'];
            $d = $b*$c;

        //echo $detail['orddetails_qty'];
            ?>
            <tr>
                <td><?php  if(empty($detail['products_name'])){echo("<i> <b>Product Deleted </b> </i>");} else{ echo $detail['products_name'];} ?></td>
                <td><?php if(empty($detail['products_price'])){echo("<i> <b>Product Deleted </b> </i>");} else{ ?> &#8358; <?php echo $detail['products_price'];} ?></td>
                <td><?php echo $detail['orddetails_qty']; ?></td>
                <td>&#8358; <?php echo number_format($d,2); ?> </td>
            </tr>
            <?php 
                    } 
                      } ?>
            <tr>
                <th colspan="3">Total Paid</th>
                <th>&#8358;<?php echo number_format($ordercrudeInfos['orders_amt'],2); ?> </th>
            </tr>
    </tbody>
</table>

<?php require("footerss.php") ?>