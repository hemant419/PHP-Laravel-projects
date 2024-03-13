<?php
class SubCategorym extends CI_Model
{
	public function insert()
	{
	  $arr=array(
			  "category_id"=>$this->input->post('catg'),
			  
			  "subcategory_name"=>$this->input->post('sname')
			    );
				
	  $this->db->insert('subcategory',$arr);
			  
	}

	public function getdata()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->join('subcategory','category.category_id=subcategory.category_id');
		
		
		$data=$this->db->get()->result();	
		 
		return $data;
	}
	
	
	public function del($id)
	{
		$this->db->where('subcategory_id',$id);
		$this->db->delete('subcategory');
		}
	
	
	  public function showcategory()
	  {
			
			
			$data=$this->db->get('category')->result();	
		    return $data;
 
		  
		  }
	
	
	   public function update($id)
	   {
		  
		   $up=array
		   (
		    "category_id"=>$this->input->post('catg'),
			"subcategory_name"=>$this->input->post('sname'),
			
		   
		   );
		   
		    
		   $this->db->where('subcategory_id',$id);
		   $this->db->update('subcategory',$up);
		   
		   
		   }
	
	
	
	  public function status($id)
	  {
		  $this->db->where('subcategory_id',$id);
		  $data=$this->db->get('subcategory')->row();
	
	  
		  if($data->subcatgstatus=="Active")
		  {
			  
			  $update=array(
			   
			    "subcatgstatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "status"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('subcategory_id',$id);
			$this->db->update('subcategory',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('subcategory_id',$id);
			return $this->db->get('subcategory')->row();
			   
			}
			
			
		  public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('subcategory_id',$row);
				 $this->db->delete('subcategory'); 
				 
				} 
	  }
	
}
