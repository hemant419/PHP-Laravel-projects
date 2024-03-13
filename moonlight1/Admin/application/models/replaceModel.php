<?php

class replaceModel extends  CI_Model
{
	public function selectReplace()
	{
		 $this->db->from('product');
		 $this->db->join('return_replace','product.prd_id=return_replace.prd_id');
		
		 $this->db->join('user','return_replace.user_id=user.user_id');
		 $this->db->join('order_mstr','return_replace.order_no=order_mstr.order_no');
 		 $this->db->order_by('return_replace.request_progress','Active');
		 return $this->db->get()->result();
	}
	public function replaceDetail($id,$m,$d,$no)
	{
		 $this->db->from('product');
		 $this->db->join('return_replace','product.prd_id=return_replace.prd_id');
		 $this->db->join('user','return_replace.user_id=user.user_id');
		 $this->db->join('order_mstr','return_replace.order_no=order_mstr.order_no');
		 $this->db->join('store_cart','store_cart.order_no=order_mstr.order_no');
		 $this->db->where('store_cart.order_no',$m."/".$d."/".$no);
		 $this->db->where('return_replace.request_id',$id);


		 return $this->db->get()->row();
	}
	public function deleteReplace($id)
	{
		$this->db->where('request_id',$id);
		$this->db->delete('return_replace');
		redirect('Replacecontrol/');
	}
	public function statusUpdate($id)
	{	
		$this->db->where('request_id',$id);
		$id=$this->db->get('return_replace')->row();
		$currstatus=$id->request_status;
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('request_status'=>$statusupdate);
			$this->db->where('request_id',$id);
			$this->db->update('return_replace',$update);
			redirect('Replacecontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('request_status'=>$statusupdate);
			$this->db->where('request_id',$id);
			$this->db->update('return_replace',$update);
			redirect('Replacecontrol/');
		}
	}
	public function progress($id)
	{	
		$this->db->where('request_id',$id);
		$id=$this->db->get('return_replace')->row();
		$currstatus=$id->request_progress;
		if($currstatus=="Pending"){
			$statusupdate="Done";
			$id=$this->uri->segment(3);
			$update=array('request_progress'=>$statusupdate);
			$this->db->where('request_id',$id);
			$this->db->update('return_replace',$update);
			
		}redirect('Replacecontrol/');
	}
	//request_id	request_progress	prd_id	user_id	order_id	request_resion	request_description	request_type	request_status	request_date

}

?>