<?php
class homemodel extends CI_Model
{
	public function newarrival()
	{
			$this->db->where('prd_status','active');
			$this->db->order_by('prd_id','desc');
			$this->db->limit(15);
		return	$this->db->get('product')->result();	
	}

	public function megasaving()
	{
			$this->db->where('prd_status','active');
			$this->db->order_by('prd_discount','desc');
			$this->db->limit(15);
		return	$this->db->get('product')->result();	
	}

	public function highprice()
	{
			$this->db->where('prd_status','active');
			$this->db->order_by('prd_price','desc');
			$this->db->limit(15);
		return	$this->db->get('product')->result();	
	}

	public function topbrands()
	{
			$this->db->where('brand_status','active');
			$this->db->limit(8);
	
	return  $this->db->get('brand')->result();	
	
		
	}




}
?>