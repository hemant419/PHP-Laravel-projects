<?php
	class citycontrol extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();

			$this->load->model('countDatabaseEntry');
			$this->load->model('welcomeModel');
			$this->load->model('statemodel');
			$this->load->model('citymodel');
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
			$file['city']=$this->citymodel->selectcity();
			$file['page']="city/city";
			$this->load->view('Template/content',$file);
		}
		public function addcity()
		{
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();	
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
					
			$file['state']=$this->statemodel->selectstate();
			$file['page']="city/addcity";
			$this->load->view('Template/content',$file);
		}
		public function insertcity()
		{
			$this->citymodel->insertcity();
		}
		public function citystatus($city_id)
		{
			$this->citymodel->updatestatus($city_id);
		}
		public function Editcity($city_id)
		{
			$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['state']=$this->statemodel->selectstate();
		$file['city']=$this->citymodel->editcity($city_id);
			$file['page']="city/editcity";
			$this->load->view('Template/content',$file);
		}
			public function updatecity($city_id)
			{
				$this->citymodel->updatecity();
			}
			public function Deletecity($city_id)
			{
				$this->citymodel->deletecity($city_id);
			}
			
	}
?>