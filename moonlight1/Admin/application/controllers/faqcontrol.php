<?php
class faqcontrol extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('faqModel');
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
		$file['faq']=$this->faqModel->selectfaq();	
		$file['page']="faq/faq";
		$this->load->view('Template/content',$file);
	}
	public function editFaq($id)
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['faqEdit']=$this->faqModel->editFaq($id);
		
		$file['page']="faq/Faqedit";
		$this->load->view('Template/content',$file);
	}
	public function updateFaq()
	{
		$this->faqModel->updateFaq();
	}
	public function faqdelete($faq_id)
	{
		$this->faqModel->deletedata($faq_id);
		redirect('faqcontrol/');
	}
	public function faqstatus($faq_id)
	{
		$this->faqModel->statusupdate($faq_id);
	}
	public function letestfaqstatus($faq_id)
	{
		$this->faqModel->lateststatusupdate($faq_id);
	}
	public function latestfaq()
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		$file['faq']=$this->faqModel->selectNewfaq();	
		$file['page']="faq/newfaq";
		$this->load->view('Template/content',$file);
	}

}
?>