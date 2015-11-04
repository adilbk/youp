<?php

// Author Hamza EL GARRAB
// Description : Class representing a website and containing it's informations

class Website extends CI_Model {

    var $title   = '';
    var $description = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function initialize($data)
    {
    	$this->title = $data['title'];
    	$this->description = $data['description'];
    }

}


?>