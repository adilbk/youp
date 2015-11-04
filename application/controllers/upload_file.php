 <?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upload_file extends CI_Controller{

	
  function __construct()
  {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}


	function upload_it() {
		//load the helper
		//$this->load->helper('form');
		//Configure
		//set the path where the files uploaded will be copied. NOTE if using linux, set the folder to permission 777
		$config['upload_path'] =  './assets/front/img/portfolio_images';
		

		
    // set the filter image types
		$config['allowed_types'] = 'gif|jpg|png';
		
		//load the upload library
		$this->load->library('upload', $config);


    
    $this->upload->initialize($config);
    
    //$this->upload->set_allowed_types('*');

		$data['upload_data'] = '';
		
    
		//if not successful, set the error message
		if (!$this->upload->do_upload('userfile')) {
			redirect(base_url()."Portfolio_ajout?op=failed", "location");

		} else { //else, set the success message
			$data = array('msg' => "Upload success!");
			$dataa = $this->upload->data();
			$this->load->model('entities/PortfolioEntry');
			$temp = new PortfolioEntry();
			$temp->initialize($this->input->post(),$dataa);
			PortfolioManagement::insert_portfolio_entry($temp);
		
			echo $dataa['file_name'];
      		$data['upload_data'] = $this->upload->data();
			redirect(base_url()."Portfolio_ajout?op=success", "location");
		}
		
		
		
	}

}
