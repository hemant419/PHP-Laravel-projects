<?php
class Newsm extends CI_Model
{
	public function insert()
	{
	  $arr=array(
			  "timage"=>$this->input->post('timg'),
			  "title"=>$this->input->post('tle'),
			  "tdesc"=>$this->input->post('tds'),
			    );
	  $this->db->insert('todaynews',$arr);
			  
	}

	public function getdata()
	{
		$data=$this->db->get('todaynews')->result();	
		return $data;
	}
	
	
	public function del($id)
	{
		$this->db->where('cid',$id);
		$this->db->delete('category');
		}
	
	  public function status($id)
	  {
		  $this->db->where('cid',$id);
		  $data=$this->db->get('category')->row();
	
	  
		  if($data->catgstatus=="Active")
		  {
			  
			  $update=array(
			   
			    "catgstatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "catgstatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('cid',$id);
			$this->db->update('category',$update);
	 
		  
		  }
		  
		  
		   public function edit($id)
		   {
			
			$this->db->where('cid',$id);
			return $this->db->get('category')->row();
			   
			}
			
			
			public function update($id)
			{
				$up=array(
				
				"catgname"=>$this->input->post('cat')
				);
				$this->db->where('cid',$id);
				$this->db->update('category',$up);
				
				
				}

    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('cid',$row);
				 $this->db->delete('category'); 
				 
				} 
		   
		   	
	  }

		  
}
