<?php
	
class offerM extends CI_Model
{

	public function selectoffer()
	{
		return $this->db->get('offres')->result();
	}
	public function statas($id)
	{
		$this->db->where('offer_id',$id);
		$row=$this->db->get('offres')->row();
		$current=$row->offer_statas;
		
		if($current=="Active")
		{
			$change="Deactive";
			$id=$this->uri->segment(3);
			$update=array("offer_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('offer_id',$id);
			$this->db->update('offres',$update);
		}
		else
		{
			$change="Active";
			$id=$this->uri->segment(3);
			$update=array("offer_statas"=>$change);
			//print_r($update);
			//die();
			$this->db->where('offer_id',$id);
			$this->db->update('offres',$update);
		}
	}
	public function deletedata($id)
	{
		$this->db->where('offer_id',$id);
		$this->db->delete('offres');
	}
	public function editoffer($id)
	{
		$this->db->where('offer_id',$id);
		return $this->db->get('offres')->row();
	}
	public function addoffer()
	{
		$name=$this->input->post('title');
		$name1=$this->input->post('discription');
		$name2=$this->input->post('startdate');
		$name3=$this->input->post('enddate');
		$config['upload_path']='./offerimage/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='1500';
		$config['max_width']='1024';
		$config['max_height']='768';
		$config['encrypt_name']=true;
			
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('img'))
		{
			$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['branddata']=$this->brandM->selectbrand();
		$file['error']=$this->upload->display_errors();

		$file['page']="offers/addnewoffers";
		$this->load->view('Template/content',$file);

					}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
			$insert=array(
			                "offer_img"=>$data['upload_data']['file_name'],
							"offer_title"=>$name,
							"description"=>$name1,
							"startingdate"=>$name2,
							"endingdate"=>$name3
						);
				$this->db->insert('offres',$insert);
				redirect('offerControl');
		}
		
	}
	public function updatedata()
	{
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		echo $name;
		
		$name1=$this->input->post('discription');
		$name2=$this->input->post('startdate');
		$name3=$this->input->post('enddate');
		$config['upload_path']='./offerimage/';
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
			print_r($file['imgerr']);
			$this->load->view('offers/editoffers');
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data());
				
				$update=array
						 (
						  "offer_img"=>$data['upload_data']['file_name'],
						  );
			$this->db->where('offer_id',$id);
			$this->db->update('offres',$update);
		}
	}
		else
		{
			
			$update=array(
			              	
							"offer_title"=>$name,
							"description"=>$name1,
							"startingdate"=>$name2,
							"endingdate"=>$name3
						);
				$this->db->where('offer_id',$id);
				$this->db->update('offres',$update);
		}
		
	}
}
?>