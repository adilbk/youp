<?php

// Author : Hamza EL GARRAB
// Description : Class giving general statistics

class StatisticsManagement {
    
    public static function get_total_visits()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        return $CI_instance->db->count_all_results('page_views');
    }

    public static function get_total_messages()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        return $CI_instance->db->count_all_results('messages');
    }

}

?>