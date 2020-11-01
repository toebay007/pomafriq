<?php 
    require("subclass.php");

    $obj1 = new subs;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $emails = test_input($_POST['emails']);

      $obj1->subscribe($emails);


?>