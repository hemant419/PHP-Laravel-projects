<?php
class orderCon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('productm');	
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('sliderM');
		$this->load->model('contactM');
		$this->load->model('feedbackM');
		$this->load->model('addtocartM');
		$this->load->model('discountM');
		$this->load->model('wishlistM');
		$this->load->model('storecartM');
		$this->load->model('productreplaceM');
		$this->load->model('orderM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['selectdata']=$this->orderM->orderdata();
		$file['page']="order/order";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->orderM->orderstatas($id);
		redirect('orderCon');
	}
	public function deleteda($id)
	{
		$this->orderM->deletedata($id);
		redirect('orderCon');
	}
	public function invoisedata($no)
	{

		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['selectdata']=$this->orderM->orderdata();
		$file['invoicepro']=$this->orderM->invoice($no);
		$file['invoiceus']=$this->orderM->productinvoic($no);
		//print_r($file['invoiceus']);die();
		$file['page']="order/invoice";
		$this->load->view('Template/content',$file);
	}
}
?>