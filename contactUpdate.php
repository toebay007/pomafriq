<?php 
    if($_POST){
        require("contaClass.php");
        $obj = new contact;

        $orderstatus = trim(htmlentities($_POST['messagestatus']));
        $orderid = trim(htmlentities($_POST['conID']));

        $obj-> messageUpdate($orderstatus,$orderid);


    }

?>