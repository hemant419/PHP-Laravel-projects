<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class myaccount extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_ragis');
		$this->load->model('user_M');
		$this->load->model('addtocartM');
		$this->load->model('categoryM');
		$this->load->model('myaccountModel');
	}
	public function index()
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['orderHistory']=$this->myaccountModel->myorderHistory();
		$file['orderdata']=$this->myaccountModel->myorder();
		$file['myaccountData']=$this->myaccountModel->myaccountData();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="user/myaccount";
		$this->load->view('template/content',$file);
	}	
	public function detailOrder($orderNo)
	{
		$file['orderDetail']=$this->myaccountModel->orderDetail($orderNo);
		
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="user/orderDetail";
		$this->load->view('template/content',$file);
	}
	public function removeOrder($storId,$prdID,$qty,$order)
	{
		$this->db->where('sc_id',$storId);
		$this->db->delete('storecart');
		
		$this->db->where('product_id',$prdID);
		$product=$this->db->get('product_master')->row();
		
		$stock=$product->stock+$qty;
		$updateproduct=array("stock"=>$stock);
		
		$this->db->where('product_id',$prdID);
		$this->db->update('product_master',$updateproduct);
		redirect("myaccount/detailOrder/".$order);
	}
	public function cancelOrder($order)
	{
		$this->db->where('orderno',$order);
		$result=$this->db->get('storecart')->result();
		foreach($result as $getdata)
		{
				
			$this->db->where('product_id',$getdata->product_id);
			$product=$this->db->get('product_master')->row();
			$stock=$product->stock-$getdata->qty;
		
			$updateproduct=array("stock"=>$stock);
		
			$this->db->where('product_id',$getdata->product_id);
		    $this->db->update('product_master',$updateproduct);
		
		
		}
		$this->db->where('orderno',$order);
		$this->db->delete('storecart');
		
		$this->db->where('orderno',$order);
		$this->db->delete('order_master');
		redirect("Welcome");
		
	}
	public function trackOrder($orderno)
	{
		
		$file['trackOf']=$this->myaccountModel->trackOf($orderno);
		
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="user/track";
		$this->load->view('template/content',$file);
	}
	public function moreinfor($orderNo)
	{
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	

		$file['orderhist']=$this->myaccountModel->orderhistory($orderNo);
		$file['orderDetail']=$this->myaccountModel->orderDetail($orderNo);
		$file['page']="user/orderHistory";
		$this->load->view('template/content',$file);
	}
	public function returnpro($orderNo,$id)
	{
		$this->db->where("product_id",$id);
		$file['prd']=$this->db->get("product_master")->row();
		
 			$this->db->where("orderno",$orderNo);
		$file['userdata']=$this->db->get('order_master')->row();
		
		$file['orderhist']=$this->myaccountModel->orderhistory($orderNo);
		$file['orderDetail']=$this->myaccountModel->orderDetail($orderNo);
		$file["category"]=$this->user_M->category();
		$file["subcategory"]=$this->user_M->subcategory();
		$file["drug"]=$this->user_M->drug();
		$file['wishrow']=$this->user_M->wishdata();
		$file['cart']=$this->user_M->cartproduct();	
		$file['page']="user/productreturn";
		$this->load->view('template/content',$file);
	}  	
	public function productreturn($pid,$uid,$orderno)
	{
		$this->myaccountModel->productdata($pid,$uid,$orderno);
		redirect("myaccount");
	} 
}

?>
