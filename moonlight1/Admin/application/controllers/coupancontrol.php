<?php
class coupancontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('coupanmodel');

		$this->load->model('countDatabaseEntry');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
	}
	public function index()
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['coupan']=$this->coupanmodel->selectcoupan();
		$file['page']="coupan/coupan";
		$this->load->view('Template/content',$file);
	}
	public function addcoupan()
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
					
		$file['coupan']=$this->coupanmodel->selectcoupan();
		$file['page']="coupan/addcoupan";
		$this->load->view('Template/content',$file);
	}
	public function insertcoupan()
	{
		$this->coupanmodel->insertcoupan();
	}
	public function coupanstatus($cupon_id)
	{
	$this->coupanmodel->updatestatus($cupon_id);
		}
		
	public function Editcoupan($cupon_id)
		{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$file['coupan']=$this->coupanmodel->editcoupan($cupon_id);
	
		$file['page']="coupan/editcoupan";
		$this->load->view('Template/content',$file);
		}
		public function updatecoupan($cupon_id)
		{
			$this->coupanmodel->updatecoupan();
		}
		public function Deletecoupan($cupon_id)
		{
			$this->coupanmodel->coupandelete($cupon_id);
		}
}
?>