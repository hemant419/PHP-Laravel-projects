<?php

class contactControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('sliderM');
		$this->load->model('contactM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['contactdata']=$this->contactM->selectcontact();
		$file['page']="contact/contact";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->contactM->statascontact($id);
		redirect('contactControl');
	}
	public function deletecontact($id)
	{
		$this->contactM->deletedata($id);
		redirect('contactControl');
	}
	public function editcontact($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['contactdata']=$this->contactM->editdata($id);
		$file['page']="contact/editcontact";
		$this->load->view('Template/content',$file);
	}
	public function updatedata()
	{
		$this->contactM->updatecontact();
		redirect('contactControl');
	}
}
?>