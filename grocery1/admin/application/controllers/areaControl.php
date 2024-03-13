<?php

class areaControl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('adminM');
		$this->load->model('cityM');
		$this->load->model('stateM');
		$this->load->model('areaM');
	}
	public function index()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['citydata']=$this->cityM->selectcity();
		$file['areadata']=$this->areaM->selectarea();
		//print_r($file['areadata']);die();
		$file['page']="area/area";
		$this->load->view('Template/content',$file);
	}
	public function addarea()
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['citydata']=$this->cityM->selectcity();
		$file['page']="area/addarea";
		$this->load->view('Template/content',$file);
	}
	public function insertdata()
	{
		$this->input->post('state');
		$this->input->post('city');
		$this->input->post('area');
		$this->areaM->insertarea();
		redirect('areaControl');
	}
	public function statas($id)
	{
		$this->areaM->statas($id);
		redirect('areaControl');
	}
	public function deletearea($id)
	{
		$this->areaM->deteledata($id);
		redirect('areaControl');
	}
	public function editarea($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['statedata']=$this->stateM->selectstate();
		$file['citydata']=$this->cityM->selectcity();
		$file['editarea']=$this->areaM->editdataarea($id);
		$file['page']="area/editarea";
		$this->load->view('Template/content',$file);
	}
	public function updatecity()
	{
		$this->input->post('sid');
		$this->input->post('state');
		$this->input->post('city');
		$this->cityM->cityupdate();
		redirect('cityControl');
	}
	public function updatedata()
	{
		$this->areaM->updatearea();
		redirect('areaControl');
	}
	public function city($id)
	{
		$this->db->where('state_id',$id);
		$result=$this->db->get('city_master')->result();
		?>
        <option value="">select Any</option>
        <?php
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option>
        <?php
		}
	}
	public function editcity($id)
	{
		$this->db->where('state_id',$id);
		$result=$this->db->get('city_master')->result();
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->city_id ?>"><?php echo $row->city_name ?></option>
        <?php
		}
	}
	
}
?>