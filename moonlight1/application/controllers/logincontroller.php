<?php
class logincontroller extends CI_controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('loginmodel');	
	}
	
	
	public function index()
	{
		$file['error']="";
		$this->load->view('template/header');
		$this->load->view('login/login',$file);
		$this->load->view('template/footer');
	}

	public function login()
	{
		$login=$this->loginmodel->login();	
		if($login=="0")
		{
		$file['error']="Invalid Username Or Password";
		$this->load->view('template/header');
		$this->load->view('login/login',$file);
		$this->load->view('template/footer');
		}
		else
		{
			redirect('homecontroller');	
		}
	}
	
	public function signup()
	{
		$this->load->view('template/header');
		$this->load->view('login/signup');
		$this->load->view('template/footer');
	}
	
	public function logout()
	{
		$this->session->unset_userdata('c_username');
		$this->session->unset_userdata('c_useremail');	
		$this->session->unset_userdata('c_userid');	
		redirect('homecontroller');	
	}

	public function userregister()
	{
		$login=$this->loginmodel->userregister();
		redirect('logincontroller');		
	}
}

?>