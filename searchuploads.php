<?php
require("configN.php");


if(isset($_POST["submit1"])){
  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  $searchs = test_input($_POST["searchs"]);
  //echo($searchs);
  $sql = $mysqli->query("SELECT * FROM products JOIN category ON products.products_category=category.id where products_name like '$searchs'");
  //$result = $conn->query($sql);
  $id ='';
  $items = '';
  if ($sql->num_rows > 0){
      while ( $row = $sql->fetch_assoc()){
          $items = $row;
          $id = $items['products_id'];
      }
      header("location:deleteview.php?id=$id");
  } else{
    header("location:deletePro.php?s=fail");
  }
  
  } else{
  header("location:deletePro.php");
  }

?>