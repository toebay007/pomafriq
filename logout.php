<?php



session_start();


if (isset($_SESSION['usernamezz'])) {
	session_unset($_SESSION['usernamezz']);
	session_destroy();

	

}

 header("location:admins.php");



?>