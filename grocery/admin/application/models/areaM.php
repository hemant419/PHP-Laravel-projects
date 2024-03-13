<?php
	
class areaM extends CI_Model
{
	public function selectarea()
	{
		$this->db->from('state_master');
		$this->db->join('city_master','state_master.state_id=city_master.state_id');
		$this->db->join('area_master','city_master.city_id=area_master.city_id');
		return $this->db->get()->result(); 
		
	}
	public function insertarea()
	{
		$cname=$this->input->post('state');
		$sname=$this->input->post('city');
		$aname=$this->input->post('area');
		$pin=$this->input->post('pin');
		
		$insert=array(
			"state_id"=>$cname,
			"city_id"=>$sname,
			"area_name"=>$aname,
			"pincode"=>$pin
		);
		$this->db->insert('area_master',$insert);
	}
	public function statas($id)
	{
		$this->db->where('area_id',$id);
		$row=$this->db->get('area_master')->row();
		$current=$row->area_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("area_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('area_id',$catid);
			$this->db->update('area_master',$update);
			//redirect('subcatControl');
			
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("area_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('area_id',$id);
			$this->db->update('area_master',$update);
			//redirect('subcatControl');
		}
	}
	public function deteledata($id)
	{
		$this->db->where('area_id',$id);
		$this->db->delete('area_master');
	}
	public function editdataarea($id)
	{
		$this->db->where('area_id',$id);
		return $this->db->get('area_master')->row();
	}
	public function cityupdate()
	{
		$id=$this->input->post('sid');
		$cname=$this->input->post('state');
		$sname=$this->input->post('city');
		$update=array(	
			"state_id"=>$cname,
			"city_name"=>$sname
			);
			//print_r($update);
			//die();
			$this->db->where('city_id',$id);
			$this->db->update('city_master',$update);
			//redirect('subcatControl');
	}
	public function updatearea()
	{
		$id=$this->input->post('aid');
		$cname=$this->input->post('state');
		$sname=$this->input->post('city');
		$aname=$this->input->post('area');
		$pin=$this->input->post('pin');
		
		$update=array(
			"state_id"=>$cname,
			"city_id"=>$sname,
			"area_name"=>$aname,
			"pincode"=>$pin
		);
		$this->db->where('area_id',$id);
		$this->db->update('area_master',$update);
	}
}
?>