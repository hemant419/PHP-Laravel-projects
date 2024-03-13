<?php
class cartmodel extends CI_Model
{
	public function cartdata()
	{
		$user_id=$this->session->userdata('c_userid');
		$this->db->where('user_id',$user_id);
	return	$this->db->get('addtocart')->result();
	}	
	
	public function updatecart($qty,$pid)
	{
		$user_id=$this->session->userdata('c_userid');
		
		$this->db->where('prd_id',$pid);
		$pdata=$this->db->get('product')->row();
		
		$distotal=$pdata->prd_price*$pdata->prd_discount/100;	
		$actual_total=ceil($pdata->prd_price-$distotal); 
		$total=$actual_total*$qty;
		
		$mycartupdate=
					array
						(
							"cart_prd_qty"=>$qty,
							"cart_totalamount"=>$total
						);	
		
		$this->db->where('user_id',$user_id);
		$this->db->where('prd_id',$pid);
		$this->db->update('addtocart',$mycartupdate);		
		echo $total."~";
		
		//   		For Sub Total Code =========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$subtotalnew=0;
		foreach($totalamt as $subamt)	
		{
			//$grandtotal=$grandtotal+$carttotal->cart_totalamount;
			//echo $subamt->prd_id;
			$this->db->where('prd_id',$subamt->prd_id);
			$prdprice=$this->db->get('product')->row();
			$act=($prdprice->prd_price*$subamt->cart_prd_qty);
			$subtotalnew=$subtotalnew+$act;
		}
	
		// ========================================================

		//   		For Grand Total Code =========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$grandtotal=0;
		foreach($totalamt as $carttotal)	
		{
			$grandtotal=$grandtotal+$carttotal->cart_totalamount;
		}
	
		// ========================================================
	
		echo $subtotalnew."~";
		echo $grandtotal;
		
	}

	public function deletecart($cid,$pid)
	{
		$user_id=$this->session->userdata('c_userid');
		
		$this->db->where('cart_id',$cid);
		$this->db->delete('addtocart');	
	
			//   		For Sub Total Code =========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$subtotalnew=0;
		foreach($totalamt as $subamt)	
		{
			//$grandtotal=$grandtotal+$carttotal->cart_totalamount;
			//echo $subamt->prd_id;
			$this->db->where('prd_id',$subamt->prd_id);
			$prdprice=$this->db->get('product')->row();
			$act=($prdprice->prd_price*$subamt->cart_prd_qty);
			$subtotalnew=$subtotalnew+$act;
		}
	
		// ========================================================

		//   		For Grand Total Code =========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$grandtotal=0;
		foreach($totalamt as $carttotal)	
		{
			$grandtotal=$grandtotal+$carttotal->cart_totalamount;
		}
	
		// ========================================================
	
		echo $subtotalnew."~";
		echo $grandtotal;
	}


	public function deleteajaxheadercart($user_id,$pid)
	{
		
		$this->db->where('user_id',$user_id);
		$this->db->where('prd_id',$pid);
		$this->db->delete('addtocart');	
	
			//   		For Sub Total Code =========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$subtotalnew=0;
		foreach($totalamt as $subamt)	
		{
			//$grandtotal=$grandtotal+$carttotal->cart_totalamount;
			//echo $subamt->prd_id;
			$this->db->where('prd_id',$subamt->prd_id);
			$prdprice=$this->db->get('product')->row();
			$act=($prdprice->prd_price*$subamt->cart_prd_qty);
			$subtotalnew=$subtotalnew+$act;
		}
	
		// ========================================================

		//   		For Grand Total Code ==========================
		
		$this->db->where('user_id',$user_id);
		$totalamt=$this->db->get('addtocart')->result();		
		$grandtotal=0;
		foreach($totalamt as $carttotal)	
		{
			$grandtotal=$grandtotal+$carttotal->cart_totalamount;
		}
	
		// ========================================================
	
		echo $subtotalnew."~";
		echo $grandtotal;
	}
	
	
	public function chksize()
	{
		$user_id=$this->session->userdata('c_userid');
		$this->db->where('user_id',$user_id);
		$cart=$this->db->get('addtocart')->result();
		echo count($cart)."-";
		foreach($cart as $scart)
		{
			if($scart->cart_prd_size=="")
			{
				echo $scart->cart_id."-";	
			} 
		}
	}
	
}
?>