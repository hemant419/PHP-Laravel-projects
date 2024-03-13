<?php
class Brandm extends CI_Model
{
	
	  
	public function insert()
	{
		
		$config['upload_path']='./Brand/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='2500';
		$config['max_width']='2024';
		$config['max_height']='2768';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('img'))
		{
			$error=$this->upload->display_errors();
			echo $error;
			die();	
		}
		else
		{
			$data=array(
			'upload_data' => $this->upload->data()
			);	
			
		}
	  $arr=array(
			  "brand_name"=>$this->input->post('brand_name'),
			
			  "brand_image"=>$data['upload_data']['file_name'],
			 
			    );
	  $this->db->insert('brand',$arr);
			  
	}

	
	public function getdata()
	{
		$data=$this->db->get('brand')->result();	
		return $data;
	}
	
	
	public function del($id)
	{
		$this->db->where('brand_id',$id);
		$this->db->delete('brand');
		}
	
	  public function status($id)
	  {
		  $this->db->where('brand_id',$id);
		  $data=$this->db->get('brand')->row();
	
	  
		  if($data->bstatus=="Active")
		  {
			  
			  $update=array(
			   
			    "bstatus"=>"Deactive"
			  );
			  
			  }
			  
			  else
			  {
			
			
				  $update=array(
			   
			    "bstatus"=>"Active"
			  );
				  }
		  	
			
			$this->db->where('brand_id',$id);
			$this->db->update('brand',$update);
	 
		  
		  }
		  
		    
		
		
		   public function edit($id)
		   {
			
			$this->db->where('brand_id',$id);
			return $this->db->get('brand')->row();
			   
			}
			
			
			public function update($id)
			{
		
		$config['upload_path']='./Brand/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='2500';
		$config['max_width']='2024';
		$config['max_height']='2768';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('img'))
		{
			$error=$this->upload->display_errors();
			echo $error;
			die();	
		}
		else
		{
			$data=array(
			'upload_data' => $this->upload->data()
			);	
			
		}
	             $up=array(
			   "brand_name"=>$this->input->post('brand_name'),
			   "brand_image"=>$data['upload_data']['file_name'],
			  
			    );
	 
	            $this->db->where('brand_id',$id);
				$this->db->update('brand',$up);
				
				
				}
			
    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('brand_id',$row);
				 $this->db->delete('brand'); 
				 
				} 
		   
		   	
	  }

		  
}
