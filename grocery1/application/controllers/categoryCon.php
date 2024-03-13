<?php
class categoryCon extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_ragis');
		$this->load->model('user_M');
		$this->load->model('addtocartM');
		$this->load->model('categoryM');
	}
	public function index()
	{
		$file['getcatdata']=$this->categoryM->categorydata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['product']=$this->user_M->allproduct();
		$file['alldata']=$this->user_M->allslider();
		$file['data']=$this->user_M->allcategory();
		$file['page']="dashbore/home";
		$this->load->view('template/content',$file);
	}	
	public function caterory()
	{
		$file['getcatdata']=$this->categoryM->categorydata();
		$file['page']="dashbore/home";
		$this->load->view('template/content',$file);
	}
	
}
?>
