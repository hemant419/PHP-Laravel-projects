<?php 

class categoryM extends CI_Model
{

	public function selectCategory()
	{
	
		return $this->db->get('categery_master')->result();
	
	}
	public function categorydata()
	{
		$name=$this->input->post('name');
		$insert=array(
			"categery_name"=>$name
		);
		$this->db->insert('categery_master',$insert);
	}
	public function deletecat($id)
	{
		$this->db->where('categery_id',$id);
		$this->db->delete('categery_master');
	}
	public function editcat($id)
	{
		$this->db->where('categery_id',$id);
		return $this->db->get('categery_master')->row();
	}
	public function statas($id)
	{
		$this->db->where('categery_id',$id);
		$row=$this->db->get('categery_master')->row();
		$current=$row->statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('categery_id',$catid);
			$this->db->update('categery_master',$update);
			redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('categery_id',$id);
			$this->db->update('categery_master',$update);
			redirect('categoryControl');
		}
	}
	public function catupdate()
	{
		$cid=$this->input->post('cid');
		$name=$this->input->post('name');
		$update=array(
					"categery_name"=>$name
		);
		$this->db->where('categery_id',$cid);
		$this->db->update('categery_master',$update);
	}
}
?>