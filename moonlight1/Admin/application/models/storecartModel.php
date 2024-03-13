<?php
class storecartModel extends CI_Model
{
	public function construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectstorecart()
	{
		$this->db->from('product');
		$this->db->join('store_cart','product.prd_id=store_cart.prd_id');
		$this->db->join('user','store_cart.user_id=user.user_id');
		return $this->db->get()->result();
	}
	public function statusUpdate($store_id)
	{
		$this->db->where('store_id',$store_id);
		$id=$this->db->get('store_cart')->row();
		$currstatus=$id->storestatus;
		
		if($currstatus=="Cancel"){
			$statusupdate="Confirmed";
			$id=$this->uri->segment(3);
			$update=array('storestatus'=>$statusupdate);
			$this->db->where('store_id',$id);
			$this->db->update('store_cart',$update);
			
		}
		redirect('storecartcontrol/');
	}
	public function deletecart($store_id)
	{
		$this->db->where('store_id',$store_id);
		$this->db->delete('store_cart');
		redirect('storecartcontrol/');
	}
}
?>