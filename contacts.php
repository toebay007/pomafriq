<?php   

require("contaClass.php");

$obj1 = new contact;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $names = test_input($_POST['names']);
  $emails = test_input($_POST['emails']);
  $subjects = test_input($_POST['subjects']);
  $messages = test_input($_POST['messages']);

  $obj1->conForm($names, $emails, $subjects, $messages);




?>