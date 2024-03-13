<?php
class checkoutmodel extends CI_Model
{
	
	public function ordercomplete()
	{
		$orderno=rand();
		if($this->session->userdata('dtype')=="100")
		{
		$today = date("d-m-Y");
		$nextday = date("d-m-Y", strtotime("$today +7 day"));
		}
		else
		{
		$today = date("d-m-Y");
		$nextday = date("d-m-Y", strtotime("$today +14 day"));
		}
		$insertorder=array
						 (
							"user_id"=>$this->session->userdata('c_userid'),
							"user_name"=>$this->input->post("fistname"),
							"user_lastname"=>$this->input->post("lastname"),
							"user_email"=>$this->input->post("cemail"),
							"user_contact"=>$this->input->post("cmobile"),
							"user_address"=>$this->input->post("cpaddress"),
							"shipping_address"=>$this->input->post("csaddress"),
							"order_no"=>$orderno,
							"payment_method"=>"COD",
							"deliver_charg"=>$this->session->userdata('dtype'),
							"cupon_amount"=>"0",
							"expected_date"=>$nextday,
						 ); 	
		$this->db->insert('order_mstr',$insertorder);

		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$mycart=$this->db->get('addtocart')->result();

		foreach($mycart as $cart)
		{
			$addstorecart=array
								(
									"prd_id"=>$cart->prd_id,
									"user_id"=>$cart->user_id,
									"order_no"=>$orderno,
									"Qty"=>$cart->cart_prd_qty,
									"color"=>$cart->cart_prd_color,
									"size"=>$cart->cart_prd_size,
									"total_amt"=>$cart->cart_totalamount,
									"offer_discount"=>0
								);
		
			$this->db->insert('store_cart',$addstorecart);
			
		}
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$this->db->delete('addtocart');	
	}	
}
?>