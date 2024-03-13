<?php
class wishlistCon extends CI_Controller
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
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['wistlistdata']=$this->wishlistM->selectwishlist();
		$file['page']="wishlist/wishlist";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->wishlistM->wishliststatas($id);
		redirect('wishlistCon');
	}
	public function deleteda($id)
	{
		$this->wishlistM->deletedata($id);
	}
}
?>