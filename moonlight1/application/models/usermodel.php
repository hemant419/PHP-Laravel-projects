<?php
class usermodel extends CI_Model
{
	public function addwishlist($pid,$uid)
	{
		$winsert=array
					 (
					 	"prd_id"=>$pid,
						"user_id"=>$uid
					 );
		$this->db->insert('wishlist',$winsert);			 
	//	echo "add";
	}

	public function removewishlist($pid,$uid)
	{
		$this->db->where('prd_id',$pid);
		$this->db->where('user_id',$uid);	
		$this->db->delete('wishlist');
	//	echo "remove";
	}
	
	public function addcart($pid,$uid)
	{
		$this->db->where('prd_id',$pid);
		$pdetail=$this->db->get('product')->row();
		
		$distotal=$pdetail->prd_price*$pdetail->prd_discount/100;	
		$actual_total=ceil($pdetail->prd_price-$distotal); 
		
		
		$pcolor=explode("-",$pdetail->prd_color); 
		$psize=explode("-",$pdetail->prd_size); 
		$cinsert=array
					 (
					 	"prd_id"=>$pid,
						"user_id"=>$uid,
						"cart_prd_qty"=>1,
					 	"cart_prd_color"=>$pcolor[0],
						"cart_prd_size"=>$psize[0],
						"cart_totalamount"=>$actual_total	
					 );
		$this->db->insert('addtocart',$cinsert);			 

		$this->db->where('user_id',$uid);
		$carttotal=$this->db->get('addtocart')->result();
		
		$subtotal=0;
		$grandtotal=0;
		foreach($carttotal as $total)
		{
			$this->db->where('prd_id',$total->prd_id);
			$nproduct=$this->db->get('product')->row();
			$dis=$nproduct->prd_price*$nproduct->prd_discount/100;	
			$pprice=$nproduct->prd_price-$dis;
			$actprice=ceil($pprice)*$total->cart_prd_qty;
			$nproduct->prd_price."-".$actprice;
			$subtotal=$subtotal+$nproduct->prd_price;
			$grandtotal=$grandtotal+$actprice;
		}
		echo $subtotal."~".$grandtotal."~";

		}

	public function removecart($pid,$uid)
	{
		$this->db->where('prd_id',$pid);
		$this->db->where('user_id',$uid);	
		$this->db->delete('addtocart');
	//	echo "remove";
		$this->db->where('user_id',$uid);
		$carttotal=$this->db->get('addtocart')->result();
		
		$subtotal=0;
		$grandtotal=0;
		foreach($carttotal as $total)
		{
			$this->db->where('prd_id',$total->prd_id);
			$nproduct=$this->db->get('product')->row();
			$dis=$nproduct->prd_price*$nproduct->prd_discount/100;	
			$pprice=$nproduct->prd_price-$dis;
			$actprice=ceil($pprice)*$total->cart_prd_qty;
			$nproduct->prd_price."-".$actprice;
			$subtotal=$subtotal+$nproduct->prd_price;
			$grandtotal=$grandtotal+$actprice;
		}
		echo $subtotal."~".$grandtotal."~";

	}


	public function userinformation()
	{
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$info=$this->db->get('user')->row();	
		return $info;
	}
	
	public function updateprofile()
	{
		$update=array
					(
					"user_name"=>$this->input->post("ufname"),
					"user_lastname"=>$this->input->post("ulname"),
					"user_email"=>$this->input->post("uemail"),
					"user_contact"=>$this->input->post("umobile")
					);			
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$this->db->update('user',$update);
	}

	public function chgpassworddata($currentpass,$newpass)
	{
		$this->db->where('user_id',$this->session->userdata('c_userid'));
		$this->db->where('user_password',$currentpass);
	//	$this->db->where('user_password',$newpass);
		$cnt=$this->db->get('user')->result();		
		if(count($cnt)>0)
		{
			$uppass=array(
							"user_password"=>$newpass	
						 );
			$this->db->where('user_id',$this->session->userdata('c_userid'));
			$this->db->update('user',$uppass);				 
			echo "0";
		}
		else
		{
			echo "1";
		}				
	}


	public function myorder()
	{
			$this->db->order_by('order_id','desc');
			$this->db->where('user_id',$this->session->userdata('c_userid'));
			return $this->db->get('order_mstr')->result();
	}
	
	public function activeorder()
	{
			$this->db->where('user_id',$this->session->userdata('c_userid'));
			$this->db->where('order_status','Pending');
			$this->db->or_where('order_status','Confirm');
			$this->db->or_where('order_status','Dispatch');
			$this->db->order_by('order_id','desc');
			return $this->db->get('order_mstr')->result();
			
	}
	
	
	
	public function cancelproduct($scartid)
	{
		$cancelprd=array
						(
							"storestatus"=>"Cancel"
						);
		$this->db->where('store_id',$scartid);
		$this->db->update('store_cart',$cancelprd);
		echo "1";
				
	}

	public function refundreplace($prdid,$userid,$orderno,$reason,$qty,$msg,$dtype,$smid)
	{
		
		$newreason = str_replace("%20"," ",$reason);
		$newmsg = str_replace("%20"," ",$msg);
		$return_replace=array		
							(
								"prd_id"=>$prdid,
								"user_id"=>$userid,
								"order_no"=>$orderno,
								"request_prd_qty"=>$qty,
								"request_resion"=>$newreason,
								"request_description"=>$newmsg,
								"request_type"=>$dtype
							);	
		//	echo "<pre>";
		//	print_r($return_replace);
		//	die();
	
			$this->db->insert('return_replace',$return_replace);
			
			$this->db->where('store_id',$smid);
			$this->db->delete('store_cart');
			echo "1";
	}

}
?>