<?php


    require("user.php");
    $obj1 = new users;
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    $username = test_input( $_POST['userUser']);
    $pwd = test_input( $_POST['userPwd']);

    $obj1->login($username,$pwd);


    



?>