<?php 
class subcategoryModel extends CI_Model
{
	//sub category work start from here
	public function selectSubcategory()
	{
		 $this->db->from('cetegory');
		 $this->db->join('subcategory','cetegory.cat_id=subcategory.cat_id');
		 return $this->db->get()->result();
	}
	public function insertSubcategory()
	{
		$catId=$this->input->post('catId');
		$subcatName=$this->input->post('subcatName');
		$insert=array('cat_id'=>$catId,'subcat_name'=>$subcatName);
		
		$this->db->insert('subcategory',$insert);
		redirect('subcategorycontrol/');
	}
	public function editSubcategory($id)
	{
		$this->db->where('subcat_id',$id);
		return $this->db->get('subcategory')->row();
	}
	public function updateSubcategory()
	{
		 $catId=$this->input->post('catId');
		 $subcatId=$this->input->post('subcatId');
		$subcatName=$this->input->post('subcatName');
		
		$update=array('cat_id'=>$catId,'subcat_name'=>$subcatName);
		$this->db->where('subcat_id',$subcatId);
		$this->db->update('subcategory',$update);
		redirect('subcategorycontrol/');
	}
	public function statusUpdate($id)
	{	
		$this->db->where('subcat_id',$id);
		$id=$this->db->get('subcategory')->row();
		$currstatus=$id->subcatstatus;
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('subcatstatus'=>$statusupdate);
			$this->db->where('subcat_id',$id);
			$this->db->update('subcategory',$update);
			redirect('subcategorycontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('subcatstatus'=>$statusupdate);
			$this->db->where('subcat_id',$id);
			$this->db->update('subcategory',$update);
			redirect('subcategorycontrol/');
		}
	}
	public function deleteSubcategory($id)
	{
		$this->db->where('subcat_id',$id);
		$this->db->delete('subcategory');
		redirect('subcategorycontrol/');
	}
	public function multidelSubcategory()
	{
		$id=$this->input->post('checked');
		foreach($id as $delId)
			{
				$this->db->where('subcat_id',$delId);
				$this->db->delete('subcategory');
			}
			redirect('subcategorycontrol/');		
			
	}
}
?>	