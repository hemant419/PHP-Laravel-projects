<?php
class offersmodel extends CI_Model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectoffers()
	{
		return $this->db->get('offer')->result();
	}
	public function insertoffer()
	{
		$path="offer/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);
			
		$disc=$this->input->post('disc');
		$offtitle=$this->input->post('offname');
		$offdes=$this->input->post('descrip');
		$startdate=$this->input->post('startdate');
		$enddate=$this->input->post('enddate');
		$status="";
	    if(!$this->upload->do_upload('img'))
		{	
			$file['offer_img1']=$this->upload->display_errors();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$file['page']="offers/addoffer";
			$this->load->view('Template/content',$file);
			
		}
		else
		{	$current=date('Y-m-d');	
			//echo $startdate; 
			if($startdate!=$current){
				$status="Deactive";
				}
			else
				{$status="Active";
				}
			$data=array('upload_data'=>$this->upload->data() );
			$insert=array(
						'offer_img1'=>$data['upload_data']['file_name'],
						'offer_title'=>$offtitle,
						'offer_description'=>$offdes,
						'offer_discount'=>$disc,
						'offer_startdate'=>$startdate,
						'offer_enddate'=>$enddate,
						'offerstatus'=>$status
						);
			$this->db->insert('offer',$insert);
			redirect('offerscontrol/');
		}
	}
	public function editoffer($offer_id)
	{
		$this->db->where('offer_id',$offer_id);
			return $this->db->get('offer')->row();
	}
	public function updateoffer()
	{
		$offer_id=$this->uri->segment(3);
	$status="";
		$path="offer/";
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpeg|jpg|png';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
		
		$offtitle=$this->input->post('offname');
		$offdes=$this->input->post('descrip');
		$startdate=$this->input->post('startdate');
		$enddate=$this->input->post('enddate');
			$disc=$this->input->post('disc');
		
		$current=date('Y-m-d');	
		//$startdate; 
			if($startdate!=$current){
				$status="Deactive";
				}
			else
				{$status="Active";
				}
		if(!empty($_FILES['image']['name']))
		{
			if(!$this->upload->do_upload('image'))
			{
				$file['offer_img1']=$this->upload->display_errors();

				$file['profile']=$this->welcomeModel->profile();
				$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

				$file['offer']=$this->editoffer($offer_id);

				$file['page']="offerscontrol/editoffer";
				$this->load->view('Template/content',$file);
				
			}else
			{
				$this->db->where('offer_id',$offer_id);
				$id=$this->db->get('offer')->row();
				$image=$id->offer_img1;
				$path="offer/";
				$dir=opendir($path);
				
				while($file=readdir($dir))
					{
						if($file==$image)
						{
							unlink($path.$image);
						}
					}
				$data=array('upload_data'=>$this->upload->data() );
				$updateImg=array(
							'offer_img1'=>$data['upload_data']['file_name'],
							'offer_title'=>$offtitle,
							'offer_description'=>$offdes,
							'offer_discount'=>$disc,
							'offer_startdate'=>$startdate,
							'offer_enddate'=>$enddate,		'offerstatus'=>$status
							);
				$this->db->where('offer_id',$offer_id);			
				$this->db->update('offer',$updateImg);
			}
		}else
		{	
			$update=array(
						'offer_discount'=>$disc,
						'offer_title'=>$offtitle,
						'offer_description'=>$offdes,
						'offer_startdate'=>$startdate,
						'offer_enddate'=>$enddate,		'offerstatus'=>$status
						);
			$this->db->where('offer_id',$offer_id);			
			$this->db->update('offer',$update);
		}		
		redirect('offerscontrol/');
		
	}
	public function offerdelete($offer_id)
	{
		$this->db->where('offer_id',$offer_id);
		$id=$this->db->get('offer')->row();
		$image=$id->offer_img1;
		$path="offer/";
		$dir=opendir($path);
		
		while($file=readdir($dir))
			{
				if($file==$image)
				{
				 	unlink($path.$image);
				}
				$this->db->where('offer_id',$offer_id);
				$this->db->delete('offer');
			}
		redirect('offerscontrol/');
	}
	public function updatestatus($offer_id)
	{
		$this->db->where('offer_id',$offer_id);
		$id=$this->db->get('offer')->row();
		$currstatus=$id->offerstatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('offerstatus'=>$statusupdate);
			$this->db->where('offer_id',$id);
			$this->db->update('offer',$update);
			redirect('offerscontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('offerstatus'=>$statusupdate);
			$this->db->where('offer_id',$id);
			$this->db->update('offer',$update);
			redirect('offerscontrol/');
		}
	}
}
?>