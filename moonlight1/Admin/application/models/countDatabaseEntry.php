<?php

class countDatabaseEntry extends CI_Model
{

	public function countUser()
	{
		return $this->db->get('user')->result();
		 
	}
	public function countUseronline()
	{
		$this->db->where("user_track","1");
		return $this->db->get('user')->result();
		 
	}
	public function countfeed()
	{
		return $this->db->get('feedback')->result();
	}
	public function countOrder()
	{
		return $this->db->get('order_mstr')->result();
	}
	public function orderPending()
	{
				$this->db->where('order_status',"Pending");
		return	$this->db->get('order_mstr')->result();
	}
	public function orderConfirm()
	{
				$this->db->where('order_status',"Confirm");
		return	$this->db->get('order_mstr')->result();
	}
	public function orderDelivered()
	{
				$this->db->where('order_status',"Delivered");
		return	$this->db->get('order_mstr')->result();
	}
	public function orderDispatch()
	{
				$this->db->where('order_status',"Dispatch");
		return	$this->db->get('order_mstr')->result();
	}
	// Notification Counter From Here
	public function countRatingOfTheDay()
	{
		
		$this->db->where("feed_status","Active");
		$this->db->like("feed_date",date("Y-m-d"));
		$this->db->order_by("feed_date","desc");
		return $this->db->get("feedback")->result();
	}
	public function countContactTheDay()
	{
		
		$this->db->where("contact_status","Active");
		$this->db->like("contact_date",date("Y-m-d"));
		$this->db->order_by("contact_date","desc");
		//$this->db->order_by("contact_status","Active");

		return $this->db->get("contact")->result();
	}
	public function countAskforAvaibality()
	{
		$this->db->like("ask_regdate",date("Y-m-d"));
		$this->db->order_by("ask_regdate","desc");
		return $this->db->get("askfor_available")->result();
	}
	public function totalQueOfTheDay()
	{
		$this->db->where("faq_status","Deactive");
		$this->db->where("faq_date >",date("Y-m-d H:i:s"));
		$this->db->order_by("faq_date","desc");
		return $this->db->get("faq_mstr")->result();
	}
	public function totalOrderPending()
	{
				$this->db->where('order_status',"Pending");
				$this->db->order_by("order_date","desc");
		return	$this->db->get('order_mstr')->result();
	}

}


?>
