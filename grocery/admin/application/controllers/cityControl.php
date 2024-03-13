<?php

class cityControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('cityM');
		$this->load->model('stateM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['citydata']=$this->cityM->selectcity();
		$file['page']="city/city";
		$this->load->view('Template/content',$file);
	}
	public function addcity()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['page']="city/addcity";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->input->post('state');
		$this->input->post('city');
		$this->cityM->cityinsert();
		redirect('cityControl');
	}
	public function statas($id)
	{
		$this->cityM->statas($id);
		redirect('cityControl');
	}
	public function deletecity($id)
	{
		$this->cityM->deteledata($id);
		redirect('subcatControl');
	}
	public function editcity($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['editcity']=$this->cityM->editdatacity($id);
		$file['page']="city/editcity";
		$this->load->view('Template/content',$file);
	}
	public function updatecity()
	{
		$this->input->post('sid');
		$this->input->post('state');
		$this->input->post('city');
		$this->cityM->cityupdate();
		redirect('cityControl');
	}
}
?>