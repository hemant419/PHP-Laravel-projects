
<?php
	
class brandM extends CI_Model
{

	public function selectbrand()
	{
		$this->db->from('sub_categery_master');
		$this->db->join('brand','brand.s_id=sub_categery_master.s_id');
		return $this->db->get()->result(); 
	}
	public function statas($id)
	{
		$this->db->where('brand_id',$id);
		$row=$this->db->get('brand')->row();
		$current=$row->brand_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("brand_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('brand_id',$id);
			$this->db->update('brand',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("brand_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('brand_id',$id);
			$this->db->update('brand',$update);
		}
	}
	public function deletedata($id)
	{
		$this->db->where('brand_id',$id);
		$this->db->delete('brand');
	}
	public function editbrand($id)
	{
		$this->db->where('brand_id',$id);
		return $this->db->get('brand')->row();
	}
	public function brandadd()
	{	$subcategeryid=$this->input->post('subcategery');
		$name=$this->input->post('brandname');
		$config['upload_path']='./brandimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('img'))
		{
			$file['error']=$this->upload->display_errors();
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array(
			              	"s_id"=>$subcategeryid,
							"brand_name"=>$name,
			                "brand_image"=>$data['upload_data']['file_name']
						);
				$this->db->insert('brand',$insert);
		}
		
	}
	public function updatedata()
	{
		$subcategeryid=$this->input->post('subcategery');
		$id=$this->input->post('id');
		$name=$this->input->post('brandname');
		$config['upload_path']='./brandimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('img'))
		{
			$file['error']=$this->upload->display_errors();
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$update=array(
							"s_id"=>$subcategeryid,
			              	"brand_name"=>$name,
			                "brand_image"=>$data['upload_data']['file_name']
						);
				$this->db->where('brand_id',$id);
				$this->db->update('brand',$update);
		}
		
	}
		
}
?>