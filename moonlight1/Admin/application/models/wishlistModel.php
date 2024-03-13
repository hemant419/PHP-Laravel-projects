<?php 
class wishlistModel extends CI_Model
{
	public function selectWishlist()
	{
		 $this->db->from('product');
		 $this->db->join('wishlist','product.prd_id=wishlist.prd_id');
		 $this->db->join('user','wishlist.user_id=user.user_id');
		
		 return $this->db->get()->result();
		// print_r($data);
		// die();
	}
	public function deleteWishlist($id)
	{
		$this->db->where('wishlist_id',$id);
		$this->db->delete('wishlist');
		redirect('wishlistcontrol/');
	}
	public function statusUpdate($id)
	{	
		$this->db->where('wishlist_id',$id);
		$id=$this->db->get('wishlist')->row();
		$currstatus=$id->wishlist_status;
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('wishlist_status'=>$statusupdate);
			$this->db->where('wishlist_id',$id);
			$this->db->update('wishlist',$update);
			redirect('wishlistcontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('wishlist_status'=>$statusupdate);
			$this->db->where('wishlist_id',$id);
			$this->db->update('wishlist',$update);
			redirect('wishlistcontrol/');
		}
	}
}
?>
