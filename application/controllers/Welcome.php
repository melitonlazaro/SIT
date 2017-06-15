<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function register_process()
	{
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Please provide a %s.'));
		$this->form_validation->set_rules('confirm_password','Confirm Password', array('required', 'matches[password]') );
		$this->form_validation->set_rules('first_name', 'First Name', 'required', array('required' => 'Please provide a %s.'));
		$this->form_validation->set_rules('last_name', 'Last Name', 'required', array('required' => 'Please provide a %s.'));
		$this->form_validation->set_rules('username', 'Username', 'required|callback_isUsernameExist', array('required' => 'Please provide a %s.'));

		if($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('failed', 'Registration failed, Passwords must match');
				$this->load->view('register');

				
			}
			else {
			$this->load->model('User_model');
			
			$result = $this->User_model->register_member($data);

		

			if($result)
			{
				$this->session->set_flashdata('registered', 'You are now registered and can log in');
				redirect('Welcome');

			
			}
			else{
				}
			}
	}
	public function isUsernameExist($username)
	{
		$this->load->library('form_validation');

		$is_exist = $this->User_model->isUsernameExist($username);

		if($is_exist)
		{
			$this->form_validation->set_message('isUsernameExist', 'Username already exists');
			return FALSE;
		}
		else
		{
			return TRUE;
		}

	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Please provide %s'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'please provide %s'));

		if($this->form_validation->run() == FALSE )
		{
			$this->load->view('welcome_message');
		}
		else
			{
				$this->load->model('User_model');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$user_id = $this->User_model->login_user($username, $password);
				

				if($user_id)
				{
					// create array user data
					$user_data = array (
							'user_id' => $user_id,
							'username' => $username,
							'password' => $password,
							);
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('correct', 'Login Success');
					
					
					redirect('Welcome/loginsuccess');
				}
				else
				{ // setting error message
					$this->session->set_flashdata('error', 'Login Failed, please insert correct username and password');
					redirect('Welcome');
				}
			}
			
		}
	public function loginsuccess()
	{
		$username = $this->session->userdata('username');

		$this->load->view('home');
	}

	public function add_session()
	{
		$tryname = $this->input->post('new_session');

		$this->session->set_userdata('name', $tryname);
		
		redirect('Welcome/trysession');
	}





}
