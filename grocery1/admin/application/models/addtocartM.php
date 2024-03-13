<?php
class addtocartM extends CI_Model
{
	public function selectcart()
	{
		$this->db->from('product_master');
		$this->db->join('addtocart','addtocart.product_id=product_master.product_id');
		$this->db->join('user','user.user_id=addtocart.user_id');
		return $this->db->get()->result();
	}
	public function deletedata($id)
	{
		$this->db->where('cart_id',$id);
		$this->db->delete('addtocart');
	} 
}
?>