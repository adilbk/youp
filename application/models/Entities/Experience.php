<?php
 
 class Experience extends CI_Model{

 	var $id=NULL;
 	var $title='';
 	var $image='';
 	var $year='';
 	var $date='';
 	var $description='';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function initialise($data)
 	{
 		$this->year=date('Y');
 		$this->date=date('Y-m-d');
 	}
 }

?>