<?php
class sliderM extends CI_Model
{
	public function selectslider()
	{
		return $this->db->get('slider')->result();
	}
	public function statasslider($id)
	{
		$this->db->where('slider_id',$id);
		$row=$this->db->get('slider')->row();
		$current=$row->statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
		}
	}
	public function deletedata($id)
	{
		$this->db->where('slider_id',$id);
		$this->db->delete('slider');
	}
	public function sliderdata()
	{
		$title=$this->input->post('title');
		$config['upload_path']='./sliderimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
//		$config['max_size']='1500';
//		$config['max_width']='1024';
//		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('img'))
		{
			
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['error']=$this->upload->display_errors();
		$file['sliderdata']=$this->sliderM->selectslider();
		$file['page']="slider/addnewslider";
		$this->load->view('Template/content',$file);
			
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array(
			                "slider_image"=>$data['upload_data']['file_name'],
							"slider_title"=>$title
						);
				$this->db->insert('slider',$insert);
				redirect('sliderControl');
		}
	}
	public function editdata($id)
	{
		$this->db->where('slider_id',$id);
		return $this->db->get('slider')->row();
	}
	public function updatedata()
	{

		$id=$this->input->post('id');
		$title=$this->input->post('title');
		$config['upload_path']='./sliderimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(!empty($_FILES['img']['name']))
	{
		if(! $this->upload->do_upload('img'))
		{
			$file['error']=$this->upload->display_errors();
			print_r($file['error']);
			$this->load->view('slider/editslider');
		}
		else
		{
			
			
				$data=array('upload_data'=>$this->upload->data());
				
				$update=array
						 (
						  "slider_image"=>$data['upload_data']['file_name'],
						  );
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
			
		}
		
	}
		
		else
		{

			//$data=array('upload_data'=>$this->upload->data());
			$update=array(
			                
							"slider_title"=>$title
						);
				$this->db->where('slider_id',$id);
				$this->db->update('slider',$update);
					}
	}
}
?>