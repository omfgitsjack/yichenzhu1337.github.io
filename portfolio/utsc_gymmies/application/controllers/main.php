<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

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
	public function index() {
		$this->load->view('login');
	}

	public function signup_validation(){

		$this->load->library('form_validation');
		$this->load->model('model_users');

		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]');
		

		$this->form_validation->set_message('is_unique', 'That email address already exists');
		if ($this->form_validation->run()) {

			//generate a random key
			$key = md5(uniqid());
			$this->load->library('email', array('mailtype' => 'html'));

			$this->email->from('yichen@yichen.com','yichen');
			$this->email->to($this->input->post('email'));
			$this->email->subject('confirm you account');

			$message = "<p> Thank you for signing up!</p>";

			$message .= "<p><a href='". base_url() ."main/register_user/$key'> Click Here to confirm </a></p>";

			$this->email->message($message);

			if($this->model_users->add_temp_users($key)){

				if ($this->email->send()) {
					echo "email has been sent";
				}
				else{
					echo "failed to send";
				}

			}
			else{
				echo "problem adding user to databasem";

			}

			// send email to user
			echo "pass";
		}
		else {
			echo "you shall not pass!";
			$this->load->view('view_signup');
		}
	}

	public function signup(){
		$this->load->view('view_signup');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('main/login');
	}

	public function members(){
		if ($this->session->userdata('is_logged_in')) {
			$this->load->view('members');
		}
		else{
			redirect('main/restricted');
		}

	}

	public function restricted(){
		$this->load->view('restricted');
	}

	public function login() {

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password','Password','required|md5|trim');

		if ($this->form_validation->run()) {

			$data = array(
				'email' => $this->input->post('email'), 
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('main/members');
		}
		else{
			$this->load->view('login');
		}

		echo $this->input->post('email');

	}

	public function validate_credentials(){
		$this->load->model('model_users');

		if ($this->model_users->can_login_in()) {
			return true;
		}
		else{
			$this->form_validation->set_message('validate_credentials','Incorrect username and or passwordS');
			return false;
		}
	}


	public function register_user($key){
		$this->load->model('model_users');

		if ($this->model_users->is_key_valid($key)) {
			if($newemail = $this->model_users->add_user($key)){
				$data = array(
					'email' => $newemail, 
					'is_logged_in' => 1
					);

				$this->session->set_userdata($data);
				redirect('main/members');
			}
			else{
				echo "failed to add user, try again";
			}
		}
		else{
			echo "invalid key";
		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */