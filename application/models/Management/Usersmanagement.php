<?php

// Author : Hamza EL GARRAB
// Description : Class managing the user

class UsersManagement {
    
    public static function login($user)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new website
    	$CI_instance->load->model('entities/admin');

    	//Selecting data from the database
    	$query = $CI_instance->db->where('email',$user->email)
                                    ->where('password',$user->password)
                                    ->from('admins');
        return $query->count_all_results()>0;
    }

    public static function get_user($email)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        //Creating a new website
        $CI_instance->load->model('entities/admin');

        //Selecting data from the database
        $query = $CI_instance->db->where('email',$email)
                                    ->from('admins');

        //Getting query result
        $result = $query->get();
        $result = $result->result();
        $result = $result[0];

        //Instancianting a new user
        $admin = new Admin();
        $admin->id = $result->id;
        $admin->email = $result->email;
        $admin->password = $result->password;
        $admin->avatar = $result->avatar;
        $admin->label = $result->label;
        $admin->first_name = $result->first_name;
        $admin->last_name = $result->last_name;

        //Returning result
        return $admin;
    }

}

?>