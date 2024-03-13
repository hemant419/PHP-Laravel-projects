<?php

class subcatControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['page']="subcategery/subcategery";
		$this->load->view('Template/content',$file);
	}
	public function addsubcategery()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['page']="subcategery/addsubcategery";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->input->post('categery');
		$this->input->post('subcategery');
		$this->subcatM->subcatinsert();
		redirect('subcatControl');
	}
	public function statas($id)
	{
		$this->subcatM->statas($id);
		redirect('subcatControl');
	}
	public function deletesubcategory($id)
	{
		$this->subcatM->detelesubcat($id);
		redirect('subcatControl');
	}
	public function editsubcategery($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['editsubcat']=$this->subcatM->editsubcat($id);
		$file['page']="subcategery/editsubcategery";
		$this->load->view('Template/content',$file);
	}
	public function updatesub()
	{
		/*$this->input->post('sid');
		$this->input->post('categery');
		$this->input->post('subcategery');*/
		$this->subcatM->subcatupdate();
		redirect('subcatControl');
	}
}
?>