<?php
class discountM extends CI_Model
{
	public function selectdiscount()
	{
		$this->db->from('product_master');
		$this->db->join('discount','discount.product_id=product_master.product_id');
		return $this->db->get()->result();
	}
	public function discountstatas($id)
	{
		$this->db->where('d_id',$id);
		$row=$this->db->get('discount')->row();
		$current=$row->d_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("d_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('d_id',$id);
			$this->db->update('discount',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("d_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('d_id',$id);
			$this->db->update('discount',$update);
		}
	}
	public function deletediscount($id)
	{
		$this->db->where('d_id',$id);
		$this->db->delete('discount');
	}
	public function getdata($id)
	{
		$this->db->where('d_id',$id);
		return $this->db->get('discount')->row();
	}
	public function updatedata()
	{
		$id=$this->input->post('sid');
		$product=$this->input->post('product');
		$discount=$this->input->post('discount');
		
		$update=array(
				"product_id"=>$product,
				"discount"=>$discount
		);
		$this->db->where('d_id',$id);
		$this->db->update('discount',$update);
	}
	public function insertdiscount()
	{
		$pro=$this->input->post('product');
		$dis=$this->input->post('discount');
		
		$insert=array(
				"product_id"=>$pro,
				"discount"=>$dis
			);
		$this->db->insert('discount',$insert);
	}
}
?>