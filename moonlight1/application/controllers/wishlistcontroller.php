<?php
class wishlistcontroller extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('wishlistmodel');	
	}
	public function index()
	{
		$file['mywishlist']=$this->wishlistmodel->wishlistdata();
		$this->load->view('template/header');
		$this->load->view('wishlist/wishlist',$file);
		$this->load->view('template/footer');
	}	
	
	public function deletewishlist($wid)
	{
		$this->wishlistmodel->deletewishlist($wid);
	//echo $wid;
	}
	
	public function addcart($pid)
	{
		$this->wishlistmodel->addcart($pid);
	}
}

?>