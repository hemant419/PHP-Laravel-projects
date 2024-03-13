<?php 
class sliderControl extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('sliderModel');

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
					
		$file['slider']=$this->sliderModel->selectSlider();
		$file['page']="slider/slider";
		$this->load->view('Template/content',$file);
	}
	public function addSlider()
	{//load addSlider view Page
		$file['imgErr']="";$file['titleErr']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['page']="slider/addSlider";
		$this->load->view('Template/content',$file);
	}
	public function insertSlider()
	{	
		$file['imgErr']="";$file['titleErr']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$this->sliderModel->insertSlider();
	}
	public function editslider($id)
	{
		$file['imgErr']="";$file['titleErr']="";
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$file['slider']=$this->sliderModel->editSlider($id);
	
		$file['page']="slider/editSlider";
		$this->load->view('Template/content',$file);
	}
	public function updateSlider()
	{
		$file['imgErr']="";$file['titleErr']="";
		$this->sliderModel->updateSlider();
	}
	public function deleteSlider($id)
	{
		$this->sliderModel->deleteSlider($id);
	}
	public function status($id)
	{
		$this->sliderModel->status($id);
	}
}
?>