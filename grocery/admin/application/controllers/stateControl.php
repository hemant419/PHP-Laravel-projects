<?php
class stateControl extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('stateM');
	}
	public function index()
	{
		
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['page']="state/state";
		$this->load->view('Template/content',$file);
	
	}
	public function addstate()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="state/addstate";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$name=$this->input->post('name');
		$this->stateM->stateinsert();
		redirect('stateControl');
	}
	public function deletestate($id)
	{
		$this->stateM->deletecat($id);
		redirect('stateControl');
	}
	public function editstate($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['editstate']=$this->stateM->editsta($id);
		$file['page']="state/editstate";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->stateM->statas($id);
		redirect('stateControl');
	}
	public function updatedata()
	{
		$this->input->post('cid');
		$this->input->post('name');
		$this->stateM->catupdate();
		redirect('stateControl');
	}
}


?>