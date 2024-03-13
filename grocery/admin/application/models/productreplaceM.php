<?php
class productreplaceM extends CI_Model
{
	public function selectproreplace()
	{
		$this->db->from('product_master');
		$this->db->join('product_replace','product_replace.product_id=product_master.product_id');
		$this->db->join('user','user.user_id=product_replace.user_id');
		$this->db->join('order_master','order_master.order_id=product_replace.order_id');
		return $this->db->get()->result();
		//print_r($data);
		//die();
	}
	public function productrepstatas($id)
	{
		$this->db->where('r_id',$id);
		$row=$this->db->get('product_replace')->row();
		$current=$row->r_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("r_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('r_id',$catid);
			$this->db->update('product_replace',$update);
			//redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("r_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('r_id',$id);
			$this->db->update('product_replace',$update);
			//redirect('categoryControl');
		}
	}
	public function deletedata($id)
	{
		$this->db->where('r_id',$id);
		$this->db->delete('product_replace');
	} 
}
?>
