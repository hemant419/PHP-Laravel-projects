<?php 
class discountcontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('discountModel');
		$this->load->model('productModel');

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
		$file['discount']=$this->discountModel->selectDiscount();
		$file['page']="discount/discount";
		$this->load->view('Template/content',$file);
	}
	public function addDiscount()
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
		$file['product']=$this->productModel->selectProduct();	
					
		$file['page']="discount/addDiscount";
		$this->load->view('Template/content',$file);
	}
	public function insertDiscount()
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
		$this->discountModel->insertDiscount();
	}
	public function editDiscount($id)
	{
		$file['profile']=$this->welcomeModel->profile();	
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
						
		$file['product']=$this->productModel->selectProduct();	
		$file['editDiscount']=$this->discountModel->editDiscount($id);
		$file['page']="discount/editDiscount";
		$this->load->view('Template/content',$file);
	}
	public function updateDiscount($id)
	{
		$this->discountModel->updateDiscount($id);
	}
	public function deleteDiscount($id)
	{
		$this->discountModel->deleteDiscount($id);
	}
	public function status($id)
	{
		$this->discountModel->statusUpdate($id);
	}
}
?>