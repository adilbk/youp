<?php

// Author Hamza EL GARRAB
// Description : Class representing a portfolio element and containing it's informations

class PortfolioEntry extends CI_Model {

	var $id = NULL;
    var $title   = '';
    var $description = '';
    var $image   = '';
    var $category = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function initialize($data,$dataa)
    {   
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->image = $dataa['file_name'];
        $this->category = $data['categorie'];
    }

}

?>