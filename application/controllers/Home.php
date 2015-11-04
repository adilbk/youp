<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{

		// Getting data
		$website = WebsiteManagement::get_website();
		$slider = SliderManagement::get_slider();
		$menu = PageManagement::get_pages();

		PageManagement::add_visit(1);

		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/menu',Array('menu'=>$menu));
		$this->load->view('front/home_content',Array('slider'=>$slider));
		$this->load->view('front/footer',Array('website'=>$website));
	}
}
?>
