<?php
	class statemodel extends CI_Model
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('welcomeModel');
		}
		public function selectstate()
		{
			return $this->db->get('state')->result();
		}
		public function insertstate()
		{
			$Statename=$this->input->post('Statename');
		
		$insert=array(
						'state_name'=>$Statename
						
						);
			$this->db->insert(' state',$insert);
			redirect('Statecontrol/');
		}
		public function updatestatus($state_id)
		{
			$this->db->where('state_id',$state_id);
		$id=$this->db->get('state')->row();
		$currstatus=$id->statestatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('statestatus'=>$statusupdate);
			$this->db->where('state_id',$id);
			$this->db->update('state',$update);
			redirect('Statecontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('statestatus'=>$statusupdate);
			$this->db->where('state_id',$id);
			$this->db->update('state',$update);
			redirect('Statecontrol/');
		}
		}
		public function editstate($state_id)
		{
		$this->db->where('state_id',$state_id);
		return $this->db->get('state')->row();
		}
		public function updatestate()
		{
			$state_id=$this->uri->segment(3);
			
		$Statename=$this->input->post('Statename');
		
		$update=array(
						'state_name'=>$Statename
						
						);
			$this->db->where('state_id',$state_id);			
			$this->db->update('state',$update);
			redirect('Statecontrol/');
		}
		public function deletestate($state_id)
		{
			$this->db->where('state_id',$state_id);
			$this->db->delete('state');
			redirect('Statecontrol/');
		}
	}
?>