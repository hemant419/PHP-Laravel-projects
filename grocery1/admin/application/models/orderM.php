<?php
class orderM extends CI_Model
{
	public function orderdata()
	{
		$this->db->from('user');
		$this->db->join('order_master','user.user_id=order_master.user_id');
		return $this->db->get()->result();
		//print_r($data);
		//die();
	}
	public function orderstatas($id)
	{
		$this->db->where('order_id',$id);
		$row=$this->db->get('order_master')->row();
		$current=$row->o_statas;
		
		if($current=="Pending")
		{
			$change="Confirm";
			$catid=$this->uri->segment(3);
			$update=array("o_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('order_id',$catid);
			$this->db->update('order_master',$update);
		}
		else if($current=="Confirm")
		{
			$change="Dispatch";
			$id=$this->uri->segment(3);
			$update=array("o_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('order_id',$id);
			$this->db->update('order_master',$update);
		}
		else if($current=="Dispatch")
		{
			$change="Delivered";
			$id=$this->uri->segment(3);
			$update=array("o_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('order_id',$id);
			$this->db->update('order_master',$update);
		}
			redirect('orderCon');
	}
	public function deletedata($id)
	{
		$this->db->where('order_id',$id);
		$this->db->delete('order_master');
	}
	public function invoice($no)
	{
		$this->db->where('orderno',$no);
		return $this->db->get('order_master')->row();
	} 
	public function productinvoic($no)
	{
		
		$this->db->from('product_master');
		$this->db->join('storecart','product_master.product_id=storecart.product_id');
		$this->db->where('storecart.orderno',$no);
		return $this->db->get()->result();
		
	}
} 
?>
