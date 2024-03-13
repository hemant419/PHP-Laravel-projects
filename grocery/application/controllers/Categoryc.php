<?php
class Categoryc extends CI_Controller 
{
	
	
	public function __construct()
	{
		parent ::__construct();	
		$this->load->model('Categorym');
	}
	
	public function index()
	{
		$file['data']=$this->Categorym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Category/ShowCategory',$file);
	}
	
	  public function CheckAll()
	  {
			$file['data']=$this->Categorym->getdata();	
				
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Category/ShowCategory',$file);
  
		  }
	
	public function status($id)
	{
		
		$this->Categorym->status($id);
		redirect('Categoryc');
	}
	    public function add()
		{
		$this->load->view('template/header');
		$this->load->view('template/sidebaar');
		$this->load->view('Category/AddCategory');

		}
	
	
	   public function insert()
	   {
		$this->Categorym->insert();
		redirect('Categoryc');
		   
	   }
		   
		   
	   public function del($id)
	   {
			$this->Categorym->del($id);
			redirect('Categoryc');
		}


   public function edit($id)
   {
	 	$this->load->view('template/header');
		$this->load->view('template/sidebaar');
	
	   $file['data']=$this->Categorym->edit($id);
	   	$this->load->view('Category/EditCategory',$file);

	   
	   
	   }
	   
	      public function update($id)
	   {
			$this->Categorym->update($id);
			redirect('Categoryc');
		}

   public function deleteall()
   {
		$this->Categorym->deleteall();
		redirect('Categoryc');
		 	
	   
	   }	
	
}
