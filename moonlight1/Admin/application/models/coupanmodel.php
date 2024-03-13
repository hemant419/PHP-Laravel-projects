<?php
class coupanmodel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectcoupan()
	{
		return $this->db->get(' cupon_code')->result();
	}
	public function insertcoupan()
	{
		$coupancode=$this->input->post('coupancode');
		$coupanmail=$this->input->post('coupanmail');
		$coupanuse=$this->input->post('coupanuse');
		
		$insert=array(
						'cupon_code'=>$coupancode,
						'cupon_email'=>$coupanmail,
						'cupon_use_code'=>$coupanuse,
						
						);
			$this->db->insert('cupon_code',$insert);
			redirect('coupancontrol/');
		}
	public function updatestatus($cupon_id)
	{
		$this->db->where('cupon_id',$cupon_id);
		$id=$this->db->get('cupon_code')->row();
		$currstatus=$id->status;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('status'=>$statusupdate);
			$this->db->where('cupon_id',$id);
			$this->db->update('cupon_code',$update);
			redirect('coupancontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('status'=>$statusupdate);
			$this->db->where('cupon_id',$id);
			$this->db->update('cupon_code',$update);
			redirect('coupancontrol/');
		}
	}
	public function editcoupan($cupon_id)
	{
		$this->db->where('cupon_id',$cupon_id);
		return $this->db->get('cupon_code')->row();
	}
		public function updatecoupan()
		{
			$copan_id=$this->uri->segment(3);
			
		$coupancode=$this->input->post('coupancode');
		$coupanmail=$this->input->post('coupanmail');
		$coupanuse=$this->input->post('coupanuse');
		
		$update=array(
						'cupon_code'=>$coupancode,
						'cupon_email'=>$coupanmail,
						'cupon_use_code'=>$coupanuse,
						
						);
			$this->db->where('cupon_id',$copan_id);			
			$this->db->update('cupon_code',$update);
			redirect('coupancontrol/');
			}
		public function coupandelete($cupon_id)
		{
			$this->db->where('cupon_id',$cupon_id);
			$this->db->delete('cupon_code');
			redirect('coupancontrol/');
		}
}
?>