<?php

// Author Hamza EL GARRAB
// Description : Class representing a page visit and containing it's informations

class PageView extends CI_Model {

	var $id = NULL;
    var $ip = '';
    var $country = '';
    var $page_id = '';
    var $date = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

}

?>