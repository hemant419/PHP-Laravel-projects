<?php
class Welcome extends CI_Controller {

	public function index()
	{ 
		
		if(($this->session->userdata('email')=="") && ($this->session->userdata('pass')==""))
		{
			
			$file['error']="";
			$file['errorpass']="";
			$this->load->view('login',$file);
		}
		else if($this->session->userdata('pass')=="")
		{
			
			$file['error']="";
			
			$this->load->view('locked',$file);
			//redirect('Welcome/locked');
		}
		else
		{
			$this->load->model('adminM');
			$file['profile']=$this->adminM->profile();
			$file['progress']=$this->adminM->progress();
			$file['page']="dashboard/home";
			$this->load->view('Template/content',$file);
		}
	}
	public function checkadmin()
	{
		if($this->session->userdata('email')=="")
		{
			$file['error']="";
			
			$file['row']="";
			$email=$this->input->post('email');
			$pass=$this->input->post('pass');
			$this->load->model('adminM');
			$file['row']=$this->adminM->logindata();
			
			if(count($file['row'])>0)
			{
				$this->session->set_userdata('email',$email);
				$this->session->set_userdata('pass',$pass);
				redirect('Welcome/');
			}
			else  
			{
				$file['error']="invalid user name and password";
				
				$this->load->view('login',$file);
			}
		}
		/*else
		{
			redirect('Welcome/');
		}*/
	}
	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('pass');
		redirect('Welcome');
	}
	public function signup()
	{
		$file['errorpass']="";
		$this->load->view('signup',$file);
	}
	public function insert()
	{
		$file['errorpass']="";
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$cpass=$this->input->post('cpass');
		if($pass==$cpass)
		{
			$this->load->model('adminM');
			$this->adminM->insertdata();
			redirect('Welcome/');
		}
		else
		{
		$file['errorpass']="Password Mismatch";
		$this->load->view('signup',$file);
		}
	}
	public function forgopass()
	{
		$file['errorpass']="";
		$file['error']="";
		$this->load->view('forgopass',$file);
	}
	public function checkpass()
	{
		
		$this->load->model('adminM');
		$this->adminM->checkpass();
	}
	public function updatepass()
	{
        $file['errorp']="";
        
		$file['error']="";
		$this->load->view('updatepass',$file);
	}
	public function updatepasswordnow()
	{
		//old password not check
       
            
            
		$npass=$this->input->post('npass');
		$cpass=$this->input->post('cpass');
		  if($cpass!=$npass)
		  {
			     $file['error']="Password mismatch";
				
				$this->load->view('updatepass',$file);
		  }
      
		  else
		  {
			     $this->load->model('adminM');
			     $this->adminM->updatedata();
		  }
        
       
	}
	public function profile()
	{
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="profile";
		$this->load->view('Template/content',$file);
	
	}
	public function mailinbox()
	{
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="dashboard/mailinbox";
		$this->load->view('Template/content',$file);
	}	
	public function gallery()
	{
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="dashboard/gallery";
		$this->load->view('Template/content',$file);
	}
	public function personalinfo()
	{   
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="personalinfo";
		$this->load->view('Template/content',$file);
	}
	public function insertprofile()
	{
		$name=$this->input->post('name');
		$lname=$this->input->post('lastname');
		$gender=$this->input->post('gender');
		
		$this->load->model('adminM');
		$this->adminM->personal();
		redirect('Welcome/accountinfo');
	}
	public function accountinfo()
	{
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="accountinfo";
		$this->load->view('Template/content',$file);
	}
	public function data()
	{
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$states=$this->input->post('state');
		$country=$this->input->post('country');
		$pin=$this->input->post('pin');
		
		$this->load->model('adminM');
		$this->adminM->account();
		redirect('Welcome/contactinfo');
	}
	public function contactinfo()
	{
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['page']="contactinfo";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->input->post('mobile');
		$this->load->model('adminM');
		$this->adminM->editpro();
		redirect('Welcome/profile');
	}
	public function locked()
	{
		
		$file['error']="";
		
		$this->session->unset_userdata('pass');
		$this->load->model('adminM');
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$this->load->view('locked',$file);
		
	}
	public function lock()
	{
		if($this->session->userdata('pass')=="")
		{
			
			$pass=$this->input->post('pass');
			if($pass=="")
			{
				
				
				echo "enter your password";
			}
			else
			{
				$this->load->model('adminM');
				$file['progress']=$this->adminM->progress();
				$file['profile']=$this->adminM->profile();
				$file['data']=$this->adminM->unlock();
				if(count($file['data']) > 0 )
				{
					$this->session->set_userdata('pass',$pass);
					redirect('Welcome/');
				}
				else
				{
					$file['error']="Invalid  password";
				
					$this->load->view('locked',$file);
				}
			}
		}
		else
		{
			redirect('Welcome/');
			
		}
	}		
	public function progresdata()
	{
		$this->load->model('adminM');
		$file['progres']=$this->adminM->progress();
	}
	public function datapic()
	{
		$this->load->model('adminM');
		$this->adminM->picdata();
		redirect('Welcome/profile');
	}
	public function newpass()
	{
         $file['errorp']="";$file['error']="";
		$this->load->view('newpass',$file);
      //  $this->load->view('newpass',$mis);
	}
	public function changepass()
	{
	     $file['errorp']="";$file['error']="";
		$this->load->model('adminM');
		$this->adminM->chengepassword();
		//
	}
	
	public function categerydata()
	{
		$this->load->model('adminM');
		$file['categery']=$this->adminM->categerydis();
		$file['page']="categery";
		$this->load->view('Template/content',$file);
	}
}
?>
