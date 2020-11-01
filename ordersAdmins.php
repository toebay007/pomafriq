<?php require "adminheader.php";
    $orderCount = $a->countOrders();

    $histroy = $a->getOrderHistory();

    $fre = $a->getFrequentOrder();
?>
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="indexAdmin.php" class="breadcrumbs">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
        </div>
    <div class="row">
        <div class="col-md-3 col-xs-2 tabss">
            <button class="btn btn-block subss ordersz" id="ordersz">
                <a href="#">
                <?php  echo $orderCount; ?> Orders
                </a>
            </button>
        </div>
        <div class="col-md-3 col-xs-2 tabss">
            <button class="btn btn-block subss orderHis" id="orderHis">
                <a href="#">
                    Orders History
                </a>
            </button>
        </div>
        <div class="col-md-3 col-xs-2 tabss">
            <button class="btn btn-block subss frequent">
                <a href="#">
                    Frequent Customers
                </a>
            </button>
        </div>
    </div>
    <div class="row orders">
        <div class="col-md-12 tabss">
            <h4 class="text-center">Orders</h4>
        </div>
         <div class="col-md-12 tabss">
             <?php if(is_array($orderInfos)){
                 foreach($orderInfos as $orderInfo){
             ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Payment Status</th>
                            <th>Ordered On</th>
                            <th>Order Status</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $orderInfo['fullname'] ?></td>
                            <td><?php echo $orderInfo['Addresses'] ?></td>
                            <td><?php if(empty($orderInfo['payment_status'])){ echo ("Not Paid");} else { echo ($orderInfo['payment_status']);} ?></td>
                            <td><?php echo $orderInfo['orders_date'] ?></td>
                            <td><?php echo $orderInfo['orders_status'] ?></td>
                            <td><a href="orderAdminDetails.php?id=<?php echo $orderInfo['orders_id'] ?>" "><button class="btn subss" style="margin-top:-10px">View Order Detais</button></a></td>
                        </tr>
                    </tbody>
                </table>
           <?php } } else{ ?>
        <div class="alert alert-primary" role="alert">No Item Ordered Yet</div>
            <?php } ?>
        </div>
    </div>
    
    <div class="row ordersHistory">
        <div class="col-md-12 tabss">
            <h4 class="text-center">Orders History</h4>
        </div>
        <div class="col-md-12 tabss">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>fullname</th>
                        <th>Phone Number</th>
                        <th>Address</th>
                        <th>Date Ordered</th>
                        <th>Payment Status</th>
                        <th>Order Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($histroy as $his){ ?>
                    <tr>
                        <td><?php echo $his['fullname'] ?></td>
                        <td><?php echo $his['phoneNumbers'] ?></td>
                        <td><?php echo $his['Addresses'] ?></td>
                        <td><?php echo $his['orders_date'] ?></td>
                        <td><?php echo $his['payment_status'] ?></td>
                        <td><?php echo $his['orders_status'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row frequentCus">
        <div class="col-md-12 tabss">
            <h4 class="text-center">
                Frequent Customers
            </h4>
        </div>
        <div class="col-md-12 tabss">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>fullname</th>
                        <th>Address</th>
                        <th>Phone Numbers</th>
                        <th>Total Numbers of Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($fre)){
                            foreach( $fre as $freqency) { ?>
                    <tr>
                        <td><?php echo $freqency['fullname'] ?></td>
                        <td><?php echo $freqency['Addresses'] ?></td>
                        <td><?php echo $freqency['phoneNumbers'] ?></td>
                        <td><?php echo $freqency['COUNT(customerorders.orders_id)'] ?></td>
                    </tr>
                    <?php } } ?>
                </tbody>
            </table>
        </div>
    </div>
<?php require "footerss.php" ?>