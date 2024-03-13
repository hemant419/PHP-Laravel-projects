<?php
 class citymodel extends CI_Model
 {
 	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		}
		public function selectcity()
		{
			$this->db->from('state');
			$this->db->join('city','state.state_id=city.state_id');
			return $this->db->get()->result();
		}
		public function insertcity()
		{
			$Stateid=$this->input->post('StaId');
			$cityname=$this->input->post('cityname');
		
		$insert=array(
						'state_id'=>$Stateid,
						'city_name'=>$cityname
						
						);
			$this->db->insert(' city',$insert);
			redirect('citycontrol/');
		}
		public function updatestatus($city_id)
		{
			$this->db->where('city_id',$city_id);
		$id=$this->db->get('city')->row();
		$currstatus=$id->citystatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('citystatus'=>$statusupdate);
			$this->db->where('city_id',$id);
			$this->db->update('city',$update);
			redirect('citycontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('citystatus'=>$statusupdate);
			$this->db->where('city_id',$id);
			$this->db->update('city',$update);
			redirect('citycontrol/');
		}
		}
		public function editcity($city_id)
		{
			$this->db->where('city_id',$city_id);
			return $this->db->get('city')->row();
		}
		public function updatecity()
		{
			$city_id=$this->uri->segment(3);
			$Stateid=$this->input->post('StaId');
			$cityname=$this->input->post('cityname');
		
		$update=array(
						'state_id'=>$Stateid,
						'city_name'=>$cityname
						
						);
			$this->db->where('city_id',$city_id);			
			$this->db->update('city',$update);
			redirect('citycontrol/');
		}
		public function deletecity($city_id)
		{
			$this->db->where('city_id',$city_id);
			$this->db->delete('city');
			redirect('citycontrol/');
		}
		
 }
?>