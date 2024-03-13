<?php
class breakingnewsc extends CI_Controller
{
	public function index()
	{
		$this->load->model('breakingnewsm');
		$file['data']=$this->breakingnewsm->getdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('News/breakingnews',$file);	
	}	
}
?>