<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index($page = 1)
	{

		// Getting data
		$website = WebsiteManagement::get_website();
		$blog = BlogManagement::get_blog($page);
		$menu = PageManagement::get_pages();
		PageManagement::add_visit(4);

		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/menu',Array('menu'=>$menu));
		$this->load->view('front/blog_posts',Array('blog'=>$blog));
		$this->load->view('front/footer',Array('website'=>$website));

	}

	public function post($id = NULL)
	{
		// Getting data
		$website = WebsiteManagement::get_website();
		$menu=PageManagement::get_pages();
		$post = BlogManagement::get_post($id);

		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/blog_post',Array('menu'=>$menu,'post'=>$post));
		$this->load->view('front/footer',Array('website'=>$website));

	}

}
