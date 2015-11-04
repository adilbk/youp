<?php

// Author : Hamza EL GARRAB
// Description : Class managing the blog

class BlogManagement {
    
    public static function get_blog($page = 0)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->load->model('entities/post');
    	$blog = Array();

    	//Selecting data from the database ; all data if page = 0
        if ($page==0) {
            $query = $CI_instance->db->get('posts');
        }
        else{
            $query = $CI_instance->db->get('posts',5,($page-1)*5);
        }
        
    	$result = $query->result();

        //Fetching data
        foreach ($result as $key => $value) 
        {
            $temporary_portfolio_element = new Post();
            $temporary_portfolio_element->id = $value->id;
            $temporary_portfolio_element->title = $value->title;
            $temporary_portfolio_element->description = $value->description;
            $temporary_portfolio_element->image = $value->image;
            $temporary_portfolio_element->content = $value->content;
            $temporary_portfolio_element->date = $value->date;
            $temporary_portfolio_element->admin = NULL;
            $blog[$key]=$temporary_portfolio_element;
        }

    	//Returning the slider
    	return $blog;
    }

    public static function get_post($id)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        // Creating a new website
        $CI_instance->load->model('entities/post');
        $Post = new Post();

        //Selecting data from the database
        $query = $CI_instance->db->where('id',$id)->get('posts');
        $result = $query->result();

        //Fetching data
        foreach ($result as $key => $value) 
        {
            $Post->id = $value->id;
            $Post->title = $value->title;
            $Post->description = $value->description;
            $Post->image = $value->image;
            $Post->content = $value->content;
            $Post->date = $value->date;
            $Post->admin_id = $value->admin_id;
        }

        //Returning the slider
        return $Post;
    }

    public static function insert_blog_post($blog)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->insert('posts',$blog);
    }

    public static function update_blog_post($blog)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->update('posts', $blog, Array('id'=>$blog->id));
    }

    public static function delete_blog_post($id)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->delete('posts',Array('id'=>$id));
    }

    public static function empty_blog_post()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $this->db->truncate('posts');
    }
}

?>