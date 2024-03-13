<?php
class orderModel extends  CI_Model
{
	public function selectOrder()
	{
		$this->db->order_by("order_date","desc");
		$this->db->order_by("order_status","desc");
		
		return $this->db->get('order_mstr')->result();
	}
	public function selectNewOrder()
	{
		$this->db->where("order_status","Pending");
		$this->db->order_by("order_date","desc");
	
		return $this->db->get('order_mstr')->result();
	}
	public function generateInvoice($no)
	{
		$this->db->from('product');
		$this->db->join('store_cart','store_cart.prd_id=product.prd_id');
		$this->db->join('order_mstr','store_cart.order_no=order_mstr.order_no');
		$this->db->where('store_cart.order_no',$no);
		$this->db->where('store_cart.storestatus','Active');
	
		return $this->db->get()->result();
	}
	public function deleteOrder($id)
	{
		$this->db->where('order_id',$id);
		$this->db->delete('order_mstr');
		redirect('orderControl/');
	}
	public function statusOrder($id)
	{	
		$this->db->where('order_id',$id);
		$id=$this->db->get('order_mstr')->row();
		$currstatus=$id->order_status;
		if($currstatus=="Pending")
		{
			$statusupdate="Confirm";
			$id=$this->uri->segment(3);
			$update=array('order_status'=>$statusupdate);
			$this->db->where('order_id',$id);
			$this->db->update('order_mstr',$update);
			redirect('orderControl/');
		}
		else if($currstatus=="Confirm")
		{
			$statusupdate="Dispatch";
			$id=$this->uri->segment(3);
			$update=array('order_status'=>$statusupdate);
			$this->db->where('order_id',$id);
			$this->db->update('order_mstr',$update);
			redirect('orderControl/');
		}
		else
		{
			$statusupdate="Delivered";
			$id=$this->uri->segment(3);
			$update=array('order_status'=>$statusupdate);
			$this->db->where('order_id',$id);
			$this->db->update('order_mstr',$update);
			redirect('orderControl/');
		}
		
	}

}

?>