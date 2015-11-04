<?php

// Author Hamza EL GARRAB
// Description : Class managing the slider images in the homepage

class SliderManagement{


    public static function get_slider()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

    	// Creating a new website
    	$CI_instance->load->model('entities/sliderimage');
    	$slider = Array();

    	//Selecting data from the database
    	$query = $CI_instance->db->get('slider_images');
    	$result = $query->result();


        //Fetching data
        foreach ($result as $key => $value) {
            $temporary_slider_element = new SliderImage();
            $temporary_slider_element->id = $value->id;
            $temporary_slider_element->label = $value->label;
            $temporary_slider_element->image = $value->image;
            $temporary_slider_element->title = $value->title;
            $temporary_slider_element->description = $value->description;
            $slider[$key]=$temporary_slider_element;
        }

    	//Returning the slider
    	return $slider;

    }

    public static function insert_slider($slider)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        $CI_instance->db->insert('slider_images',$slider);
    }

    public static function update_slider($slider)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->update('slider_images',$slider,Array('id'=>$slider->id));
    }

    public static function delete_slider($slider)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->delete('slider_images',$slider,Array('id'=>$slider->id));
    }

    public static function empty_slider()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        
        $CI_instance->db->truncate('slider_images');
    }


    public static function get_slider_entry($id)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();

        // Creating a new website
        $CI_instance->load->model('entities/sliderimage');
        $slider = Array();

        //Selecting data from the database
        $query = $CI_instance->db->where('id', $id)
                                    ->get('slider_images');
        $result = $query->result();


        //Fetching data
        foreach ($result as $key => $value) {
            $temporary_slider_element = new SliderImage();
            $temporary_slider_element->id = $value->id;
            $temporary_slider_element->label = $value->label;
            $temporary_slider_element->image = $value->image;
            $temporary_slider_element->title = $value->title;
            $temporary_slider_element->description = $value->description;
            $slider[$key]=$temporary_slider_element;
        }

        //Returning the slider
        return $slider[0];

    }

}

?>