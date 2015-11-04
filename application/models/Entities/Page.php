<?php

// Author : Ilias Annouri
// Description : Class representing a Page and containing it's informations

class Page extends CI_Model {

    var $id = 0;
    var $url ='';
    var $title = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

}


?>