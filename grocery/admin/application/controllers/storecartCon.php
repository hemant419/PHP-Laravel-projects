<?php
class storecartCon extends CI_Controller
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
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['storecartdata']=$this->storecartM->selectcart();
		$file['page']="storecart/storecart";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->storecartM->storecartstatas($id);
		redirect('storecartCon');
	}
	public function deleteda($id)
	{
		$this->storecartM->deletedata($id);
	}
}
?>