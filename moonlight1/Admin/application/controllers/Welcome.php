<?php
class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('countDatabaseEntry');
		//$this->countDatabaseEntry->productSeel();

	}
	public function index()
	{

		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			$file['invalidUser']="";
			$this->load->view('Login/login',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}	
	public function signup()
	{	
		$file['emailErr']="";
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			$this->load->view('Login/signup',$file);
		}
		else
		{
			redirect('welcome/');
		}	
	}
	public function createUser()
	{	$file['emailErr']="";
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{	$this->welcomeModel->create_user();
		}
		else
		{
			redirect('welcome/');
		}	
	}
	//Add user
	public function addUser()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			$file['emailRegErr']="";
			$file['profile']=$this->welcomeModel->profile();	
			$file['finalProfile']=$this->welcomeModel->profileProgress();	
			//Notifiaction 
			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();			
			$file['page']="Login/addUser";
			$this->load->view('Template/content',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
	//Add user by Admin
	public function addUserByAdmin()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			//$file['emailRegErr']="";
			$this->welcomeModel->addUserByAdmin();
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	//verify to Admin
	public function login()
	{
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			$this->welcomeModel->loginVerify();
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}//Welcome to home page
	public function afterlogin()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{

			//Notifiaction 
 			$file['totalUserOnline']=$this->countDatabaseEntry->countUseronline();
			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
			//Dashboard Counter
			$file['totalUser']=$this->countDatabaseEntry->countUser();
			$file['totalFeed']=$this->countDatabaseEntry->countfeed();
			$file['totalOrder']=$this->countDatabaseEntry->countOrder();

			$file['orderPending']=$this->countDatabaseEntry->orderPending();
			$file['orderConfirm']=$this->countDatabaseEntry->orderConfirm();
			$file['orderDelivered']=$this->countDatabaseEntry->orderDelivered();
			$file['orderDispatch']=$this->countDatabaseEntry->orderDispatch();

			$file['profile']=$this->welcomeModel->profile();	
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
			
			$file['page']="dashboard/home";
			$this->load->view('Template/content',$file);
			
		}
		else
		{
			redirect('welcome/');
		}
	}//forget password
	public function forget()
	{	
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
		
			$file['findEmail']="";$file['emailForget']="";
			$this->load->view('Login/forgetpassword',$file);
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
	public function checkEmail()
	{		
			$this->welcomeModel->checkEmail();
	}
	public function setPass()
	{
		$file['newpassErr']="";		$file['cnewpassErr']="";
		if($this->session->userdata('forgetEmail')!=""){$this->load->view('Login/setpassword',$file);}
		else
			{
				redirect("welcome/forget");
			}
	}
	public function setnewpassword()
	{
		$this->welcomeModel->setnewpassword();
	}
	//logout
	public function logout()
	{
		$this->session->unset_userdata('Password');
		
		$this->session->unset_userdata('Admin');
		redirect('welcome');
	}//New password request
	public function newPass()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			$file['oldPassErr']="";$file['newPassErr']="";
			$file['oldPassChkErr']="";$file['newPassChkErr']="";
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
			$file['page']="Login/newPass";
			$this->load->view('Template/content',$file);
		}
		else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}
	}
	public function saveNewPass()
	{
		
		$oldpassInput=$this->input->post('oldpass');
		$oldPass=$this->session->userdata('Password');
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();		
		
		if($oldpassInput==$oldPass)
		{
			$this->welcomeModel->saveNewpass();
		}
		else
		{
			
			$file['oldPassErr']="Old Password Does Not Match";
			$file['page']="Login/newPass";
			$this->load->view('Template/content',$file);	
		}
	}
	//profile Display
	public function profile()
	{
		if(($this->session->userdata('Admin')!="") && ($this->session->userdata('Password')!=""))
		{
			$file['imgErr']="";	
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
	//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
				
			$file['page']="profile/profile";
			$this->load->view('Template/content',$file);
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
		else
		{
			redirect('welcome/afterlogin');
		}	
	}
	//lock or unclock
	public function locked()
	{
			if($this->session->userdata('Admin')!=""){
			$file['passErr']="";$file['invalidUser']="";
			
			$this->session->unset_userdata('Password');
			
			$file['profile']=$this->welcomeModel->profile();
			$this->load->view('profile/locked',$file);
			}else
			{
			redirect('welcome/');
			}
	}
	public function unlock()
	{
		if(($this->session->userdata('Password')=="")&&($this->session->userdata('Admin')!=""))
		{	$pass=$this->input->post('pass');
			$file['invalidUser']="";	$file['passErr']="";
			$file['profile']=$this->welcomeModel->profile();	
			if($pass=="")
			{
				$file['passErr']="Please Enter Password";
				$this->load->view('profile/locked',$file);
			}else
			{
			     $file['adminVerify']=$this->welcomeModel->unlock($pass);
				if(count($file['adminVerify']) > 0)
				{
					$this->session->set_userdata('Password',$pass);
					redirect('welcome/afterlogin');
				}
				else
				{
					$file['invalidUser']="Wrong Password";
					$this->load->view('profile/locked',$file);
				}
			}
		}else
		{
			redirect('welcome/afterlogin');
		}		
	}
}
?>