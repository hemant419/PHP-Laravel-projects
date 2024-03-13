<?php
class addtocartM extends CI_Model
{
	public function ajaxaddtocart($id)
	{
		if($this->session->userdata('Useremail')!="")
		{
			$userId= $this->session->userdata('UserId');
			$qty=$this->input->post('qty');
			if($qty==""){  $qty=1;  }
			
			$this->db->where('product_id',$id);
			$product=$this->db->get('product_master')->row();
			$price=$product->product_price;
			
			$this->db->where('product_id',$id);
			$this->db->where('user_id',$userId);
			$cart2=$this->db->get('addtocart')->result();
			
			$this->db->where('product_id',$id);
			$this->db->where('user_id',$userId);
			$cart=$this->db->get('addtocart')->row();
			
			if(count($cart2) > 0)
			{
			
				$qty=$qty+$cart->qty;
				$total=$price*$qty;
				
				
				$update=array("totalamunt"=>$total,"qty"=>$qty);
				
				$this->db->where('product_id',$id);
				$this->db->update('addtocart',$update);
			}
			else	
			{
				
	$insert=array("product_id"=>$id,"user_id"=>$userId,"totalamunt"=>$price,"qty"=>$qty);
				$this->db->insert('addtocart',$insert);
				//echo "Done";
			}		
		}
		else
		{
			echo "<script>alert('please Login');</script>";
		}	
	}
	public function getstatedata()
	{
		return $this->db->get('state_master')->result();
	}
	public function getcitydata()
	{
		return $this->db->get('city_master')->result();
	}
	public function insertorder()
	{	
		$userId=$this->session->userdata('UserId');
		$name=$this->input->post('name');
		$lname=$this->input->post('lname');
		$country=$this->input->post('country');
		$city=$this->input->post('city');
		
		
		$pincode=$this->input->post('pincode');
		$ddress=$this->input->post('address');
		$sddress=$this->input->post('saddress');
		$phone=$this->input->post('phone');
		$email=$this->input->post('email');
		$delivery=$this->input->post('delivery');
		$address=$ddress."!".$city."!".$pincode."!"."Gujarat"."!".$country;
		$saddress=$sddress."!".$city."!".$pincode."!"."Gujarat"."!".$country;
		
		$this->session->set_userdata('name',$name);
		$this->session->set_userdata('lname',$lname);
		$this->session->set_userdata('pincode',$pincode);
		$this->session->set_userdata('address',$address);
		$this->session->set_userdata('saddress',$saddress);
		$this->session->set_userdata('phone',$phone);
		$this->session->set_userdata('delivery',$delivery);
		
		redirect('addtocartcontrol/confirmation');		
	}
	public function getdataorder()
	{
		$userId=$this->session->userdata('UserId');
		$this->db->from('product_master');
		$this->db->join('addtocart','addtocart.product_id=product_master.product_id');
		$this->db->where('addtocart.user_id',$userId);
		return $this->db->get()->result();
	}
	public function orderdata()
	{
		$userId=$this->session->userdata("UserId");
		$orderno=rand(1,10000);
		$insert=array(
				"user_id"=>$this->session->userdata("UserId"),
				"useremail"=>$this->session->userdata('Useremail'),
				"userfname"=>$this->session->userdata('name'),
				"userlname"=>$this->session->userdata('lname'),
				"paramanentaddress"=>$this->session->userdata('address'),
				"shippingaddress"=>$this->session->userdata('saddress'),
				"contactno"=>$this->session->userdata('phone'),
				"deliverycharg"=>$this->session->userdata('delivery'),
				"orderno"=>$orderno,
				"cuponamount"=>$this->session->userdata("cupon_discount"),
				"paymenteethod"=>"cod"
		);
		$this->db->insert('order_master',$insert);
		
		$this->db->where('user_id',$userId);
		$result=$this->db->get('addtocart')->result();
		foreach($result as $getdata)
		{
			$insert=array(
				"product_id"=>$getdata->product_id,
				"user_id"=>$getdata->user_id,
				"orderno"=>$orderno,
				"qty"=>$getdata->qty,
				"totalamount"=>$getdata->totalamunt
			);
			$this->db->insert('storecart',$insert);
			
			
			$this->db->where('product_id',$getdata->product_id);
			$product=$this->db->get('product_master')->row();
			$stock=$product->stock-$getdata->qty;
		
			$updateproduct=array("stock"=>$stock);
		
			$this->db->where('product_id',$getdata->product_id);
		    $this->db->update('product_master',$updateproduct);
		
		
		}
		
		$this->db->where('user_id',$userId);
		$this->db->delete('addtocart');
		
	/*	$data=$this->db->get('storecart')->result();
		$prdID=$data->product_id;
		$qty=$data->qty;*/
		
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('lname');
		$this->session->unset_userdata('pincode');
		$this->session->unset_userdata('address');
		$this->session->unset_userdata('saddress');
		$this->session->unset_userdata('phone');
		$this->session->unset_userdata('delivery');
		$this->session->unset_userdata("cupon_discount");
		$this->session->unset_userdata("invalid");
		$this->session->unset_userdata("msg");
		$this->session->unset_userdata("success");
		$this->session->unset_userdata("cupon_code");
	}
	
	public function subscribeuser()
	{
		$Uemail=$this->input->post('useremail'); 
		
		$this->db->where('email',$Uemail);
		$useremail=$this->db->get("user")->row();
		
		$this->db->where('email',$Uemail);
		$codeemail=$this->db->get('cuponcodes')->row();
		
		if(count($useremail)==0 && count($codeemail)==0)
		{
			$upp = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";	
			$low = "abcdefghijklmnopqrstuvwxyz";	
			$no = "0123456789";	
			$spe = "$%&#@";	
		
			$gen_upp= substr(str_shuffle($upp),0,2);
			$gen_low= substr(str_shuffle($low),0,2);
		
			$gen_no= substr(str_shuffle($no),0,4);
			$gen_spe= substr(str_shuffle($spe),0,2);
		
			$mix = "$gen_upp$gen_low$gen_no";
			$mix_mix =substr(str_shuffle($mix),0,6);
			
			$insert=array(
					"cupon_code"=>$mix_mix,
					"email"=>$Uemail,
					"user_code"=>0
			);
			$this->db->insert('cuponcodes',$insert);
			
			//$this->load->library('Menu_lib');
			
			//$this->menu_lib->send_mail($Uemail);
			
			redirect("Welcome");
		}
		else
		{
			echo "<script>alert('rginstrtion');</script>";redirect("Welcome");
		}
	}

}
?>