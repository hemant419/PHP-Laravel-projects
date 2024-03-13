<?php
	class Statecontrol extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('welcomeModel');
			$this->load->model('statemodel');

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
			$file['state']=$this->statemodel->selectstate();
			$file['page']="state/state";
			$this->load->view('Template/content',$file);
		}
		public function addState()
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();	
					
			$file['state']=$this->statemodel->selectstate();
			$file['page']="state/addstate";
			$this->load->view('Template/content',$file);
		}
		public function insertState()
		{
			$this->statemodel->insertstate();
		}
		public function statestatus($state_id)
		{
			$this->statemodel->updatestatus($state_id);
		}
		public function Editstate($state_id)
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();		

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['state']=$this->statemodel->editstate($state_id);
			$file['page']="state/editstate";
			$this->load->view('Template/content',$file);
		}
		public function updatestate($state_id)
		{
			$this->statemodel->updatestate();
		}
		public function Deletestate($state_id)
		{
			$this->statemodel->deletestate($state_id);
		}
		
	}
?>