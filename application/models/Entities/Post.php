<?php

// Author Hamza EL GARRAB
// Description : Class representing a blog post element and containing it's informations

class Post extends CI_Model {

	var $id = NULL;
    var $title   = '';
    var $description = '';
    var $image = '';
    var $content   = '';
    var $date = '';
    var $admin_id = NULL;

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function initialize($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->content = $data ['content'];
        $this->date = "17/05/2000";
        $this->admin_id = 1;
    }
}

?>