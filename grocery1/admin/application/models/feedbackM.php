<?php
class feedbackM extends CI_Model
{
	public function selectfeedback()
	{
		$this->db->from('product_master');
		$this->db->join('feedback_master','product_master.product_id=feedback_master.product_id');
		return $this->db->get()->result();
	}
	public function feedbacksatas($id)
	{
		$this->db->where('feedback_id',$id);
		$row=$this->db->get('feedback_master')->row();
		$current=$row->statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('feedback_id',$id);
			$this->db->update('feedback_master',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('feedback_id',$id);
			$this->db->update('feedback_master',$update);
		}
	}
	public function deletedata($id)
	{
		$this->db->where('feedback_id',$id);
		$this->db->delete('feedback_master');
	}
}	
?>