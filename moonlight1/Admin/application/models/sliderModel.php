<?php
class sliderModel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectSlider()
	{
				$this->db->order_by('slider_id','desc');
		return $this->db->get('slider')->result();
	}
	public function insertSlider()
	{
		$path="slider/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		$file['imgErr']="";
		$title=$this->input->post('title');
		
		if(!$this->upload->do_upload('img'))
		{
			$file['imgErr']=$this->upload->display_errors();
		//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['page']="slider/addSlider";
			$this->load->view('Template/content',$file);
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data() );
			$insert=array(
						'slider_title'=>$title,
						'slider_img'=>$data['upload_data']['file_name']
						);
			$this->db->insert('slider',$insert);
		}	
		redirect('sliderControl/');
					
	}
	public function deleteSlider($id)
	{
		$this->db->where('slider_id',$id);
		$slider=$this->db->get('slider')->row();
		$path="./slider/";
		$image=$slider->slider_img;
		$dir=opendir($path);
			
			while($file=readdir($dir))
			{
				if($file==$image)
				{
				 	unlink($path.$image);
				}
			$this->db->where('slider_id',$id);
			$this->db->delete('slider');
			}
		redirect('sliderControl/');
	}
	public function editSlider($id)
	{
		$this->db->where('slider_id',$id);
		return $this->db->get('slider')->row();
	}
	public function updateSlider()
	{
		$sliderId=$this->uri->segment(3);$file['imgErr']="";
		$title=$this->input->post('title');
			
		$path="slider/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		
		if(!empty($_FILES['img']['name']))
		{
			if(!$this->upload->do_upload('img'))
			{
				$file['imgErr']=$this->upload->display_errors();

//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

				$file['profile']=$this->welcomeModel->profile();
				$file['finalProfile']=$this->welcomeModel->profileProgress();
				$file['slider']=$this->editSlider($sliderId);
			
				$file['page']="slider/editSlider";
				$this->load->view('Template/content',$file);
			}else
			{
				$this->db->where('slider_id',$sliderId);
				$slider=$this->db->get('slider')->row();
				$path="./slider/";
				$image=$slider->slider_img;
				$dir=opendir($path);
					
					while($file=readdir($dir))
					{
						if($file==$image)
						{
							unlink($path.$image);
						}
					}
				$data=array('upload_data'=>$this->upload->data() );
				$update=array(
							'slider_title'=>$title,
							'slider_img'=>$data['upload_data']['file_name']
							);
				$this->db->where('slider_id',$sliderId);			
				$this->db->update('slider',$update);
				redirect('sliderControl/');
			}
		}else
		{		
				$updateBrand=array(	'slider_title'=>$title);
				$this->db->where('slider_id',$sliderId);			
				$this->db->update('slider',$updateBrand);
				redirect('sliderControl/');
		}
		
	}
	public function status($id)
	{
		$this->db->where('slider_id',$id);
		$id=$this->db->get('slider')->row();
		$currstatus=$id->sliderstatus;
		
		if($currstatus=="Active"){
		
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('sliderstatus'=>$statusupdate);
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
			redirect('sliderControl/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('sliderstatus'=>$statusupdate);
			$this->db->where('slider_id',$id);
			$this->db->update('slider',$update);
			redirect('sliderControl/');
		}
	}
}
?>