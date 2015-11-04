<?php

// Author Hamza EL GARRAB
// Description : Class representing a user and containing it's informations

class Admin extends CI_Model {

	var $id = NULL;
    var $email = '';
    var $password = '';
    var $first_name = '';
    var $last_name = '';
    var $avatar = '';
    var $label = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

}

?>