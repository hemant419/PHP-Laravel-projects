<?php
class wishlistM extends CI_Model
{
	public function selectwishlist()
	{
		$this->db->from('product_master');
		$this->db->join('wishlist','wishlist.product_id=product_master.product_id');
		$this->db->join('user','user.user_id=wishlist.user_id');
		return $this->db->get()->result();
	}
	public function wishliststatas($id)
	{
		$this->db->where('w_id',$id);
		$row=$this->db->get('wishlist')->row();
		$current=$row->w_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("w_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('w_id',$catid);
			$this->db->update('wishlist',$update);
			//redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("w_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('w_id',$id);
			$this->db->update('wishlist',$update);
			//redirect('categoryControl');
		}
	}
	public function deletedata($id)
	{
		$this->db->where('w_id',$id);
		$this->db->delete('wishlist');
	} 
}
?>
