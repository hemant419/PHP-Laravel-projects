<?php
class Dashboardc extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('dashboard/home');	
	}	
}
?>