<?php 
class cartControl extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');

		$this->load->model('countDatabaseEntry');
		$this->load->model('discountModel');
		$this->load->model('cartModel');
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
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
		$file['cart']=$this->cartModel->selectCart();
		$file['page']="addtocart/cart";
		$this->load->view('Template/content',$file);
	}
	public function deleteCart($id)
	{
		$this->cartModel->deleteCart($id);
	}
	public function status($id)
	{
		$this->cartModel->statusUpdate($id);
	}
}
?>