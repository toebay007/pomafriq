<?php

class connUser{
	protected $conn;			
	function __construct(){
		session_start();				
		$this->conn = new Mysqli('localhost','root','','poma');
	}
}




?>

