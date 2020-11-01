<?php

    $ids = $_GET['id'];

    require "configN.php";
   
    $records = $mysqli->query("DELETE FROM products Where products_id = $ids"); // fetch data from database
   
    if($records ==true){
        header("location:deleted.php?delete=success");
    }else{
        header("location:deleted.php?delete=failed");
    }
    
