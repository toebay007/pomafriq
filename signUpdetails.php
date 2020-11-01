<?php

    require("admin.php");

    $obj = new Admin;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $finame   =   test_input($_POST['finame']);
      $laname   =   test_input($_POST['laname']);
      $username =   test_input($_POST['username']);
      $passwordz=   test_input($_POST['password']);
      $confirm_pass =  test_input($_POST['confirm_password']);
      $emails   =   test_input($_POST['emails']);
      $phoneN0  =   test_input($_POST['phoneNo']);

      
      
      $obj-> register($finame,$laname,$username,$passwordz,$confirm_pass,$emails,$phoneN0);

?>