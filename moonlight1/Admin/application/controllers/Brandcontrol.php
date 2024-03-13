<?php
class Brandcontrol extends CI_Controller
{
	public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('Brandmodel');
	
		$this->load->model('countDatabaseEntry');
		$this->load->model('categoryModel');
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
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
				
		$file['Brand']=$this->Brandmodel->selectBrand();
		$file['page']="Brand/Brand";
		$this->load->view('Template/content',$file);
	}
	public function addBrand()
	{
	//load addBrand view Page
		$file['Brand_name']="";$file['Brand_img']="";
		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();	
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();
		
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();			
		//$file['Brand']=$this->Brandmodel->selectBrand();
		$file['page']="Brand/addBrand";
		$this->load->view('Template/content',$file);
	}
	public function selectSubcat($id)
	{
		$this->db->where('cat_id',$id);
		$subData=$this->db->get('subcategory')->result();
?> 

		<option value=""> Select Subcategory</option>
<?php		
		foreach($subData as $dataSub){?>
                         <option value="<?php echo $dataSub->subcat_id; ?>">
						 	<?php echo $dataSub->subcat_name; ?>
						</option>
<?php } 

	}
	public function insertBrand()
	{
			$file['Brand_name']="";$file['Brand_img']="";
			$file['profile']=$this->welcomeModel->profile();
			$file['finalProfile']=$this->welcomeModel->profileProgress();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

			$this->Brandmodel->insertBrand();
	}
	public function EditBrand($Brand_id)
	{
		$file['Brand_name']="";$file['Brand_img']="";
		//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();
		$file['Brand']=$this->Brandmodel->editBrand($Brand_id);
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();			
		
		$file['page']="Brand/EditBrand";
		$this->load->view('Template/content',$file);
	}public function selectSubcatEdit($brand_id)
	{
			$Brand=$this->Brandmodel->editBrand($brand_id);
			$cat_id=$Brand->cat_id;
			$this->db->where('cat_id',$cat_id);
			$subcategory=$this->db->get('subcategory')->result();
?> 			
			<option value="">	Select Category	</option>
<?php  foreach($subcategory as $datasubCat){?>
			<option value="<?php echo $datasubCat->subcat_id; ?>" <?php echo ($datasubCat->subcat_id==$Brand->subcat_id ? "selected='selcted'":null)?>>
									<?php echo $datasubCat->subcat_name; ?></option> 
							 <?php } 
		
	}
	public function updateBrand($Brand_id)
	{
		$file['Brand_name']="";$file['Brand_img']="";
		$this->Brandmodel->updateBrand($Brand_id);
	}
	public function Brandstatus($Brand_id)
	{
		$this->Brandmodel->updatestatus($Brand_id);
	}
	public function DeleteBrand($Brand_id)
	{
		$this->Brandmodel->Branddelete($Brand_id);
	}
}
?>