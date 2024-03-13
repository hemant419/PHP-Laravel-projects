<?php
class storecartM extends CI_Model
{
	public function selectcart()
	{
		$this->db->from('product_master');
		$this->db->join('storecart','storecart.product_id=product_master.product_id');
		$this->db->join('user','user.user_id=storecart.user_id');
		return $data=$this->db->get()->result();
		//print_r($data);
		//die();
	}
	public function storecartstatas($id)
	{
		$this->db->where('sc_id',$id);
		$row=$this->db->get('storecart')->row();
		$current=$row->sc_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$catid=$this->uri->segment(3);
			$update=array("sc_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('sc_id',$catid);
			$this->db->update('storecart',$update);
			//redirect('categoryControl');
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("sc_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('sc_id',$id);
			$this->db->update('storecart',$update);
			//redirect('categoryControl');
		}
	}
	public function deletedata($id)
	{
		$this->db->where('sc_id',$id);
		$this->db->delete('storecart');
	} 
}
?>
