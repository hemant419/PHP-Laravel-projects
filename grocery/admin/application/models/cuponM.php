<?php 

class cuponM extends CI_Model
{

	public function selectstate()
	{
	
		return $this->db->get('cuponcodes')->result();
	
	}
	public function cuponinsert()
	{
		$ccode=$this->input->post('ccode');
		$email=$this->input->post('email');
		$ucode=$this->input->post('ucode');
		$insert=array(
			"cupon_code"=>$ccode,
			"email"=>$email,
			"user_code"=>$ucode
		);
		$this->db->insert('cuponcodes',$insert);
	}
	public function deletedata($id)
	{
		$this->db->where('cupon_id',$id);
		$this->db->delete('cuponcodes');
	}
	public function editdata($id)
	{
		$this->db->where('cupon_id',$id);
		return $this->db->get('cuponcodes')->row();
	}
	public function statas($id)
	{
		$this->db->where('cupon_id',$id);
		$row=$this->db->get('cuponcodes')->row();
		$current=$row->cupon_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("cupon_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('cupon_id',$catid);
			$this->db->update('cuponcodes',$update);
			//redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("cupon_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('cupon_id',$id);
			$this->db->update('cuponcodes',$update);
			//redirect('categoryControl');
		}
	}
	public function cuponupdate()
	{
		$cid=$this->input->post('cid');
		$ccode=$this->input->post('ccode');
		$email=$this->input->post('email');
		$ucode=$this->input->post('ucode');
		$update=array(
			"cupon_code"=>$ccode,
			"email"=>$email,
			"user_code"=>$ucode
		);
		$this->db->where('cupon_id',$cid);
		$this->db->update('cuponcodes',$update);
	}
}
?>