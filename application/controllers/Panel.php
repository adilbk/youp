<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index()
	{
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		$total_visits = StatisticsManagement::get_total_visits();
		$total_messages = StatisticsManagement::get_total_messages();
		$this->load->view('back/dashboard',Array('total_visits'=>$total_visits,'total_messages'=>$total_messages));
		$this->load->view('back/menu');
		$this->load->view('back/footer');

	}
	public function general_settings()
	{
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		$this->load->view('back/general_settings');
		$this->load->view('back/menu');
		$this->load->view('back/footer');

	}

	public function editeur()
	{	
		$this->load->view('back/editeur');

	}
	public function page($page='')
	{	
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		switch ($page) {
			case 'accueil':
				$this->load->helper('form');
				//$this->load->model('management/slidermanagement');
				$slider_images = SliderManagement::get_slider();
				$this->load->view('back/slider_settings',Array('slider'=>$slider_images));
				break;

			case 'qui_sommes_nous':
				
				$this->load->helper('form');
				//$this->load->model('management/slidermanagement');
				$slider_images = SliderManagement::get_slider();
				
				$this->load->view('back/Who_we_are_settings',Array('slider'=>$slider_images));
				break;

			case 'portfolio':
				$AllPosts = PortfolioManagement::get_portfolio();
				$this->load->view('back/portfolio_settings',Array('AllPosts'=>$AllPosts));
				break;
			


			case 'blog':
				$AllPosts = BlogManagement::get_blog();
				$this->load->view('back/page_blog',Array('AllPosts'=>$AllPosts));
				break;
			case 'blog_edit':
				$post = BlogManagement::get_post($this->input->get('id'));
				$this->load->view('back/page_blog_edit',Array('post'=>$post));
				break;

			case 'contact':
				echo 'Vous etes sur lq pages : contact' ;
				break;
			case 'portfolio_ajouter':
				$this->load->view('back/page_portfolio_ajout');
				break;
			case 'blog_ajouter':

				$this->load->view('back/page_blog_ajout');
				break;
			
			default:
				echo 'well fak you';
				break;
		}
		$this->load->view('back/menu');
		$this->load->view('back/footer');
	}

	public function messages()
	{			
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		
		$message = MessagesManagement::get_all_messages();
		$this->load->view('back/messages',Array('message'=>$message));
		$this->load->view('back/menu');
		$this->load->view('back/footer');
	

	}
	public function contact()
	{	
		$this->load->view('back/header');
		$this->load->view('back/navigation_bar');
		
		$this->load->view('back/menu');
		$this->load->view('back/footer');

	}

	public function operations($type)
	{ 	
		switch ($type) {
			case 'general_settings':
				$this->load->model('entities/website');
				$temp = new Website();
				$temp->initialize($this->input->post());
				WebsiteManagement::update_website($temp);
				redirect(base_url()."panel/general_settings", "location");
				break;	
			case 'supprimer_portfolio':
				$data = $this->input->get();
				$id=$data['id'];
				PortfolioManagement::delete_portfolio_content($id);
				redirect(base_url()."panel/page/portfolio", "location");

				break;
			case 'supprimer_post':
				$data = $this->input->get();
				$id=$data['id'];
				BlogManagement::delete_blog_post($id);
				
				break;
			case 'editer_post':
					$this->load->model('entities/Post');
					$post = BlogManagement::get_post($this->input->post('id'));
					$post->title=$this->input->post('title');
					$post->description=$this->input->post('description');
					$post->content=$this->input->post('content');
					BlogManagement::update_blog_post($post);
					echo 'ok';
					break;
			case 'ajouter_post':
					$this->load->model('entities/Post');
					$temp = new Post();
					$temp->initialize($this->input->post());
					BlogManagement::insert_blog_post($temp);
					echo 'ok';					
			break;
			case 'upload_slider_image':
					# Started working with file upload.
		            $validFiles = array(
		                'upload_path'   => './assets/front/img/slider_images',
		                'allowed_types' => 'jpg|png',
		                'file_name' => 'slider_image_'.$this->input->post('slide_to_update').'.jpg',
		                'max_size' => 250000,
		                'overwrite' => TRUE
		            );
		            $this->load->library('upload', $validFiles);
		            $this->load->model('entities/SliderImage');
		            $slider_entry = SliderManagement::get_slider_entry($this->input->post('slide_to_update'));
		            $slider_entry->title=$this->input->post('article_title');
		            $slider_entry->description=$this->input->post('article_description');

		            if ($this->upload->do_upload('to_upload_image'))
		            {
		               	$slider_entry->image = 'slider_image_'.$this->input->post('slide_to_update').'.jpg';
		            }
		            else
		            {
		                echo $this->upload->display_errors();
		            }

		            SliderManagement::update_slider($slider_entry);
		            redirect(base_url()."panel/page/accueil", "location");
				break;
			
			default:

				break;
		}
	}
	

}
