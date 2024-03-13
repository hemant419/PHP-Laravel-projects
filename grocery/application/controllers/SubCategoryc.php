<?php
class SubCategoryc extends CI_Controller 
{
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('SubCategorym');
	}
	
	
	public function index()
	{
		$file['data']=$this->SubCategorym->getdata();	
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('SubCategory/ShowSubCategory',$file);
	}
	
	 
	
	 public function add()
		{
			$file['data1']=$this->SubCategorym->showcategory();	
		    $this->load->view('template/header');
			$this->load->view('template/sidebaar');
			$this->load->view('SubCategory/AddSubCategory',$file);

		}
	public function insert()
	   {
		$this->SubCategorym->insert();
		redirect('SubCategoryc');
		   
	   }
	   public function status($id)
		{
		
		$this->SubCategorym->status($id);
		redirect('SubCategoryc');
		}
	 public function del($id)
	   {
			$this->SubCategorym->del($id);
			redirect('SubCategoryc');
		}
		public function CheckAll()
	  {
			$file['data']=$this->SubCategorym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('SubCategory/ShowSubCategory',$file);
  
		  }
		   public function deleteall()
   {
		$this->SubCategorym->deleteall();
		redirect('SubCategoryc');
		 	
	   
	   }
	   
	      public function update($id)
   {
		$this->SubCategorym->update($id);
		redirect('SubCategoryc');
		 	
	   
	   }
	   
	   
	   
	     public function edit($id)
		 {
			
			$file['data1']=$this->SubCategorym->showcategory();	
	    	$file['data']=$this->SubCategorym->edit($id);	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('SubCategory/EditSubCategory',$file);
 
			 }
	   	

}