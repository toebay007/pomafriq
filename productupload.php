<?php
    require("productclass.php");

    $obj1 = new products;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $productName = test_input($_POST['productName']);
      $product_category = test_input($_POST['product_category']);
      $productShort = test_input($_POST['productShort']);
      $productPrice = test_input($_POST['productPrice']);
      $productLong = test_input($_POST['productLong']);

      $obj1->createProduct($productName,$product_category,$productShort,$productPrice,$productLong,$_FILES);

      ?>