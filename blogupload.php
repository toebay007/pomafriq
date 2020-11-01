<?php

    require("blogclass.php");

    $obj1 = new blog;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $topic = test_input($_POST['topic']);
      $short = test_input($_POST['shortD']);
      $long  = test_input($_POST['longD']);

      $obj1->createPost($topic,$short,$long,$_FILES);

?>