<?php
class userControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('userM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['userselect']=$this->userM->selectuser();
		$file['page']="user/user";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->userM->statas($id);
		redirect('userControl');
			
	} 
	public function deleteuser($id)
	{
		$this->userM->deletedata($id);
		redirect('userControl');
	}
}
?>