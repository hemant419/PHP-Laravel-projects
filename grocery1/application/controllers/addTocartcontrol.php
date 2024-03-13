<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addTocartcontrol extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_ragis');
		$this->load->model('user_M');
		$this->load->model('addtocartM');
	}
	public function addtocart($id)
	{
		$qty=$this->input->post('qty');
		$this->user_M->insertcart($id);
		redirect('Welcome/reviewdata/'.$id);
	}
	public function ajaxAddtocart($qty,$pId,$pPrice)
	{
		$this->user_M->ajaxAddtocart($qty,$pId,$pPrice);
	}
	public function cartdelete($id)
	{
		$this->user_M->deletedata($id);
		redirect('Welcome/viewcart');
	} 
	public function payment()
	{
		$file["erroRobot"]="";
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="shoping/payment_methods";
		$this->load->view('template/content',$file);
	}
	public function Delivery()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['city']=$this->addtocartM->getcitydata();
		$file['state']=$this->addtocartM->getstatedata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="shoping/delivery_methods";
		$this->load->view('template/content',$file);
	}
	public function confirmation()
	{
	 if(($this->session->userdata('name')!="")||($this->session->userdata('lname')!="")){
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['orderdata']=$this->addtocartM->getdataorder();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="shoping/confirmation";
		$this->load->view('template/content',$file);
		}
		else
		{
			redirect("Welcome/");
		
		}	
	}
	public function deliverydata()
	{
		$this->addtocartM->insertorder();
		redirect('addtocartcontrol/Delivery');
	}
	public function orderdataget()
	{
		$file['orderdata']=$this->addtocartM->getdataorder();
	}
	public function insertorder()
	{
		$this->addtocartM->orderdata();
		redirect('addtocartcontrol/Checkout');
		
	}
	public function Checkout()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['cart']=$this->user_M->cartproduct();
		$file['page']="shoping/checkout";
		$this->load->view('template/content',$file);
	}
	public function subscribe()
	{
		$this->addtocartM->subscribeuser();
	}
	public function cupon()
	{
		if($this->session->userdata("total")>1000)
		{
			
			$this->session->unset_userdata("invalid");
			$this->session->unset_userdata("msg");
			$this->user_M->cupon();
		}
		else{
				$this->session->unset_userdata("success");
				$this->session->unset_userdata("invalid");
				$this->session->set_userdata("msg","Please Make Grand Total Greater Than 1000 &#8377 ");
				redirect('Welcome/viewcart');
			}
		
	}
	public function iamnotrobot()
	{
	
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file['wishrow']=$this->user_M->wishdata();
		$file["drug"]=$this->user_M->drug();
		$file['cart']=$this->user_M->cartproduct();	
	
	
		if(isset($_POST['g-recaptcha-response'])  &&($_POST['g-recaptcha-response']))
		{
			var_dump($_POST);
			
			$secret="6Lcnm04UAAAAAKK7hiR1m0DVzRnppLd8AQn1Q92q";
			$ip=$_SERVER['REMOTE_ADDR'];
			$captcha= $_POST['g-recaptcha-response'];
			$rsp=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip$ip");
			//var_dump($rsp);
			$arr=json_decode($rsp,TRUE);
			
			if($arr['success']){
			
					redirect("addTocartcontrol/Delivery");
				
			}else{
	
				$file["erroRobot"]="Something Went Wrong !!!";
				$file['page']="shoping/payment_methods";
				$this->load->view('template/content',$file);
			}		
	
		}
		else
		{
			$file["erroRobot"]="Please, Verify Your Self .....!";
			$file['page']="shoping/payment_methods";
			$this->load->view('template/content',$file);
		}

	}
}

?>