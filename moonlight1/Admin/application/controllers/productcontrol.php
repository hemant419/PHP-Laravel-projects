<?php 
class productcontrol extends CI_Controller
{
    public function __construct()
	{
		parent ::__construct();
		$this->load->model('welcomeModel');
		$this->load->model('productModel');
		$this->load->model('Brandmodel');
		$this->load->model('categoryModel');
		$this->load->model('prdTypeModel');

		$this->load->model('countDatabaseEntry');
		$this->load->model('subcategoryModel');
		$this->load->model('offersmodel');
		
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
		$file['product']=$this->productModel->selectProduct();				
			
		$file['page']="product/product";
		$this->load->view('Template/content',$file);
	}
	public function addProduct()
	{
		$file['offers']=$this->offersmodel->selectoffers();
//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['imgErr1']="";$file['imgErr2']="";$file['imgErr3']="";
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();
		$file['Brand']=$this->Brandmodel->selectBrand();
		$file['prdType']=$this->prdTypeModel->selectPrdtype();
		$file['page']="product/addProduct";
		$this->load->view('Template/content',$file);
	}
	public function selectSubcat($id)
	{
		$this->productModel->selectSubcat($id);
	}
	public function selectBrand($id)
	{
		$this->productModel->selectBrand($id);

	}
	public function insertProduct()
	{	//image
		$this->productModel->insertProduct();
	}
	public function selectSubcatEdit($cat_id,$prd_id)
	{
		$this->db->where('cat_id',$cat_id);
		$catdata=$this->db->get('cetegory')->row();
		
		if($catdata->cat_name=="Mens" || $catdata->cat_name=="Womens" || $catdata->cat_name=="Baby & Kids")
		{
			echo "1"; 
		}
		$this->db->where('cat_id',$cat_id);
		$data=$this->db->get('subcategory')->result();
		$product=$this->productModel->editProduct($prd_id);
?>			
<?php	 foreach($data as $dataSub)
		{
?>			 <option value="<?php echo $dataSub->subcat_id; ?>"
			<?php  echo ($dataSub->subcat_id==$product->subcat_id) ? "selected='selected'":null ;?> >
						 	<?php echo $dataSub->subcat_name; ?>
			</option>
<?php 	} 
		
	}	
	public function selectBrandEdit($subcat_id,$prd_id)
	{
		$product=$this->productModel->editProduct($prd_id);

		$this->db->where('subcat_id',$subcat_id);
		$branddata=$this->db->get('brand')->result();

		$this->db->where('subcat_id',$subcat_id);
		$sub=$this->db->get('subcategory')->row();
		
		$this->db->where('subcat_id',$subcat_id);
		$ptype=$this->db->get('product_type')->result();
?>			
<?php	 foreach($branddata as $dataSub)
		{
?>			 <option value="<?php echo $dataSub->brand_id; ?>"
			<?php  echo ($dataSub->brand_id==$product->brand_id) ? "selected='selected'":null ;?> >
						 	<?php echo $dataSub->brand_name; ?>
			</option>
<?php 	} 
		if($sub->subcat_name=="Clothes")
		{
			echo "*".$sub->subcat_name."*"; 
		}
		else
		{	echo "*".""."*"; 
			}

	 foreach($ptype as $dataPtype)
		{
?>			 <option value="<?php echo $dataPtype->ptype_id; ?>"
			<?php  echo ($dataPtype->ptype_id==$product->ptype_id) ? "selected='selected'":null ;?> >
						 	<?php echo $dataPtype->ptype_name; ?>
			</option>
<?php 	} 
		
	}
	public function editProduct($id)
	{	

//Notifiaction 

			$file['totalFeedoftheDay']=$this->countDatabaseEntry->countRatingOfTheDay();
			$file['totalContacttheDay']=$this->countDatabaseEntry->countContactTheDay();
			$file['totalAskOnProduct']=$this->countDatabaseEntry->countAskforAvaibality();
			$file['totalQueOfTheDay']=$this->countDatabaseEntry->totalQueOfTheDay();
			$file['totalOrderPending']=$this->countDatabaseEntry->totalOrderPending();

		$file['offers']=$this->offersmodel->selectoffers();
		$file['profile']=$this->welcomeModel->profile();
		$file['finalProfile']=$this->welcomeModel->profileProgress();				
		$file['imgErr1']="";$file['imgErr2']="";$file['imgErr3']="";
		$file['maincategory']=$this->categoryModel->selectCategory();
		$file['subcategory']=$this->subcategoryModel->selectSubcategory();
		$file['Brand']=$this->Brandmodel->selectBrand();
		$file['product']=$this->productModel->editProduct($id);
		$file['prdType']=$this->db->get('product_type')->result();
		
		$file['page']="product/editProduct";
		$this->load->view('Template/content',$file);
	}
	public function showProduct($id)
	{
		$file['product']=$this->productModel->editProduct($id);
		$this->load->view('product/showProduct',$file);
	}
	public function updateProduct($id)
	{
		$this->productModel->updateProduct($id);
	}
	public function deleteProduct($id)
	{
		$this->productModel->deleteProduct($id);
		
	}
	public function status($id)
	{
		$this->productModel->statusupdate($id);
	}
}
?>