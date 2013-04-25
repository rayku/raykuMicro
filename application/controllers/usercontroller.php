<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserController extends CI_Controller {

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

		$this->load->model('UserModel');
		$this->data['base_url'] = base_url();
		$this->data['title'] = "Rayku";
		$this->data['isTutor'] = false;
	}
	public function index()
	{
		//Load dashboard if user is logged in
		if(($this->session->userdata('user_name')!=""))
  		{
  			if(($this->session->userdata('tutor_id')!="")){
  				$this->data['isTutor'] = true;
  			}
  			else{
  				$this->data['isTutor'] = false;
  			}
  			$this->data['user'] = $this->UserModel->getUser($this->session->userdata('user_id'));
  			$this->data['logged_in'] = true;
  			$this->load->view('user/header', $this->data);
  			$this->load->view('user/body', $this->data);
  			$this->load->view('user/footer', $this->data);
  		}
  		else{
  			//redirect to home with an error if unsuccessful
   			redirect('/?loginAttempt=fail', 'location');
  		}
	}
	public function login()
	{
		$this->form_validation->set_rules('_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('_password', 'Password', 'required');
		
		//perform form validation
		if ($this->form_validation->run() == FALSE)
		{
	  		// probably should add some flash statement here too. but I don't know if
	 		// the current form validation errors are sufficient
	  		redirect('/?login=failed');
		}
		else{
			//get user email and password combination
			$email = $this->input->post('_email');
			$password = $this->input->post('_password');
			//check email, password combo against DB
			$user = $this->UserModel->checkCredentials($email, $password);
			if($user){
				//redirect to the dashboard if successful
				redirect('/', 'location');
			}
			else{
				//redirect to home with an error if unsuccessful
				redirect('/?loginAttempt=fail', 'location');
			}
		}
	}
	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		//perform form validation
		if ($this->form_validation->run() == FALSE)
		{
	  		// probably should add some flash statement here too. but I don't know if
	 		// the current form validation errors are sufficient
	  		redirect('/?registration=failed');
		}
		else{
			//get user email and password combination
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			//$password = $this->encrypt->sha1($this->input->post('password'));
			//check email, password combo against DB
			$register = $this->UserModel->registerUser($username, $email, $password);
			if($register){
				redirect('/', 'location');
			}
			else{
				//redirect to home with an error if unsuccessful
				redirect('/?registration=fail', 'location');
			}
		}
	}
	public function editProfile()
	{
		$fname = $this->input->post('first_name');
		$lname = $this->input->post('last_name');
		$school = $this->input->post('school');
		$school_year = $this->input->post('grade');
		$degree = $this->input->post('degree');
		$about = $this->input->post('bio');

		$save = $this->UserModel->editUser($this->session->userdata('user_name'), $fname, $lname, $school, $school_year, $degree, $about);
		redirect('/', 'location');
	}
	public function logout()
    {
    	//unset session variables
        $sessionData = array(
            'user_id'   =>'',
            'user_name'  =>'',
            'first_name' => '',
            'last_name' => '',
            'user_email' => '',
            'logged_in' => FALSE,
        );
        $this->session->unset_userdata($sessionData);
        //destroy the session
        $this->session->sess_destroy();
        redirect('/', 'location');
    }
    public function broadcast($room)
    {
    	redirect('http://mathcentre.rayku.com:8080/broadcast/'.$room.'/'.$secret, 'location');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */