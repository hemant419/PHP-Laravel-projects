<?php
class wishlistmodel extends CI_Model
{
	public function wishlistdata()
	{
		$user_id=$this->session->userdata('c_userid');
		$this->db->where('user_id',$user_id);
	return	$this->db->get('wishlist')->result();
	}	
	public function deletewishlist($wid)
	{
		$this->db->where('wishlist_id',$wid);
		$this->db->delete('wishlist');	
	}

	public function addcart($pid)
	{
		$uid=$this->session->userdata('c_userid');

		$this->db->where('prd_id',$pid);
		$pdetail=$this->db->get('product')->row();
		$pcolor=explode("-",$pdetail->prd_color); 
		$psize=explode("-",$pdetail->prd_size); 
		$cinsert=array
					 (
					 	"prd_id"=>$pid,
						"user_id"=>$uid,
						"cart_prd_qty"=>1,
					 	"cart_prd_color"=>$pcolor[0],
						"cart_prd_size"=>$psize[0],
						"cart_totalamount"=>$pdetail->prd_price	
					 );
		$this->db->insert('addtocart',$cinsert);			 
		
		echo "1";
		
		$this->db->where('prd_id',$pid);
		$this->db->where('user_id',$uid);
		$this->db->delete('wishlist');
		
		
	}	
	
}	
?>