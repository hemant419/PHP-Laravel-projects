<?php
	class prdTypeModel extends CI_Model
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('welcomeModel');
			$this->load->model('subcategoryModel');

		}
	public function selectPrdtype()
	{
			$this->db->from('cetegory');
			$this->db->join('subcategory','subcategory.cat_id=cetegory.cat_id');
			$this->db->join('product_type','product_type.subcat_id=subcategory.subcat_id');
			$this->db->order_by('product_type.ptype_id','desc');	
		return $this->db->get()->result();
			
	}
	public function insert()
	{
		$prdType=$this->input->post('prdType');
		$catId=$this->input->post('catId');
		$subcatId=$this->input->post('subcatId');
		
		$insert=array(	'cat_id'=>$catId,'subcat_id'=>$subcatId,
						'ptype_name'=>$prdType,
					);
		$this->db->insert('product_type',$insert);
		redirect('PrdtypeControl/');
	}
	public function editPtype($ptype_id)
	{
			$this->db->where('ptype_id',$ptype_id);
			return $this->db->get('product_type')->row();
    }
		
	public function updatePtype($ptype_id)
	{
				
		$catId=$this->input->post('catId');
		$subcatId=$this->input->post('subcatId');
		$prdType=$this->input->post('prdType');
		
		$update=array(	'cat_id'=>$catId,'subcat_id'=>$subcatId,
						'ptype_name'=>$prdType,
					);

		$this->db->where('ptype_id',$ptype_id);			
		$this->db->update('product_type',$update);
		redirect('PrdtypeControl/');
	}
	public function updatestatus($ptype_id)
	{
		$this->db->where('ptype_id',$ptype_id);
		$id=$this->db->get('product_type')->row();
		$currstatus=$id->ptype_status;
			
			if($currstatus=="Active"){
				$statusupdate="Deactive";
				$id=$this->uri->segment(3);
				$update=array('ptype_status'=>$statusupdate);
				$this->db->where('ptype_id',$id);
				$this->db->update('product_type',$update);
				redirect('PrdtypeControl/');
			}
			else
			{
				$statusupdate="Active";
				$id=$this->uri->segment(3);
				$update=array('ptype_status'=>$statusupdate);
				$this->db->where('ptype_id',$id);
				$this->db->update('product_type',$update);
				redirect('PrdtypeControl/');
			}
	}
	public function deletePrdtype($ptype_id)
	{
			$this->db->where('ptype_id',$ptype_id);
			$this->db->delete('product_type');

				redirect('PrdtypeControl/');
	}
}
?>