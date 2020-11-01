<?php 
    if($_POST){
        require("orders.php");
        $obj = new orders;

        $paymentstatus = trim(htmlentities($_POST['paymentstatus']));
        $orderid = trim(htmlentities($_POST['orderid']));

        $obj-> paymentUpdate($paymentstatus,$orderid);


    }

?>