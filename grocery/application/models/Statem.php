<?php
class Statem extends CI_Model
{
	public function insert()
	{
	   $arr=array(
			  "countryid"=>$this->input->post('cname'),
			  
			  "sname"=>$this->input->post('snm')
			    );
				
				
	  $this->db->insert('state',$arr);
			  
	}

	public function getdata()
	{
		$this->db->select('*');
		$this->db->from('state');
			
		
		$data=$this->db->get()->result();	
		 
		return $data;	
		
	}
	public function showcountry()
	  {
			
			
			$data=$this->db->get('state')->result();	
		   
			  return $data;
		  
		  }
	
	
	
	public function del($id)
	{
		$this->db->where('stateid',$id);
		$this->db->delete('state');
		}
	
	  public function status($id)
	  {
		  $this->db->where('stateid',$id);
		  $data=$this->db->get('state')->row();
	
	  
		  if($data->sstatus=="Active")
		  {
			  
			  $update=array(
			   
			    "sstatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "sstatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('stateid',$id);
			$this->db->update('state',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('stateid',$id);
			return $this->db->get('state')->row();
			   
			}
			
			
			public function update($id)
			{
				$up=array(
				
				"sname"=>$this->input->post('cat')
				
				);
				$this->db->where('stateid',$id);
				$this->db->update('state',$up);
				
				
				}

    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('stateid',$row);
				 $this->db->delete('state'); 
				 
				} 
		   
		   	
	  }

		  
}
