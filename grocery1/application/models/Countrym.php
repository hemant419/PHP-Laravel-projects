<?php
class Countrym extends CI_Model
{
	public function insert()
	{
	  $arr=array(
			  "countryname"=>$this->input->post('cat'),
			  
			    );
	  $this->db->insert('country',$arr);
			  
	}

	public function getdata()
	{
		$data=$this->db->get('country')->result();	
		return $data;
	}
	
	
	public function del($id)
	{
		$this->db->where('countryid',$id);
		$this->db->delete('country');
		}
	
	  public function status($id)
	  {
		  $this->db->where('countryid',$id);
		  $data=$this->db->get('country')->row();
	
	  
		  if($data->countrystatus=="Active")
		  {
			  
			  $update=array(
			   
			    "countrystatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "countrystatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('countryid',$id);
			$this->db->update('country',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('countryid',$id);
			return $this->db->get('country')->row();
			   
			}
			
			
			public function update($id)
			{
				$up=array(
				
				"countryname"=>$this->input->post('cat')
				);
				$this->db->where('countryid',$id);
				$this->db->update('country',$up);
				
				
				}

    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('countryid',$row);
				 $this->db->delete('country'); 
				 
				} 
		   
		   	
	  }

		  
}
