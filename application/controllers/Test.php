<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
            # Started working with file upload.
            $validFiles = array(
                'upload_path'   => './assets',
                'allowed_types' => 'jpg|png|gif',
                'max_size'      => 250000
            );
            $this->load->library('upload', $validFiles);
            if ($this->upload->do_upload('to_upload_image'))
            {
                echo "Image Uploaded Successfully!";
            }
            else
            {
                echo $this->upload->display_errors();
            }

	}

	public function upload()
	{
		$this->load->helper('form');
		$this->load->view('test');
	}
}