<?php

    require("cartclass.php");

    $obj1 = new category;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $category = test_input($_POST['category']);
   //   print_r($_FILES);
    $obj1-> createCategory($category, $_FILES);
?>