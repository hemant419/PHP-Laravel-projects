<?php

class sliderControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('sliderM');
	}
	public function index()
	{
		$file['error']="";
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['sliderdata']=$this->sliderM->selectslider();
		$file['page']="slider/slider";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->sliderM->statasslider($id);
		redirect('sliderControl');
	}
	public function deleteslider($id)
	{
		$this->sliderM->deletedata($id);
		redirect('sliderControl');
	}
	public function addnewslider()
	{
		$file['error']="";
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['sliderdata']=$this->sliderM->selectslider();
		$file['page']="slider/addnewslider";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$file['error']="";
		$this->sliderM->sliderdata();
		
	}
	public function editslider($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['editdata']=$this->sliderM->editdata($id);
		
		$file['page']="slider/editslider";
		$this->load->view('Template/content',$file);
	}
	public function updateslider()
	{
		$this->sliderM->updatedata();
		redirect('sliderControl');
	}
}
?>