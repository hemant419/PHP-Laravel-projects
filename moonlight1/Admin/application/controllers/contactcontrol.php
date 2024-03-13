<?php
class contactcontrol extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('contactModel');
		$this->load->model('welcomeModel');

		$this->load->model('countDatabaseEntry');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
	}
	public function index()
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		$file['contact']=$this->contactModel->selectcontact();	
		$file['page']="contact/contact";
		$this->load->view('Template/content',$file);
	}
	public function contactdelete($contact_id)
	{
		$this->contactModel->deletedata($contact_id);
		redirect('contactcontrol');
	}
	public function contactstatus($contact_id)
	{
		$this->contactModel->statusupdate($contact_id);
	}
	public function latestContact()
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		$file['contact']=$this->contactModel->selectNewContact();	
		$file['page']="contact/newContact";
		$this->load->view('Template/content',$file);
	}

}
?>