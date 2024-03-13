<?php
	class Brandmodel extends CI_Model
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('welcomeModel');
			$this->load->model('subcategoryModel');

		}
	public function selectBrand()
	{
				$this->db->from('cetegory');
				$this->db->join('subcategory','subcategory.cat_id=cetegory.cat_id');

				$this->db->join('brand','brand.subcat_id=subcategory.subcat_id');
				$this->db->order_by('brand.brand_id','desc');	
		return $this->db->get()->result();
			
	}
	public function insertBrand()
	{
		$path="Brand";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		$file['Brand_img']="";
		$Bname=$this->input->post('Bname');
		$catId=$this->input->post('catId');
		$subcatId=$this->input->post('subcatId');
		
		if(!$this->upload->do_upload('img'))
		{
			$file['Brand_img']=$this->upload->display_errors();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['page']="Brand/addBrand";
			$this->load->view('Template/content',$file);
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data() );
			$insert=array(
						'cat_id'=>$catId,
						'subcat_id'=>$subcatId,
						'brand_name'=>$Bname,
						'brand_img'=>$data['upload_data']['file_name']
						);
			$this->db->insert('brand',$insert);
			redirect('Brandcontrol/');
							
		}
	}
	public function editBrand($Brand_id)
	{
			$this->db->where('brand_id',$Brand_id);
			return $this->db->get('brand')->row();
		}
		
	public function updateBrand($Brand_id)
	{
		$path="Brand/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		$file['Brand_img']="";
		$catId=$this->input->post('catId');
		$Bname=$this->input->post('Bname');
		$subcatId=$this->input->post('subcatId');
		if(!empty($_FILES['img']['name']))
		{
			if(!$this->upload->do_upload('img'))
			{
				$file['Brand_img']=$this->upload->display_errors();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

				$file['profile']=$this->welcomeModel->profile();
				$file['finalProfile']=$this->welcomeModel->profileProgress();
				$file['Brand']=$this->editBrand($Brand_id);
			
				$file['page']="Brand/EditBrand";
				$this->load->view('Template/content',$file);
			}else
			{
				$this->db->where('brand_id',$Brand_id);
				$id=$this->db->get('brand')->row();
				$image=$id->brand_img;
				$path="Brand/";
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
							'cat_id'=>$catId,
							'subcat_id'=>$subcatId,
							'brand_name'=>$Bname,
							'brand_img'=>$data['upload_data']['file_name']
							);
				$this->db->where('brand_id',$Brand_id);			
				$this->db->update('brand',$update);
				redirect('Brandcontrol/');
			}		
		}else{
				$updateName=array('subcat_id'=>$subcatId,
								'brand_name'=>$Bname	);
	
				$this->db->where('brand_id',$Brand_id);			
				$this->db->update('brand',$updateName);
				redirect('Brandcontrol/');
			}			
	}
	public function updatestatus($Brand_id)
	{
		$this->db->where('brand_id',$Brand_id);
		$id=$this->db->get('brand')->row();
		$currstatus=$id->brand_status;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('brand_status'=>$statusupdate);
			$this->db->where('brand_id',$id);
			$this->db->update('brand',$update);
			redirect('Brandcontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('brand_status'=>$statusupdate);
			$this->db->where('brand_id',$id);
			$this->db->update('brand',$update);
			redirect('Brandcontrol/');
		}
		}
		public function Branddelete($Brand_id)
		{
			$this->db->where('brand_id',$Brand_id);
			$id=$this->db->get('brand')->row();
			$image=$id->brand_img;
			$path="Brand/";
			$dir=opendir($path);
			
			while($file=readdir($dir))
			{
				if($file==$image)
				{
				 	unlink($path.$image);
				}
				$this->db->where('brand_id',$Brand_id);
										
				$this->db->delete('brand');
			}	
		redirect('Brandcontrol/');
		}
	}
?>