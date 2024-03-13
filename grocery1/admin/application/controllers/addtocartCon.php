
<?php
class addtocartCon extends CI_Controller
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
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['cartdata']=$this->addtocartM->selectcart();
		$file['page']="addtocart/addtocart";
		$this->load->view('Template/content',$file);
	}
	public function deletecart($id)
	{
		$this->addtocartM->deletedata($id);
	}
}
?>