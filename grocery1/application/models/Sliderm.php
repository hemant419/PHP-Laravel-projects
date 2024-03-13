<?php
class Sliderm extends CI_Model
{
	
	  
	public function insert()
	{
		
		$config['upload_path']='./Slider/';
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
			    "slider_image"=>$data['upload_data']['file_name'],
				
				"title"=>$this->input->post('title'),
			 
			    );
	  $this->db->insert('slider',$arr);
			  
	}

	
	public function getdata()
	{
		$data=$this->db->get('slider')->result();	
		return $data;
	}
	
	
	public function del($id)
	{
		$this->db->where('slider_id',$id);
		$this->db->delete('slider');
		}
	
	  public function status($id)
	  {
		  $this->db->where('slider_id',$id);
		  $data=$this->db->get('slider')->row();
	
	  
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
		  	
			
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
	 
		  
		  }
		  
		    
		
		
		   public function edit($id)
		   {
			
			$this->db->where('slider_id',$id);
			return $this->db->get('slider')->row();
			   
			}
			
			
			public function update($id)
			{
		
		$config['upload_path']='./Slider/';
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
			   "slider_image"=>$data['upload_data']['file_name'],
			   
			   "title"=>$this->input->post('title'),
			  
			    );
	 
	            $this->db->where('slider_id',$id);
				$this->db->update('slider',$up);
				
				
				}
			
    public function deleteall()
	  {
	      $data=$this->input->post('chk');
		   
		     foreach ($data as $row)
			 {
				 $this->db->where('slider_id',$row);
				 $this->db->delete('slider'); 
				 
				} 
		   
		   	
	  }

		  
}
