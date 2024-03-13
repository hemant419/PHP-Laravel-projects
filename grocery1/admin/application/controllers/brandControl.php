<?php

class brandControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['branddata']=$this->brandM->selectbrand();
		$file['subcategery']=$this->subcatM->selectsubcategery();
			$file['page']="brand/brand";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->brandM->statas($id);
		redirect('brandControl');
	}
	public function deletebrand($id)
	{
		$this->brandM->deletedata($id);
		redirect('brandControl');
	}
	public function editbrand($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->brandM->editbrand($id);
				$file['subcategery']=$this->subcatM->selectsubcategery();
				$file['editbrand']=$this->brandM->editbrand($id);
		$file['page']="brand/editbrand";
		$this->load->view('Template/content',$file);
	}
	public function addnewbrand()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['branddata']=$this->brandM->selectbrand();
		
		$file['page']="brand/addnewbrand";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->brandM->brandadd();
		redirect('brandControl');
	}
	public function brandupdate()
	{
		$this->brandM->updatedata();
		redirect('brandControl');
	}
}
?>