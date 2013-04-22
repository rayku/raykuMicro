<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TutorController extends CI_Controller {

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

		$this->load->model('TutorModel');
		$this->data['base_url'] = base_url();
		$this->data['title'] = "Rayku";
	}
	public function profile()
	{
		//determine if user is logged in or not
		if(($this->session->userdata('user_name')!=""))
  		{
  			$this->data['logged_in'] = true;
  		}
  		else{
  			$this->data['logged_in'] = false;
  		}
  		//load tutors public profile
  		$username = $this->uri->segment(2);
  		$this->data['tutor'] = $this->TutorModel->getTutorByUsername($username);
  		if ($this->data['tutor'][0]['tutor_id'] == ""){
  			redirect('/', 'location');
  		}
  		else{
  			$this->load->view('user/header', $this->data);
  			$this->load->view('user/tutor_public', $this->data);
  			$this->load->view('user/footer', $this->data);
  		}
	}
	public function startBroadcast()
	{
		$variables = $this->TutorModel->startBroadcast();
		redirect('http://whiteboard.rayku.com/broadcast/'.$variables['room'].'/'.$variables['secret'], 'location');
	}
	public function sessions()
	{
		$broadcastSessions = $this->TutorModel->activeBroadcasts();
		//if no broadcast sessions
		if(!$broadcastSessions){
			$this->data['broadcast_sessions'] = false;
			$output = $this->load->view('user/broadcast_table', $this->data, true);
			$this->output
    			->set_status_header('200')
    			->set_output($output);
		}
		else{
			$this->data['broadcast_sessions'] = $broadcastSessions;
			$output = $this->load->view('user/broadcast_table', $this->data, true);
			$this->output
    			->set_status_header('200')
    			->set_output($output);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */