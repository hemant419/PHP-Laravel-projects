<?php

class adminM extends CI_Model
{
	public function logindata()
	{
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		return $this->db->get('admin_master')->result();
	}
	public function profile()
	{
		$mail=$this->session->userdata('email');
		$this->db->where('email',$mail);
		return $this->db->get('admin_master')->row();
	}
	public function insertdata()
	{
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		
		$insert=array(
				"name"=>$name,
				"email"=>$email,
				"password"=>$pass
		);
		
		$this->db->insert('admin_master',$insert);
	}
	public function checkpass()
	{
		$chkEmail=$this->input->post('email');
		if($chkEmail=="")
		{
			$file['errorpass']="";
			$file['errorpass']="Password Mismatch Or Blank";
		$this->load->view('forgopass',$file);
			
			
		}
		else
		{
			$this->db->where('email',$chkEmail);
			$file['data']= $this->db->get('admin_master')->result();
			if(count($file['data']) > 0)
			{
				$this->session->set_userdata('forgetemail',$chkEmail);
				redirect('Welcome/updatepass');
			}
			else
			{
				$file['error']="invalid user name";
				
				$this->load->view('forgopass',$file);
				//echo "Error 2";
			}
		}
	}
	public function updatedata()
	{
		$chkEmail=$this->session->userdata('forgetemail');
		$npass=$this->input->post('npass');
		$cpass=$this->input->post('cpass');
		$update=array('password'=>$npass);
		$this->db->where('email',$chkEmail);
		$this->db->update('admin_master',$update);
		redirect('Welcome/');		
	}
	public function editpro()
	{
		$email=$this->session->userdata('email');
		$mobile=$this->input->post('mobile');
		$update=array(
		
				"mobile"=>$mobile
		);
		$this->db->where('email',$email);
		$this->db->update('admin_master',$update);
	}
	public function unlock()
	{
		$email=$this->session->userdata('email');
		$pass=$this->input->post('pass');
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		return $this->db->get('admin_master')->result();
	}
	public function personal()
	{
		$email=$this->session->userdata('email');
		$name=$this->input->post('name');
		$lname=$this->input->post('lastname');
		$gender=$this->input->post('gender');
		$update=array(
						
				"name"=>$name,
				"last_name"=>$lname,
				"gender"=>$gender
		);
		$this->db->where('email',$email);
		$this->db->update('admin_master',$update);
	}
	public function account()
	{
		$email=$this->session->userdata('email');
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$states=$this->input->post('state');
		$country=$this->input->post('country');
		$pin=$this->input->post('pin');
		$update=array(
						
				"address"=>$address,
				"city"=>$city,
				"state"=>$states,
				"country"=>$country,
				"pincode"=>$pin
		);
		$this->db->where('email',$email);
		$this->db->update('admin_master',$update);
	}
	public function progress()
	{
		$email=$this->session->userdata('email');
		$this->db->where('email',$email);
		$result= $this->db->get('admin_master');
		$total=0;$per=0;$found=0;$final="";
		foreach($result->result_array() as $row)
		{
			foreach($row as $key=>$field )
			{
				$total++;
				if(empty($row[$key]))
				{
					$found++;
				}
			}
		}
		$total=$total-3;$per=$found/$total*100;
		$per=100-$per;$final=round($per);
		return $final."%";
	}
	public function picdata()
	{			
		$email=$this->session->userdata('email');
		
		$config['upload_path']='./image/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('img'))
		{
			$file['error']=$this->upload->display_errors();
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array(
			              	
			                "image"=>$data['upload_data']['file_name']
						);
				$this->db->where('email',$email);
				$this->db->update('admin_master',$update);
		}
		
	}
	public function chengepassword()
	{
		$pass=$this->session->userdata('pass');
		$oldpass=$this->input->post('oldpass');
		$newpass=$this->input->post('newpass');
		$cpass=$this->input->post('cpass');
        $file['errorp']="";$file['error']="";
		if($oldpass!=$pass)
		{
			         $file['error']="Invalid Old password";
				  
					$this->load->view('newpass',$file);
		}
		else if($cpass!=$newpass)
		{
			
			         $file['errorp']="password Mismatch";
				
					$this->load->view('newpass',$file);
		}
		else
		{
			$update=array(
				"password"=>$newpass
			);
			$this->db->where('password',$pass);
			$this->db->update('admin_master',$update);
            
            $this->session->set_userdata('pass',$newpass);
            redirect('Welcome/profile');
		}
	}
	public function categerydis()
	{
		return $this->db->get('categery_master')->result();
	}
}

?>