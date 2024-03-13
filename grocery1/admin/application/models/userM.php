<?php
	
class userM extends CI_Model
{
	public function selectuser()
	{
		return $this->db->get('user')->result();
	}
	public function statas($id)
	{
		$this->db->where('user_id',$id);
		$row=$this->db->get('user')->row();
		$current=$row->statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$update=array("statas"=>$change);
			$this->db->where('user_id',$id);
			$this->db->update('user',$update);
			
		}
		else
		{
			$change="Active";
			$update=array
						(
						"statas"=>$change
						);
			$this->db->where('user_id',$id);
			$this->db->update('user',$update);
			
			//redirect('userControl');
		}
	}
	public function deletedata($id)
	{
		$this->db->where('user_id',$id);
		$this->db->delete('user');
	}
}
?>