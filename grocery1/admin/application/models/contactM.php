<?php
class contactM extends CI_Model
{
	public function selectcontact()
	{
		return $this->db->get('contact_master')->result();
	}
	public function statascontact($id)
	{
		$this->db->where('id',$id);
		$row=$this->db->get('contact_master')->row();
		$current=$row->statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('id',$id);
			$this->db->update('contact_master',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('id',$id);
			$this->db->update('contact_master',$update);
		}
	}
	public function deletedata($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contact_master');
	}
	public function editdata($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('contact_master')->row();
	}
	public function updatecontact()
	{
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$message=$this->input->post('message');
		$num=$this->input->post('num');
		
		$update=array(
						"contact_name"=>$name,
						"contact_email"=>$email,
						"contact_message"=>$message,
						"contect_no"=>$num
						);
		$this->db->where('id',$id);
		$this->db->update('contact_master',$update);
	}
}
?>