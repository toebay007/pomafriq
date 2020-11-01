<?php 


class discoun
{
	protected $conn;			
	function __construct()
	{
		// session_start();				
		$this->conn = new Mysqli('localhost','root','','poma');
	}
}




?>