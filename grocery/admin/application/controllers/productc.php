<?php
class productc extends CI_Controller
{
	public function __construct()
	{
	
		parent::__construct();
		$this->load->model('productm');	
		$this->load->model('adminM');
		$this->load->model('categoryM');
		$this->load->model('subcatM');
		$this->load->model('brandM');
		$this->load->model('sliderM');
		$this->load->model('contactM');
	}
	public function index()
	{
		$file['errors']="";
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['branddata']=$this->brandM->selectbrand();
		$file['getdata']=$this->productm->getdata();
		$file['page']="product/product";
		$this->load->view('Template/content',$file);
	}
	public function addproduct()
	{
		
				$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['branddata']=$this->brandM->selectbrand();
		$file['getdata']=$this->productm->getdata();
		$file['page']="product/addproduct";
		$this->load->view('Template/content',$file);
	}
	public function insertda()
	{
		

		$this->productm->insertdata();
		redirect('productc');
	}
	public function deleteda($id)
	{
		$this->productm->deletedata($id);
		redirect('productc');
	}
	public function editproduct($id)
	{
		$file['profile']=$this->adminM->profile();
		$file['progress']=$this->adminM->progress();
		$file['categery']=$this->categoryM->selectCategory();
		$file['subcategery']=$this->subcatM->selectsubcategery();
		$file['branddata']=$this->brandM->selectbrand();
		$file['editdata']=$this->productm->getdataedit($id);
		$file['page']="product/editproduct";
		$this->load->view('Template/content',$file);				
	}
	public function update()
	{
		$this->productm->updatedata();
		redirect('productc');
	}
	public function statas($id)
	{
		$this->productm->statas($id);
		redirect('productc');
	}
	public function pro($id)
	{
		$this->db->where('categery_id',$id);
		$result=$this->db->get('sub_categery_master')->result();
		?>
        <option value="">select Any</option>
        <?php
		foreach($result as $row)
		{	
		?>
            <option value="<?php echo $row->s_id ?>"><?php echo $row->s_name ?></option>
        <?php
		}
	}
	public function proedit($id)
	{
		$this->db->where('categery_id',$id);
		$result=$this->db->get('sub_categery_master')->result();
		?>
        <option value="">select Any</option>
        <?php
		foreach($result as $row)
		{	
		?>
        	 
            <option value="<?php echo $row->s_id ?>"><?php echo $row->s_name ?></option>
        <?php
		}
	}
	public function probrand($id)
	{
		$this->db->where('s_id',$id);
		$result=$this->db->get('brand')->result();
		
		foreach($result as $row)
		{	
		?>
        	 
            <option value="<?php echo $row->brand_id ?>"><?php echo $row->brand_name ?></option>
        <?php
		}
	}
	public function probrandadd($id)
	{
		$this->db->where('s_id',$id);
		$result=$this->db->get('brand')->result();
		?>
        <option value="">select Any</option>
        <?php
		foreach($result as $row)
		{	
		?>
        	 
            <option value="<?php echo $row->brand_id ?>"><?php echo $row->brand_name ?></option>
        <?php
		}
	}
	public function showdata($id)
	{
		$this->db->where('product_id',$id);
		$file['result']=$this->db->get('product_master')->row();
		//print_r($file['result']);
		$this->load->view("product/showMoreData",$file);
		
	}
	
	
}
?>