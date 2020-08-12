<?php
class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		if(!($this->session->userdata('id'))){
    		return redirect('login');
    	}
	}

	public function welcome(){

		$this->load->model('loginmodel');
		$this->load->library('pagination');
		$config = [
			'base_url'=>base_url('admin/welcome'),
			'per_page'=> 3,
			'total_rows'=>$this->loginmodel->num_rows(),			
			'full_tag_open'=>"<ul class='pagination pagination-sm'>",
        	'full_tag_close'=>"</ul>",
        	'first_tag_open' =>"<li class='page-item page-link'>",
        	'first_tag_close' =>"</li>",
        	'last_tag_open' =>"<li class='page-item page-link'>",
       		'last_tag_close' =>"</li>",
        	'next_tag_open' =>"<li class='page-item page-link'>",
        	'next_tag_close' =>"</li>",
        	'prev_tag_open' =>"<li class='page-item page-link'>",
        	'prev_tag_close' =>"</li>",
        	'num_tag_open' =>"<li class='page-item page-link'>",
        	'num_tag_close' =>"</li>",
        	'cur_tag_open' =>"<li class='page-item active'><a class= 'page-link'>",
        	'cur_tag_close' =>"</a></li>"
		];
		$this->pagination->initialize($config);
		$todos = $this->loginmodel->articleList($config['per_page'],$this->uri->segment(3));
		$this->load->view('admin/dashboard',['todos'=>$todos]);
	}

	public function adduser(){
		$this->load->view('admin/add_todo');
	}

	public function todo_validate(){
		if($this->form_validation->run('add_todo_rules'))
		{   
	
			$post = $this->input->post();
			
			$this->load->model('loginmodel');
			if($this->loginmodel->add_todo($post))
			{
				$this->session->set_flashdata('msg','Article added successfuly');
				$this->session->set_flashdata('msg_class','alert-success');
			}
			else
			{
				$this->session->set_flashdata('msg','Article not added, Please try again!');
				$this->session->set_flashdata('msg_class','alert-danger');
			}
			return redirect('admin/welcome');
		}
		else
		{
			$this->load->view('admin/add_todo');
		}
	}

	public function deltodo(){
		$id = $this->input->post('id');
		
		$this->load->model('loginmodel');
		if($this->loginmodel->del_todo($id))
		{
			$this->session->set_flashdata('msg','Article deleted successfuly');
			$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg','Article not deleted, Please try again!');
			$this->session->set_flashdata('msg_class','alert-danger');

		}
		return redirect('admin/welcome');
	}
	
	public function edituser($id){
		$this->load->model('loginmodel');
		$rt = $this->loginmodel->find_des($id);
		// print_r($rt);
		$this->load->view('admin/edit_todo',['todos'=>$rt]);

	}

	public function update_user($id){
		
		
		if($this->form_validation->run('add_todo_rules'))
		{

		$details = $this->input->post();
		// $artid = $details['id'];

		// print($artid);
		// print_r($post);
		// exit;
	
		$this->load->model('loginmodel');
		if($this->loginmodel->update_todo($id,$details))
		{
			$this->session->set_flashdata('msg','Article updated successfuly');
				$this->session->set_flashdata('msg_class','alert-success');
		}
		else
		{
			$this->session->set_flashdata('msg','Article not updated, Please try again!');
				$this->session->set_flashdata('msg_class','alert-danger');
		}
		return redirect('admin/welcome');

	}
	else
	{
		$this->edituser($id);
	}

	}
	

	public function logout(){
		$this->session->unset_userdata('id');
		return redirect('login');
	}
}
?>
