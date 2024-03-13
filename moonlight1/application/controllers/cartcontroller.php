<?php
class cartcontroller extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('cartmodel');	
	}
	
	public function index()
	{
		$file['mycart']=$this->cartmodel->cartdata();
		$this->load->view('template/header');
		$this->load->view('cart/cart',$file);
		$this->load->view('template/footer');
	}	

	public function updatecart($qty,$pid)
	{
		$this->cartmodel->updatecart($qty,$pid);
	}
	public function deletecart($cid,$pid)
	{
		$this->cartmodel->deletecart($cid,$pid);
	}
	public function deleteajaxheadercart($uid,$pid)
	{
		$this->cartmodel->deleteajaxheadercart($uid,$pid);
	}
	
	
	public function chksize()
	{
		$this->cartmodel->chksize();
		
	}

}
?>