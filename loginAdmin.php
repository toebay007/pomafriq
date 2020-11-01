<?php


    require("admin.php");
    $obj1 = new Admin;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $username = test_input( $_POST['username']);
    $pwd = test_input( $_POST['password']);

    //echo($username);
    $obj1->login($username,$pwd);


    



?>