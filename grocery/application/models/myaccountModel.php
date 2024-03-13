<?php

class myaccountModel extends CI_Model
{
	
	public function myorder()
	{
		$uid=$this->session->userdata("UserId");
		$this->db->where('o_statas!=',"Delivered");
		$this->db->where('user_id',$uid);
		$this->db->order_by('order_id',"desc");
		return $this->db->get("order_master")->result();
	}
	public function myorderHistory()
	{
		$uid=$this->session->userdata("UserId");
		
		$this->db->where("o_statas","Delivered");
		$this->db->where("user_id",$uid);
		return $this->db->get("order_master")->result();
	}
	public function myaccountData()
	{
		$uid=$this->session->userdata("UserId");
		$this->db->where('user_id',$uid);
		return $this->db->get("user")->row();
	}
	public function orderDetail($orderNo)
	{
		$uid=$this->session->userdata("UserId");
		$this->db->from("product_master");
		$this->db->join("storecart","storecart.product_id=product_master.product_id");
		$this->db->join("order_master","order_master.orderno=storecart.orderno");
		$this->db->where("storecart.orderno",$orderNo);
		$this->db->where("order_master.user_id",$uid);
		$this->db->where("order_master.o_statas!=","Delivered");
		return $this->db->get()->result();
		//print_r($data);die();
	}
	public function trackOf($orderno)
	{
		$uid=$this->session->userdata("UserId");
		$this->db->from("product_master");
		$this->db->join("storecart","storecart.product_id=product_master.product_id");
		$this->db->join("order_master","order_master.orderno=storecart.orderno");
		$this->db->where("storecart.orderno",$orderno);
		$this->db->where("order_master.user_id",$uid);
		return $this->db->get()->result();
	}
	public function orderhistory($orderNo)
	{
		$uid=$this->session->userdata("UserId");
		$this->db->from("product_master");
		$this->db->join("storecart","storecart.product_id=product_master.product_id");
		$this->db->join("order_master","order_master.orderno=storecart.orderno");
		$this->db->where("storecart.orderno",$orderNo);
		$this->db->where("order_master.user_id",$uid);
		$this->db->where("order_master.o_statas","Delivered");
		return $this->db->get()->result();
		
	}
	public function productdata($pid,$uid,$orderno)
	{
		$this->db->where('orderno',$orderno);
		$order=$this->db->get('order_master')->row();
		
		
		
		$resion=$this->input->post("resion");
		$message=$this->input->post("message");
		$insert=array(
			"product_id"=>$pid,
			"user_id"=>$uid,
			"resion"=>$resion,
			"description"=>$message,
			"order_id"=>$order->order_id
		);

		
		$this->db->insert("product_replace",$insert);
	} 
	
}
?>