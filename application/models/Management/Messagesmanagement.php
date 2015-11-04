<?php

// Author : Ilias ANNOURI
// Description : Class managing the Messages
class MessagesManagement{
	
	public static function get_all_messages()
	{
		//Getting CI Instance
        $CI_instance =& get_instance();

    	//Creating a new message
    	$CI_instance->load->model('entities/message');
    	$msgs = Array();
    	
    	//Selecting data from the database
		$query = $CI_instance->db->get('messages');
    	$result = $query->result();

        //Fetching data
        foreach ($result as $key => $value) 
        {
            $temporary_message_element = new Message();
            $temporary_message_element->id = $value->id;
            $temporary_message_element->type = $value->type;
            $temporary_message_element->email = $value->email;
            $temporary_message_element->name = $value->name;
            $temporary_message_element->content = $value->content;
            $temporary_message_element->date = $value->date;
            $msgs[$key]=$temporary_message_element;
        }

    	//Returning all messages
    	
    	return $msgs;

	}
	public static function get_message($email)
	{
		//creating CI Instance
		$CI_instance = & get_instance();

		// Creating new message
		$CI_instance->load->model('entities/message');
		$message = new Message();

		//Selecting data from the database
		$query = $CI_instance->db->where('email',$email)->get('messages');
		$result = $query->result();

		//Fetching data 
		foreach ($result as $key => $value) 
		{
			$message->id = $value->id;
			$message->type = $value->type;
			$message->email = $value->email;
			$message->name = $value->name;
			$message->content = $value->content;
			$message->date = $value->date;
		}

		//returnig th message
		return $message;
	}


	public static function insert_message($message)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->insert('messages',$message);
    }

    public static function delete_message($id)
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $CI_instance->db->delete('messages',Array('id'=>$id));
    }

    public static function empty_messagess()
    {
        //Getting CI Instance
        $CI_instance =& get_instance();
        $this->db->truncate('messages');
    }

}

?>