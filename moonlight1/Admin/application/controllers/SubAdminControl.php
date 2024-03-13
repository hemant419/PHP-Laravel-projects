<?php
class SubAdminControl extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('Subadmodel');
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
		$file['subadmin']=$this->Subadmodel->selectsub();
		$file['page']="Subadmin/subadmin";
		$this->load->view('Template/content',$file);
	}
		public function addUser()
	{
	
		///Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
		$file['emailRegErr']="";
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{	
				$file['profile']=$this->welcomeModel->profile();	
				$file['finalProfile']=$this->welcomeModel->profileProgress();				
				//echo "hr";	
				$file['page']="subadmin/addUser";
				$this->load->view('Template/content',$file);
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/');
		}	
	}

		public function addUserByAdmin()
	{
	
	
	//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
			
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			//$file['emailRegErr']="";
			$this->Subadmodel->addUserByAdmin();
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	public function deleteadmin($aid)
	{
		$this->Subadmodel->deleteadmin($aid);
	}
	public function astatus($aid)
	{
		$this->Subadmodel->updatestatus($aid);
	}
}
?>