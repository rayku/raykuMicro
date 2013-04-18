<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PageController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();

		$this->data['base_url'] = base_url();
		$this->data['title'] = "Rayku";
		$this->load->model('UserModel');
		$this->data['isTutor'] = false;
	}
	public function index()
	{
		//determine if user is logged in
		if(($this->session->userdata('user_name')!=""))
  		{
  			if(($this->session->userdata('tutor_id')!="")){
  				$this->data['isTutor'] = true;
  			}
  			else{
  				$this->data['isTutor'] = false;
  			}
  			$this->data['logged_in'] = true;
   			$this->load->view('user/header', $this->data);
  			$this->load->view('user/body', $this->data);
  			$this->load->view('user/footer', $this->data);
  		}
  		else{
   			$this->load->view('static/index', $this->data);
  		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */