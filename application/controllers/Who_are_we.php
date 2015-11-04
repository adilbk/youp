<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Who_are_we extends CI_Controller {
	public function index()
	{
		// Getting data
		$website = WebsiteManagement::get_website();
		$menu = PageManagement::get_pages();
		$slider = SliderManagement::get_slider();
		PageManagement::add_visit(2);
		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/menu',Array('menu'=>$menu));
		$this->load->view('front/who_are_we',Array('website'=>$website));
		$this->load->view('front/footer',Array('website'=>$website));
	}
}
