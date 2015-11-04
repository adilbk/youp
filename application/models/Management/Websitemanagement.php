<?php

// Author Hamza EL GARRAB
// Description : Class managing the general website informations

class Websitemanagement extends CI_Model{

    public static function get_website()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	// Creating a new website
    	$CI_instance->load->model('entities/website');
    	$website = new Website();

    	//Selecting data from the database
    	$query = $CI_instance->db->get('website', 1);
    	$result = $query->result();
    	$row = $result[0];

    	//Setting website attributes
    	$website->title = $row->title;
    	$website->description = $row->description;

    	//Returning the website
    	return $website;

    }

    public static function insert_website($website)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
    	$CI_instance->db->insert('website',$website);
    }

    public static function update_website($website)
    {
    	//Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->update('website', $website);
    }

    public static function delete_website()
    {
    	//Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->truncate('website');
    }

}

?>