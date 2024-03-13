<?php 

class stateM extends CI_Model
{

	public function selectstate()
	{
	
		return $this->db->get('state_master')->result();
	
	}
	public function stateinsert()
	{
		$name=$this->input->post('name');
		$insert=array(
			"state_name"=>$name
		);
		$this->db->insert('state_master',$insert);
	}
	public function deletecat($id)
	{
		$this->db->where('state_id',$id);
		$this->db->delete('state_master');
	}
	public function editsta($id)
	{
		$this->db->where('state_id',$id);
		return $this->db->get('state_master')->row();
	}
	public function statas($id)
	{
		$this->db->where('state_id',$id);
		$row=$this->db->get('state_master')->row();
		$current=$row->state_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("state_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('state_id',$catid);
			$this->db->update('state_master',$update);
			//redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("state_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('state_id',$id);
			$this->db->update('state_master',$update);
			//redirect('categoryControl');
		}
	}
	public function catupdate()
	{
		$cid=$this->input->post('cid');
		$name=$this->input->post('name');
		$update=array(
					"state_name"=>$name
		);
		$this->db->where('state_id',$cid);
		$this->db->update('state_master',$update);
	}
}
?>