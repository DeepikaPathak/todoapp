<?php
class Login extends MY_Controller{

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('id')){
    		return redirect('admin/welcome');
    	}
	}


	public function index(){
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Pass Word','required|max_length[12]');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$this->load->model('loginmodel');
			$id = $this->loginmodel->isvalidate($email,$password);
			if($id)
			{
				
				$this->session->set_userdata('id',$id);
				
				return redirect('admin/welcome');
			}
			else
			{
				$this->session->set_flashdata('Login_error','Invalid Username/Password');
				return redirect('login');
			}
		}
		else
		{
			$this->load->view('admin/login');
		}
	}
	public function front_validation(){
		$this->form_validation->set_rules('mobile','Mobile Number','required|numeric');
		$this->form_validation->set_rules('password','Pass Word','required|max_length[12]');
		$this->form_validation->set_rules('firstname', 'First Name','required|alpha');
		$this->form_validation->set_rules('lastname', 'Last Name','required|alpha');
		$this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_error_delimiters("<div class='text-danger'>","</div>");
		if($this->form_validation->run())
		{
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$mobile = $this->input->post('mobile');
			$this->load->model('loginmodel');
			if($this->loginmodel->add_user($firstname,$lastname,$email,$password,$mobile)){
				$this->session->set_flashdata('user','user inserted successfully');
				$this->session->set_flashdata('user_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('user','user inserted successfully');
				$this->session->set_flashdata('user_class','alert-danger');
			}
			return redirect('login');
		}
		else
		{
			$this->load->view('admin/register');
		}

	}



	public function register()
	{
		$this->load->view('admin/register');
	}

}
?>