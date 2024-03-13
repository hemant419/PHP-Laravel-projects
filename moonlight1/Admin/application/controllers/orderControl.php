<?php

class orderControl extends  CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('orderModel');
		$this->load->model('countDatabaseEntry');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}
		else if(($this->session->userdata('Password')==""))
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
		$file['order']=$this->orderModel->selectOrder();
		$file['page']="order/order";
		$this->load->view('Template/content',$file);
	}
	public function deleteOrder($id)
	{
		$this->orderModel->deleteOrder($id);
	}
	public function status($id)
	{
		$this->orderModel->statusOrder($id);
	}
	public function newOrder()
	{
		//Notifiaction 
		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['order']=$this->orderModel->selectNewOrder();
		$file['page']="order/newOrder";
		$this->load->view('Template/content',$file);
	}
	public function invoice($no)
	{
		error_reporting(0);
		//Notifiaction 
		$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
		$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
		$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
		$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
		$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['invoice']=$this->orderModel->generateInvoice($no);
		$file['page']="order/invoice";
		$this->load->view('Template/content',$file);		

	}

}

?>