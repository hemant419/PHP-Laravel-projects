<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginc extends CI_Controller {
	public function index()
	{
		$file['error']="";
		$this->load->view('Login/Login',$file);
	}
	public function login()
	{
		
		$em=$this->input->post('em');
		$ps=$this->input->post('ps');
	
	
		$this->load->model('Loginm');
		$data=$this->Loginm->login();
		$d=$this->Loginm->show();
		if($em=="" && $ps=="")
		{
			$file['error']="Enter Email Or Password";
		$this->load->view('Login/Login',$file);
		}
		else if($data>0)
		{
			$this->session->set_userdata('em',$d->user_name);
			$this->session->set_userdata('email',$d->email_id);
			
			redirect('Dashboardc');
			}
			else
			{
				$file['error']="Invalid Email Or Password";
				$this->load->view('Login/Login',$file);
				}
				
		}
		public function logout()
		{
		    $this->session->unset_userdata('em');
			redirect('Loginc');	
		}
}
