<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {
	public function index()
	{
		header('location: http://google.fr');
	}
}