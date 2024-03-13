<?php 
class askModel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectAsk()
	{
		$this->db->from('product');
		$this->db->join('askfor_available','askfor_available.prd_id=product.prd_id');
		$this->db->order_by('askfor_available.ask_regdate','desc');
		
		return $this->db->get()->result();
	}
	public function selectNewAsk()
	{
		$this->db->from('product');
		$this->db->join('askfor_available','askfor_available.prd_id=product.prd_id');
		$this->db->like('askfor_available.ask_regdate',date("Y-m-d"));
		$this->db->order_by('askfor_available.ask_regdate','desc');
		return $this->db->get()->result();
	}
	public function deleteAsk($id)
	{
		$this->db->where('ask_id',$id);
		$this->db->delete('askfor_available');
		redirect('askcontrol/');
	}
	public function statusUpdate($id)
	{
		$this->db->where('ask_id',$id);
		$id=$this->db->get('askfor_available')->row();
		$currstatus=$id->ask_status;
		
		if($currstatus=="Active")
		{
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('ask_status'=>$statusupdate);
			$this->db->where('ask_id',$id);
			$this->db->update('askfor_available',$update);
			redirect('askcontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('ask_status'=>$statusupdate);
			$this->db->where('ask_id',$id);
			$this->db->update('askfor_available',$update);
			redirect('askcontrol/');
		}
	}
}
?>