<?php 
class cartModel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectCart()
	{
		$this->db->from('product');
		$this->db->join('addtocart','product.prd_id=addtocart.prd_id');
		$this->db->join('user','addtocart.user_id=user.user_id');
		return $this->db->get()->result();
	}
	public function deleteCart($id)
	{
		$this->db->where('cart_id',$id);
		$this->db->delete('addtocart');
		redirect('cartControl/');
	}
	public function statusUpdate($id)
	{
		$this->db->where('cart_id',$id);
		$id=$this->db->get('addtocart')->row();
		$currstatus=$id->cart_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('cart_status'=>$statusupdate);
			$this->db->where('cart_id',$id);
			$this->db->update('addtocart',$update);
			redirect('cartControl/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('cart_status'=>$statusupdate);
			$this->db->where('cart_id',$id);
			$this->db->update('addtocart',$update);
			redirect('cartControl/');
		}
	}
}
?>