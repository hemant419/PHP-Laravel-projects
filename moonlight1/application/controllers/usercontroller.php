<?php
class usercontroller extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('usermodel');	
	}
	
	public function addwishlist($pid,$uid)
	{
		$this->usermodel->addwishlist($pid,$uid);		
	}

	public function removewishlist($pid,$uid)
	{
		$this->usermodel->removewishlist($pid,$uid);		
	}

	public function addcart($pid,$uid)
	{
		$this->usermodel->addcart($pid,$uid);
		$this->db->where('prd_id',$pid);
		$file['myproduct']=$this->db->get('product')->result();
		$this->load->view('cart/headercart',$file);	
	}

	public function removecart($pid,$uid)
	{
		$this->usermodel->removecart($pid,$uid);		
	}
	
	public function unknownuser()
	{
		redirect('logincontroller');		
	}

	public function updateprofile()
	{
		$this->usermodel->updateprofile();
		redirect('homecontroller/user');
	}
	
	public function changepasswordpage()
	{
		$this->load->view('template/header');
		$this->load->view('user/chgpassword');
		$this->load->view('template/footer');
	}
		
	public function chgpassworddata($currentpass,$newpass)
	{
		$this->usermodel->chgpassworddata($currentpass,$newpass);
	}		

	public function myorder()
	{
		$file['myorder']=$this->usermodel->myorder();
		$file['activeorder']=$this->usermodel->activeorder();
		
		$this->load->view('template/header');
		$this->load->view('user/myorder',$file);
		$this->load->view('template/footer');
	}
	
	public function cancelproduct($scartid)
	{
		$file['myorder']=$this->usermodel->cancelproduct($scartid);
	}
		
	public function refundreplace($prdid,$userid,$orderno,$reason,$qty,$msg,$dtype,$smid)
	{
		$this->usermodel->refundreplace($prdid,$userid,$orderno,$reason,$qty,$msg,$dtype,$smid);
		
	}


}
?>