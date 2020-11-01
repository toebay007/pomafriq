<?php 
    if($_POST){
        require("orders.php");
        $obj = new orders;

        $orderstatus = trim(htmlentities($_POST['orderstatus']));
        $orderid = trim(htmlentities($_POST['orderid']));

        $obj-> ordersUpdate($orderstatus,$orderid);


    }

?>