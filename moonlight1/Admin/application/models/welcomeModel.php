<?php
class welcomeModel extends CI_Model
{
	//craete new account
	public function create_user()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$file['emailErr']="";
		$this->db->where('aemail',$email);
		$count=$this->db->get('admin_mstr')->result();
		
			if(count($count)>0)
			{
				$file['emailErr']="Email ID allredy Registered";
				$this->load->view('Login/signup',$file);
			}
			else
			{
				$pic=strtoupper(substr($name,0,1));
				$insert=array( 
							"aname"=>$name,
							"aemail"=>$email,
							"apass"=>$password,
							"apic"=>$pic
							);
				$this->db->insert('admin_mstr',$insert);	
				redirect('welcome/');	
			}			
		
	}
	//
	public function addUserByAdmin()
	{
		$LastName=$this->input->post('lastname');$FirstName=$this->input->post('firstname');
		$contact=$this->input->post('contact');$email=$this->input->post('email');
		$password=$this->input->post('password');$status=$this->input->post('status');
		
		$this->db->where('aemail',$email);
		$count=$this->db->get('admin_mstr')->result();
		
		if(count($count)>0)
		{
			$file['profile']=$this->welcomeModel->profile();	
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
	//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['emailRegErr']="Email ID allready Registered";
			$file['page']="Login/addUser";
		    $this->load->view('Template/content',$file);
			
		}else
		{
		
			$adduser=array( "aname"=>$FirstName,"alastname"=>$LastName,"aemail"=>$email,
						"apass"=>$password,"astatus"=>$status);
				$this->db->insert('admin_mstr',$adduser);
				redirect('welcome/afterlogin');
		}
	}
	//login authentication verification
	public function loginVerify()
	{
		$email=$this->input->post('email');	
		$pass=$this->input->post('password');
		$remember=$this->input->post('optionsCheckboxes');	
		$file['invalidUser']="";
		
			$status="Active";
			$this->db->where('aemail',$email);
			$this->db->where('apass',$pass);
			$this->db->where('astatus',$status);
			$adminData1=$this->db->get('admin_mstr')->result();
			
			$status="Active";
			$this->db->where('aemail',$email);
			$this->db->where('apass',$pass);
			$this->db->where('astatus',$status);
			$adminData=$this->db->get('admin_mstr')->row();
			
			if(count($adminData1) > 0)
			{
				$id=$adminData->aid;
				$this->session->set_userdata('AdminId',$id);
				$this->session->set_userdata('Admin',$email);
				$this->session->set_userdata('Password',$pass);
				
				redirect('welcome/afterlogin');
			}
			else
			{
				$file['invalidUser']="Invalid User Email Or Password";
				$this->load->view('Login/login',$file);
			}
		
	}
	//forget password
	public function checkEmail()
	{

		$file['findEmail']="";$file['emailForget']="";
		$emailForget=$this->input->post('emailForget');
		if($emailForget=="")
		{
		       $file['emailForget']="Please Enter Email Id";
			   $this->load->view('Login/forgetpassword',$file);
		}else
		{
			$this->session->set_userdata('forgetEmail',$emailForget);
			$this->db->where('aemail',$emailForget);
			$file['findEmail']=$this->db->get('admin_mstr')->row();
			if(count($file['findEmail']) > 0)
			{
				$this->session->set_userdata('forgetEmail',$emailForget);
				redirect('welcome/setPass');
			}
			else
			{
				$file['findEmail']="Email Id not Found";
				$this->load->view('Login/forgetpassword',$file);
			}
		}
	}
	//set forget password newly
	public function setnewpassword()
	{
		$newpass=$this->input->post('password');
		$cnewpass=$this->input->post('cpassword');
		
		$file['newpassErr']="";	$file['cnewpassErr']="";
		
		if($newpass=="")
		{
			$file['newpassErr']="Please Enter New Password";
			$this->load->view('Login/setpassword',$file);
		}else if($cnewpass!=$newpass)
		{
			$file['cnewpassErr']="Password Missmatch";
			$this->load->view('Login/setpassword',$file);
		}else
		{
			$email=$this->session->userdata('forgetEmail');
			$update=array('apass'=>$newpass);
			$this->db->where('aemail',$email);
			$this->db->update('admin_mstr',$update);
			$this->session->unset_userdata('forgetEmail');
			$this->session->unset_userdata('forgetEmail',$emailForget);
			redirect('welcome/');
		}
	}
	//update new password after login
	public function saveNewpass()
	{
		
		$newpass=$this->input->post('newpass');
		$newpassConfirm=$this->input->post('newpassConfirm');
		$update=array("apass"=>$newpass);
		$this->db->update('admin_mstr',$update);
		$this->session->set_userdata('Password',$newpass);
		redirect('welcome/afterlogin');
		
	}//featch profile data 
	public function profile()
	{
		$AdminEmail=$this->session->userdata('Admin');
		
				$this->db->where('aemail',$AdminEmail);
		return	$this->db->get('admin_mstr')->row();
		
	}
	//count profile progress everytime
	public function profileProgress()
	{
		$AdminEmail=$this->session->userdata('Admin');
		
					$this->db->where('aemail',$AdminEmail);
			$result=	$this->db->get('admin_mstr');
					
		$total=0;	$per=0;	$found=0;$finalProfile="";
		
		foreach($result->result_array() as $row )		{
			foreach($row as $key =>$field )			{
					$total++;
					if(empty($row[$key]))
					{	$found++;	}
			}
		}
				//echo  "<br>found ".$found;
		$total=$total-4;		$per=$found/$total*100;
		$per=100-$per;			$finalProfile= round($per);
		return $finalProfile."%";
	}
	//unlock 
	public function unlock($pass)
	{
			$status="Active";
			$email=$this->session->userdata('Admin');
			
			$this->db->where('aemail',$email);
			$this->db->where('apass',$pass);
			$this->db->where('astatus',$status);
			return $this->db->get('admin_mstr')->row();
	}
}
?>