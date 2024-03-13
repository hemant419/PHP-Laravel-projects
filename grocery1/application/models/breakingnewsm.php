<?php
class breakingnewsm extends CI_Model
{
	public function getdata()
	{
	return	$this->db->get('breakingnews')->result();		
	}	
}
?>