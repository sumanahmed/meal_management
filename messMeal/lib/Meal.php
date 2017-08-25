<?php
$filePath = realpath(dirname(__FILE__));
include_once ($filePath.'/Session.php');
include_once ($filePath.'/Database.php');


class Meal{
	private $db;
	public function __construct(){
		$this->db = new Database();
	}
	
	
		
		

	

}




?>