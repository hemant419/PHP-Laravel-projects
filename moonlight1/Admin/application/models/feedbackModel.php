<?php 

class feedbackModel extends CI_Model
{

	public function selectFeedback()
	{
		 $this->db->from('product');
		 $this->db->join('feedback','product.prd_id=feedback.prd_id');
 		 $this->db->order_by("feedback.feed_date","desc");
		 return $this->db->get()->result();
	}
	public function selectNewFeedback()
	{
		 $this->db->from("product");
		 $this->db->join("feedback","product.prd_id=feedback.prd_id");
		 $this->db->like("feedback.feed_date",date("Y-m-d"));
 		 $this->db->order_by("feedback.feed_date","desc");
		 $this->db->where("feedback.feed_status","Active");
		 return $this->db->get()->result();
	}
	public function deleteFeedback($id)
	{
		$this->db->where('feed_id',$id);
		$this->db->delete('feedback');
		redirect('feedbackcontrol/');
	}
	public function statusUpdate($id)
	{	
		$this->db->where('feed_id',$id);
		$id=$this->db->get('feedback')->row();
		$currstatus=$id->feed_status;
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('feed_status'=>$statusupdate);
			$this->db->where('feed_id',$id);
			$this->db->update('feedback',$update);
			redirect('feedbackcontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('feed_status'=>$statusupdate);
			$this->db->where('feed_id',$id);
			$this->db->update('feedback',$update);
			redirect('feedbackcontrol/');
		}
	}
}
?>
