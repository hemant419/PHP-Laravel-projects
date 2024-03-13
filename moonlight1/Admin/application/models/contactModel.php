<?php
	class contactModel extends CI_Model
	{
		public function selectcontact()
		{
			 $this->db->order_by('contact_date',"desc");
			return $this->db->get('contact')->result();

		}
		public function selectNewContact()
		{
			$this->db->order_by('contact_date',"desc");
			$this->db->like('contact_date',date("Y-m-d"));
			return $this->db->get('contact')->result();
		}

		public function deletedata($contact_id)
		{
			$this->db->where('contact_id',$contact_id);
	
			$this->db->delete('contact');
		}
		public function statusupdate($contact_id)
		{
			$this->db->where('contact_id',$contact_id);
			$id=$this->db->get('contact')->row();
			$currstatus=$id->contact_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$contact_id=$this->uri->segment(3);
			$update=array('contact_status'=>$statusupdate);
			$this->db->where('contact_id',$contact_id);
			$this->db->update('contact',$update);
			redirect('contactcontrol');
		}
		else
		{
			$statusupdate="Active";
			$contact_id=$this->uri->segment(3);
			$update=array('contact_status'=>$statusupdate);
			$this->db->where('contact_id',$contact_id);
			$this->db->update('contact',$update);
			redirect('contactcontrol');
		}
	}
}
?>