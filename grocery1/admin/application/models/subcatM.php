<?php
	
class subcatM extends CI_Model
{
	public function selectsubcategery()
	{
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','categery_master.categery_id=sub_categery_master.categery_id');
		return $this->db->get()->result(); 
	}
	public function subcatinsert()
	{
		$cname=$this->input->post('categery');
		$sname=$this->input->post('subcategery');
		
		$insert=array(
			"categery_id"=>$cname,
			"s_name"=>$sname
		);
		$this->db->insert('sub_categery_master',$insert);
	}
	public function statas($id)
	{
		$this->db->where('s_id',$id);
		$row=$this->db->get('sub_categery_master')->row();
		$current=$row->s_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("s_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('s_id',$catid);
			$this->db->update('sub_categery_master',$update);
			redirect('subcatControl');
			
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("s_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('s_id',$id);
			$this->db->update('sub_categery_master',$update);
			redirect('subcatControl');
		}
	}
	public function detelesubcat($id)
	{
		$this->db->where('s_id',$id);
		$this->db->delete('sub_categery_master');
	}
	public function editsubcat($id)
	{
		$this->db->where('s_id',$id);
		return $this->db->get('sub_categery_master')->row();
	}
	public function subcatupdate()
	{
		$id=$this->input->post('sid');
		$cname=$this->input->post('categery');
		$sname=$this->input->post('sname');
		$update=array(	
			"categery_id"=>$cname,
			"s_name"=>$sname
			);
			$this->db->where('s_id',$id);
			$this->db->update('sub_categery_master',$update);
			//redirect('subcatControl');
	}
}
?>