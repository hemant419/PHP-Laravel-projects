<?php
class cuponControl extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('stateM');
		$this->load->model('cuponM');
	}
	public function index()
	{
		
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['cupondata']=$this->cuponM->selectstate();
		$file['page']="cupon/cuponcodes";
		$this->load->view('Template/content',$file);
	
	}
	public function addcupon()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="cupon/addcupon";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$ccode=$this->input->post('ccode');
		$email=$this->input->post('email');
		$ucode=$this->input->post('ucode');
		$this->cuponM->cuponinsert();
		redirect('cuponControl');
	}
	public function deletecupon($id)
	{
		$this->cuponM->deletedata($id);
		redirect('cuponControl');
	}
	public function editcupon($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['datacupon']=$this->cuponM->editdata($id);
		$file['page']="cupon/editcupon";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->cuponM->statas($id);
		redirect('cuponControl');
	}
	public function updatedata()
	{
		$ccode=$this->input->post('ccode');
		$email=$this->input->post('email');
		$ucode=$this->input->post('ucode');
		$this->cuponM->cuponupdate();
		redirect('cuponControl');
	}
}


?>