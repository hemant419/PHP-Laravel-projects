<?php
class categoryControl extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
	}
	public function index()
	{
		
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['page']="category/categery";
		$this->load->view('Template/content',$file);
	
	}
	public function addcategery()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="category/addcategery";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$name=$this->input->post('name');
		$this->categoryM->categorydata();
		redirect('categoryControl');
	}
	public function deletecategory($id)
	{
		$this->categoryM->deletecat($id);
		redirect('categoryControl');
	}
	public function editcategery($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['editcategery']=$this->categoryM->editcat($id);
		$file['page']="category/editcategery";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->categoryM->statas($id);
		redirect('categoryControl');
	}
	public function updatedata()
	{
		$this->input->post('cid');
		$this->input->post('name');
		$this->categoryM->catupdate();
		redirect('categoryControl');
	}
}


?>