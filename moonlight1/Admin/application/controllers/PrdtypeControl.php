<?php
class PrdtypeControl extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('categoryModel');
		$this->load->model('prdTypeModel');

		$this->load->model('countDatabaseEntry');
		$this->load->model('subcategoryModel');

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
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['prdType']=$this->prdTypeModel->selectPrdtype();
		$file['page']="prdType/prdType";
		$this->load->view('Template/content',$file);
	}
	public function addPrdType()
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

//load Product Type view Page
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();			
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['page']="prdType/addPrdtype";
		$this->load->view('Template/content',$file);
	}
	public function selectsub($cat_id)
	{
		$this->db->where('cat_id',$cat_id);		
		$subcatdata=$this->db->get('subcategory')->result();	
		//print_r($file['subcatdata']);
?>
		<option value="">Select Subcategory</option>
<?php		
		 foreach($subcatdata as $datasubCat){?>
		<option value="<?php echo $datasubCat->subcat_id; ?>">
				<?php echo $datasubCat->subcat_name; ?>
		</option> 
<?php										 } 
	}
	public function insertPrdtype()
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$file['Brand_name']="";$file['Brand_img']="";
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
			$this->prdTypeModel->insert();
	}
	public function selectsubEdit($ptype_id)
	{
		$this->db->where('ptype_id',$ptype_id);
		$ptype=$this->db->get('product_type')->row();
		$cat_id=$ptype->cat_id;
		
		$this->db->where('cat_id',$cat_id);
		$subcatdata=$this->db->get('subcategory')->result();
?>			
<?php	 foreach($subcatdata as $dataSub)
		{
?>			 <option value="<?php echo $dataSub->subcat_id; ?>"
			<?php  echo ($dataSub->subcat_id==$ptype->subcat_id) ? "selected='selected'":null ;?> >
						 	<?php echo $dataSub->subcat_name; ?>
			</option>
<?php 	} 		

	}
	public function editPrdtype($ptype_id)
	{
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();			
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['prdtype']=$this->prdTypeModel->editPtype($ptype_id);
		
		$file['page']="prdType/EditPrdtype";
		$this->load->view('Template/content',$file);
	}
	public function updatePtype($ptype_id)
	{
		
		$this->prdTypeModel->updatePtype($ptype_id);
	
	}
	
	public function prdtypeStatus($ptype_id)
	{
		$this->prdTypeModel->updatestatus($ptype_id);
	}
	public function DeletePrdtype($ptype_id)
	{
		$this->prdTypeModel->deletePrdtype($ptype_id);
	}
}
?>