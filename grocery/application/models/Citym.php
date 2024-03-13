<?php
class Citym extends CI_Model
{
	public function insert()
	{
	   $arr=array(
			  "state_id"=>$this->input->post('state_name'),
			  
			  
			  "city_name"=>$this->input->post('city_name')
			    );				
				
	  $this->db->insert('city',$arr);
			  
	}

	public function getdata()
	{
			$this->db->from('state');	
			$this->db->join('city','city.state_id=state.state_id');
			$data=$this->db->get()->result();	
			return $data;
	}
	
	public function showstate()
	  {
			
			
			$data=$this->db->get('state')->result();	
		   
			  return $data;
		  
		  }
	
	
	public function del($id)
	{
		$this->db->where('city_id',$id);
		$this->db->delete('city');
		}
	
	  public function status($id)
	  {
		  $this->db->where('city_id',$id);
		  $data=$this->db->get('city')->row();
	
	  
		  if($data->cstatus=="Active")
		  {
			  
			  $update=array(
			   
			    "cstatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "cstatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('city_id',$id);
			$this->db->update('city',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('city_id',$id);
			return $this->db->get('city')->row();
			}
			
			
			public function update($id)
			{
				$up=array(
				
				"state_id"=>$this->input->post('state_name'),
				"city_name"=>$this->input->post('cat')
				
				);
				$this->db->where('city_id',$id);
				$this->db->update('city',$up);
				
				
				}

    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('city_id',$row);
				 $this->db->delete('city'); 
				 
				} 
		   
		   	
	  }

		  
}
