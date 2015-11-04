<?php

// Author Hamza EL GARRAB
// Description : Class representing a slider element and containing it's informations

class SliderImage extends CI_Model {

	var $id = 0;
    var $label   = '';
    var $image = '';
    var $title   = '';
    var $description = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

}

?>