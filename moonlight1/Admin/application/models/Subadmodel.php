<?php
class Subadmodel extends CI_Model
{
			public function __construct()
			{
				parent ::__construct();
				$this->load->model('welcomeModel');
			}
		public function selectsub()
		{
						$data="Sub-Admin";
						$this->db->where('priority',$data);	
						return $this->db->get('admin_mstr')->result();
		}
			public function addUserByAdmin()
	{
		$LastName=$this->input->post('lastname');$FirstName=$this->input->post('firstname');
		$contact=$this->input->post('contact');$email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$this->db->where('aemail',$email);
		$count=$this->db->get('admin_mstr')->result();
		
		if(count($count)>0)
		{
				$file['profile']=$this->welcomeModel->profile();	
			$file['finalProfile']=$this->welcomeModel->profileProgress();				
	
			$file['emailRegErr']="Email ID allready Registered";
			$file['page']="Login/addUser";
		    $this->load->view('Template/content',$file);
			
		}else
		{
		
			$adduser=array( "aname"=>$FirstName,"alastname"=>$LastName,"aemail"=>$email,
						"apass"=>$password,"acontact"=>$contact,"user_track"=>"0");
				$this->db->insert('admin_mstr',$adduser);
				redirect('SubAdminControl/');
		}
	}
		public function deleteadmin($aid)
		{
			$this->db->where('aid',$aid);
			$this->db->delete('admin_mstr');
			redirect('SubAdminControl');
		}
		public function updatestatus($aid)
		{
			$this->db->where('aid',$aid);
		$id=$this->db->get('admin_mstr')->row();
		$currstatus=$id->astatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('astatus'=>$statusupdate);
			$this->db->where('aid',$id);
			$this->db->update('admin_mstr',$update);
			redirect('SubAdminControl/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('astatus'=>$statusupdate);
			$this->db->where('aid',$id);
			$this->db->update('admin_mstr',$update);
			redirect('SubAdminControl/');
			}
		}
}
?>