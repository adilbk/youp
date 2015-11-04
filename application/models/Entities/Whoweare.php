<?php

// Author Ilias ANNOURI
// Description : Class representing a Elements of Page "Qui sommes nous" element and containing it's informations

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

}

?>