<?php

// Author Hamza EL GARRAB
// Description : Class managing the portfolio

class PortfolioManagement{

    public static function get_portfolio()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	// Creating a new website
    	$CI_instance->load->model('entities/portfolioentry');
    	$portfolio = Array();

    	//Selecting data from the database
    	$query = $CI_instance->db->get('portfolio_entries');
    	$result = $query->result();

        //Fetching data
        foreach ($result as $key => $value) {
            $temporary_portfolio_element = new PortfolioEntry();
            $temporary_portfolio_element->id = $value->id;
            $temporary_portfolio_element->image = $value->image;
            $temporary_portfolio_element->category = $value->category;
            $temporary_portfolio_element->title = $value->title;
            $temporary_portfolio_element->description = $value->description;
            $portfolio[$key]=$temporary_portfolio_element;
        }

    	//Returning the slider
    	return $portfolio;

    }

    public static function insert_portfolio_entry($portfolio)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->insert('portfolio_entries',$portfolio);
    }

    public static function update_portfolio($portfolio)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instances->db->update('portfolio_entries',$portfolio,Array('id'=>$portfolio->id));
    }

    public static function delete_portfolio($portfolio)
    {
        //Getting CI Instance
        var_dump($portfolio);
        $CI_instance =& get_instance();
        $CI_instance->db->delete('portfolio_entries',$portfolio,Array('id'=>$portfolio->id));
    }
    public static function delete_portfolio_content($id)
    {
        //Getting CI Instance
        var_dump($id);
        $CI_instance =& get_instance();
        $CI_instance->db->delete('portfolio_entries',Array('id'=>$id));
    }

   
    public static function empty_portfolio()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->truncate('portfolio_entries');
    }
    

}

?>