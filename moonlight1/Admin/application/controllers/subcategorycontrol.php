<?php
class subcategorycontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('categoryModel');
		$this->load->model('subcategoryModel');

		$this->load->model('countDatabaseEntry');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		
	}
	//Sub category work from here
	public function index()//subcategory
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
	
		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();
						
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();
		$file['page']="category/sub/subcategorypage";
		$this->load->view('Template/content',$file);
	}
	public function addSubcategory()
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
		$file['page']="category/sub/addsubcategory";
		$this->load->view('Template/content',$file);
	}
	public function insertSubcategory()
	{
		$this->subcategoryModel->insertSubcategory();
	}
	public function editSubcategory($id)
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
		$file['subcategory']=$this->subcategoryModel->editSubcategory($id);
		$file['page']="category/sub/editsubcate";
		$this->load->view('Template/content',$file);
	}
	public function updateSubcategory()
	{
		$this->subcategoryModel->updateSubcategory();
	}
	public function status($id)
	{
		$this->subcategoryModel->statusUpdate($id);
	}
	public function deleteSubcategory($id)
	{
		$this->subcategoryModel->deleteSubcategory($id);
	}
	public function multidelSubcategory()
	{
		$this->subcategoryModel->multidelSubcategory();
	}
}	
?>