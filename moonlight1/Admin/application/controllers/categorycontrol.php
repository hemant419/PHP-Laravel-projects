<?php 
class categorycontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();

		$this->load->model('countDatabaseEntry');
		$this->load->model('welcomeModel');
		$this->load->model('categoryModel');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		
	}//main category work from here
	public function index()//maincategory
	{	
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['page']="category/main/maincategorypage";
		$this->load->view('Template/content',$file);
		//$this->categoryModel->maincategory();
	}
	public function addCategory()
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		//$file['maincategory']=$this->categoryModel->findMaincategory();
		$file['page']="category/main/addmaincategory";
		$this->load->view('Template/content',$file);
	}
	public function insertCategory()
	{
		$this->categoryModel->insertCategory();
	}		
	public function editCategory($id)
	{
		//Notifiaction 

		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['maincategory']=$this->categoryModel->editCategory($id);
		
		$file['page']="category/main/editmaincate";
		$this->load->view('Template/content',$file);
	}
	public function updateCategory()
	{
		$this->categoryModel->updateCategory();
	}
	public function deleteCategory($id)
	{
		$this->categoryModel->deleteCategory($id);
	}
	public function multidelCategory()
	{
		$this->categoryModel->multidelCategory();
	}
	public function status($id)
	{
		$this->categoryModel->statusUpdate($id);
	
	}
}
?>