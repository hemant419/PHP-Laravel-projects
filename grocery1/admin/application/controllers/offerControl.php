<?php

class offerControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('offerM');
	}
	public function index()
	{
		$file['error']="";
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['offerdata']=$this->offerM->selectoffer();
		$file['page']="offers/offers";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->offerM->statas($id);
		redirect('offerControl');
	}
	public function deleteoffer($id)
	{
		$this->offerM->deletedata($id);
		redirect('offerControl');
	}
	public function editoffer($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->offerM->editoffer($id);
		$file['page']="offers/editoffers";
		$this->load->view('Template/content',$file);
	}
	public function addnewoffers()
	{
		$file['error']="";
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['branddata']=$this->brandM->selectbrand();
		$file['page']="offers/addnewoffers";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$file['error']="";
		
		$this->offerM->addoffer();
		
	}
	public function updatedata()
	{
		$this->offerM->updatedata();
		redirect('offerControl');
	}
}
?>