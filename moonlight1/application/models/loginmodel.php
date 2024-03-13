<?php
class loginmodel extends CI_Model
{
	public function login()
	{
		$uemail=$this->input->post('uemail');
		$upass=$this->input->post('upassword');	
		$this->db->where('user_email',$uemail);
		$this->db->where('user_password',$upass);
		$user2=$this->db->get('user')->result();
		$this->db->where('user_email',$uemail);
		$this->db->where('user_password',$upass);
		$user=$this->db->get('user')->row();
		
		if(count($user2) > 0)
		{
			$this->session->set_userdata('c_username',$user->user_name);
			$this->session->set_userdata('c_useremail',$user->user_email);
			$this->session->set_userdata('c_userid',$user->user_id);

			return 1;
		}
		else
		{
			return 0; 
		}
	}	
	
	public function userregister()
	{
		$user=array
				  (
				  	"user_name"=>$this->input->post('ufname'),
					"user_lastname"=>$this->input->post('ulname'),
					"user_email"=>$this->input->post('uemail'),
					"user_contact"=>$this->input->post('umobile'),
					"user_password"=>$this->input->post('upassword')
				  );		
	
		$this->db->insert('user',$user);
		
	}
	
}
?>