
<?php
class discountCon extends CI_Controller
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
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['discountdata']=$this->discountM->selectdiscount();
		$file['page']="discount/discount";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->discountM->discountstatas($id);	
		redirect('discountCon');	
	}
	public function deletedi($id)
	{
		$this->discountM->deletediscount($id);
		redirect('discountCon');	
	}
	public function editdiscount($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['getdiscount']=$this->discountM->getdata($id);
		$file['discountdata']=$this->discountM->selectdiscount();
		$file['page']="discount/editdiscount";
		$this->load->view('Template/content',$file);
	}
	public function updatediscount()
	{
		$this->discountM->updatedata();
		redirect('discountCon');	
	}
	public function adddiscount()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['discountdata']=$this->discountM->selectdiscount();
		$file['page']="discount/adddiscount";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->discountM->insertdiscount();
		redirect('discountCon');	
	}
}
?>