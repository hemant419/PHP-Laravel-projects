<?php
class offerscontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('offersmodel');

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
		$file['offers']=$this->offersmodel->selectoffers();
		$file['page']="offers/offers";
		$this->load->view('Template/content',$file);
	}
	public function addoffers()
	{
		$file['offer_img1']="";
		$file['offer_startdate']="";
		$file['offer_enddate']="";
		
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
					
		$file['offers']=$this->offersmodel->selectoffers();
		$file['page']="offers/addoffer";
		$this->load->view('Template/content',$file);
	}
	public function insertoffer()
	{
		$file['offer_img1']="";
		$file['offer_startdate']="";
		$file['offer_enddate']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$this->offersmodel->insertoffer();
	}
	public function Editoffer($offer_id)
	{
		$file['offer_title']="";$file['offer_img1']="";
		$file['offer_description']="";$file['offer_startdate']="";
		$file['offer_enddate']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$file['offer']=$this->offersmodel->editoffer($offer_id);
	
		$file['page']="offers/Editoffer";
		$this->load->view('Template/content',$file);
	}
	public function updateoffer($offer_id)
	{
		$file['offer_title']="";$file['offer_img1']="";
		$file['offer_description']="";$file['offer_startdate']="";
		$file['offer_enddate']="";
		
		$this->offersmodel->updateoffer();
	}
	public function Deleteoffer($offer_id)
	{
		$this->offersmodel->offerdelete($offer_id);
	}
	public function offerstatus($offer_id)
	{
		$this->offersmodel->updatestatus($offer_id);
	}
}
?>