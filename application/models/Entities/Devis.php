<?php

	class Devis extends CI_Model {

		var $id=NULL;
		var $email='';
		var $title='';
		var $service='';
		var $date='';
		var $message='';

		function __construct()
		{
			parent::__construct();
		}	
	}

?>