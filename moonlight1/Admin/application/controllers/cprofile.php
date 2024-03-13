<?php 

class cprofile extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('profileModel');
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
		$this->personal();
	}public function setPicture()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			
			$this->profileModel->setpicture();
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	public function gallery()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			$folder=$this->session->userdata('AdminId');
			
			$file['image']=glob('profile/'.$folder.'/*.*');
			
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
				
			$file['page']="profile/gallery";
			$this->load->view('Template/content',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
	public function personal()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{

			$file['genErr']="";$file['contactErr']="";$file['addErr']="";
			$file['cityErr']="";$file['finalProfile']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
			
				$file['page']="profile/personal";
				$this->load->view('Template/content',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	
	}
	public function personalUpdate()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$this->profileModel->personalProfile();
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	public function resident()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
		
			$file['finalProfile']="";
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
					
			$this->load->view('Template/header',$file);
			$this->load->view('Template/sidebar');
			$this->load->view('profile/resident',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	public function residentUpdate()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$this->profileModel->residentProfile();
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	
	public function contact()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
			$file['finalProfile']="";
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
					
			$this->load->view('Template/header',$file);
			$this->load->view('Template/sidebar');
			$this->load->view('profile/contact',$file);
			}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
	public function contactUpdate()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$this->profileModel->contactProfile();
			}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
}

?>