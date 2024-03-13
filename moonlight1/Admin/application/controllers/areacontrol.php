<?php
class areacontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		
		$this->load->model('countDatabaseEntry');
		$this->load->model('statemodel');
		$this->load->model('citymodel');
		$this->load->model('areaModel');
		if(($this->session->userdata('Admin')=="") && ($this->session->userdata('Password')==""))
		{
			redirect('welcome/');
		}else if(($this->session->userdata('Password')==""))
		{
					redirect('welcome/locked');
		}
	}
	public function index()
	{
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
				
		$file['area']=$this->areaModel->selectarea();
		$file['page']="Area/area";
		$this->load->view('Template/content',$file);
	}
	public function addarea()
	{
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
	
		$file['state']=$this->statemodel->selectstate();
		$file['city']=$this->citymodel->selectcity();
		$file['page']="Area/addarea";
		$this->load->view('Template/content',$file);
	}
	public function insertarea()
	{
		$this->areaModel->insertarea();
	}
	public function areastatus($area_id)
	{
		$this->areaModel->updatestatus($area_id);
	}
	public function selectCityEdit($state_id,$area_id)
	{
		$this->db->where('state_id',$state_id);
		$city=$this->db->get('city')->result();
		$area=$this->areaModel->editarea($area_id);
		 foreach($city as $data){ ?>
								
							    <option value="<?php echo $data->city_id;  ?>" <?php echo ($data->city_id==$area->city_id)?"selected='selected'":null ?>>
										<?php echo $data->city_name ;?>
								</option>
                            <?php } 


	}
	public function Editarea($area_id)
	{
				$file['profile']=$this->welcomeModel->profile();
				$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

				$file['state']=$this->statemodel->selectstate();
				$file['city']=$this->citymodel->selectcity();
				$file['area']=$this->areaModel->editarea($area_id);
				$file['page']="Area/editarea";
				$this->load->view('Template/content',$file);
	}
	public function updatearea($area_id)
	{
		$this->areaModel->updatearea();
	}
	public function Deletearea($area_id)
	{
		$this->areaModel->deletearea($area_id);
	}
	public function selectcity($id)
	{
		$this->areaModel->selectcity($id);
	}
	public function state($id)
	{
		$this->db->where('state_id',$id);
		$result=$this->db->get('city')->result();
		foreach($result as $row)
		{
?><option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option>
<?php 		}
	}
	public function	stateArea($id)
		{
			$this->db->where('state_id',$id);
				$result=$this->db->get('city')->result();
				foreach($result as $row)
		{
?><option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option>
<?php 		}

			}
		
}
?>