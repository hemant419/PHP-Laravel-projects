<?php

class user_ragis extends CI_Model
{
	public function ragistration()
	{
		$name=$this->input->post('name');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		$insert=array(
						"name"=>$name,
						"lastname"=>$lname,
						"password"=>$pass,
						"email"=>$email
					);
		$this->db->insert('user',$insert);
	}
	public function login()
	{
		$name=$this->input->post('name');
		$pass=$this->input->post('pass');
		$this->db->where('email',$name);
		$this->db->where('password',$pass);
		$file['row']= $this->db->get('user')->row();

		$this->db->where('email',$name);
		$this->db->where('password',$pass);
		$file['row2']= $this->db->get('user')->result();


		if(count($file['row2'])>0)
		{  $usr=$file['row']->user_id;
			
			$this->session->set_userdata("Useremail",$name);
			$this->session->set_userdata("UserId",$usr);
			//echo $this->session->userdata("UserId");die();
			$this->session->set_userdata("userPass",$pass);
			redirect('Welcome/');
		}
		else  
		{
			$file['error']="Invalid User Name and Password";
			$file["category"]=$this->user_M->category();
			$file["subcategory"]=$this->user_M->subcategory();
			
			$file["drug"]=$this->user_M->drug();
			$file['wishrow']=$this->user_M->wishdata();
			$file["category"]=$this->user_M->category();
			$file["subcategory"]=$this->user_M->subcategory();
			$file['cart']=$this->user_M->cartproduct();
			$file['page']="login/login_regis";
			$this->load->view('template/content',$file);
		}
	}
	public function allcategory()
	{
		return $this->db->get('categery_master')->result();
	}
	public function myorder()
	{
		$uid=$this->session->userdata("UserId");
		$this->db->from('product_master');
		$this->db->join('storecart','storecart.product_id=product_master.product_id');
		$this->db->where('user_id',$uid);
		return $this->db->get()->result();
	}
	public function contactdata()
	{
		$name=$this->input->post("name");
		$lname=$this->input->post("lname");
		$email=$this->input->post("email");
		$contact=$this->input->post("contact");
		$mess=$this->input->post("message");
		$insert=array(
			"contact_name"=>$name." ".$lname,
			"contact_email"=>$email,
			"contect_no"=>$contact,
			"contact_message"=>$mess	
		);
		$this->db->insert("contact_master",$insert);
	}
}
?>