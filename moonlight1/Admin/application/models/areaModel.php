<?php
class areaModel extends CI_model
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
	}
	public function selectarea()
	{
			$this->db->from('state');
			$this->db->join('city','state.state_id=city.state_id');
			$this->db->join('area','city.city_id=area.city_id');
			return $this->db->get()->result();
	}
	public function insertarea()
	{
		$Stateid=$this->input->post('StaId');
		$cityid=$this->input->post('cityId');
		$areaname=$this->input->post('areaname');
		$areapin=$this->input->post('areapin');
		
		$insert=array(
						'city_id'=>$cityid,
						'state_id'=>$Stateid,
						'area_name'=>$areaname,
						'area_pincode'=>$areapin
						
						);
			$this->db->insert(' area',$insert);
			redirect('areacontrol/');
	}
	public function updatestatus($area_id)
	{
		$this->db->where('area_id',$area_id);
		$id=$this->db->get('area')->row();
		$currstatus=$id->areastatus;
		
		if($currstatus=="Active"){
			$statusupdate="Deactive";
			$id=$this->uri->segment(3);
			$update=array('areastatus'=>$statusupdate);
			$this->db->where('area_id',$id);
			$this->db->update('area',$update);
			redirect('areacontrol/');
		}
		else
		{
			$statusupdate="Active";
			$id=$this->uri->segment(3);
			$update=array('areastatus'=>$statusupdate);
			$this->db->where('area_id',$id);
			$this->db->update('area',$update);
			redirect('areacontrol/');
		}
	}
	public function selectCityEdit($area_id)
	{
		$this->db->where('area_id',$area_id);
		return $this->db->get('area')->row();
	}
	public function editarea($area_id)
	{
		$this->db->where('area_id',$area_id);
		return $this->db->get('area')->row();
	}
	public function updatearea()
	{
		$area_id=$this->uri->segment(3);
		$Stateid=$this->input->post('StaId');
		$cityid=$this->input->post('cityId');
		$areaname=$this->input->post('areaname');
		$areapin=$this->input->post('areapin');
		
		$update=array(
						'city_id'=>$cityid,
						'state_id'=>$Stateid,
						'area_name'=>$areaname,
						'area_pincode'=>$areapin
						
						);
		$this->db->where('area_id',$area_id);			
		$this->db->update('area',$update);
		redirect('areacontrol/');
	}
	public function deletearea($area_id)
	{
		$this->db->where('area_id',$area_id);
		$this->db->delete('area');
		redirect('areacontrol/');
	}
	public function selectcity($state_id)
	{
			$this->db->where('city_id',$state_id);
			$result=$this->db->get('city')->result();
		
		 foreach($result as $data){ ?>
		<option value="<?php echo $data->city_id;  ?>">
			<?php echo $data->city_name ;?>
		</option>
<?php }

	}
}
?>