<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Portfolio_ajout extends CI_Controller {

	 public function __construct()
   {
        parent::__construct();
   }
  
  //if index is loaded
	public function index() {
		//load the helper library
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		$this->load->helper('form');
    	$this->load->helper('url');
		//Set the message for the first time
		$data = array('msg' => "");

    
        $data['upload_data'] = '';
    
		
		//load the view/upload.php with $data
		$this->load->view('back/upload', $data);
		$this->load->view('back/menu');
		$this->load->view('back/footer');
    
		
	}


}
 