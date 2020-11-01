<?php
    require("discountClass.php");

    $obj1 = new discount;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $disTopic = test_input($_POST['disTopic']);
      $discDetails = test_input($_POST['discDetails']);

      $obj1->createDiscount($disTopic,$discDetails,$_FILES);

      ?>