<?php
class user_cont extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_ragis');
		$this->load->model('user_M');
	}
	public function index()
	{
		  $file['page']="dashbore/home";
		  $this->load->view('template/content',$file);
	}	
	public function login()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['cart']=$this->user_M->cartproduct();
		$file['error']="";
		$file['page']="login/login_regis";
		$this->load->view('template/content',$file);
	}
	public function ragistration()
	{
		$file['error']="";
		$this->user_ragis->ragistration();
		redirect('user_cont/login');
	}
	public function user_login()
	{
		$file['wishrow']=$this->user_M->wishdata();
		$file['error']="";
		$this->user_ragis->login();
	}
	public function logout()
	{
		if($this->session->userdata("Useremail")!="")
		{
			$this->session->unset_userdata("Useremail");
			$this->session->unset_userdata("userPass");
			$this->session->unset_userdata("UserId");
			$this->session->unset_userdata('delivery');
			$this->session->unset_userdata("sucess");
			$this->session->unset_userdata("msg");
			$this->session->unset_userdata("cupon_code");
			$this->session->unset_userdata("invalid");
			$this->session->unset_userdata("total");
			$this->session->unset_userdata('name');
			$this->session->unset_userdata('lname');
			$this->session->unset_userdata('pincode');
			$this->session->unset_userdata('address');
			$this->session->unset_userdata('saddress');
			$this->session->unset_userdata('phone');
			$this->session->unset_userdata('delivery');
			$this->session->unset_userdata("cupon_discount");
		
			redirect('Welcome');
		}
		else
		{
			redirect('Welcome');
		}
	}
	public function myaccount()
	{
		$file['orderdata']=$this->user_ragis->myorder();
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="user/myaccount";
		$this->load->view('template/content',$file);
	}
	public function usercontact()
	{
		$this->user_ragis->contactdata();
		redirect('Welcome/contact');
	}
}
?>

