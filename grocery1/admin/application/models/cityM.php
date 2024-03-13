<?php
	
class cityM extends CI_Model
{
	public function selectcity()
	{
		$this->db->from('state_master');
		$this->db->join('city_master','state_master.state_id=city_master.state_id');
		return $this->db->get()->result(); 
		//print_r($data);
		//die();
	}
	public function cityinsert()
	{
		$cname=$this->input->post('state');
		$sname=$this->input->post('city');
		
		$insert=array(
			"state_id"=>$cname,
			"city_name"=>$sname
		);
		$this->db->insert('city_master',$insert);
	}
	public function statas($id)
	{
		$this->db->where('city_id',$id);
		$row=$this->db->get('city_master')->row();
		$current=$row->city_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("city_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('city_id',$catid);
			$this->db->update('city_master',$update);
			//redirect('subcatControl');
			
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("city_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('city_id',$id);
			$this->db->update('city_master',$update);
			//redirect('subcatControl');
		}
	}
	public function deteledata($id)
	{
		$this->db->where('city_id',$id);
		$this->db->delete('city_master');
	}
	public function editdatacity($id)
	{
		$this->db->where('city_id',$id);
		return $this->db->get('city_master')->row();
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
}
?>