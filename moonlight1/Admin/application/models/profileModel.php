<?php
class profileModel extends CI_Model
{
	public function setpicture()
	{
		$adminId=$this->session->userdata('AdminId');
		
		$path="profile/".$adminId;
		
			if(!is_dir($path))
			{
				mkdir($path,0777);
				$this->upload($path);}
			else{
					$this->upload($path);			
			}
	}
	public function upload($path)
	{	
		$config['upload_path']=$path;
		$config['max_size']='1500';
		$config['allowed_types']='gif|jpg|jpeg|png';
		$config['encrypt_name']=true;
		$this->load->library('upload',$config);	
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				

		if(!$this->upload->do_upload('pic'))
		{
			$file['imgErr']=$this->upload->display_errors();
			$file['page']="profile/profile";
			$this->load->view('Template/content',$file);
		}
		else
		{
			$email=$this->session->userdata('Admin');			
			$data=array(	'upload_data'=>$this->upload->data() );
			
			$update=array(	'apic'=>$data['upload_data']['file_name'],
							);
			$this->db->where('aemail',$email);
									
			$this->db->update('admin_mstr',$update);
			redirect('welcome/profile');
			}
	}
	public function personalProfile()
	{
		$file['profile']="";	
		$quite=$this->input->post('quite');
		$password=$this->input->post('password');
		$gender=$this->input->post('gender');
		$LastName=$this->input->post('LastName');
		$FirstName=$this->input->post('FirstName');
		//
		$email=$this->session->userdata('Admin');
		$pass=$this->session->userdata('Password');
		
			$update=array(	"aname"=>$FirstName,"alastname"=>$LastName,
									"agender"=>$gender,"aquite"=>$quite);
					$this->db->where('aemail',$email);
					$this->db->update('admin_mstr',$update);
					redirect('cprofile/resident');
	}
	public function residentProfile()
	{
		$email=$this->session->userdata('Admin');
		$address=$this->input->post('add');
		$city=$this->input->post('city');
		$country=$this->input->post('country');
		$zip=$this->input->post('zip');
		$state=$this->input->post('state');
				
		$update=array(	"aaddress"=>$address,"acity"=>$city,"azip"=>$zip,"astate"=>$state,"acountry"=>$country);
					$this->db->where('aemail',$email);
					$this->db->update('admin_mstr',$update);
					redirect('cprofile/contact');
		
	}
	public function contactProfile()
	{
		$email=$this->session->userdata('Admin');
		$mobile=$this->input->post('mobile');
		$alterEmail=$this->input->post('alterEmail');
		
		$update=array(	"acontact"=>$mobile,"aalterEmail"=>$alterEmail);
					$this->db->where('aemail',$email);
					$this->db->update('admin_mstr',$update);
					redirect('welcome/profile');
	}
}
?>