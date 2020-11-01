<?php 
    if($_POST){
        require("admin.php");
        $obj = new Admin;

        $orderstatus = trim(htmlentities($_POST['adminstatus']));
        $orderid = trim(htmlentities($_POST['conID']));

        $obj-> adminUpdate($orderstatus,$orderid);


    }

?>