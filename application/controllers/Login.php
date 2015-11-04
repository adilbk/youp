<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email')!=NULL)
		{
			redirect(base_url()."panel", "location");
		}
		else
		{
			$this->load->view('back/login');
		}

	}

	public function auth()
	{

		$this->load->model('Management/UsersManagement');
		$this->load->model('entities/admin');
		$admin = new Admin();
		$admin->email=$this->input->post('email');
		$admin->password=$this->input->post('password');
		if(UsersManagement::login($admin))
		{
			$user_data = array(
				'email'=>$admin->email
				);
			$this->session->set_userdata($user_data);
			redirect(base_url()."panel", "location");
        	return;
		}
		else
		{
			echo 'Vous êtes mauvais!';
		}

	}

}
