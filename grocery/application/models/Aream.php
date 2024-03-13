<?php
class Aream extends CI_Model
{
	public function insert()
	{
	   $arr=array(
			  "state_id"=>$this->input->post('state_name'),
			  "city_id"=>$this->input->post('city_name'),
			  "area_name"=>$this->input->post('area_name'),
			  "zip_code"=>$this->input->post('zipcode')
			    );				
				
	  $this->db->insert('area',$arr);
			  
	}

	public function getdata()
	{
	
		$this->db->from('area');
		$this->db->join('state','state.state_id=area.state_id');
		$this->db->join('city','city.city_id=area.city_id');
		$data=$this->db->get()->result();
	
	  return $data;
				
	}
	
	public function showstate()
	  {
			
			
			$state=$this->db->get('state')->result();	
		   
			  return $state;
		  
		  }
		  
		  public function showcity()
	  {
			
			
			$city=$this->db->get('city')->result();	
		   
			  return $city;
		  
		  }

	
	
	public function del($id)
	{
		$this->db->where('area_id',$id);
		$this->db->delete('area');
		}
	
	  public function status($id)
	  {
		  $this->db->where('area_id',$id);
		  $data=$this->db->get('area')->row();
	
	  
		  if($data->astatus=="Active")
		  {
			  
			  $update=array(
			   
			    "astatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "astatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('area_id',$id);
			$this->db->update('area',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('area_id',$id);
			return $this->db->get('area')->row();
			}
			
			
			public function update($id)
			{
				$up=array(
				
				"state_id"=>$this->input->post('state_name'),
				"city_id"=>$this->input->post('city_name'),
				"area_name"=>$this->input->post('area_name'),
				"zip_code"=>$this->input->post('zipcode')
				);
				$this->db->where('area_id',$id);
				$this->db->update('area',$up);
				
				
				}

    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('area_id',$row);
				 $this->db->delete('area'); 
				 
				} 
		   
		   	
	  }

		  public function getcity($id)
	  {
	
		  $this->db->where('state_id',$id);
		  $data=$this->db->get('city')->result();
		//print_r($data);
	  	foreach($data as $row)
		{
			echo "<option value='$row->city_id'>$row->city_name</option>";	
		}
	  
	  }
}
