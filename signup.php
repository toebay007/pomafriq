<?php

    require("user.php");

    $obj = new users;

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

      $fname   =   test_input($_POST['fname']);
      $lname   =   test_input($_POST['lname']);
      $username =   test_input($_POST['username']);
      $pwd1     =   test_input($_POST['pwd1']);
      $pwd2      =  test_input($_POST['pwd2']);
      $email   =   test_input($_POST['email']);
      $phoneNo  =   test_input($_POST['phoneNo']);

     $obj->reg($fname,$lname,$username,$pwd1,$pwd2,$email,$phoneNo);

?>