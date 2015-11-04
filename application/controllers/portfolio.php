<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	public function index()
	{
		// Getting data
		$website = WebsiteManagement::get_website();
		$menu = PageManagement::get_pages();
		$portfolio = PortfolioManagement::get_portfolio();
		PageManagement::add_visit(3);

		$this->load->view('front/header',Array('website'=>$website));
		$this->load->view('front/portfolio_content',Array('website'=>$website,'menu'=>$menu,'portfolio'=>$portfolio));
		$this->load->view('front/footer',Array('website'=>$website));
	}
}
