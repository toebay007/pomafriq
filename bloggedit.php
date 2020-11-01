<?php
    require("blogclass.php");

    $id = $_GET['id'];
    $obj1 = new blog;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      //$ids = test_input($_POST['products_id']); 
      $topic = test_input($_POST['topic']);
      $short = test_input($_POST['shortD']);
      $long = test_input($_POST['longD']);
        //echo($id);
      $obj1->updateBlog($id,$topic,$short,$long,$_FILES);

      ?>