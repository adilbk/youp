<?php

// Author Hamza EL GARRAB
// Description : Class representing a message and containing it's informations

class Message extends CI_Model {

	var $id = NULL;
    var $type = 0;
    var $email = '';
    var $name = '';
    var $content = '';
    var $date = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function initialize($data)
    {
        $this->load->helper('date');
        $now = time();
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->date = unix_to_human(time(),TRUE,'eu');
    }

}

?>