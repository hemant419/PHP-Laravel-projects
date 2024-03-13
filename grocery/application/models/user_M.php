<?php
class user_M extends CI_Model
{
	public function category()
	{
		$this->db->where("statas","Active");
		return $this->db->get("categery_master")->result();
		
	}
	public function subcategory()
	{
		$this->db->where("s_statas","Active");
		return $this->db->get("sub_categery_master")->result();
		
	}
	public function drug()
	{
		$this->db->where("status","Active");
		return $this->db->get("product_master")->result();
		
	}
	public function allcategory()
	{
		$this->db->where("statas","Active");
	 	return $this->db->get('categery_master')->result();
	}
	public function allslider()
	{
		$this->db->where("statas","Active");
		return $this->db->get('slider')->result();
	}
	public function Diabities()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Deals of the Week");
		return $this->db->get()->result();
	}
	public function BabyMother()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Baby & Mother");
		return $this->db->get()->result();
	}
	public function PersonalCare()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Personal Care");
		return $this->db->get()->result();
	}
	public function HealthAid()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Health Aid");
		return $this->db->get()->result();
	}
	public function Acne()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Acne");
		return $this->db->get()->result();
	}
	public function Adhd()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Adhd");
		return $this->db->get()->result();
	}
	public function AlcoholAddiction()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Atta, Flours & Sooji");
		return $this->db->get()->result();
	}
	public function CancerOncology()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->order_by("product_discount","asc");
		return $this->db->get()->result();
	}
	public function BladderProstateDisorders()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Exotic Fruits & Veggies");
		return $this->db->get()->result();
	}
	public function Depression()
	{
		$this->db->where("status","Active");
		$this->db->from('categery_master');
		$this->db->join('sub_categery_master','sub_categery_master.categery_id=categery_master.categery_id');
		$this->db->join('product_master','product_master.s_id=sub_categery_master.s_id');
		$this->db->like("sub_categery_master.s_name","Depression");
		return $this->db->get()->result();
	}
	public function productview($id)
	{
		$this->db->where("status","Active");
		$this->db->where('product_id',$id);
		return $this->db->get('product_master')->row();
	} 
	public function insertwish($id)
	{
		if($this->session->userdata('Useremail')!="")
		{
			$userId=$this->session->userdata('UserId');
			$this->db->where('product_id',$id);
			$product=$this->db->get('product_master')->row();
			$price=$product->product_price;
		
			$this->db->where('product_id',$id);
			$this->db->where('user_id',$userId);
			$row=$this->db->get('wishlist')->row();
		
			if(count($row)> 0)
			{
				$this->db->where('product_id',$id);
				$this->db->where('user_id',$userId);
				$this->db->delete('wishlist');
			}
			else	
			{
				$insert=array("product_id"=>$id,"user_id"=>$userId,"prd_price"=>$price);
				$this->db->insert('wishlist',$insert);
			}
		}
		else
		{
			echo "<script>alert('please Login');</script>";
		}
	}
	public function wishdata()
	{
		$userId=$this->session->userdata("UserId");
		$this->db->from('product_master');
		$this->db->join('wishlist','wishlist.product_id=product_master.product_id');
		$this->db->where('user_id',$userId);
		return $this->db->get()->result();
	}
	public function insertcart($id)
	{
		if($this->session->userdata('Useremail')!="")
		{
			$userId=$this->session->userdata('UserId');

			$qty=$this->input->post('qty');
			if($qty==""){  $qty=1;  }
			
			$this->db->where('product_id',$id);
			$product=$this->db->get('product_master')->row();
			$price=$product->product_price;
		
			$this->db->where('product_id',$id);
			$this->db->where('user_id',$userId);
			$cart=$this->db->get('addtocart')->row();
			
			if(count($cart) > 0)
			{
				$total=$price*$qty;
				$update=array("totalamunt"=>$total,"qty"=>$qty);
				$this->db->where('product_id',$id);
				$this->db->update('addtocart',$update);
			}
			else	
			{
				$insert=array("product_id"=>$id,"user_id"=>$userId,"totalamunt"=>$price,"qty"=>$qty);
				$this->db->insert('addtocart',$insert);
			}
			
		}
		else
		{
			echo "<script>alert('please Login');</script>";
		}	
	}
	public function cupon()
	{
		$code=$this->input->post("code");
		$userEmail=$this->session->userdata("Useremail");
		$this->db->where("cupon_code",$code);
		$this->db->where("email",$userEmail);
		$this->db->where("user_code","0");
		$this->db->where("cupon_statas","Active");
		$row=$this->db->get("cuponcodes")->row();
		
		if(count($row)!=0)
		{
			$dis=$this->session->userdata("total")*25/100;
			$this->session->set_userdata("cupon_discount",$dis);

			$update=array("user_code"=>"1","cupon_statas"=>"Deactive");
			
			$this->db->where("cupon_code",$code);
			$this->db->where("email",$userEmail);
			$this->db->where("user_code","0");
			$this->db->where("cupon_statas","Active");
			$row=$this->db->update("cuponcodes",$update);
			$this->session->set_userdata("sucess","Congretulation !!<br> You Get 25 % Discount ...");
			$this->session->set_userdata("cupon_code",$code);
			$this->session->unset_userdata("invalid");
			
			redirect("Welcome/viewcart");
		
		}
		else{
			
			$this->session->set_userdata("invalid","Cupon Code Not Found !!<br> Please Enter Valid Code...");
			redirect("Welcome/viewcart");
			}
		
	}
	public function ajaxAddtocart($qty,$pId,$pPrice)
	{

//			echo "qty".$qty."pid".$pId."price".$pPrice;


			$userId=$this->session->userdata("UserId");
			$totalamunt=$pPrice*$qty;
			$update=array("qty"=>$qty,"totalamunt"=>$totalamunt);
		   
			$this->db->where('product_id',$pId);
			$this->db->where('user_id',$userId);
			$this->db->update('addtocart',$update);
			
			$this->db->where('user_id',$userId);
			$result=$this->db->get('addtocart')->result();
			// print_r($result);die();
			$j=0; $k=0;
			foreach($result as $resultData){  $j=$j+$resultData->totalamunt ;$k=$k+$resultData->totalamunt ;   }
			
			$this->session->set_userdata("total",$k);
			if($j >=1000)
			{
					if($this->session->userdata("cupon_code")!=""){
					
						$dis=$k*25/100;
						$k=$k-$dis;
						$this->session->set_userdata("cupon_discount",$dis);
						
						$this->session->set_userdata("total",$k);
						echo $j."*".$k."*".$dis;	
			
					}else
					{
					
					   $this->session->set_userdata("total",$j);
						echo $j."*".$k."*"."";
					}
			}else{
					$this->session->unset_userdata("cupon_discount");
					$this->session->unset_userdata("success");
					 $this->session->set_userdata("total",$j);
					echo $j."*".$k."*"."";






			}
	}
	public function cartproduct()
	{
		$userId=$this->session->userdata("UserId");
		$this->db->from('product_master');
		$this->db->join('addtocart','addtocart.product_id=product_master.product_id');
		$this->db->where('user_id',$userId);
		return $this->db->get()->result();
	}
	public function deletedata($id)
	{
		$this->db->where('product_id',$id);
		$this->db->delete('addtocart');
	}
	public function addtowishlist($id)
	{
	$userId=$this->session->userdata("UserId");

		if($this->session->userdata("Useremail")!="")
		{
			
			$this->db->where('product_id',$id);
			$product=$this->db->get('product_master')->row();
			$price=$product->product_price;
		
			$this->db->where('product_id',$id);
			$this->db->where('user_id',$userId);
			$row=$this->db->get('wishlist')->result();
	
			if(count($row)>0)
			{
				$this->db->where('product_id',$id);
				$this->db->where('user_id',$userId);
				$this->db->delete('wishlist');
				echo "0";
			}
			else	
			{
				$insert=array("product_id"=>$id,"user_id"=>$userId,"prd_price"=>$price);
				$this->db->insert('wishlist',$insert);
				
					$this->db->where('user_id',$userId);
				$cout=$this->db->get('wishlist')->result();
				echo count($cout);
				
			}
		}
		else
		{
			echo "<script>alert('please Login');</script>";
		}
	}
	
	public function feedbackinsert($id)
	{
		$name=$this->input->post('name');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$msg=$this->input->post('message');
	
		$insert=array(
			"product_id"=>$id,
			"name"=>$name." ".$lname,
			"email"=>$email,
			"contactno"=>$contact,
			"reviews"=>$msg
		);	
		$this->db->insert("feedback_master",$insert);
	} 
	public function feedbackdata()
	{
		//$feed=$this->url->segment(3);
		$this->db->where("statas","Active");
		//$this->db->where("product_id",$feed);
		return $this->db->get("feedback_master")->result();
	} 

}
?>