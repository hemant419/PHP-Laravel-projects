<?php
class feedbackCon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('productm');	
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('sliderM');
		$this->load->model('contactM');
		$this->load->model('feedbackM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['getdata']=$this->productm->getdata();
		$file['feeddata']=$this->feedbackM->selectfeedback();
		$file['page']="feedback/feedback";
		$this->load->view('Template/content',$file);
	}
	public function statas($id)
	{
		$this->feedbackM->feedbacksatas($id);
		redirect('feedbackCon');
	}
	public function deleteda($id)
	{
		$this->feedbackM->deletedata($id);
		redirect('feedbackCon');
	}
}
?>