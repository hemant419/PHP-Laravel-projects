<?php 
class userModel extends CI_Model
{

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		//$this->load->model('controlModel');
	}
	public function selectUser()
	{
		return $this->db->get('user')->result();
	}	
	public function deleteUser($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('user');
		redirect('usercontrol/');
	}
	public function userstatus($id)
	{
		
		$this->db->where('user_id',$id);
		$id=$this->db->get('user')->row();
		$currstatus=$id->userstatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			
			$id=$this->uri->segment(3);
			
			$update=array('userstatus'=>$statusupdate);
			$this->db->where('user_id',$id);
			$this->db->update('user',$update);
			redirect('usercontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('userstatus'=>$statusupdate);
			$this->db->where('user_id',$id);
			$this->db->update('user',$update);
			redirect('usercontrol/');
		}
	}
}
?>