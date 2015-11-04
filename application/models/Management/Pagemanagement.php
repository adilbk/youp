<?php

// Author : EL GARRAB Hamza
// Description : Class managing the general Page informations

class PageManagement{
    
    public static function add_visit($page_id){
        //Getting CI Instance
        $CI_instance =& get_instance();

        $CI_instance->load->model('entities/pageview');
        $page_view = new PageView();
        $page_view->ip = $CI_instance->input->ip_address();
        $page_view->country = 'Morocco';
        $page_view->page_id = $page_id;
        $page_view->date = '01/01/2015 01:01:01';
        $CI_instance->db->insert('page_views',$page_view);
    }

	public static function get_pages()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        // Creating a new page
        $CI_instance->load->model('entities/Page');
        $page = Array();

        //Selecting data from the database
        $query = $CI_instance->db->get('pages');
        $result = $query->result();


        //Fetching data
        foreach ($result as $key => $value) {
            $temporary_page_element = new Page();
            $temporary_page_element->id = $value->id;
            $temporary_page_element->url = $value->url;
            $temporary_page_element->title = $value->title;
            $page[$key]=$temporary_page_element;
        }

        //Returning the page
        return $page;

    }

    public static function insert_page($page)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        $CI_instance->insert('pages',$page);
    }

    public static function update_page($page)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->update('pages',$page,Array('id'=>$page->id));
    }

    public static function delete_page($page)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->delete('pages',$page,Array('id'=>$page->id));
    }

    public static function empty_page()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->truncate('page');
    }

}

?>