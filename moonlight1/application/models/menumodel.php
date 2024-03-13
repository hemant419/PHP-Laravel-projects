<?php
class menumodel extends CI_Model
{
	public function getmenudata($id)
	{
		$this->db->where('subcat_id',$id);
		$result=$this->db->get('product')->result();	
		return $result;
	}	

	public function getbranddata($id)
	{
		$this->db->where('subcat_id',$id);
		$result=$this->db->get('brand')->result();	
		return $result;
	}
	
	public function getbranddatadetail($id)
	{
		$this->db->where('brand_id',$id);
		$result=$this->db->get('product')->result();	
		return $result;
	}

	public function searchmenudata($sname)
	{
		$this->db->like('prd_name',$sname);
		$result=$this->db->get('product')->result();	
		return $result;
	}	

	public function searchbranddata($sname)
	{
		$this->db->like('brand_name',$sname);
		$result=$this->db->get('brand')->result();	
		return $result;
	}
	
	
	
	public function getrelatedcat($sid)
	{
		
		
		$this->db->where('subcat_id',$sid);
		$result=$this->db->get('product')->result();	
		return $result;
		
	}

	public function getralatedcategory($id)
	{
		$this->db->where('subcat_id',$id);
		$cat=$this->db->get('subcategory')->row();	
		
		$this->db->where('cat_id',$cat->cat_id);
		return $this->db->get('subcategory')->result();	
		
	}


	public function productdetail($id)
	{
		$this->db->from('product');
		$this->db->join('brand','brand.brand_id=product.brand_id');
		$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
		$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
		$this->db->where('product.prd_id',$id);
		$quikdetail=$this->db->get()->row();
		return $quikdetail;	
	}

	public function relatedproduct($id)
	{
		$this->db->where('prd_id',$id);
		$related=$this->db->get('product')->row();
		$this->db->from('product');
		$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
		$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
		$this->db->where('product.subcat_id',$related->subcat_id);
		$this->db->where('product.cat_id',$related->cat_id);
		$this->db->limit(15);
		$this->db->where('product.prd_id !=',$id);
		$related=$this->db->get()->result();
		return $related;	
	}

	public function filterprice($minp,$maxp,$subid)
	{
/*		echo $minp." ".$maxp;
		$this->db->from('product');
		$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
		$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
		$this->db->where('product.subcat_id',$subid);		
		$this->db->where('product.prd_price BETWEEN "'.$minp.'" AND "'.$maxp."'");		
		$filterdata=$this->db->get()->result();
		return $filterdata;
*/

		$sql="SELECT * FROM `product` JOIN `cetegory` ON `cetegory`.`cat_id`=`product`.`cat_id` JOIN `subcategory` ON `subcategory`.`subcat_id`=`product`.`subcat_id` WHERE `product`.`subcat_id` = $subid AND `product`.`prd_price` BETWEEN $minp AND $maxp";		
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	public function sortfilter($limit,$subid)
	{
		$this->db->from('product');
		$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
		$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
		$this->db->where('product.subcat_id',$subid);		
		$this->db->limit($limit);
		$filterdata=$this->db->get()->result();
		return $filterdata;
	}
	
	public function sortrange($range,$subid)
	{
		
		if($range=="Pricel")
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
		//	$this->db->limit(20);
			$this->db->order_by('prd_price','asc');
			$filterdata=$this->db->get()->result();
			return $filterdata;
		}
		else if($range=="Priceh")
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
		//	$this->db->limit(20);
			$this->db->order_by('product.prd_price','DESC');
			$filterdata=$this->db->get()->result();
			
			return $filterdata;
		}
		else if($range=="discountl")
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->order_by('product.prd_discount','asc');
		//	$this->db->limit(20);
			$filterdata=$this->db->get()->result();
			return $filterdata;
		}
		else if($range=="discounth")
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->order_by('product.prd_discount','desc');
		//	$this->db->limit(20);
			$filterdata=$this->db->get()->result();
			return $filterdata;
		}
		else if($range=="ratel")
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->order_by('product.prd_stars','asc');
		//	$this->db->limit(20);
			$filterdata=$this->db->get()->result();
			return $filterdata;
		}
		else 
		{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->order_by('product.prd_stars','desc');
		//	$this->db->limit(20);
			$filterdata=$this->db->get()->result();
			return $filterdata;
		}
	}
	
	public function chgcolor($color,$subid)
	{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->like('product.prd_color',$color);		
			$filterdata=$this->db->get()->result();
			return $filterdata;
	}

	public function chgsize($size,$subid)
	{
			$this->db->from('product');
			$this->db->join('cetegory','cetegory.cat_id=product.cat_id');
			$this->db->join('subcategory','subcategory.subcat_id=product.subcat_id');
			$this->db->where('product.subcat_id',$subid);		
			$this->db->like('product.prd_size',$size);		
			$filterdata=$this->db->get()->result();
			return $filterdata;
	}
	
	public function rate($cname,$cemail,$crate,$creview,$pid)
	{
		
		$this->db->where('prd_id',$pid);
		$this->db->where('feedby_email',$cemail);
		$cnt=$this->db->get('feedback')->result();	
		if(count($cnt)>0)
		{
			echo "1";	
		}
		else
		{
		$name=str_replace('%20',' ',$cname);
		$review=str_replace('%20',' ',$creview);
		$addrate=array
					(
					"prd_id"=>$pid,
					"feedby_name"=>$name,
					"feedby_email"=>$cemail,
					"feed_rating"=>$crate,
					"feed_reviews"=>$review
					);	
	//	print_r($addrate);			
		$this->db->insert('feedback',$addrate);
		}
		
	
	}
	
	
	public function reviwedproduct($id)
	{
		$this->db->where('feed_status','Active');
		$this->db->where('prd_id',$id);
		return $this->db->get('feedback')->result();	
	}
	
	public function faqproduct($id)
	{
		$this->db->where('faq_status','Active');
		$this->db->where('prd_id',$id);
		return $this->db->get('faq_mstr')->result();	
	}

	public function faq($pid,$faqq)
	{
		$uid=$this->session->userdata('c_userid');	
		$uemail=$this->session->userdata('c_useremail');	
		
		$this->db->where('prd_id',$pid);
		$this->db->where('faq_email',$uemail);
		$userold=$this->db->get('faq_mstr')->result();
		
		
		if(count($userold)>0)
		{
			echo "already";	
		}
		
		else if($faqq=="")
		{
		echo "empty";	
		}
		else if($uid=="")
		{
		echo "0";
		}
		else
		{
		$this->db->where('user_id',$uid);
		$user=$this->db->get('user')->row();
		$ques=str_replace('%20',' ',$faqq);
	
		$insert=array
					(
						"prd_id"=>$pid,
						"faq_name"=>$user->user_name." ".$user->user_lastname,	
						"faq_contact"=>$user->user_contact,
						"faq_email"=>$user->user_email,
						"faq_que"=>$ques
					);
		
		$this->db->insert('faq_mstr',$insert);
		echo "1";
		}
	
	}
	
	
	public function addtocart($pid,$uid,$qty,$size)
	{
		
		$this->db->where('user_id',$uid);
		$this->db->where('prd_id',$pid);
		$cnt=$this->db->get('addtocart')->result();				

		$this->db->where('user_id',$uid);
		$this->db->where('prd_id',$pid);
		$fetchrow=$this->db->get('addtocart')->row();				
		
		if(count($cnt)> 0)
		{
			$update=array
						(
							"cart_prd_qty"=>$qty,
							"cart_prd_size"=>$size
						);
			$this->db->where('user_id',$uid);	
			$this->db->where('prd_id',$pid);
			$this->db->update('addtocart',$update);				
		}
		else
		{
			$this->db->where('prd_id',$pid);
			$prd=$this->db->get('product')->row();
			
			$dic=$prd->prd_price/$prd->prd_discount; 
			$actualprice=$prd->prd_price-$dic;
			$oprice=ceil($actualprice);
			
			$add=array
					(
						"prd_id"=>$pid,
						"user_id"=>$uid,
						"cart_prd_qty"=>$qty,
						"cart_prd_color"=>$prd->prd_color,
						"cart_prd_size"=>$size,
						"cart_totalamount"=>$oprice	
					);	
		//	echo "<pre>";
		//	print_r($add);
		//	die();
			$this->db->insert('addtocart',$add);
		
		}
	
	
	}
	

}

?>