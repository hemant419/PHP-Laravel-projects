<?php 
class askcontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('askModel');
		
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
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		
		//Notifiaction 
		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
		$file['askfor']=$this->askModel->selectAsk();
		$file['page']="askfor/askfor";
		$this->load->view('Template/content',$file);
	}
	public function askDelete($id)
	{
		$this->askModel->deleteAsk($id);
	}
	public function askStatus($id)
	{
		$this->askModel->statusUpdate($id);
	}
	public function latestAsk()
	{
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		
		//Notifiaction 
		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
		$file['askfor']=$this->askModel->selectNewAsk();
		$file['page']="askfor/newAsk";
		$this->load->view('Template/content',$file);

	}
}
?>