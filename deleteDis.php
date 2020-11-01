<?php 

if(empty($_GET)){
    require("discountClass.php");
    $obj = new discount;


    $obj-> deletesAll();


} else {
    $id = $_GET['id'];
    require("discountClass.php");
    $obj = new discount;
    // echo $id;
   $obj->deletes($id);
}

?>