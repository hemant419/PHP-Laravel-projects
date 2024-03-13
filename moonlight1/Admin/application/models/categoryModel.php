<?php
class categoryModel extends CI_Model
{
	//main category work from here
	public function insertCategory()
	{
		$catName=$this->input->post('catName');
		$insert=array('cat_name'=>$catName);
		
		$this->db->insert('cetegory',$insert);
		redirect('categorycontrol/');
	}
	public function selectCategory()
	{
		return $this->db->get('cetegory')->result();
	}
	public function editCategory($id)
	{
		$this->db->where('cat_id',$id);
		return $this->db->get('cetegory')->row();
	}
	public function updateCategory()
	{
		$catId=$this->input->post('catId');
		$catName=$this->input->post('catName');
		$update=array('cat_name'=>$catName);
		
		$this->db->where('cat_id',$catId);
		$this->db->update('cetegory',$update);
		redirect('categorycontrol/');
	}
	public function deleteCategory($id)
	{
		$this->db->where('cat_id',$id);
		$this->db->delete('cetegory');
		redirect('categorycontrol/');
	}
	
	public function multidelCategory()
	{
		$id=$this->input->post('checked');
		foreach($id as $delId)
			{
				$this->db->where('cat_id',$delId);
				$this->db->delete('cetegory');
			}redirect('categorycontrol/');		
	}
	
	public function statusUpdate($id)
	{
		
		$this->db->where('cat_id',$id);
		$id=$this->db->get('cetegory')->row();
		$currstatus=$id->cat_status;
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('cat_status'=>$statusupdate);
			$this->db->where('cat_id',$id);
			$this->db->update('cetegory',$update);
			redirect('categorycontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('cat_status'=>$statusupdate);
			$this->db->where('cat_id',$id);
			$this->db->update('cetegory',$update);
			redirect('categorycontrol/');
		}
	}
}
?>