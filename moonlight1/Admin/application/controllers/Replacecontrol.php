<?php

class Replacecontrol extends  CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');

		$this->load->model('countDatabaseEntry');
		$this->load->model('replaceModel');
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
		$file['replace']=$this->replaceModel->selectReplace();
		$file['page']="replace/replace";
		$this->load->view('Template/content',$file);
	}	
	public function detail($id,$m,$d,$no)
	{
		//Notifiaction 
		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['requestDetail']=$this->replaceModel->replaceDetail($id,$m,$d,$no);
		$file['page']="replace/replacedetail";
		$this->load->view('Template/content',$file);
	}
	public function deleteReplace($id)
	{
		$this->replaceModel->deleteReplace($id);
	}
	public function status($id)
	{
		$this->replaceModel->statusUpdate($id);
	}
	public function progress($id)
	{	
		$this->replaceModel->progress($id);
	}


}

?>