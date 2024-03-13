<?php
	class faqModel extends CI_Model
	{
		public function selectfaq()
		{
			$this->db->from("product");
	
			 $this->db->join("faq_mstr","faq_mstr.prd_id=product.prd_id");
			 $this->db->order_by("faq_mstr.faq_date","desc");
			return $this->db->get()->result();

		}
		public function selectNewfaq()
		{
			 $this->db->from("product");
	
			 $this->db->join("faq_mstr","faq_mstr.prd_id=product.prd_id");
			 $this->db->order_by("faq_mstr.faq_date","desc");
			 $this->db->like('faq_mstr.faq_date',date("Y-m-d"));
			return $this->db->get()->result();
		}
		public function editFaq($id)
		{
			$this->db->from("product");
			$this->db->join("faq_mstr","faq_mstr.prd_id=product.prd_id");
			$this->db->where('faq_mstr.faq_id',$id);
			return $this->db->get()->row();
		}
		public function updateFaq()
		{
			$faqId=$this->uri->segment(3);
			$ans=$this->input->post('ans');
			$update=array('faq_ans'=>$ans);
			
			$this->db->where('faq_id',$faqId);
			$this->db->update('faq_mstr',$update);
			redirect('faqcontrol/');
		}
		public function deletedata($faq_id)
		{
			$this->db->where('faq_id',$faq_id);
	
			$this->db->delete('faq_mstr');
		}
	public function statusupdate($faq_id)
	{
			$this->db->where('faq_id',$faq_id);
			$id=$this->db->get('faq_mstr')->row();
			$currstatus=$id->faq_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$faq_id=$this->uri->segment(3);
			$update=array('faq_status'=>$statusupdate);
			$this->db->where('faq_id',$faq_id);
			$this->db->update('faq_mstr',$update);
			redirect('faqcontrol');
		}
		else
		{
			$statusupdate="Active";
			$faq_id=$this->uri->segment(3);
			$update=array('faq_status'=>$statusupdate);
			$this->db->where('faq_id',$faq_id);
			$this->db->update('faq_mstr',$update);
			redirect('faqcontrol');
		}
	}
	public function lateststatusupdate($faq_id)
	{
			$this->db->where('faq_id',$faq_id);
			$id=$this->db->get('faq_mstr')->row();
			$currstatus=$id->faq_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$faq_id=$this->uri->segment(3);
			$update=array('faq_status'=>$statusupdate);
			$this->db->where('faq_id',$faq_id);
			$this->db->update('faq_mstr',$update);
			redirect('faqcontrol/latestfaq');
		}
		else
		{
			$statusupdate="Active";
			$faq_id=$this->uri->segment(3);
			$update=array('faq_status'=>$statusupdate);
			$this->db->where('faq_id',$faq_id);
			$this->db->update('faq_mstr',$update);
			redirect('faqcontrol/latestfaq');
		}
	}
}
?>