<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
		// Getting data
		$website = WebsiteManagement::get_website();
		$menu = PageManagement::get_pages();
		PageManagement::add_visit(5);
		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/menu',Array('menu'=>$menu));
		$this->load->view('front/contact_content',Array());
		$this->load->view('front/footer',Array('website'=>$website));
	}

	public function send_message()
	{
		$this->load->model('entities/message');
		$message = new Message();
		$message->initialize($this->input->post());

		MessagesManagement::insert_message($message);
		MailService::send_mail($message);

		redirect(base_url()."contact", "location");
	}
	
}

?>