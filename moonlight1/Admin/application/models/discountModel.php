<?php 
class discountModel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectDiscount()
	{
		//$this->db->from('product');
		//$this->db->join('discount','product.prd_id=discount.prd_id');
	
		return $this->db->get('discount')->result();
	}
	public function insertDiscount()
	{
		$path="discount";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		
		$discount=$this->input->post('discount');
		
		if(!$this->upload->do_upload('img'))
		{
			$file['disc_img']=$this->upload->display_errors();
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['page']="discount/addDiscount";
			$this->load->view('Template/content',$file);
		}
		else
		{
			$data=array('upload_data'=>$this->upload->data() );
			$insert=array(
						'discount'=>$discount,
						'discount_img'=>$data['upload_data']['file_name']
						);
			$this->db->insert('discount',$insert);
			redirect('discountcontrol/');
							
		}
	}
	public function editDiscount($id)
	{
			$this->db->where('discount_id',$id);
			return $this->db->get('discount')->row();
	}
	public function updateDiscount($id)
	{
		$path="discount/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		
		if(!empty($_FILES['img']['name']))
		{
			if(!$this->upload->do_upload('img'))
			{
				$file['discount_img']=$this->upload->display_errors();
				//Notifiaction 
	
				$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
				$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
				$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
				$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
				$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
	
				$file['profile']=$this->welcomeModel->profile();
				$file['finalProfile']=$this->welcomeModel->profileProgress();
				$file['discount']=$this->editDiscount($id);
			
				$file['page']="discount/editDiscount";
				$this->load->view('Template/content',$file);
			}else
			{
				$this->db->where('discount_id',$id);
				$discount=$this->db->get('discount')->row();
				$image=$discount->discount_img;
				$path="discount/";
				$dir=opendir($path);
				
				while($file=readdir($dir))
				{
					if($file==$image)
					{
						unlink($path.$image);
					}
				}	
				$discount=$this->input->post('discount');
	
				$data=array('upload_data'=>$this->upload->data() );
				$update=array(
						'discount'=>$discount,'discount_img'=>$data['upload_data']['file_name']
							);
			$this->db->where('discount_id',$id);			
			$this->db->update('discount',$update);
			redirect('discountcontrol/');
			}		
		}else{
				$discount=$this->input->post('discount');
	
				$updateName=array('discount'=>$discount	);
	
				$this->db->where('discount_id',$id);			
				$this->db->update('discount',$updateName);
				redirect('discountcontrol/');
			}			
	}
	public function deleteDiscount($id)
	{
		$this->db->where('discount_id',$id);
		$discount=$this->db->get('discount')->row();
		$image=$discount->discount_img;
		$path="discount/";
		$dir=opendir($path);
		
		while($file=readdir($dir))
		{
			if($file==$image)
			{
				unlink($path.$image);
			}
		}	
		$this->db->where('discount_id',$id);
		$this->db->delete('discount');
		redirect('discountcontrol/');
	}
	public function statusUpdate($id)
	{
		$this->db->where('discount_id',$id);
		$id=$this->db->get('discount')->row();
		$currstatus=$id->discount_status;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			
			$id=$this->uri->segment(3);
			
			$update=array('discount_status'=>$statusupdate);
			$this->db->where('discount_id',$id);
			$this->db->update('discount',$update);
			redirect('discountcontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('discount_status'=>$statusupdate);
			$this->db->where('discount_id',$id);
			$this->db->update('discount',$update);
			redirect('discountcontrol/');
		}
	}
}
?>